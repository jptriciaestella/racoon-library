<?php

namespace App\Http\Controllers;

use App\books;
use App\Http\Requests\BookRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BookController extends Controller
{
    public function create(){
        return view('CRUD.create');
    }

    public function showForm(BookRequest $request){

        if($request->file('Image'))
        {
            books::create([
                'Title' => $request->Title,
                'Author' => $request->Author,
                'Pages' => $request->Pages,
                'YearPublished' => $request->YearPublished,
                'Image' => $request->file('Image')->store('book-images'),
            ]);
        }
        else
        {
            books::create([
                'Title' => $request->Title,
                'Author' => $request->Author,
                'Pages' => $request->Pages,
                'YearPublished' => $request->YearPublished,
            ]);
        }

        session()->flash('success', 'Your book has been added.');

        return redirect(route('home'));
    }

    public function UpdateForm($id){
        $book = books::find($id);
        return view('CRUD.update', ['books' => $book]);
    }

    public function ShowUpdateForm(BookRequest $request, $id){
        $BookUpdate = books::where('id', '=', $id)->first();

        if($request->file('Image'))
        {
            if($BookUpdate->Image)
            {
                Storage::delete($BookUpdate->Image);
            }
            $BookUpdate->update([
                'Title' => $request->Title,
                'Author' => $request->Author,
                'Pages' => $request->Pages,
                'YearPublished' => $request->YearPublished,
                'Image' => $request->file('Image')->store('book-images'),
            ]);
        }
        else
        {
            $BookUpdate->update([
                'Title' => $request->Title,
                'Author' => $request->Author,
                'Pages' => $request->Pages,
                'YearPublished' => $request->YearPublished,
            ]);
        }

        session()->flash('success', 'Your book has been updated.');

        return redirect(route('home'));
    }

    public function DeleteBook($id){
        $BookDelete = books::find($id);

        if($BookDelete->Image)
        {
            Storage::delete($BookDelete->Image);
        }

        $BookDelete->delete();

        session()->flash('success', 'Your book has been deleted.');

        return redirect(route('home'));
    }

    public function ViewBook($id){
        $book = books::find($id);
        return view('CRUD.view', ['books' => $book]);
    }
}
