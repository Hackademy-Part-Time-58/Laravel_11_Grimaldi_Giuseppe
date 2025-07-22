<x-main-layout>
    <x-slot:pageTitle>Registrati</x-slot:pageTitle>
    <x-section-title sectionTitle="Register" />
    <div class="container  py-5">
        <div class="row justify-content-center">
            <form class="col-md-6" action="{{route('register.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Nome e Cognome</label>
                    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">inserisci la tua email</label>
                    <input type="text" class="form-control" name="email" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Ripeti password</label>
                    <input type="text" class="form-control" name="password_confirmation" aria-describedby="emailHelp">
                    <div class="mb-3">
                        <a href="{{route('login')}}">Hai già un account?</a>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Registrati</button>
            </form>
            <x-errors/>
        </div>



</x-main-layout>