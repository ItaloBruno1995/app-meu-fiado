

<?php 
include('conexao.php');


//session_start();
include('verifica_login.php');

$id_estabelecimento=$_SESSION['id_user'];

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
    Paper Dashboard 2 by Creative Tim
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


          <li class="active">
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
            <a class="navbar-brand" href="javascript:;">Title</a>
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
                <h5 class="card-title">Cadastro de Proposta - Geral</h5>
              </div>
              <div class="card-body">
                <form method="POST" action="">
                  <div class="row">
                    <div class="col-md-5 pr-1">
                      <div class="form-group">
                        <label><font color="black">Codigo do Cliente</font></label>
                        <input type="text" class="form-control" disabled="" placeholder="TODOS" value="TODOS">
                      </div>
                    </div>
                    <div class="col-md-3 px-1">
                      <div class="form-group">
                        <label><font color="black">Nome do Cliente</font></label>
                        <input type="text" class="form-control" placeholder="TODOS" value="TODOS">
                      </div>
                    </div>
                    
                  </div>
                 

                 











                  
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">





                  











                        <label><font color="black">Mensagem/Proposta</font></label>
                        <textarea name="mensagem" class="form-control textarea" > </textarea>
                      </div>
                    </div>
                  </div>


                  <div class="row">
                    
                   



                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label><font color="black">Data limite para o cliente aceitar essa Proposta: </font></label>
                        <input type="date" name="validade" class="form-control"   >
                      </div>
                    </div>


                  </div>



                <div class="alert alert-warning alert-dismissible fade show">
                          <button type="button" aria-hidden="true"  class="close" data-dismiss="alert" aria-label="Close">
                            <i class="nc-icon nc-simple-remove"></i>
                          </button>
                          <span> <font color="black"><b> Aviso - </b> O Cliente Verá essa Messagem Até a data Limite Cadastrada </font></span>
                        </div>




                  <div class="row">
                    <div class="update ml-auto mr-auto">
                      <button type="submit"  name="enviar" class="btn btn-primary btn-round">Enviar Proposta</button>
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



</body>

</html>



<?php
 

//include('conexao.php');


 if(isset($_POST['enviar'])){


  //ucwords ($string );
  $descricao = strtoupper ($_POST['mensagem']);
 $data=  strtoupper ($_POST['validade']);


//$data = implode('-', array_reverse(explode('/',$_POST['data']))); //Converter data 

  //$id_cliente=strtoupper ($_POST['id']);
//curDate() : data atual






//cadastrar

 if($conexao){


$conexao->begin_transaction();




          $query ="insert into tb_proposta(validade,descricao) value('$data','$descricao') ";
          
          $result = mysqli_query($conexao,$query);

           $id_proposta=(mysqli_insert_id($conexao));

           $query ="insert into tb_proposta_has_tb_estabelecimento(tb_proposta_id,tb_estabelecimento_id) values('$id_proposta','$id_estabelecimento')";
          
           $result = mysqli_query($conexao,$query);


            
           

          if($result==''){




             $conexao->ROLLBACK();
           
             //$query = mysqli_query($conexao,"COMMIT");
            echo "<script language='javascript'> window.alert('Ocorreu um Erro ao Salvar!'); </script>";


          }else{

             $conexao->COMMIT();
          
            //$query = mysqli_query($conexao,"ROLLBACK");

            echo "<script language='javascript'> window.alert('Proposta Enviada Com Sucesso!'); </script>";


            
            header("Location: listar-clientes.php"); 

            exit();


          }

}else{

  echo "SEM CONEXAO";
}

 }



function converterData($dataConsulta, $formato){
    //"br"-> data vem no formato dd-mm-aa
    //"en"-> data vem no formado yyyy-mm-dd
    
    //convertendo para yyy-mm-dd
    if($formato == "br"){
        list($dia, $mes, $ano)=
 explode("/", $dataConsulta);
            $dataNova = $ano . "-" . $mes . "-" . $dia;         
    }
    return $dataNova;
}







?>




