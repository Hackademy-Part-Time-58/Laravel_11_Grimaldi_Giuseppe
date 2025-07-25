<div class="col-md-4 mb-4">
    <div class="card position-relative h-100">
        <!-- Immagine -->
        <img src="{{ asset($item->image) }}" class="card-img-top" alt="{{ $item->title }}">

        <!-- Categorie (badge in alto a destra) -->
        <div class="position-absolute top-0 end-0 m-2 d-flex flex-column align-items-end">
            @forelse($item->categories as $category)
                <span class="badge mb-1"style="{{ $category->color }}">{{ $category->name }}</span>
            @empty
                <span class="badge bg-secondary">Nessuna categoria</span>
            @endforelse
        </div>

        <!-- Corpo card -->
        <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <p class="card-text text-truncate">
                {{ $item->content }}
            </p>
            <a href="{{ route('articles.show', $item) }}" class="btn btn-primary">
                Dettaglio Articolo
            </a>
        </div>

        <!-- Autore -->
        <p class="position-absolute bottom-0 end-0 m-2 text-muted small">
            {{ $item->user->name }}
        </p>
    </div>
</div>
