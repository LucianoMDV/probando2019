<?php
    class inicioView {
        function mostrarInicio() {
            echo '<!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <link rel="stylesheet" href="css/bootstrap-4.1.3/bootstrap.min.css">
                <title>Document</title>
            </head>
            <body>
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <a class="btn btn-outline-success inicio" href="inicio">Inicio</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-success categoria" href="categorias">Categorias</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-outline-success producto" href="producto">Producto</a>
                            </li>
                        </ul>
                    </div>
                </nav>
                <h1 class="bg-primary">HOLA</h1>
            </body>
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="js/bootstrap-4.1.3/bootstrap.min.js"></script>
            </html>';
        }
    }