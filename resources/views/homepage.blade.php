<x-main-layout>
    <x-slot:pageTitle>Homepage</x-slot:pageTitle>
    <x-section-title sectionTitle="I nostri ultimi articoli..." />
    <div class="container-fluid position-relative main-container">
        <div class="backdrop">
            <a href="{{route('articles.create')}}" class="btn btn-primary btn-lg action-btn">Pubblica ora il tuo articolo!</a>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-3">
            @forelse($articles as $article)
            <x-card-item :item="$article" />
            @empty
            <p class="text-center">Non sono stati trovati articoli</p>
            @endforelse
        </div>
        <div class="row justify-content-center py-5">
            <div class="col-md-2">
                <a href="{{route('articles.index')}}" class="btn btn-primary">Tutti i nostri articoli</a>
            </div>
        </div>

    </div>
</x-main-layout>