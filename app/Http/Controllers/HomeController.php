<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Student;
use App\Models\Metaphor;
class HomeController extends Controller
{
    public function index()
    {
    	$students = Student::all();
        return view('home' , ['students' => $students , 'book' => $this->getBookCount() , 'metaphor' => $this->getMetaphorBookCount() , 'outbook' => $this->bookOutTime()]);
    }

    public function getBookCount()
    {
    	$books    = Book::all();
    	$total    = 0;
    	foreach ($books as $book) {
    		$total += $book->book_copies;
    	}

    	return $total;
    }


    public function getMetaphorBookCount()
    {
      $total = 0;
      $metaphors = Metaphor::all();
      foreach ($metaphors as $Metaphor) {
      	if($Metaphor->start_date < $Metaphor->end_date  &&  $Metaphor->return_book_date == null)
           $total++;
      }
      return $total;
    }

    public function bookOutTime()
    {
      $total = 0;
      $metaphors = Metaphor::all();
      foreach ($metaphors as $Metaphor) {
      	if($Metaphor->start_date > $Metaphor->end_date &&  $Metaphor->return_book_date == null)
           $total++;
      }
      return $total;
    }

    
}
