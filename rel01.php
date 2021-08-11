<?php 

include'pdf/mpdf.php';
include('conexao.php');
include('verifica_login.php');

$id_estabelecimento=$_SESSION['id_user'];
$id_cliente = filter_input(INPUT_POST, 'codigo');
$p1 = filter_input(INPUT_POST, 'p1');
$p2 = filter_input(INPUT_POST, 'p2');
$opcao =  filter_input(INPUT_POST, 'gender');


////echo ($p1);
//echo($id_cliente);
//exit();

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

if($opcao =="conta"){

if(empty($p1) ||  empty($p2)){

$query ="select * from tb_cliente inner join tb_estabelecimento inner join tb_estabelecimento_has_tb_cliente on  tb_estabelecimento_id = '$id_estabelecimento' and tb_cliente_id =tb_cliente.id  inner join tb_cliente_has_tb_compras_cliente on tb_cliente_has_tb_compras_cliente.tb_cliente_id = tb_cliente.id  inner join tb_compras_cliente on tb_compras_cliente.id = tb_cliente_has_tb_compras_cliente.tb_compras_cliente_id where tb_cliente.id = '$id_cliente'  order by registro desc;";

        $result = mysqli_query($conexao,$query);
       
       while($row =mysqli_fetch_assoc($result)){
       		$cliente=$row ['nome'];

       		$html .= "COMPRA : ";
			$html .=  date('d/m/Y', strtotime($row['data']))." - ";
			$html .= $row ['descricao']." - ";
			$html .= "R$ ".$row ['total']." <br> ";
			

       }

       $html .= '<tbody>';

$html.='</table> ';










}else{


$query ="select   * from tb_cliente  inner join tb_estabelecimento inner join tb_estabelecimento_has_tb_cliente on  tb_estabelecimento_id = '$id_estabelecimento' and tb_cliente_id =tb_cliente.id  inner join tb_cliente_has_tb_compras_cliente on tb_cliente_has_tb_compras_cliente.tb_cliente_id = tb_cliente.id  inner join tb_compras_cliente on tb_compras_cliente.id = tb_cliente_has_tb_compras_cliente.tb_compras_cliente_id where tb_cliente.id ='$id_cliente' and registro BETWEEN ('$p1') AND ('$p2')  and tb_estabelecimento.id='$id_estabelecimento' order by registro desc;";

        $result = mysqli_query($conexao,$query);
       
       while($row =mysqli_fetch_assoc($result)){
       		$cliente=$row ['nome'];

       		$html .= "COMPRA : ";
			$html .=  date('d/m/Y', strtotime($row['data']))." - ";
			$html .= $row ['descricao']." - ";
			$html .= "R$ ".$row ['total']." <br> ";
			

       }

       $html .= '<tbody>';

$html.='</table> ';




}






}else if($opcao =="pagamento"){




if(empty($p1) ||  empty($p2)){

$query ="select * from tb_cliente inner join tb_estabelecimento inner join tb_estabelecimento_has_tb_cliente on  tb_estabelecimento_id = '$id_estabelecimento' and tb_cliente_id =tb_cliente.id inner join tb_pagamento_cliente_has_tb_cliente on tb_pagamento_cliente_has_tb_cliente.tb_cliente_id = tb_cliente.id  inner join tb_pagamento_cliente on tb_pagamento_cliente.id=tb_pagamento_cliente_has_tb_cliente.tb_pagamento_cliente_id where tb_cliente.id ='$id_cliente'  and tb_estabelecimento.id='$id_estabelecimento' order by resgistro desc;";

        $result = mysqli_query($conexao,$query);
       
       while($row =mysqli_fetch_assoc($result)){
       		$cliente=$row ['nome'];

       		$html .= "PAGAMENTO : ";
			$html .=  date('d/m/Y', strtotime($row['data']))." - ";
			$html .= $row ['observacao']." - ";
			$html .= "Valor total  R$ ".$row ['valor_pago']." - ";
			$html .= "Desconto ".$row ['desconto']."%"." - ";
			$html .= "Valor Final R$".$row ['valor_final']." - ";
		    $paguei = $row ['valor_final']-$row ['ficouDevendo'];
			$html .= "Pago R$".$paguei." - ";

			$html .= "Devendo R$".$row ['ficouDevendo'].". <br> ";
			$html .="-------------------------------------------------------------------------------------------------- <br>";
		 

       }

       $html .= '<tbody>';

$html.='</table> ';










}else{


$query ="select * from tb_cliente inner join tb_estabelecimento inner join tb_estabelecimento_has_tb_cliente on  tb_estabelecimento_id = '$id_estabelecimento' and tb_cliente_id =tb_cliente.id inner join tb_pagamento_cliente_has_tb_cliente on tb_pagamento_cliente_has_tb_cliente.tb_cliente_id = tb_cliente.id  inner join tb_pagamento_cliente on tb_pagamento_cliente.id=tb_pagamento_cliente_has_tb_cliente.tb_pagamento_cliente_id where tb_cliente.id ='$id_cliente' and resgistro BETWEEN ('$p1') AND ('$p2') and tb_estabelecimento.id='$id_estabelecimento' order by resgistro desc;";

        $result = mysqli_query($conexao,$query);
       
       while($row =mysqli_fetch_assoc($result)){
       		$cliente=$row ['nome'];

       		$html .= "PAGAMENTO : ";
			$html .=  date('d/m/Y', strtotime($row['data']))." - ";
			$html .= $row ['observacao']." - ";
			$html .= "Valor total  R$ ".$row ['valor_final']." - ";
			$html .= "Desconto ".$row ['desconto']."%"." - ";
			$html .= "Pago R$".$row ['valor_pago']." - ";
			$html .= "Devendo R$".$row ['ficouDevendo']." - ";
			$html .= "Valor total  R$ ".$row ['valor_final']." <br> ";
			

       }

       $html .= '<tbody>';

$html.='</table> ';




}








}else{


#movimentacao



#falta adicionar estabelecimento  (inner join)
$query =" select * from  tb_movimentacao inner join tb_cliente on tb_cliente.id = tb_movimentacao.tb_cliente_id WHERE  tb_cliente_id ='$id_cliente' and data_movimentacao
 BETWEEN ('$p1') AND ('$p2') order by data_movimentacao desc;";

#echo $query;

#exit();
        $result = mysqli_query($conexao,$query);
       
       while($row =mysqli_fetch_assoc($result)){
       		$cliente=$row ['nome'];

       		$html .= "MOVIMENTAÇÃO : ";
			$html .=  date('d/m/Y', strtotime($row['data_movimentacao']))." - ";
			$html .= $row ['tipo_movimentacao']." - ";
			$html .= "Valor total  R$ ".$row ['valorFinal_movimentado']." - ";
			$html .= "Desconto ".$row ['valor_desconto']."%"."  <br>  ";
			

		
			$html .="-------------------------------------------------------------------------------------------------- <br>";
		 

       }

       $html .= '<tbody>';

$html.='</table> ';






#echo 'todos';

#exit();

}




$pagina ="	<html>
	
				<body>
				 	
				 	 <h1>Extrato - Cliente: ".$cliente."</h1>

		

				 	".$html."<br>
				 	<h4>http://www.mwu-fiado.com</h4>

				</body>
		</html>";


	//nome do arquino
		$arquivo="Relatorio_01-Extrato_de_Cliente.pdf";



//$mpdf = new \Mpdf\Mpdf();
		$mpdf= new mPDF();

//$stylesheet = file_get_contents('style.css');
//$mpdf->WriteHTML($stylesheet, \Mpdf\HTMLParserMode::HEADER_CSS);

$mpdf->WriteHTML($pagina, 'pdf\Mpdf\HTMLParserMode::HTML_BODY');

$mpdf->Output($arquivo,'I');


		//$mpdf= new mPDF();
		
		//$mpdf= WriteHTML($pagina);

		//$mpdf->Outout($arquivo,'I');


 ?>