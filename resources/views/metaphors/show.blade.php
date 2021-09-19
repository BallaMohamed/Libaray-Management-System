@extends('layouts.app')

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12">
        	<div class="card">
                <div class="card-header d-flex">
                   <h4>  {{ __('forntend/forntend.book_out') }}</h4>
                </div>
                <div class="card-body">
                 <div class="table-responsive">
                       <table class="table">
                        <thead>
                        <tr>
                            <th>{{ __('forntend/forntend.book_title') }}</th>
                            <th>{{ __('forntend/forntend.student_name') }}</th>
                            <th>{{ __('forntend/forntend.loan_date') }}</th>
                            <th>{{ __('forntend/forntend.return_date') }}</th>
                            <th>{{ __('forntend/forntend.return_book_date') }}</th>
                            <th>{{ __('forntend/forntend.return_button') }}</th>
                               <th>{{ __('forntend/forntend.action') }}</th>
                        </tr> 
                        </thead>
                        <tbody>
                            @forelse($metaphor as $book)
                              @if(($book->end_date <  $book->start_date) && $book->return_book_date == null)
                            <tr>
                                <td>
                                    @foreach($book->BookName($book->book_id) as $item)
                                    {{$item->book_name}}
                                    @endforeach
                                </td>
                                <td>@foreach($book->studentName($book->student_id) as $item)
                                    {{$item->student_name}}
                                    @endforeach</td>
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
                                <td>
                                    <form action="/metaphors/{{$book->id}}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <a href="{{route('metaphors.edit' , $book->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                      <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                             @endif
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
@endsection