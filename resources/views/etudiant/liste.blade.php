<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD USER</title>
    <link <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<a href='dashboard' class='btn btn-danger'><i class="fa-solid fa-house"></i>&nbsp; Retour a l'accueil</a>

    <div class="container text-center">
        <div class="row align-items-start">
            <div class="col s12">
                <h1>Bienvenue a l'espace clientelle</h1>
                <a href='/ajouter' class='btn btn-primary'><i class="fa-solid fa-user-plus"></i>&nbsp; Ajouter un Client</a>
                @if(session('status'))
                    <div class='alert alert-success'>
                        {{ session('status') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">email</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @php
                            $ide = 1;
                        @endphp
                        @foreach($etudiants as $etudiant)
                        <tr>
                            <th scope="row">{{$ide}}</th>
                            <td>{{$etudiant->prenom}}</td>
                            <td>{{$etudiant->nom}}</td>
                            <td>{{$etudiant->email}}</td>
                            <td>
                                <a href="/update-etudiant/{{$etudiant->id}}" class="btn btn-primary"><i class="fa-solid fa-pen"></i>&nbsp; Update</a>
                                <a href="/delete-etudiant/{{$etudiant->id}}" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i>&nbsp; Supprimer</a>
                            </td>
                        </tr>
                        @php
                            $ide++;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
                {{$etudiants->links()}}
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>