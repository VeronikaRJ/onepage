<?php
require "config.php"
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    
    <title>One Page</title>
    
    <link rel="stylesheet" href="<?=$base;?>/assets/css/style.css"/> 
    <link rel="stylesheet" href="<?=$base;?>/assets/css/bootstrap.css"/>
       
</head>
<body>

        <div class="container">
            <nav class="nav justify-content-center">
                <button class="btn btn-light btn-sm">Homepage</button>
                <button class="btn btn-light btn-sm">About Us</button>
                <button class="btn btn-light btn-sm">Services</button>
                <button class="btn btn-light btn-sm">Contact</button>
                <button class="btn btn-light btn-sm">External</button>
            </nav>

            <nav class="navbar navbar-expand-lg navbar-dark">
                <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="navbar-collapse collapse" id="navbarMenu">

                    <div class="navbar-nav">
                        <a href="#" class="nav-item nav-link active">Link1</a>
                        <a href="#" class="nav-item nav-link">Link2</a>
                        <a href="#" class="nav-item nav-link">Link3</a>
                        <a href="#" class="nav-item nav-link">Link4</a>
                    </div>

                </div>
            </nav> 

            <div class="jumbotron jumbotron-fluid jumbotron1">
                    <div class="d-flex flex-column align-items-center">
                        <h1>AZIMUTH</h1>
                        <h5>Linha do Horizonte</h5>
                    </div>
            </div>
            
            <div class="card-deck card-deck-1">
                <div class="card">
                    <img src="<?=$base;?>/assets/images/instrumentos01.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #218838;">Partitura</h5>
                        <p class="card-text">Aquilo qua a gente não sabe ler, mas que é muito bonitinho.</p>
                        <div class="d-flex flex-row justify-content-center">   
                            <a href="#" class="btn btn-success">Partirura</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="<?=$base;?>/assets/images/instrumentos11.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #0069D9;">Melodia</h5>
                        <p class="card-text">Um somzinho do barulho, que tenha uma linda hamonia. </p>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="#" class="btn btn-primary">Melodia</a>
                        </div>
                    </div>
                </div>
                
                <div class="card">
                    <img src="<?=$base;?>/assets/images/instrumentos12.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #CD2737;">Notas Musicais</h5>
                        <p class="card-text">Dó Ré Mi Fá Sol Lá Si e voltamos ao Dó.</p>
                        <div class="d-flex flex-row justify-content-center">    
                            <a href="#" class="btn btn-danger">Notas Musicais</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-deck card-deck-1-12">
                <div class="col-12">
                    <div class="card">
                        <img src="<?=$base;?>/assets/images/instrumentos01.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #218838;">Partitura</h5>
                            <p class="card-text">Aquilo qua a gente não sabe ler, mas que é muito bonitinho.</p>
                            <div class="d-flex flex-row justify-content-center">   
                                <a href="#" class="btn btn-success">Partirura</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <img src="<?=$base;?>/assets/images/instrumentos11.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #0069D9;">Melodia</h5>
                            <p class="card-text">Um somzinho do barulho, que tenha uma linda hamonia. </p>
                            <div class="d-flex flex-row justify-content-center">
                                <a href="#" class="btn btn-primary">Melodia</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">                
                    <div class="card">
                        <img src="<?=$base;?>/assets/images/instrumentos12.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #CD2737;">Notas Musicais</h5>
                            <p class="card-text">Dó Ré Mi Fá Sol Lá Si e voltamos ao Dó.</p>
                            <div class="d-flex flex-row justify-content-center">    
                                <a href="#" class="btn btn-danger">Notas Musicais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card-deck card-deck-2">
                <div class="card">
                    <img src="<?=$base;?>/assets/images/music02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #303643;">Música e Arte</h5>
                        <p class="card-text">Através da música encontramos o nosso despertar.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="<?=$base;?>/assets/images/music05.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #303643;">Arte é música</h5>
                        <p class="card-text">A arte expressada pela música faz com que viagemos por várias sensações.</p>
                        <div class="d-flex flex-row-reverse bd-highlight">
                            <a href="#" class="btn btn-light">Melodia</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-deck card-deck-2-12">
                <div class="col-12">
                    <div class="card">
                        <img src="<?=$base;?>/assets/images/music02.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #303643;">Música e Arte</h5>
                            <p class="card-text">Através da música encontramos o nosso despertar.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">    
                    <div class="card">
                        <img src="<?=$base;?>/assets/images/music05.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #303643;">Arte é música</h5>
                            <p class="card-text">A arte expressada pela música faz com que viagemos por várias sensações.</p>
                            <div class="d-flex flex-row-reverse bd-highlight">
                                <a href="#" class="btn btn-light">Melodia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="jumbotron jumbotron-fluid jumbotron2">
                <div class="d-flex flex-column align-items-center">
                    <h1>EROS RAMAZOTTI</h1>
                    <h5>Musica E'</h5>
                </div>
            </div>

            <div class="card-deck card-deck-3">
                <div class="card">
                    <img src="<?=$base;?>/assets/images/music05.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #303643;">Música</h5>
                        <p class="card-text">Música a mais bela forma de expressão da arte.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="<?=$base;?>/assets/images/music02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #303643;">Clave de Fá</h5>
                        <p class="card-text">A música nos leva a variadas sensações.</p>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="#" class="btn btn-light">Som</a>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <img src="<?=$base;?>/assets/images/music06.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #303643;">Partirura</h5>
                        <p class="card-text">Música alimenta a alma.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="<?=$base;?>/assets/images/music04.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #303643;">Clave de Sol</h5>
                        <p class="card-text">Barulhinho bom que contagia é meramente a música.</p>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="#" class="btn btn-light">Melodia</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-deck card-deck-3-12">
                <div class="col-12">
                    <div class="card">
                        <img src="<?=$base;?>/assets/images/music05.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #303643;">Música</h5>
                            <p class="card-text">Música a mais bela forma de expressão da arte.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <img src="<?=$base;?>/assets/images/music02.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #303643;">Clave de Fá</h5>
                            <p class="card-text">A música nos leva a variadas sensações.</p>
                            <div class="d-flex flex-row justify-content-center">
                                <a href="#" class="btn btn-light">Som</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <img src="<?=$base;?>/assets/images/music06.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #303643;">Partirura</h5>
                            <p class="card-text">Música alimenta a alma.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <div class="card">
                        <img src="<?=$base;?>/assets/images/music04.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="color: #303643;">Clave de Sol</h5>
                            <p class="card-text">Barulhinho bom que contagia é meramente a música.</p>
                            <div class="d-flex flex-row justify-content-center">
                                <a href="#" class="btn btn-light">Melodia</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-deck card-deck-3-1-2">
                <div class="card">
                    <img src="<?=$base;?>/assets/images/music05.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #303643;">Música</h5>
                        <p class="card-text">Música a mais bela forma de expressão da arte.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="<?=$base;?>/assets/images/music02.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #303643;">Clave de Fá</h5>
                        <p class="card-text">A música nos leva a variadas sensações.</p>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="#" class="btn btn-light">Som</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-deck card-deck-3-2-2">
                <div class="card">
                    <img src="<?=$base;?>/assets/images/music06.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #303643;">Partirura</h5>
                        <p class="card-text">Música alimenta a alma.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="<?=$base;?>/assets/images/music04.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #303643;">Clave de Sol</h5>
                        <p class="card-text">Barulhinho bom que contagia é meramente a música.</p>
                        <div class="d-flex flex-row justify-content-center">
                            <a href="#" class="btn btn-light">Melodia</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-deck card-deck-4">
                <div class="card">
                    <img src="<?=$base;?>/assets/images/musicwiffi.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title" style="color: #218838;">Música ao Alcance de todos</h5>
                        <p class="card-text">
                            A importância da utilização da Internet em pesquisa e para a educação musical é
                            algo que ainda está por ser avaliado.
                        </p>
                        <div class="d-flex flex-row">   
                            <a href="#" class="btn btn-light">Partirura</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="jumbotron jumbotronform">
                <div class="d-flex flex-column align-items-center">
                    <h1>CONTATOS</h1>
                    <div class="d-flex flex-column align-items-center jcontent">
                        <div class="col-12">
                            <h6 class="text-center">Não deixe pra amanhã, entre em contato agora e seja feliz.
                                Não sei o que dizer. Mas você pode falar tudo que terei o prazer de escutar.
                                Ainda falta algumas linhas para eu poder testar direito. Mas não sei mais o 
                                que escrever.
                            </h6>
                        </div>
                        <form method="POST">
                            <div class="form-group">
                                <div class="col-input">
                                    <input class="form-control" type="text" placeholder="Nome">
                                    <input class="form-control" type="email" placeholder="E-mail">
                                    <input class="form-control" type="text" placeholder="Subject">
                                </div>
                                <div class="col-textarea">
                                    <textarea class="form-control" placeholder="Digite sua mensagem aqui..."></textarea>
                                    <a href="#" class="btn btn-light" >Enviar</a>
                                </div> 
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>

        <footer>

            <div class="container footer1">
                <h4 class="text-center">Pansador do Dia</h4>
                <p class="text-center">
                    "Não morre aquele que deixou na terra a melodia <br/>de seu cântico na música de seus versos."<br/>
                    - Cora Coralina -
                </p>
            </div>

            <div class="container footer2">
                <p class="text-center">copyright © 2020 - Exercício feito por uma Aprendiz </p>
            </div>

        </footer>

    <script src="<?=$base;?>/assets/js/jquery-3.5.1.min.js"></script>
    <script src="<?=$base;?>/assets/js/bootstrap.bundle.js"></script>
</body>
</html>