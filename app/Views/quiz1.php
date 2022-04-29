<script>
$(document).on("click","#b", function (){
  window.location="quiz2";
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
        width: 700px;
        
    }

    </style>
<body>
<div id="tela">
  <h1 id="logo, quiz" >Pergunta (1)</h1>
  <img src="<?=base_url()?>/img/ImgPerg1.jpg" id="img">
<br>
<div class="">
  <h2 id="pergunta">1 - Qual é a área que você tem mais facilidade? </h2>
  <h3 id="altA"><button type="button" class="btn btn-outline-info" id="a">A</button> Humanas </h3>
  <h3 id="altB"><button type="button" class="btn btn-outline-info" id="b">B</button> Exatas </h3>
  <h3 id="altC"><button type="button" class="btn btn-outline-info" id="c">C</button> Não sei </h3>
</div>
</body>
</div>
