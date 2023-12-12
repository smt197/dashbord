<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD CLIENT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

    <div class="container">
        <div class="row align-items-start">
            <div class="col s12">
                <h1>Ajouter un Client</h1>
                <a href='/etudiant' class='btn btn-danger'>Retour a la liste</a>
                @if(session('status'))
                    <div class='alert alert-success'>
                        {{ session('status') }}
                    </div>
                @endif
                <ul>
                    @foreach($errors->all() as $error)
                        <li class='alert alert-danger'>{{$error}}</li>
                    @endforeach
                </ul>
                <form action='/ajouter/traitement' method='POST'>
                    @csrf
                    <div class="mb-3">
                        <label for="Prenom" class="form-label">Prenom</label>
                        <input type="text" class="form-control" id="Prenom" name='prenom'">
                    </div>
                    <div class="mb-3">
                        <label for="Nom" class="form-label">Nom</label>
                        <input type="text" id='Nom' class="form-control" name='nom'">
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email</label>
                        <input type="email" id='Email' class="form-control" name='email'">
                    </div>

                    <button type="submit" class="btn btn-primary">Ajouter un client</button>
                </form>

            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>