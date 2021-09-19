@extends('layouts.app')

@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-12">
          <div class="card">
                <div class="card-header d-flex">
                  <h5>{{ __('forntend/forntend.all_books') }}</h5>
                  <a href="books/create" class="btn btn-primary ml-auto btn-sm"><i class="fa fa-plus"></i>{{ __('forntend/forntend.add_book') }}</a>
                </div>
                   <div class="table-responsive">
                    <table class="table card-table">
                      <thead>
                        <tr>
                          <th>#ID</th>
                          <th>{{ __('forntend/forntend.book_title') }}</th>
                          <th>{{ __('forntend/forntend.author_name') }}</th>
                          <th>{{ __('forntend/forntend.book_copies') }}</th>
                          <th>{{ __('forntend/forntend.action') }}</th>
                        </tr>
                      </thead>
                      <tbody>
                      @foreach($books as $book)
                         @if($book->book_copies >= 1)
                          <tr>
                            <td>{{$book->id}}</td>
                            <td><a href="{{route('books.show' , $book->id)}}">{{$book->book_name}}</a></td>
                            <td>{{$book->author_name}}</td>
                            <td>{{$book->book_copies}}</td>
                            <td>
                                <form action="/books/{{$book->id}}" method="post">
                                      @method('DELETE')
                                      @csrf
                                      <a href="/books/{{$book->id}}/edit" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
                                      <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                </form>

                            </td>
                          </tr>
                        @endif
                        @endforeach
                      </tbody>
                       <tfoot>
                        <tr>
                          <td colspan="4">
                            <div class="float-right">
                               {{ $books->links('pagination::bootstrap-4') }}
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
