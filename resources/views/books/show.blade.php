@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
        	<div class="card">
                <div class="card-header d-flex">
                    <h5>{{ __('forntend/forntend.showbook') }}</h5>
                </div>
                <div class="card-body">
                   <div class="table-responsive">
                       <table class="table">
                        <tr>
                            <th>{{ __('forntend/forntend.book_title') }}</th>
                            <td>{{$book->book_name}}</td>
                            <th>{{ __('forntend/forntend.author_name') }}</th>
                            <td>{{$book->author_name}}</td>

                            <th>{{ __('forntend/forntend.book_rating') }}</th>
                            <td>{{$book->book_rating}}</td>
                        </tr>
                         <tr>
                            <th>{{ __('forntend/forntend.number_of_vo') }}</th>
                            <td>{{$book->number_of_vo}}</td>
                            <th>{{ __('forntend/forntend.book_copies') }}</th>
                            <td>{{$book->book_copies}}</td>

                            <th>{{ __('forntend/forntend.book_location') }}</th>
                            <td>{{$book->book_location}}</td>
                        </tr>
                         <tr>
                            <th>{{ __('forntend/forntend.book_price') }}</th>
                            <td>{{$book->book_price}}</td>
                            <th>{{ __('forntend/forntend.Dar_Al_nasher') }}</th>
                            <td>{{$book->Dar_Al_nasher}}</td>

                            <th>{{ __('forntend/forntend.book_status') }}</th>
                            <td>{{$book->book_status}}</td>
                        </tr>    
                       </table>
                       <hr>
                       <div class="sub_title">
                        <h4>{{ __('forntend/forntend.student_meta') }} <i class="fa fa-users"></i></h4>
                       </div>
                       <div class="table-responsive">
                       <table class="table">
                        <thead>
                        <tr>
                            <th>{{ __('forntend/forntend.student_name') }}</th>
                            <th>{{ __('forntend/forntend.student_phone') }}</th>
                            <th>{{ __('forntend/forntend.student_email') }}</th>
                            <th>{{ __('forntend/forntend.card_number') }}</th>
                        </tr> 
                        </thead>
                        <tbody>
                            @forelse($book->students as $student)
                           
                            <tr>
                                <td>{{$student->student_name}}</td>
                                <td>{{$student->student_phone}}</td>
                                <td>{{$student->student_email}}</td>
                                <td>{{$student->card_number}}</td>
                            </tr>
                            @empty

                             <center ><p style="font-weight: bold;font-size: 18px ;">{{" NO NOE YET ."}}</p></center>
                          @endforelse
                        </tbody>
                      </table>
                      </div>
                   </div>
                </div>
            </div>
        </div>
    </div>
 </div>
@endsection