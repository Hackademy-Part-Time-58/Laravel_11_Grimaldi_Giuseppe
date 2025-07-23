<x-main-layout>
    <x-slot:pageTitle>Modifica Articolo</x-slot:pageTitle>
    <x-section-title sectionTitle="Modifica del tuo articolo" />
    <div class="container  py-5">
        <div class="row justify-content-center align-items-center">
            <form class="col-md-6" action="{{route('articles.update',$article)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div>
                    <img src="{{asset($article->image)}}" alt="{{$article->title}}">
                </div>

                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titolo articolo</label>
                    <input value="{{ $article->title }}" type="text" class="form-control" name="title" aria-describedby="emailHelp">
                </div>
                @error('title')<span class="text-danger">{{ $message }}</span>@enderror

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="content" style="height: 300px">{{ $article->content }}</textarea>
                    <label for="floatingTextarea2">Testo dell'articolo</label>
                </div>
                @error('content')<span class="text-danger">{{ $message }}</span>@enderror
                <div class="mb-3">
                    <label for="formFileLg" class="form-label">Scegli l'immagine da caricare</label>
                    <input class="form-control form-control-lg" name="image" type="file">
                </div>
                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                <button type="submit" class="btn btn-primary">Aggiorna articolo</button>
            </form>
        </div>
</x-main-layout>