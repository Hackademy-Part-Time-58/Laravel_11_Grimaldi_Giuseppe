<x-main-layout>
    <x-slot:pageTitle>Pubblica Articolo</x-slot:pageTitle>
    <x-section-title sectionTitle="Pubblica il tuo articolo" />
    <div class="container  py-5">
        <div class="row justify-content-center">
            <form class="col-md-6" action="{{route('articles.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Titolo articolo</label>
                    <input value="{{old('title')}}" type="text" class="form-control" name="title" aria-describedby="emailHelp">
                </div>
                @error('title')<span class="text-danger">{{ $message }}</span>@enderror

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" name="content" style="height: 300px">{{old('content')}}</textarea>
                    <label for="floatingTextarea2">Testo dell'articolo</label>
                </div>
                @error('content')<span class="text-danger">{{ $message }}</span>@enderror
                <div class="mb-3">
                    <label for="formFileLg" class="form-label">Scegli l'immagine da caricare</label>
                    <input class="form-control form-control-lg" name="image" type="file">
                </div>
                @error('image')<span class="text-danger">{{ $message }}</span>@enderror
                <div class="mb-3">
                    <label for="categories" class="form-label">Scegli una categoria</label>
                    <select name="categories[]" class="form-select"multiple>
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Crea articolo</button>
            </form>

        </div>



</x-main-layout>