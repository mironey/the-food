@extends('layouts.guest')

@section('home')

<!-- Page content-->
<div class="container py-5">
    <div class="row">
        <!-- Blog entries-->
        <div class="col-lg-8">
            <div class="card mb-4">
                <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="{{$recipe->title}}" />
                <div class="card-body">
                    <div class="small text-muted">January 1, 2023</div>
                    <h2 class="card-title h4">{{$recipe->title}}</h2>
                    <p class="mb-2">
                        <a href="#">John Doe</a> in
                        @foreach($recipe->categories as $category)
                        <a href="#">{{$category->cat_term}}</a>
                        @endforeach
                    </p>
                    <p class="card-text">{{$recipe->content}}</p>
                </div>
            </div>
        </div>
        <!-- Side widgets-->
        <div class="col-lg-4">
            <x-widget />
        </div>
    </div>
</div>

@endsection