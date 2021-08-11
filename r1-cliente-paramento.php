

<?php 


//session_start();

include('conexao.php');
include('verifica_login.php');

 $id_estabelecimento=$_SESSION['id_user'];
 $id_cliente = filter_input(INPUT_GET, 'id');

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
          Meu fiado
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

          <li  >
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

          <li>
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


          <li class="active">
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
            <a class="navbar-brand" href="javascript:;">Informe Dados Para Impressão do Relatorio</a>
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
            


<div class="col-md-8">
            <div class="card card-user">
              <div class="card-header">
                <h5 class="card-title">Extrato</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="rel01.php">

                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label>Codigo do Cliente</label>
                        <input  type="text" value="<?php echo $codigo ?>" name ="codigo" class="form-control"   placeholder="Company" value="00_09" readonly>
                      </div>
                    </div>
                    <div class="col-md-12 px-1">
                      <div class="form-group">
                        <label>Nome do Cliente</label>
                        <input type="text" value="<?php echo $nome ?>"  name="nome" class="form-control" placeholder="Username" value="michael23">
                      </div>
                    </div>
                    
                  </div>
                 

                 
                  
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label>de:</label>
                      <input type="date"  name="p1" class="form-control"  >
                      </div>
                    </div>


                        <div class="col-md-5">
                      <div class="form-group">
                        <label>a:</label>
                      <input type="date"  name="p2" class="form-control"  >
                      </div>
                    </div>

                  </div>


                    
             


     <div class="row">


         <!--           
     <div class="col-md-4 pr-1">
          
                    
          <input type="radio" id="male" name="gender" value="todos">
           <label for="male">Dados de Pagamento e Conta</label><br>
         </div>
          
        -->

        <div class="col-md-4 pr-1">
                      
          <input type="radio" id="female" name="gender" value="conta">
          <label for="female">Dados de Conta</label><br>
         </div>
         
          <div class="col-md-4 pr-1">
                      
         <input type="radio" id="other" name="gender" value="pagamento">
          <label for="other">Dados de Pagamento</label>
         </div>
          

         <div class="col-md-4 pr-1">
                      
         <input type="radio" id="other" name="gender" value="movimentacao">
          <label for="other">Movimentações</label>
         </div>


          

          <br>  

                 
                  </div>


                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit" name="registrar"class="btn btn-primary btn-round">Gerar Relatorio</button>
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

<script type="text/javascript">
  String.prototype.reverse = function(){
  return this.split('').reverse().join(''); 
};

function mascaraMoeda(campo,evento){
  var tecla = (!evento) ? window.event.keyCode : evento.which;
  var valor  =  campo.value.replace(/[^\d]+/gi,'').reverse();
  var resultado  = "";
  var mascara = "##.###.###.##".reverse();
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


<!---- REGISTRAR COMPRAR --->
<?php
 

 //include('conexao.php');


 if(isset($_POST['registrar'])){


  //ucwords ($string );
  $id = strtoupper ($_POST['codigo']);
  $descricao=strtoupper ($_POST['descricao']);
   $valorTotal=strtoupper ($_POST['valorTotal']);




 
  //$id_cliente=strtoupper ($_POST['id']);
//curDate() : data atual
  





//resgistrar compra

 if($conexao){








       
            $conexao->begin_transaction();

             //$valorTotal= (number_format($valorTotal));

            //insert into tb_compras_cliente(descricao,total,data) values('teste2','10.00',CURDATE( ));

            $query ="insert into tb_compras_cliente(descricao,total,data) values('$descricao','$valorTotal', curDate())";
          
            $result = mysqli_query($conexao,$query);

            $id_compras=(mysqli_insert_id($conexao));//pegar a id do cliente


            $query ="insert into tb_cliente_has_tb_compras_cliente (tb_cliente_id, tb_compras_cliente_id) values('$id_cliente','$id_compras') ";
          
            $result = mysqli_query($conexao,$query);


            
            
          

          if($result==''){

             $conexao->ROLLBACK();






             //$conexao->commit();
           
             //$query = mysqli_query($conexao,"COMMIT");
            echo "<script language='javascript'> window.alert('Ocorreu um Erro ao REGISTRAR!'); </script>";


          }else{

              $conexao->COMMIT();
            //$query = mysqli_query($conexao,"ROLLBACK");

            echo "<script language='javascript'> window.alert('Comprar Registrada com Sucesso!'); </script>";


            
            header("Location: listar-clientes.php"); 

            exit();


          }

}else{

  echo "SEM CONEXAO";
}

 }




 function limpar_texto($str){ 
  return preg_replace("/[^0-9]/", "", $str); 
}



?>








