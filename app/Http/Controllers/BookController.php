<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::orderBy('id' , 'desc')->paginate(6);
        return view('books.index' , compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validateBook();
       $book = new Book(request(['book_name' , 'author_name' , 'number_of_vo' , 'book_copies' , 'book_price' , 'Dar_Al_nasher' , 'book_rating' , 'book_location' , 'book_status']));
       $book->save();
       return redirect('/books');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        return view('books.show' , compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        return view('books.edit' , compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Book $book)
    {
        $book->update($this->validateBook());
        return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();
        return redirect('/books');
    }

    protected function validateBook(){
      return request()->validate([
        'book_name'          =>  'required',
        'author_name'        =>  'required',
        'number_of_vo'       =>  'required',
        'book_copies'        =>  'required',
        'book_price'         =>  'required',
        'Dar_Al_nasher'      =>  'required',
        'book_rating'        =>  'required',
        'book_location'      =>  'required',
        'book_status'        =>  'required',
      ]);
    }
}
