<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;
use App\Models\Student;
class Metaphor extends Model
{
    use HasFactory;
    protected $table = 'book_student';

    public function BookName($id)
    {
      $book = Book::where('id' , $id)->get();
      return $book;
    }

     public function studentName($id)
    {
      $student = Student::where('id' , $id)->get();
      return $student;
    }

    
}
