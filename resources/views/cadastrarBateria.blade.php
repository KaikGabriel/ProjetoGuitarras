<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadStyle.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Cadastrar</title>
</head>

<body>
    <!--NAVBAR-->
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark p-md-3">
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
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Lista
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="{{'editar-guitarra'}}">Guitarras</a></li>
                                <li><a class="dropdown-item" href="{{'editar-baixo'}}">Baixos</a></li>
                                <li><a class="dropdown-item" href="{{'editar-bateria'}}">Baterias</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--  NAVBAR  -->



    <section>
        <div class="container">
            <div class="title">Registrar Bateria</div>
            <div class="content">
                <form class="form" method="post" action="{{route('salvar-banco-bateria')}}">
                    @csrf
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details">Modelo</span>
                            <input type="text" name="modelo" value="{{old('modelo')}}" class="form-control" id="inputModelo" placeholder="Acústica" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Marca</span>
                            <input type="text" name="marca" value="{{old('marca')}}" class="form-control" id="inputMarca" placeholder="Yamaha" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Ano</span>
                            <input type="text" name="ano" value="{{old('ano')}}" class="form-control" id="inputAno" placeholder="2015" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Cor</span>
                            <input type="text" name="cor" value="{{old('cor')}}" class="form-control" id="inputCor" placeholder="Preta" required>
                        </div>
                        <div class="input-box">
                            <span class="details">Preço</span>
                            <input type="text" name="valor" value="{{old('valor')}}" class="form-control" id="inputValor" placeholder="R$ 12,000,00" required>
                        </div>
                        <div class="input-box">
                            <span class="details disable">•</span>
                            <input class="form-control" id="disabledInput" type="text" placeholder="" disabled>
                        </div>
                        <div class="button">
                            <input type="submit" value="Cadastrar">
                        </div>
                </form>
            </div>
        </div>
    </section>









    <!--------------------------------JS------------------------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


</body>

</html>