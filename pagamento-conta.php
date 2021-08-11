

<?php 

//session_start();
include('conexao.php');
include('verifica_login.php');

 $id_estabelecimento=$_SESSION['id_user'];
 $id_cliente = filter_input(INPUT_GET, 'id');
 $saldo=0;
 $contaSomada=0;
 $codigo=0;
 $nome=0;
 $cpf=0;

//verificar se o cpf já esta cadastrado nesse Est:
$query ="select * from tb_cliente as c inner join tb_estabelecimento_has_tb_cliente as e on e.tb_cliente_id = c.id and e.tb_estabelecimento_id= '$id_estabelecimento' where c.id ='$id_cliente';";

$result = mysqli_query($conexao,$query);

$dado=mysqli_fetch_array($result);

$row = mysqli_num_rows($result);



 if($row > 0 ){

    //abettura de sessao
   $codigo= $id_cliente;
   $nome= $dado['nome'];
   $cpf=$dado['user'];



}




?>

<!--<h3>Usuario: <?php //echo $_SESSION['id_user'] ?></h3>
<h3>Usuario: <?php //echo $_SESSION['usuario'] ?></h3>
<h3>Assinatura : <?php// echo $_SESSION['assinatura'] ?></h3>
<a href="logout.php">Sair</a>-->
<!--
<!--
=========================================================
* Paper Dashboard 2 - v2.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/paper-dashboard-2
* Copyright 2020 Creative Tim (https://www.creative-tim.com)

Coded by www.creative-tim.com

 =========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="./assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Meu Fiado
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="./assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="./assets/demo/demo.css" rel="stylesheet" />

  <script >
        var i = setInterval(function () {
    clearInterval(i);

    // O código desejado é apenas isto:
    document.getElementById("loading").style.display = "none";
    document.getElementById("content").style.display = "block";

}, 2000);


    </script>


<div id="content" style="display: none"> <!-- CARREGANDO --->

</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <div class="logo">
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
         <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> 
          <!-- <p>CT</p> -->
        </a>
        <a href="https://www.creative-tim.com" class="simple-text logo-normal">
         Meu Fiado
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
         <ul class="nav">
          <li class=" ">
              <a href="painel_admin.php">
              <i class="nc-icon nc-badge"></i>
              <p>Painel Principal</p>
            </a>
          </li>

          <li>
            <a href="gerenciamento-cliente.php">
              <i class="nc-icon nc-badge"></i>
              <p> Cliente</p>
            </a>
          </li>

          
          <li>

            <a href="gerenciamento-conta.php">
              <i class="nc-icon nc-credit-card"></i>
              <p>Conta</p>
            </a>
          </li>

          <li class="active">
            <a href="gerenciamento-pagamento.php">
              <i class="nc-icon nc-money-coins"></i>
              <p>Pagamento</p>
            </a>
          </li>


          <li>
            <a href="gerenciamento-negociacao.php">
              <i class="nc-icon nc-user-run"></i>
              <p>Negociação</p>
            </a>
          </li>


          <li>
            <a href="gerenciamento-relatorio.php">
              <i class="nc-icon nc-paper"></i>
              <p>Relatorio</p>
            </a>
          </li>

          <li>
            <a href="javascript:;">
              <i class="nc-icon nc-alert-circle-i"></i>
              <p>Assinatura</p>
            </a>
          </li>



          <li>
            <a href="javascript:;">
              <i class="nc-icon nc-chat-33"></i>
              <p>Suporte</p>
            </a>
          </li>



        </ul>
      </div>
    </div>
    <div class="main-panel" style="height: 100vh;">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="javascript:;">Pagamento de Conta do Cliente</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>

          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            
            <ul class="navbar-nav">


              <li class="nav-item btn-rotate dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="nc-icon nc-bell-55"></i>
                  <p>
                    <?php 

                        echo $_SESSION['usuario'] 

                       ?>
                    <span class="d-lg-none d-md-block">
                      
                    </span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="logout.php">Sair</a>
                
                </div>
              </li>
            </ul>
          </div>
        </div>
      </nav>












      <!-- End Navbar -->
      <div class="content">












        <div class="row">









          <div class="col-md-12">
            

<?php 

//buscar valor total em debito na conta do cliente:

    $query ="select * from tb_cliente as c  inner join tb_estabelecimento as e inner join tb_estabelecimento_has_tb_cliente as ec on ec.tb_estabelecimento_id = e.id and ec.tb_cliente_id =c.id inner join tb_cliente_has_tb_compras_cliente as cc on cc.tb_cliente_id =c.id inner join tb_compras_cliente as ccli on ccli.id=cc.tb_compras_cliente_id where c.id= {$id_cliente} and e.id={$id_estabelecimento}";

        $result = mysqli_query($conexao,$query);
        //$dado=mysqli_fetch_array($result);
        $row = mysqli_num_rows($result);

        if($row == '' ){
       
        }else{

    while($res_1=mysqli_fetch_array($result)){
     
        $totalConta=$res_1["total"];

        $contaSomada= $contaSomada+$res_1["total"];

          //echo $contaSomada; 
}




}



///BUSCAR RESTO SE CONTA SE TIVER:


$devendo=0;




    $query =" select * from tb_cliente as c   inner join tb_estabelecimento as e  inner join tb_estabelecimento_has_tb_cliente as ec on ec.tb_estabelecimento_id = e.id and ec.tb_cliente_id =c.id and e.id={$id_estabelecimento} inner join tb_pagamento_cliente_has_tb_cliente as pc on pc.tb_cliente_id =c.id 
        inner join tb_pagamento_cliente as pcc on pcc.id=pc.tb_pagamento_cliente_id
        where c.id= {$id_cliente}
     ";

        $result = mysqli_query($conexao,$query);
        //$dado=mysqli_fetch_array($result);
        $row = mysqli_num_rows($result);

        if($row == '' ){
       
        }else{

    while($res_1=mysqli_fetch_array($result)){

      if($res_1["faltou"] ='V'){

        $devendo=$devendo+$res_1["ficouDevendo"];


      }
     
        //$pagamento=$res_1["valor_pago"];

        $saldo= $saldo+$res_1["valor_pago"];

          //echo $contaSomada; 
}


//descontar valor que ficou devendo:(resto de conta)
$saldo=$saldo - $devendo;


}






 ?>





<div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Pagamento</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label><font color="black">Codigo do Cliente</font></label>
                        <input type="text"  name="codigo" value="<?php echo $codigo ?>" class="form-control" disabled="" placeholder="Company" value="00_09">
                      </div>
                    </div>
                    <div class="col-md-6 px-1">
                      <div class="form-group">
                        <label><font color="black">Nome do Cliente</font></label>
                        <input  required type="text" class="form-control" placeholder="Username" value="<?php echo $nome ?>">
                      </div>
                    </div>
                    
                  </div>
                 

                 






           




                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">





                  











                        <label><font color="black">Observação</font></label>
                        <textarea class="form-control textarea" name="observacao" > </textarea>
                      </div>
                    </div>
                  </div>



                     <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="col-md-4 pr-1">

                      <div class="form-group">
                        <label><font color="black">Desconto(%) </font></label>
                        <input  required type="text" id="desconto" name="desconto" class="form-control"  placeholder="%"  >

              <input type="button" value="Aplicar Desconto"  onclick="calcular()"class="btn btn-primary btn-round">

                      </div>
                    </div>




                   </div>
            </div>
       </div>




                  



        





                  <div class="row">
                    
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label><font color="black">Valor Total da Conta </font></label>
                        <input type="text" class="form-control"  name="total" id="total" value="<?php echo $contaSomada - $saldo ?>" readonly >
                      </div>
                    </div>





                       <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label><font color="black">Valor a Pagar </font></label>
                        <input type="text" class="form-control"  name="pagar" id="pagar" value="<?php 
                        echo $contaSomada - $saldo ?>" readonly >
                      </div>
                    </div>
                    
            <!-- <input type="text" id="pagar" name="pagar"> -->




                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label><font color="black" onKeyUp="mascaraMoeda(this, event)">Valor que o Cliente deseja Pagar </font></label>
                        <input  required type="text"  onKeyUp="mascaraMoeda(this, event)" name="pagou" class="form-control"   >
                      </div>
                    </div>


                  </div>







                     <!--
                <div class="alert alert-warning alert-dismissible fade show">
                          <button type="button" aria-hidden="true"  class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>

                      <span > <font color="red"><b> Aviso - </b> Cliente Ainda Ficará Devendo R$ 100,00 </font></span> 
                        </div>

                     -->


                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="pagamento" class="btn btn-primary btn-round">Registar Pagamento</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
      






          </div>
        </div>
      </div>

<!--
      <footer class="footer" style="position: absolute; bottom: 0; width: -webkit-fill-available;">
        <div class="container-fluid">
          <div class="row">
            <nav class="footer-nav">
              <ul>
                <li><a href="https://www.creative-tim.com" target="_blank">Creative Tim</a></li>
                <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
              </ul>
            </nav>
            <div class="credits ml-auto">
              <span class="copyright">
                © 2020, made with <i class="fa fa-heart heart"></i> by Creative Tim
              </span>
            </div>
          </div>
        </div>
      </footer>

-->


    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="./assets/js/core/jquery.min.js"></script>
  <script src="./assets/js/core/popper.min.js"></script>
  <script src="./assets/js/core/bootstrap.min.js"></script>
  <script src="./assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="./assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="./assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="./assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>


<script type="text/javascript">
  

function calcular(){
  var valor             = document.getElementById("total").value;
  var descontoRecebido         = document.getElementById("desconto").value;
  var resultado         = document.getElementById("pagar");

  var desconto          = 0;

  var divisao=0
  var subritracao=0;

  
  if(valor>0){

    divisao = valor * (descontoRecebido / 100);
   subritracao   =   valor - divisao;


    descontoRecebido;

      desconto = valor*0.05; //5%
      valor = valor*0.95;

    
    
  }
  
  resultado.value = subritracao.toFixed(2);;
}

</script>



<script type="text/javascript">
  String.prototype.reverse = function(){
  return this.split('').reverse().join(''); 
};

function mascaraMoeda(campo,evento){
  var tecla = (!evento) ? window.event.keyCode : evento.which;
  var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
  var resultado  = "";
  //var mascara = "##.###.###.##".reverse();
  var mascara = "####.##".reverse();
  for (var x=0, y=0; x<mascara.length && y<valor.length;) {
    if (mascara.charAt(x) != '#') {
      resultado += mascara.charAt(x);
      x++;
    } else {
      resultado += valor.charAt(y);
      y++;
      x++;
    }
  }
  campo.value = resultado.reverse();
}


</script>





</body>





</html>




</div> <!-- CARREGANDO --->

<div id="loading" style="display: block">
    Loading...
    <center>
    <img src="./assets/img/load7.gif" class="w-75" alt="Logo">
  </center>
</div>


<?php
 

 //include('conexao.php');


 if(isset($_POST['pagamento'])){


  //ucwords ($string );
  $totalConta = strtoupper ($_POST['total']);
  $valorComDescontoFinal=strtoupper ($_POST['pagar']);
  $observacao=strtoupper ($_POST['observacao']);
  $desconto=strtoupper ($_POST['desconto']);
  $pagou =strtoupper ($_POST['pagou']);
  $restou='F';
  $quantoRestou=0;
  //$id_cliente=strtoupper ($_POST['id']);
//curDate() : data atual

$valorRecebido = $valorComDescontoFinal - $pagou;

if($pagou > $valorComDescontoFinal){
    echo "<script language='javascript'> window.alert('ERRO: O Valor pago pelo Cliente é Maior que o Valor da Conta!'); </script>";
  exit();
}


if($valorRecebido>0){
  //cliente nao pagou conta toda
  $restou='V';
  
 // echo "<script language='javascript'> window.alert('entrou aqui'); </script>";
 

}




//cadastrar

 if($conexao){








       
            $conexao->begin_transaction();

            //INSERT INTO `meu-fiado`.`tb_pagamento_cliente` (`data`, `valor_pago`, `observacao`, `desconto`, `valor_final`) VALUES ('28-02-2020', '2', 'teste2', '0', '2');

         



          $query ="insert into tb_pagamento_cliente(data, valor_pago, observacao, desconto, valor_final,faltou,ficouDevendo)  values(curDate(),'$totalConta','$observacao','$desconto', '$valorComDescontoFinal','$restou','$valorRecebido') ";
          
            $result = mysqli_query($conexao,$query);

            $id_pagamento=(mysqli_insert_id($conexao));//pegar a id do pagamento


           
           $query ="insert into  tb_pagamento_cliente_has_tb_cliente(tb_pagamento_cliente_id,tb_cliente_id) values('$id_pagamento','$id_cliente') ";
          
            $result = mysqli_query($conexao,$query);




          #MOVIMENTACAO
           $query =" insert into tb_movimentacao (tipo_movimentacao,tb_cliente_id,valorFinal_movimentado,observacao_movimentacao,valor_desconto)
            values('P','$id_cliente','$pagou','$observacao','$desconto') ";
            $result = mysqli_query($conexao,$query);

            





          if($result==''){




             $conexao->ROLLBACK();
           
             //$query = mysqli_query($conexao,"COMMIT");
            echo "<script language='javascript'> window.alert('Ocorreu um erro ao Registrar Pagamento!'); </script>";

            exit();


          }else{

             $conexao->COMMIT();
          
            //$query = mysqli_query($conexao,"ROLLBACK");

            echo "<script language='javascript'> window.alert('Pagamento Registrado com Sucesso! Comprovante disponivel na Área do Cliente'); </script>";


            
           // header("Location:listar-clientes.php"); 

            exit();


          }

}else{

  echo "SEM CONEXAO";
}

 }






?>






