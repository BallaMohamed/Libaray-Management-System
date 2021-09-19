<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Metaphor;
use App\Models\Book;
use App\Models\Student;
use Carbon\Carbon;
class MetaphorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $metaphor = Metaphor::orderBy('id' , 'desc')->paginate(6);
        return view('metaphors.index' , compact('metaphor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students = Student::all();
        $books    = Book::all();
        return view('metaphors.create' , ['students' => $students , 'books' => $books]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $metaphor  = new Metaphor();
       $metaphor->student_id   = request('student_id');
       $metaphor->book_id      = request('book_id');
       $metaphor->start_date   = request('start_date');
       $metaphor->end_date     = request('end_date');
       $this->MinsCount(request('book_id'));
       $metaphor->save();
       
       return redirect('/metaphors');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Metaphor $metaphor)
    {
         $students = Student::all();
         $books    = Book::all();
         $S_student = Student::where('id' , $metaphor->student_id)->get();
         $S_book    = Book::where('id' , $metaphor->book_id)->get();

         return view('metaphors.edit' , ['students' => $students , 'books' => $books , 'S_student' => $S_student , 'S_book' => $S_book , 'metaphor' => $metaphor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $metaphor  = Metaphor::find($id);
       $metaphor->student_id   = request('student_id');
       $metaphor->book_id      = request('book_id');
       $metaphor->start_date   = request('start_date');
       $metaphor->end_date     = request('end_date');
       $metaphor->update();
       return redirect('/metaphors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Metaphor $metaphor)
    {
        $metaphor->delete();
        return redirect('/metaphors');
    }
     public function ReturnBook($id)
    {
      $metaphor = Metaphor::find($id);
      $metaphor->return_book_date  = Carbon::now() ;
      $this->PlusBook($metaphor->book_id);
      $metaphor->save();
      return redirect('/metaphors');
    }

     public function display()
    {
        $metaphor  = Metaphor::all();
        return view('metaphors.show' , compact('metaphor'));
    }

    public function MinsCount($id){
        $book = Book::find($id);
        $book->book_copies = $book->book_copies-1;
        $book->update();
    }
    public function PlusBook($id){
        $book = Book::find($id);
        $book->book_copies = $book->book_copies+1;
        $book->update();
    }



}
