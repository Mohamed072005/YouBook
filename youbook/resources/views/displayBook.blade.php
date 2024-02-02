@extends('layout')
@section('title', 'display book')
@section('content')
<main class="d-flex flex-column align-items-center">
        <div class = "row mt-3 w-75">
            <a href="http://localhost/YouBook/youbook/public/to.book">to</a>
        </div>
    <div class="row mt-5 w-75">
        @foreach($book as $bookInfo)
        <div class="col-4 mt-3">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." class="img-fluid" alt="Book Image">
                <div class="card-body">
                    <h5 class="card-title">{{$bookInfo->title}}</h5>
                    <h6 class="card-text">{{$bookInfo->author}}</h6>
                    <p class="card-text">{{$bookInfo->description}}.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
</main>
@endsection