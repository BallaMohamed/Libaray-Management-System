@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
                <div class="card-header"><h4>{{ __('forntend/forntend.edit_student') }}<i class="fa fa-plus"></i></h4></div>
                <div class="card-body">
                    <form  action="{{route('students.update' , $student->id)}}" method="post">
                        {{csrf_field()}}
                         @method('PATCH')
                      <div class="row">
                          <div class="col-5">
                            <div class="form-group">
                                <label for="student_name">{{ __('forntend/forntend.student_name') }}</label>
                                <input type="text" name="student_name" class="form-control" value="{{$student->student_name}}">
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="card_number">{{ __('forntend/forntend.card_number') }}</label>
                                <input type="text" name="card_number" class="form-control" value="{{$student->card_number}}">
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="student_phone">{{ __('forntend/forntend.student_phone') }}</label>
                                <input type="text" name="student_phone" class="form-control" value="{{$student->student_phone}}">
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="student_email">{{ __('forntend/forntend.student_email') }}</label>
                                <input type="text" name="student_email" class="form-control" value="{{$student->student_email}}">
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
