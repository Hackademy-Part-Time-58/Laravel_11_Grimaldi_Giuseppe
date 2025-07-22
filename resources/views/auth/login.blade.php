<x-main-layout>
    <x-slot:pageTitle>Accedi</x-slot:pageTitle>
    <x-section-title sectionTitle="Login" />
    <div class="container  py-5">
        <div class="row justify-content-center">
            <form class="col-md-6" action="{{route('login.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">inserisci la tua email</label>
                    <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" aria-describedby="emailHelp">
                    <div class="mb-3">
                        <a href="{{route('register')}}">Non sei registrato? Clicca qui</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Accedi</button>
            </form>
            <x-errors/>
        </div>



</x-main-layout>