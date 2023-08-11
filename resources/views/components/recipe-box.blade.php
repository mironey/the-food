@foreach($recipes as $recipe)
<div class="col-md-6">
    <div class="card mb-4">
        <a href="#!"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg" alt="..." /></a>
        <div class="card-body">
            <div class="small text-muted">January 1, 2023</div>
            <h2 class="card-title h4">{{$recipe->title}}</h2>
            <p class="card-text">{{$recipe->description}}</p>
            <a class="btn btn-primary" href="#!">Read more →</a>
        </div>
    </div>
</div>
@endforeach