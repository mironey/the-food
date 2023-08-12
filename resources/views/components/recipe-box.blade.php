@if(isset($showtype) && $showtype == "featured")
@foreach($recipes as $recipe)
<div class="col">
    <div class="card mb-4">
        <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="{{$recipe->title}}" />
        <div class="card-body">
            <div class="small text-muted">January 1, 2023</div>
            <h2 class="card-title h4"><a href="{{route('recipe.show', $recipe->slug)}}">{{$recipe->title}}</a></h2>
            <p class="mb-2">
                <a href="#">John Doe</a> in
                @foreach($recipe->categories as $category)
                <a href="#">{{$category->cat_term}}</a>
                @endforeach
            </p>
            <p class="card-text">{{$recipe->content}}</p>
            <a class="btn btn-primary" href="{{route('recipe.show', $recipe->slug)}}">Read more →</a>
        </div>
    </div>
</div>
@endforeach
@elseif(isset($showtype) && $showtype == "pagination")
    @foreach($recipes as $recipe)
    <div class="col-md-6">
        <div class="card mb-4">
            <img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="{{$recipe->title}}" />
            <div class="card-body">
                <div class="small text-muted">January 1, 2023</div>
                <h2 class="card-title h4"><a href="{{route('recipe.show', $recipe->slug)}}">{{$recipe->title}}</a></h2>
                <p class="mb-2">
                    <a href="#">John Doe</a> in
                    @foreach($recipe->categories as $category)
                    <a href="#">{{$category->cat_term}}</a>
                    @endforeach
                </p>
                <p class="card-text">{{$recipe->description}}</p>
                <a class="btn btn-primary" href="{{route('recipe.show', $recipe->slug)}}">Read more →</a>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Pagination-->
    {{$recipes->links('vendor.pagination.bootstrap-5')}}
    
@endif