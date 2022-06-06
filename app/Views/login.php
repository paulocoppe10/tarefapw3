
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>LIVROS ETEC ONLINE</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</head>

<style>
    #escrita{
        width: 300px;
        margin: 15px;
    }

    #login{
        width: 180px;
        margin: 0px;
        margin-left: 70px;
    }
    </style>

<body>
    <div class="container">
        <div class="row align-items-center">
            <div id=".">
            <form class="col-10" method="post" action="create">
                <input id="escrita" name="modelo" class="form-control me-2" type="text" placeholder="modelo" aria-label="modelo">
                 <input id="escrita" name="marca" class="form-control me-2" type="text" placeholder="marca" aria-label="marca">
                  <input id="escrita" name="ano" class="form-control me-2" type="text" placeholder="ano" aria-label="ano">
                <button id="login" class="btn btn-primary">login</button>
            </form>
            </div>
        </div>
    </div>
</body>
</html>