<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use App\Models\Book;
use App\Models\Subject;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    public function index()
    {
        return view('public.books', [
            'books' => Book::paginate(10),
        ]);
    }

    public function showByTeacher(Teacher $teacher)
    {
        return view('public.books', [
            'books' => $teacher->books()->paginate(10),
            'teacher' => $teacher
        ]);
    }

    public function showBySubject(Subject $subject)
    {
        return view('public.books', [
            'books' => $subject->books()->paginate(10),
            'subject' => $subject
        ]);
    }

    public function book(Book $book)
    {
        return view('public.books-single', [
            'book' => $book
        ]);
    }

    public function search(Request $request)
    {
        return view('public.books', [
            'books' => Book::orderBy('updated_at', 'desc')
                ->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('short_description', 'like', '%' . $request->search . '%')
                ->paginate(10),
            'query' => $request->search
        ]);
    }


    public function create(Request $request)
    {
        if ($request->hasFile('file')) {
            $subject_id = null;

            if (empty($request->subject)) {
                $subject_id = \App\Models\Subject::find($request->subject_id)->id;
            } else {
                if (empty(\App\Models\Subject::where('name', $request->subject)->first())) {
                    $subject_id = \App\Models\Subject::create(['name' => $request->subject])->id;
                } else {
                    $subject_id = \App\Models\Subject::where('name', $request->subject)->first()
                        ? \App\Models\Subject::where('name', $request->subject)->first()->id
                        : \App\Models\Subject::create(['name' => $request->subject])->id;
                }
            }

            \App\Models\Book::insert([
                'title' => $request->title,
                'short_description' => $request->short_description,
                'description' => $request->description,
                'created_at' => now(),
                'teacher_id' => \App\Models\Teacher::where('user_id', Auth::user()->id)->first()->id,
                'subject_id' => $subject_id,
                'url_download' => $request->file('file')->store(
                    'public/files/' . \App\Models\Teacher::where('user_id', Auth::user()->id)->first()->id
                )
            ]);

            return redirect($request->redirect)->with('success', 'File uploaded successfully!');
        } else {
            return redirect($request->redirect)->withErrors('No file selected');
        }
    }
    public function update(Request $request, $id)
    {
        $book = \App\Models\Book::find($id);
        $book->update([
            'title' => $request->title,
            'short_description' => $request->short_description,
            'description' => $request->description,
            'updated_at' => now()
        ]);

        $book->teacher_id = \App\Models\Teacher::where('user_id', Auth::user()->id)->first()->id;
        $book->subject_id = \App\Models\Subject::find($request->subject_id)->id;

        if ($request->hasFile('file')) {
            if (Storage::exists($book->url_download))
                Storage::delete($book->url_download);
            $book->url_download = $request->file('file')->store('files');
        }

        $book->save();
        return redirect($request->redirect)->with('success', 'File updated successfully!');
    }
    public function delete($id)
    {
        Book::find($id)->delete();
        return back()->with('success', 'File deleted successfully');
    }
}
