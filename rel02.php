<?php 

include'pdf/mpdf.php';
include('conexao.php');
include('verifica_login.php');

$id_estabelecimento=$_SESSION['id_user'];
//$id_cliente = filter_input(INPUT_GET, 'id');
$p1 = filter_input(INPUT_POST, 'p1');
$p2 = filter_input(INPUT_POST, 'p2');
$opcao =  filter_input(INPUT_POST, 'gender');
$id_cliente=1;


$html ='';
$cliente='';
/*
$html .='<table>';
$html =' <thead>';
$html .='<tr>';
$html .='<th>Codigo</th>';
$html .=' <th>Nome </th>';
$html .='</tr>';
$html .=' </thead>';

*/



if(empty($p1) ||  empty($p2)){

//SOMATORIO CONTA:

    $query ="select * from tb_cliente as c  inner join tb_estabelecimento as e inner join tb_estabelecimento_has_tb_cliente as ec on ec.tb_estabelecimento_id = e.id and ec.tb_cliente_id =c.id inner join tb_cliente_has_tb_compras_cliente as cc on cc.tb_cliente_id =c.id inner join tb_compras_cliente as ccli on ccli.id=cc.tb_compras_cliente_id where   e.id={$id_estabelecimento}";

        $result = mysqli_query($conexao,$query);
        //$dado=mysqli_fetch_array($result);
        $row = mysqli_num_rows($result);

        if($row == '' ){
       
        }else{

    while($res_1=mysqli_fetch_array($result)){
     
        $totalConta=$res_1["total"];

        $contaSomada= $contaSomada+$res_1["total"];

        $nome = $res_1["nome"];





}



}


echo $cliente;





 
       
       





//VALOR JÁ PAGO PELO CLIENTE



$devendo=0;




    $query ="select * from tb_cliente as c   inner join tb_estabelecimento as e  inner join tb_estabelecimento_has_tb_cliente as ec on ec.tb_estabelecimento_id = e.id and ec.tb_cliente_id =c.id and e.id=1 inner join tb_pagamento_cliente_has_tb_cliente as pc on pc.tb_cliente_id =c.id inner join tb_pagamento_cliente as pcc on pcc.id=pc.tb_pagamento_cliente_id ";

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




       }
echo $nome;

echo $contaSomada - $saldo;

     

 ?>