@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-5">
           <div class="StudentCount">
               <p>{{ __('forntend/forntend.total_students') }}</p>
               <h1>{{$students->count()}}</h1>
           </div>
        </div>

        <div class="col-md-5">
         <div class="bookCount">
             <p>{{ __('forntend/forntend.total_book') }}</p>
              <h1>{{$book}}</h1>  
         </div>
        </div>

        <div class="col-md-5">
           <div class="BookOut">
               <p>{{ __('forntend/forntend.book_out') }}</p>
              <h1>{{$outbook}}</h1> 
           </div>
        </div>

        <div class="col-md-5">
         <div class="bookmeta">
             <p>{{ __('forntend/forntend.books_meta') }}</p>
             <h1>{{$metaphor}}</h1>   
           </div>
        </div>
    </div>
</div>
@endsection
