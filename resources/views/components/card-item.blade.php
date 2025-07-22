<div class="col-md-4">
    <div class="card position-relative" >
        <img src="{{asset($item->image)}}" class="card-img-top" alt="{{$item->title}}">
        <div class="card-body">
            <h5 class="card-title">{{$item->title}}</h5>
            <p class="card-text text-truncate">{{$item->content}}</p>
            <a href="{{route('articles.show',$item)}}" class="btn btn-primary">dettaglio articolo</a>
        </div>
        <p class="position-absolute bottom-0 end-0 px-3 text-muted">{{$item->user->name}}</p>
        <span class="badge position-absolute top-0 end-0 m-3"style="{{$item->category->color}}">{{$item->category->name}}</span>
    </div> <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
</div>