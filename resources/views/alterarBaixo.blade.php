<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Atualizar Baixo</title>
</head>

<body>
    <!--NAVBAR-->
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Guitar Pro</a>
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
                                <li><a class="dropdown-item" href="{{'/editar-guitarra'}}">Guitarras</a></li>
                                <li><a class="dropdown-item" href="{{'/editar-baixo'}}">Baixos</a></li>
                                <li><a class="dropdown-item" href="{{'/editar-bateria'}}">Baterias</a></li>
                            </ul>
                        </li>
                </div>
            </div>
        </nav>
    </header>
    <!--  NAVBAR  -->

    <section class="cadastro">
        <div class="background">
            <div class="container my-5">
                <h2>Atualizar Produto</h2>
                <form class="form" method="post" action="{{route('alterar-banco-baixo',$registrosBaixos->id)}}">
                    @csrf
                    @method('put')
                    <div class="row mb-3 align-items-center">
                        <label class="col-sm-3 col-form-label">Modelo:</label>
                        <div class="col-sm-6">
                            <input type="text" name="modelo" value="{{old('modelo',$registrosBaixos->modelo)}}" class="form-control" id="inputModelo" placeholder="Baixolão">
                            @error('modelo')
                            <div class="text-light">*Preencher o campo modelo.</div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Marca:</label>
                        <div class="col-sm-6">
                            <input type="text" name="marca" value="{{old('marca',$registrosBaixos->marca)}}" class="form-control" id="inputMarca" placeholder="Gibson">
                            @error('marca')
                            <div class="text-light">*Preencher o campo marca.</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Ano:</label>
                        <div class="col-sm-6">
                            <input type="text" name="ano" value="{{old('ano',$registrosBaixos->ano)}}" class="form-control" id="inputAno" placeholder="2002">
                            @error('ano')
                            <div class="text-light">*Preencher o campo ano.</div>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-3 col-form-label">Cor:</label>
                        <div class="col-sm-6">
                            <input type="text" name="cor" value="{{old('cor',$registrosBaixos->cor)}}" class="form-control" id="inputCor" placeholder="Azul">
                            @error('cor')
                            <div class="text-light">*Preencher o campo cor.</div>
                            @enderror
                        </div>

                        <div class="row mb-3">
                            <label class="col-sm-3 col-form-label">Valor:</label>
                            <div class="col-sm-6">
                                <input type="text" name="valor" value="{{old('valor',$registrosBaixos->valor)}}" class="form-control" id="inputValor" placeholder="R$ 8,000,00">
                                @error('valor')
                                <div class="text-light">*Preencher o campo valor.</div>
                                @enderror
                            </div>
                        </div>


                        <div class="d-grid gap-2 col-6 p-3 mx-auto">
                            <button type="submit" class="btn btn-primary">Atualizar</button>
                        </div>
                </form>
            </div>
        </div>
    </section>














    <!--------------------------------JS------------------------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>


</body>

</html>