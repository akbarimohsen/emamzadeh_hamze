<?php

namespace App\Http\Livewire;

use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class BooksComponent extends Component
{

    use WithPagination;
    use WithFileUploads;

    public function download($book_id)
    {
        $book = Book::find($book_id);
        $filename = $book->filename;
        return Storage::disk('public')->download($filename);
    }
    public function delete($book_id)
    {
        $book = Book::find($book_id);
        $filename = $book->filename;
        Storage::disk('public')->delete($filename);
        $book->delete();
        $message = "کتاب با موفقیت حذف گردید.";
        session()->flash('message', $message);
        return redirect()->route('books');
    }
    public function render()
    {
        $books = Book::paginate(6);

        return view('livewire.books-component',[
            'books' => $books,
        ])->layout('layouts.base');
    }
}
