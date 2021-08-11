<?php 
session_start();
include('conexao.php');


//se campos estiverem vazios, redirecionar
if(empty($_POST['usuario']) || empty($_POST['senha']) ){

header('Location: index.php');
    exit();
}


$usuario = mysqli_real_escape_string($conexao,$_POST['usuario']);
$senha= mysqli_real_escape_string($conexao,$_POST['senha']);

$query =" select * from tb_estabelecimento where user='{$usuario}' and senha = '{$senha}'";

$result = mysqli_query($conexao,$query);

//Guardar todos os dados do user:
 $dado=mysqli_fetch_array($result);

$row = mysqli_num_rows($result);

//echo($query);
//echo($row);
//exit();

//encontrou um registro
if($row > 0 ){

    //abettura de sessao
    $_SESSION['usuario']= $usuario;
     $_SESSION['id_user']= $dado["id"];
    // $_SESSION['id_estabelecimento']=$dado


     //verificar Assinatura 
     	//$query =" select * from tb_estabelecimento where user='{$usuario}' and senha = '{$senha}'";
     $query =" select  a.decricao from tb_estabelecimento as e inner join  tb_status_assinatura as a   on e.tb_status_assinatura_id = a.id and e.id= {$_SESSION['id_user']}";

	//echo($query);
	//	 exit();
		$result = mysqli_query($conexao,$query);

			while ($row = $result->fetch_assoc()) {
   					 $_SESSION['assinatura']= $row['decricao']."<br>";



			}


		//echo($result);
		//	 exit();


		// $assinatura= mysqli_fetch_assoc($result);
		//  $_SESSION['assinatura']= $assinatura->descricao;



    header('Location: painel_admin.php');
    exit();
}else{
    $_SESSION['nao_autenticado']= true;
    header('Location: index.php');
    exit();

}


 ?>