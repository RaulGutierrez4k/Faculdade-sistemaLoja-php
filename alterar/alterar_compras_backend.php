
<?php
error_reporting(0);
include "conexao.php";
$com_codigo1=$_POST['com_codigo'];
$tpg_codigo1=$_POST['tpg_codigo'];
$for_codigo1=$_POST['for_codigo'];
$nf_codigo1=$_POST['nf_codigo'];
$com_datacompra1=$_POST['com_datacompra'];
$com_valortotal1=$_POST['com_valortotal'];
$com_obsevacoes1=$_POST['com_obsevacoes'];


$alterar= mysql_query("UPDATE tb_compras
                      SET tpg_codigo='$tpg_codigo1',for_codigo='$for_codigo1',nf_codigo='$nf_codigo1',com_datacompra='$com_datacompra1'
					  ,com_valortotal='$com_valortotal1',com_obsevacoes='$com_obsevacoes1'
					  WHERE com_codigo='$com_codigo1'")
		  or die(mysql_error());
		  
mysql_close($db);
include "consulta_contareceber.php";
?>