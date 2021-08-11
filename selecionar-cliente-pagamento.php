

<?php 

//session_start();
include('conexao.php');
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
    Meu fiado
  </title>

   <link href="//cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css" rel="stylesheet">

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


</head>


<div id="content" style="display: none"> <!-- CARREGANDO --->

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
            <a class="navbar-brand" href="javascript:;">Selecione Um Cliente</a>
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
<?php 

      
   $query =" select *  from tb_cliente,tb_estabelecimento_has_tb_cliente where tb_estabelecimento_has_tb_cliente.tb_estabelecimento_id='$id_estabelecimento' 
         and tb_estabelecimento_has_tb_cliente.tb_cliente_id = tb_cliente.id order by nome asc ";
        $result = mysqli_query($conexao,$query);
        //$dado=mysqli_fetch_array($result);
        $row = mysqli_num_rows($result);

        if($row == '' ){
       
        }else{
      ?>



           <table id="minhaTabela">
    <thead>
      <tr>
        <th>Codigo</th>
        <th>Nome/Apilido</th>
        <th>CPF</th>
        <th>Ação</th>
      </tr>
    </thead>
    <tbody>


 <?php 

       while($res_1=mysqli_fetch_array($result)){
        $id=$res_1["id"];
        $nome=$res_1["nome"];
        $cpf=$res_1["user"];

         ?>


      <tr>
         <td><?php echo $id; ?></td>
        <td><?php echo $nome; ?></td>
        <td><?php echo $cpf; ?></td>
      
        
        <td><a href="pagamento-conta.php?id=<?php echo $id ?>">Fazer Pagamento desse Cliente</a></td>
      </tr>
      
       <?php 

          }
          
       ?> 
     
     
      
    </tbody>


     <?php 

          }
          
       ?> 
     
  </table>
  












        










  
  








          


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




<script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="//cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>

  <script>
  $(document).ready(function(){
      $('#minhaTabela').DataTable({
          "language": {
                "lengthMenu": "Mostrando _MENU_ registros por página",
                "zeroRecords": "Nada encontrado",
                "info": "Mostrando página _PAGE_ de _PAGES_",
                "infoEmpty": "Nenhum registro disponível",
                "infoFiltered": "(filtrado de _MAX_ registros no total)"
            }
        });
  });
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





