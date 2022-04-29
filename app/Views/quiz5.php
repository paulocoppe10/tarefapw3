<script>
$(document).on("click","#a", function (){
  window.location="resultado";
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
  <h1 id="logo, quiz" >Pergunta (5)</h1>
  <img src="<?=base_url()?>/img/ImgPerg5.jpeg" id="img">
<br>
<div class="">
  <h2 id="pergunta">5 - Trabalhando em uma empresa, o que você prefere?</h2>
  <h3 id="altA"><button type="button" class="btn btn-outline-info" id="a">A</button>Desenvolver programas para a venda </h3>
  <h3 id="altB"><button type="button" class="btn btn-outline-info" id="b">B</button>Fazer o marketing de vendas de programas </h3>
</div>

</body>
</div>
