<?php

namespace App\Actions\Fortify;

use App\Models\Student;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

use Illuminate\Support\Facades\Session;

use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        // RE-DO
        switch ($input['registerType']) {
            case 'registerTeacher':
                Validator::make($input, [
                    'email' => [
                        'required',
                        'string',
                        'email',
                        'max:255',
                        Rule::unique(User::class),
                    ],
                    'password' => $this->passwordRules(),
                    'invite_key' => Rule::exists(\App\Models\Invitation::class, 'invite_key')->where('invite_key', $input['invite_key'])
                ], [
                    'invite_key.exists' => 'The :attribute is wrong.'
                ])->validate();

                \App\Models\Invitation::where('invite_key', $input['invite_key'])->delete();

                $user = User::create([
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                ]);
                $user->assignRole('user-teacher');
                $user->save();

                $teacher = Teacher::create([
                    'registered_on' => now(),
                ]);
                $teacher->user_id = $user->id;
                $teacher->save();

                return $user;

                break;
            case 'registerStudent':
                Validator::make($input, [
                    'email' => [
                        'required',
                        'string',
                        'email',
                        'max:255',
                        Rule::unique(User::class),
                    ],
                    'password' => $this->passwordRules(),
                    'card_code' => Rule::exists(\App\Models\Student::class, 'card_code')
                        ->where('card_code', $input['card_code'])
                        ->where('user_id', null),
                ], [
                    'card_code.exists' => 'The student with library code :input does not exist or has already been registered.'
                ])->validate();

                $user = User::create([
                    'email' => $input['email'],
                    'password' => Hash::make($input['password']),
                ]);
                $user->assignRole('user-default');
                $user->save();

                $student = Student::where('card_code', $input['card_code'])->first();
                $student->user_id = $user->id;
                $student->registered_on = now();
                $student->save();

                return $user;

                break;
        }
    }
}
