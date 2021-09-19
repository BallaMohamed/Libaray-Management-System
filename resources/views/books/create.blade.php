@extends('layouts.app')
@section('content')
<div class="container">
<div class="row justify-content-center">
        <div class="col-md-10">
          <div class="card">
                <div class="card-header"><h4>{{ __('forntend/forntend.add_book') }}<i class="fa fa-plus"></i></h4></div>
                <div class="card-body">
                    <form  action="{{{route('books.store')}}}" method="post">

                     {{csrf_field()}}

                      <div class="row">
                          <div class="col-5">
                            <div class="form-group">
                                <label for="book_name">{{ __('forntend/forntend.book_title') }}</label>
                                <input type="text" name="book_name" class="form-control">
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="author_name">{{ __('forntend/forntend.author_name') }}</label>
                                <input type="text" name="author_name" class="form-control">
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="number_of_vo">{{ __('forntend/forntend.number_of_vo') }}</label>
                                <input type="text" name="number_of_vo" class="form-control">
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="book_copies">{{ __('forntend/forntend.book_copies') }}</label>
                                <input type="text" name="book_copies" class="form-control">
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="book_price">{{ __('forntend/forntend.book_price') }}</label>
                                <input type="text" name="book_price" class="form-control">
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="Dar_Al_nasher">{{ __('forntend/forntend.Dar_Al_nasher') }}</label>
                                <input type="text" name="Dar_Al_nasher" class="form-control">
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="book_rating">{{ __('forntend/forntend.book_rating') }}</label>
                                <input type="text" name="book_rating" class="form-control">
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="book_location">{{ __('forntend/forntend.book_location') }}</label>
                                <input type="text" name="book_location" class="form-control">
                            </div>
                          </div>
                          <div class="col-5">
                            <div class="form-group">
                                <label for="book_status">{{ __('forntend/forntend.book_status') }}</label>
                                <input type="text" name="book_status" class="form-control">
                            </div>
                          </div>
                           <div class="col-5">
                            <div class="form-group"> 
                                <button type="submit" name="save" class="btn btn-primary  pull-right" style="margin-top: 32px ; width: 350px">{{ __('forntend/forntend.save') }}</button>
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
