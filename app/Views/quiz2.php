<script>
$(document).on("click","#a", function (){
  window.location="quiz3";
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
        width: 600px;
        
    }
    </style>
<body>
<div id="tela">
  <h1 id="logo, quiz" >Pergunta (2)</h1>
  <img src="<?=base_url()?>/img/ImgPerg2.jpeg" id="img">
<br>
<div class="">
  <h2 id="pergunta">2 - Você tem facilidade com tecnologias atuais? </h2>
  <h3 id="altA"><button type="button" class="btn btn-outline-info" id="a">A</button>Sim</h3>
  <h3 id="altB"><button type="button" class="btn btn-outline-info" id="b">B</button>Não </h3>
  <h3 id="altC"><button type="button" class="btn btn-outline-info" id="c">C</button>Um pouco</h3>
</div>
</body>
</div>
