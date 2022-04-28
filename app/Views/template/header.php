<!--inicio do header-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>vestibulinho</title>
</head>
<body>
    <style type="text/css">
        body{
    background-color: rgb(36, 36, 36);
    color:white;
        }
        #logo{
            float: right;
            margin: 0;
            width: 200px;
            height: 300px;
        }
        #nome{
            margin-top: 130px;
        }
        #logo2{
            float: left;
            margin-top: 60px;
            margin-right: 80px;
        }
    </style>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="<?=base_url()?>/img/logogrupo.png" id="logo">
                <img src="<?=base_url()?>/img/logoetec.png" id="logo2">
                <h1 id="nome">Vestibulinhos ETEC</h1>
                <h9>Projeto Avante em parceria com a ETEC Peruibe.<h9>
            </div>
        </div>

      <div class="row">
        <div class="col">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="principal">HOME</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="quemsomos">QUEM SOMOS</a>
                    <a class="nav-link" href="cursos">CURSOS</a>
                    <a class="nav-link" href="quiz">QUIZ</a>
                    <a class="nav-link" href="contato">CONTATOS</a>
                </div>
                </div>
            </div>
            </nav>
        </div>
      </div>
        <!--fim do header-->
