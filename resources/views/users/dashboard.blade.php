<x-main-layout>
    <x-slot:pageTitle>Dashboard</x-slot:pageTitle>
        <x-section-title sectionTitle="tutti i miei annunci"/>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">image</th>
      <th scope="col">title</th>
      <th scope="col">action</th>
      <th scope="col">action</th>
    </tr>
  </thead>
  <tbody>
    @forelse($articles as $article)
    <tr>
      <th scope="row">{{$article->id}}</th>
      <td><img src="{{asset($article->image)}}"style="width:50px" alt="{{$article->title}}"></td>
      <td>{{$article->title}}</td>
      <td><a href="{{route('articles.edit',$article)}}"class="btn btn-warning btn-sm">modifica</a></td>
      <td>
        <form action="{{route('articles.destroy',$article)}}"method="POST">
            @csrf
            @method('DELETE')
            <button type="submit"class="btn btn-danger btn-sm">elimina</button>

        </form>
      </td>

    </tr>
    @empty

    @endforelse
  </tbody>
</table>

</x-main-layout>