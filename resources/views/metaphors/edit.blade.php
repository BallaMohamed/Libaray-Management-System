@extends('layouts.app')
@section('style')
 <link rel="stylesheet"  href="{{asset('forntend/css/pickadate/classic.css')}}">
  <link rel="stylesheet"  href="{{asset('forntend/css/pickadate/classic.date.css')}}">
   <link rel="stylesheet"  href="{{asset('forntend/css/pickadate/classic.time.css')}}">

   @if(config('app.locale') == 'ar')
      <link rel="stylesheet"  href="{{asset('forntend/css/pickadate/rtl.css')}}">
   @endif
@endsection
@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
                <div class="card-header"><h4>{{ __('forntend/forntend.edit') }}<i class="fa fa-edit"></i></h4></div>
                <div class="card-body">
                    <form  action="{{route('metaphors.update' , $metaphor->id)}}" method="post">
                     {{csrf_field()}}
                     @method('PATCH')
                      <div class="row">
                          <div class="col-5">
                            <div class="form-group">
                                <label for="student_name">{{ __('forntend/forntend.student_name') }}</label>
                                     <select  class="form-control" name="student_id">
                                       @foreach($S_student as $name)
                                      <option value='{{$name->id}}'>
                                        {{$name->student_name}}
                                      </option>
                                       @endforeach
                                     @foreach($students as $student)
                                      <option  value='{{$student->id}}'>{{$student->id}}-{{$student->student_name}}</option>
                                      @endforeach
                                 </select>
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="card_number">{{ __('forntend/forntend.book_title') }}</label>
                                <select  class="form-control" name="book_id">
                                      @foreach($S_book as $b)
                                      <option value='{{$b->id}}'>
                                        {{$b->book_name}}
                                      </option>
                                       @endforeach
                                     @foreach($books as $book)
                                      <option  value='{{$book->id}}'>{{$book->id}}-{{$book->book_name}}</option>
                                      @endforeach
                                 </select>
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="student_phone">{{ __('forntend/forntend.loan_date') }}</label>
                                <input type="text" name="start_date" class="form-control datepicker" value="{{$metaphor->start_date}}">
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="student_email">{{ __('forntend/forntend.return_date') }}</label>
                                <input type="text" name="end_date" class="form-control datepicker" value="{{$metaphor->end_date}}">
                            </div>
                          </div>
                           <div class="col-5">
                            <div class="form-group"> 
                                <button type="submit" name="save" class="btn btn-primary  pull-right" style="margin-top: 32px ; width: 350px">{{ __('forntend/forntend.edit') }}</button>
                            </div>
                          </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('script')
<script src="{{asset('forntend/js/pickadate/picker.js')}}"></script>
<script src="{{asset('forntend/js/pickadate/picker.date.js')}}"></script>
<script src="{{asset('forntend/js/pickadate/picker.time.js')}}"></script>
@if(config('app.locale') == 'ar')
   <script src="{{asset('forntend/js/pickadate/ar.js')}}"></script>
@endif
 <script>
     $(document).ready(function(){
        
       $('.pickadate').pickadate({
            format:'yyyy-mm-dd' ,
            selectMonth:true  ,
            selectYear: true ,
            clear: 'Clear' ,
            close: 'Ok' , 
            closeOnSelect:true
        });        
     });
 </script>
@endsection