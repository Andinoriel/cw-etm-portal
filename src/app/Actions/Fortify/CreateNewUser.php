<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        Validator::make($input, [
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        if ($invitation = \App\Models\Invitation::where('invite_key', $input['invite-key'])->first()) {
            $invitation->delete();

            return User::create([
                'email' => $input['email'],
                'password' => Hash::make($input['password']),
            ])->assignRole('user-teacher');
        }
        // if USER -> assign role User
        // if TEACHER -> assign role Teacher -->> done

        // user-default user-teacher
    }
}
