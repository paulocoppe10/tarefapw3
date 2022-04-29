<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, viewport-fit=cover">
  <meta http-equiv="Content-Security-Policy" content="default-src * data: gap: https://ssl.gstatic.com; style-src * 'unsafe-inline'; script-src * 'unsafe-inline' 'unsafe-eval'">
  <script src="components/loader.js"></script>
  <script src="lib/onsenui/js/onsenui.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="components/index.js"></script>
  <link rel="stylesheet" href="components/loader.css">
  <link rel="stylesheet" href="lib/onsenui/css/onsenui.css">
  <link rel="stylesheet" href="lib/onsenui/css/onsen-css-components.css">
  <link rel="stylesheet" href="css/style.css">

<body>
    <style type="text/css">
        body{
    background-color: rgb(36, 36, 36);
    color:white;
    text-align:center;
        }
        #logo{
            float: right;
            margin-top: 0px;
            width: 200px;
            height: 300px;
            margin-bottom: -50px;
        }
        #nome{
            margin-top: 100px;
            margin-bottom: -50px;
            color:white;
        }
        #logo2{
            float: left;
            margin-top: 30px;
            margin-right: 80px;
            margin-left:5px;
            margin-bottom: -50px;
        }
        #teste{
            color:white;
        }
        
        #borda{
            margin-top: 10px;
            border: solid 3px;
            color: gray;
        }
        #borde{
            height:100%;
            border: solid 3px;
            border-color: gray;
        }
        #app{
            margin-left: 550px;
        }

    </style>

    <div class="container">
        <div class="row" id="borda">
            <div class="col">
                
                <img src="<?=base_url()?>/img/logogrupo.png" id="logo">
                <img src="<?=base_url()?>/img/logoetec.png" id="logo2">
                <h1 id="nome">Vestibulinhos ETEC</h1>
                <br><br>
                <h9 id="marca">Projeto Avante em parceria com a ETEC Peruibe.<h9>
            </div>
        </div>
    
      <div class="row">
        <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="borde">
            <div class="container-fluid">
                <a class="navbar-brand" href="principal">HOME</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="quemsomos">QUEM SOMOS</a>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">CURSOS</a>
                            <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item bg-dark" href="etim" id="teste">ETIM</a></li>
                                <li><a class="dropdown-item bg-dark" href="tec" id="teste">Técnicos</a></li>
                            </ul>
                        </li>
                    <a class="nav-link" href="quiz">TESTE VOCACIONAL</a>
                    <a class="nav-link" href="contato">CONTATOS</a>
                    <a class="nav-link" href="https://www.mediafire.com/file/k2m1b5jywjh2fak/ProjetoAvante.apk/file" id="app">BAIXE NOSSO APP</a>
                </div>
                </div>
            </div>
            </nav>
        </div>
      </div>
      <br>
    </body>