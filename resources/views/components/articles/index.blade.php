<x-main-layout>
    <x-slot:pageTitle>Articoli</x-slot:pageTitle>
    <x-section-title sectionTitle="Tutti gli articoli" />
    <div class="container py-5">
        <div class="row g-3">
            @forelse($articles as $article)
            <x-card-item :item="$article"/>
            @empty
            <p class="text-center">Non sono stati trovati articoli</p>
            @endforelse
            {{$articles->links()}}
        </div>

    </div>
</x-main-layout>