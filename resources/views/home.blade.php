<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Site</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>


<body>
    <!--NAVBAR-->
    <header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-3">
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
                        <li class="nav-item">
                            <a class="nav-link" href="#produtos">Produtos</a>
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
                </div>
            </div>
        </nav>
    </header>
    <!--  NAVBAR  -->


    <!--  Carousel  -->
    <section id="home">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="/img/guitarra.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/baixo.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="/img/bateria home.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>


    <!--  Segunda parte  -->
    <section id="comprar">
        <div class="cards wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 mb-2 text-content text-center">
                        <h2>PRODUTOS</h2>
                        <p>Produtos de melhor qualidade do mercado!</p>
                    </div>
                </div>

                <div class="row align-items-center">
                    <div class="col-sm-4 col-12 p-sm-0 card-banner">
                        <div class="card-banner position-relative text-center">
                            <a href="#produtos" class="card-thumb">
                                <img src="/img/guitarra produtos2.jpg" alt="guitarra_epiphoneSG" class="img-fluid">
                            </a>
                        </div>
                        <div class="banner-info text-center">
                            <h2>GUITARRAS</h2>
                            <p></p>
                            <a href="#produtos" class="main-btn">Comprar</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 p-sm-0 card-banner">
                        <div class="card-banner position-relative text-center">
                            <a href="#produtos" class="card-thumb">
                                <img src="/img/baixo produtos.jpg" alt="Baixo" class="img-fluid">
                            </a>
                        </div>
                        <div class="banner-info text-center">
                            <h2>BAIXOS</h2>
                            <p></p>
                            <a href="#produtos" class="main-btn">Comprar</a>
                        </div>
                    </div>
                    <div class="col-sm-4 col-12 p-sm-0 card-banner">
                        <div class="card-banner position-relative text-center">
                            <a href="#produtos" class="card-thumb">
                                <img src="/img/bateria.jpg" alt="Bateria" class="img-fluid">
                            </a>
                        </div>
                        <div class="banner-info text-center">
                            <h2>BATERIAS</h2>
                            <p></p>
                            <a href="#produtos" class="main-btn">Comprar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  Terceira parte  -->
    <section id="produtos" class="products">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-content text-center">
                        <h2>PRODUTOS</h2>
                        <p>Esquipamentos novos com garantia em todo o Brasil</p>
                    </div>
                    <div class="col-12">
                        <ul class="nav nav-tabs mb-3" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="guitarras-tab" data-bs-toggle="tab" data-bs-target="#guitarras" type="button" role="tab" aria-controls="guitarras" aria-selected="true">Guitarras</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="baixos-tab" data-bs-toggle="tab" data-bs-target="#baixos" type="button" role="tab" aria-controls="baixos" aria-selected="false">Baixos</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="baterias-tab" data-bs-toggle="tab" data-bs-target="#baterias" type="button" role="tab" aria-controls="baterias" aria-selected="false">Baterias</button>
                            </li>
                            <li>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="guitarras" role="tabpanel" aria-labelledby="guitarras-tab">
                                <div class="row">
                                    <!--  PRODUTOS  -->
                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="item-product">
                                            <a href="#" class="product-thumb-link">
                                                <img src="/img/produtos/stato.webp" alt="img-fluid">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="d-flex justify-content-between py-3">
                                                <a href="#" class="cat-parent">Guitarra</a>
                                                <a href="#" class="wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="#">Stratocaster T 805 Série Brasil Tagima - Sunburst
                                                    (SB)</a>
                                            </h4>
                                            <div class="product-price">
                                                <ins><span class="money text-white">R$ 5.499,00</span></ins>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between py-1">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <div class="basket">
                                                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="item-product">
                                            <a href="#" class="product-thumb-link">
                                                <img src="/img/produtos/telecaster.jpg" alt="img-fluid">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="d-flex justify-content-between py-3">
                                                <a href="#" class="cat-parent">Guitarra</a>
                                                <a href="#" class="wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="#">Telecaster Classic Vibe 50s Canhoto Squier</a>
                                            </h4>
                                            <div class="product-price">
                                                <ins><span class="money text-white">R$ 6.349,00</span></ins>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between py-1">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <div class="basket">
                                                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="item-product">
                                            <a href="#" class="product-thumb-link">
                                                <img src="/img/produtos/semi.webp" alt="img-fluid">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="d-flex justify-content-between py-3">
                                                <a href="#" class="cat-parent">Guitarra</a>
                                                <a href="#" class="wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="#">Semi Acústica AF55 Artcore Tobacco Flat Ibanez
                                                </a>
                                            </h4>
                                            <div class="product-price">
                                                <ins><span class="money text-white">R$ 5.519,00</span></ins>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between py-1">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <div class="basket">
                                                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="baixos" role="tabpanel" aria-labelledby="baixos-tab">
                                <div class="row">
                                    <!--  PRODUTOS  -->
                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="item-product">
                                            <a href="#" class="product-thumb-link">
                                                <img src="/img/produtos/baixo1.webp" alt="img-fluid">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="d-flex justify-content-between py-3">
                                                <a href="#" class="cat-parent">Contrabaixo</a>
                                                <a href="#" class="wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="#">Contrabaixo 5 Cordas BB-235 Yamaha

                                                </a>
                                            </h4>
                                            <div class="product-price">
                                                <ins><span class="money text-white">R$ 4.449,00</span></ins>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between py-1">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <div class="basket">
                                                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="item-product">
                                            <a href="#" class="product-thumb-link">
                                                <img src="/img/produtos/baixo2.webp" alt="img-fluid">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="d-flex justify-content-between py-3">
                                                <a href="#" class="cat-parent">Contrabaixo</a>
                                                <a href="#" class="wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="#">5 Cordas BB 735A Dark Coffee Sunburst Yamaha</a>
                                            </h4>
                                            <div class="product-price">
                                                <ins><span class="money text-white">R$ 9.379,00</span></ins>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between py-1">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <div class="basket">
                                                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="item-product">
                                            <a href="#" class="product-thumb-link">
                                                <img src="/img/produtos/baixo3.webp" alt="img-fluid">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="d-flex justify-content-between py-3">
                                                <a href="#" class="cat-parent">Contrabaixo</a>
                                                <a href="#" class="wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="#">5 Cordas Classic TBM 5 OWH Tagima - Olympic White
                                                    (OWH)
                                                </a>
                                            </h4>
                                            <div class="product-price">
                                                <ins><span class="money text-white">R$ 2.390,00</span></ins>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between py-1">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <div class="basket">
                                                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="tab-pane fade" id="baterias" role="tabpanel" aria-labelledby="baterias-tab">
                                <div class="row">
                                    <!--  PRODUTOS  -->
                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="item-product">
                                            <a href="#" class="product-thumb-link">
                                                <img src="/img/produtos/bateria.jpg" alt="img-fluid">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="d-flex justify-content-between py-3">
                                                <a href="#" class="cat-parent">Bateria</a>
                                                <a href="#" class="wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="#">BATERIA DECADE DMP925SP 22" 10" 12" 16" 14.55" (SHELL PACK)
                                                    Pearl - Vermelho (Gloss Deep Red Burst) (261)

                                                </a>
                                            </h4>
                                            <div class="product-price">
                                                <ins><span class="money text-white">R$ 13.149,00</span></ins>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between py-1">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <div class="basket">
                                                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="item-product">
                                            <a href="#" class="product-thumb-link">
                                                <img src="/img/produtos/bateria2.webp" alt="img-fluid">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="d-flex justify-content-between py-3">
                                                <a href="#" class="cat-parent">Bateria</a>
                                                <a href="#" class="wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="#">Bateria Infantil BIP 14 PHX - Azul (Blue) (BL)</a>
                                            </h4>
                                            <div class="product-price">
                                                <ins><span class="money text-white">R$ 1.089,00</span></ins>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between py-1">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <div class="basket">
                                                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-3 col-sm-6 mb-3">
                                        <div class="item-product">
                                            <a href="#" class="product-thumb-link">
                                                <img src="/img/produtos/bateria3.webp" alt="img-fluid">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <div class="d-flex justify-content-between py-3">
                                                <a href="#" class="cat-parent">Bateria</a>
                                                <a href="#" class="wishlist">
                                                    <i class="fa fa-heart"></i>
                                                </a>
                                            </div>
                                            <h4 class="product-title">
                                                <a href="#">Bateria Garage Fusion Es (Ebony Sparkle) Nagano - Ebony
                                                    Sparkle (ES)
                                                </a>
                                            </h4>
                                            <div class="product-price">
                                                <ins><span class="money text-white">R$ 5.890,00</span></ins>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between py-1">
                                                <div class="rating">
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                                <div class="basket">
                                                    <a href="#"><i class="fas fa-shopping-basket"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--  Quarta parte  -->
    <section id="promocao">
        <div class="wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="text-center border border-white deal-of-the-day py5">
                            <h2>PROMOÇÃO DO MÊS!</h2>
                            <h4>60% DE DESCONTO!</h4>
                            <p>Neste mês de Novembro!
                            </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!--footer-->
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



    <!--------------------------------JS------------------------>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        var nav = document.querySelector('nav');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 100) {
                nav.classList.add('bg-dark', 'shadow');
            } else {
                nav.classList.remove('bg-dark', 'shadow');
            }
        });
    </script>
</body>

</html>