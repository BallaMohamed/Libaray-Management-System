@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
        	<div class="card">
                <div class="card-header d-flex">
                    <h5>{{ __('forntend/forntend.showstudent') }}</h5>
                </div>
                <div class="card-body">
                   <div class="table-responsive">
                       <table class="table">
                        <tr>
                            <th>{{ __('forntend/forntend.student_name') }}</th>
                            <td>{{$student->student_name}}</td>
                            <th>{{ __('forntend/forntend.card_number') }}</th>
                            <td>{{$student->card_number}}</td>
                        </tr>
                         <tr>
                            <th>{{ __('forntend/forntend.student_phone') }}</th>
                            <td>{{$student->student_phone}}</td>
                            <th>{{ __('forntend/forntend.student_email') }}</th>
                            <td>{{$student->student_email}}</td>
                        </tr>    
                       </table>
                       <hr>
                       <div class="sub_title">
                        <h4>{{ __('forntend/forntend.book_meta') }} <i class="fa fa-book"></i></h4>
                       </div>
                       <div class="table-responsive">
                       <table class="table">
                        <thead>
                        <tr>
                            <th>{{ __('forntend/forntend.book_title') }}</th>
                            <th>{{ __('forntend/forntend.loan_date') }}</th>
                            <th>{{ __('forntend/forntend.return_date') }}</th>
                            <th>{{ __('forntend/forntend.return_book_date') }}</th>
                            <th>{{ __('forntend/forntend.action') }}</th>
                        </tr> 
                        </thead>
                        <tbody>
                            @forelse($met_books as $book)
                           
                            <tr>
                                <td>
                                  @foreach($student->books as $book_name)
                                   @if($book->book_id == $book_name->id)
                                    {{$book_name->book_name}}
                                   @endif
                                  @endforeach
                                </td>
                                <td>{{$book->start_date}}</td>
                                <td>{{$book->end_date}}</td>
                                <td>{{$book->return_book_date}}</td>
                                <td>
                                  @if(is_null($book->return_book_date))
                                   <a href="/metaphor/{{$book->id}}/returned" class="btn btn-primary">{{ __('forntend/forntend.return_button') }}</a>
                                  @else
                                    {{ __('forntend/forntend.returned') }}
                                  @endif
                                </td>
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