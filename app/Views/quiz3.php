<script>
$(document).on("click","#a", function (){
  window.location="quiz4";
});
  </script>

</head>

  <style type="text/css">
    #quiz{
      font-size: 32;
    }
    #tela{
      text-align: center;
    }
    #a{
      border-radius: 500px;
    
    }
    #b{
      border-radius: 500px;
       
    }
    #c{
      border-radius: 500px;
    }

    #img{
        width: 800px;
        
    }
    </style>
<body>
<div id="tela">
  <h1 id="logo, quiz" >Pergunta (3)</h1>
  <img src="<?=base_url()?>/img/ImgPerg3.jpeg" id="img">
<br>
<div class="">
  <h2 id="pergunta">3 -  Qual sua escolaridade? </h2>
  <h3 id="altA"><button type="button" class="btn btn-outline-info" id="a">A</button>Ensino fundamental I e II completo</h3>
  <h3 id="altB"><button type="button" class="btn btn-outline-info" id="b">B</button>Ensino Médio Completo </h3>
  <h3 id="altC"><button type="button" class="btn btn-outline-info" id="c">C</button>Ensino Superior</h3>
</div>
</body>
</div>
