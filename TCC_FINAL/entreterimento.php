<!DOCTYPE html>
<html lang="pt-br">

    <head>

    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.72.0">
        <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/blog/">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">  
        <link rel="stylesheet" type="text/css" href="./jogo/css/estilo.css"/>       

        <title>Etreterimento TEC LEAF</title>

    </head>

    <body>
    <div class="container">
            <header class="blog-header py-3">

                <div class="row flex-nowrap justify-content-between align-items-center">

                    <div class="col-4 pt-1"></div>
                    
                        <div class="col-4 text-center">
                        <img src = "./imagem/Logo_TECLEAF.png"/>
                        </div>

                        <div class="col-4 d-flex justify-content-end align-items-center">
 
                    </div>

                </div>

            </header>


            <div class="nav-scroller py-2 mb-2">
                <nav class="nav d-flex justify-content-between color-success">

                    <a class="p-2 link-secondary" href="home.php"> HOME</a>
                    <a class="p-2 link-secondary" href="ongs.php">ONGS</a>
                    <a class="p-2 link-secondary" href="entreterimento.php">ENTRETENIMENTO</a>
                    <a class="p-2 link-secondary" href="sobre_nos.php">SOBRE NÓS</a>
                    
                </nav>
            </div>

            <div class=" p-md-5 mb-4 text-dark" id = "blocos">
                <div class="col-md-6 px-0">

                    <h1 class="display-4 font-italic">Jogo da Forca <br> TEC LEAF</h1>
                    <p class="lead my-3">Um dos jogos mais populares com o tema de sustentabilidade desenvolvido pelo grupo TEC LEAF</p>                    
                </div>
            </div>
        <div id = "jogo">            
            <h1 class="display-4 font-italic" id = "cuidados">Escolha uma letra para começar!</h1>



            <div id="imagem"></div>

            <div id="palavra-secreta"></div>

            <div id="teclado">

            <div class="teclas">

                <button id="tecla-A" onclick="verificaLetraEscolhida('A')">A</button>
                <button id="tecla-B" onclick="verificaLetraEscolhida('B')">B</button>
                <button id="tecla-C" onclick="verificaLetraEscolhida('C')">C</button>
                <button id="tecla-D" onclick="verificaLetraEscolhida('D')">D</button>
                <button id="tecla-E" onclick="verificaLetraEscolhida('E')">E</button>
                <button id="tecla-F" onclick="verificaLetraEscolhida('F')">F</button>
                <button id="tecla-G" onclick="verificaLetraEscolhida('G')">G</button>
                <button id="tecla-H" onclick="verificaLetraEscolhida('H')">H</button>
                <button id="tecla-I" onclick="verificaLetraEscolhida('I')">I</button>  

            </div>

            <div class="teclas">

                <button id="tecla-J" onclick="verificaLetraEscolhida('J')">J</button>
                <button id="tecla-K" onclick="verificaLetraEscolhida('K')">K</button>
                <button id="tecla-L" onclick="verificaLetraEscolhida('L')">L</button>
                <button id="tecla-M" onclick="verificaLetraEscolhida('M')">M</button>
                <button id="tecla-N" onclick="verificaLetraEscolhida('N')">N</button>
                <button id="tecla-O" onclick="verificaLetraEscolhida('O')">O</button>
                <button id="tecla-P" onclick="verificaLetraEscolhida('P')">P</button>
                <button id="tecla-Q" onclick="verificaLetraEscolhida('Q')">Q</button>
                <button id="tecla-R" onclick="verificaLetraEscolhida('R')">R</button>

            </div>
            
            <div class="teclas">

                <button id="tecla-S" onclick="verificaLetraEscolhida('S')">S</button>
                <button id="tecla-T" onclick="verificaLetraEscolhida('T')">T</button>
                <button id="tecla-U" onclick="verificaLetraEscolhida('U')">U</button>
                <button id="tecla-V" onclick="verificaLetraEscolhida('V')">V</button>
                <button id="tecla-W" onclick="verificaLetraEscolhida('W')">W</button>
                <button id="tecla-X" onclick="verificaLetraEscolhida('X')">X</button>
                <button id="tecla-Y" onclick="verificaLetraEscolhida('Y')">Y</button>
                <button id="tecla-Z" onclick="verificaLetraEscolhida('Z')">Z</button>
                <button id="btnReiniciar">🎮</button>

            </div>
        </div>
        
        </div>
        
        <!-- inicio modal -->
        <!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body" id="modalBody"></div>
                <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
            </div>
        </div>
        <!-- fim modal -->
    </div>

    <script src="jogo/js/palavras.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</div>

        <footer class="blog-footer">
            <p>Trabalho de Conclusão de Curso do Grupo TEC LEAF do Curso de Desenvolvimento de Sistemas</p>
        </footer>

    </body>

</html>