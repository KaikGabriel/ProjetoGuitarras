<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Lista de Produtos</title>
</head>

<body>
    <!--NAVBAR-->
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{'/'}}">Guitar Pro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mx-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="{{'/'}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'editar-guitarras'}}">Lista</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{'cadastrar-guitarra'}}">Cadastrar Produtos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--  NAVBAR  -->

    <section class="bgCadastro">
        <div class="container my-5">
            <h2>Lista de Produtos Cadastrados</h2>
            <a class="btn btn-primary" href="cadastrar" role="button">Cadastrar</a>
            <br>
            <table class="table text-white">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Modelo</th>
                        <th>Marca</th>
                        <th>Preço</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($registrosGuitarra as $registrosGuitarras)
                    <tr>
                        <th>{{$registrosGuitarras->id}}</th>
                        <td>{{$registrosGuitarras->modelo}}</td>
                        <td>{{$registrosGuitarras->marca}}</td>
                        <td>{{$registrosGuitarras->valor}}</td>
                        <td>
                            <a class="btn btn-primary btn-sm" href="#">Editar</a>
                            <a class="btn btn-primary btn-sm" href="#">Excluir</a>
                            @method('delete')
                            @csrf
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>



    <footer>
        <div class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 text-md-start text-center text-lg-start">
                        <div class="footer-logo text-muted mb-3 mb-md-0">
                            © 2022. KAIK GABRIEL. Todos os direitos reservados.
                        </div>
                        <div class="col-md-6 text-center text-lg-end">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>






    <!--  JS  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>