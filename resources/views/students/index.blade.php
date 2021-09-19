@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
                <div class="card-header d-flex">
                  <h5>{{ __('forntend/forntend.all_students') }}</h5>
                  <a href="students/create" class="btn btn-primary ml-auto btn-sm"><i class="fa fa-plus"></i>{{ __('forntend/forntend.add_student') }}</a>
                </div>
                   <div class="table-responsive">
                    <table class="table card-table">
                      <thead>
                        <tr>
                          <th>#ID</th>
                          <th>{{ __('forntend/forntend.student_name') }}</th>
                          <th>{{ __('forntend/forntend.card_number') }}</th>
                          <th>{{ __('forntend/forntend.student_phone') }}</th>
                          <th>{{ __('forntend/forntend.action') }}</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($students as $student)
                          <tr>
                            <td>{{$student->id}}</td>
                            <td><a href="{{route('students.show' , $student->id)}}">{{$student->student_name}}</a></td>
                            <td>{{$student->card_number}}</td>
                            <td>{{$student->student_phone}}</td>
                            <td>
                                <form action="/students/{{$student->id}}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <a href="{{route('students.edit' , $student->id)}}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                      <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>
                            </td>
                          </tr>
                      @endforeach
                      </tbody>
                      <tfoot>
                        <tr>
                          <td colspan="4">
                            <div class="float-right">
                               {{ $students->links('pagination::bootstrap-4') }}
                            </div>
                          </td>
                        </tr>
                      </tfoot>
                    </table>
                    </div>
            </div>
        </div>
    </div>

  </div>
@endsection
