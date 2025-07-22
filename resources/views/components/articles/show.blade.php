<x-main-layout>
    <x-slot:pageTitle>Dettaglio articolo</x-slot:pageTitle>
    <div class="container py-3 text-center">
        <h1>Dettaglio articolo {{$article->title}}</h1>
    </div>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <img src="{{$article->image}}" alt="{{$article->title}}"class="img-fluid rounded-5">
            </div>
            <div class="col-md-8 flex-column d-flex g-3 justify-content-around">
            <h4>Autore: {{$article->user->name}}</h4>
            <p class="fs-5">{{$article->category->name}}</p>
            <p class="fs-5">{{$article->content}}</p>
            <p>Data di pubblicazione: {{$article->created_at}}</p>
            </div>
            <div class="col-md-2">
                <a href="{{route('articles.index')}}"class="btn btn-primary">Torna agli articoli</a>
            </div>
        </div>

    </div>
</x-main-layout>