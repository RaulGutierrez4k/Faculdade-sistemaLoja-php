<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<style>
.A:link {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#FFFFFF;
}
.A:visited { TEXT-DECORATION: none; font-family:Verdana; color:#333333}
.A:hover {
	TEXT-DECORATION: none;
	font-family:Verdana;
	color:#0088FF;
}
</style>
</head>

<body>
<table width="98%" border="0" cellspacing="0" cellpadding="0">
  <tr align="left" valign="top"> 
    <td colspan="3"><span> </span> </td>
  </tr>
  <tr align="left" valign="top"> 
    <td height="28"></td>
    <td height="28">&nbsp;</td>
    <td height="28" align="right"></td>
  </tr>
  <tr> 
    <td width="3%"></td>
    <td width="94%" align="left" valign="top"><div id="build-menu"></div></td>
    <td width="3%" align="right"></td>
  </tr>
  <tr> 
    <td colspan="3">&nbsp;</td>
  </tr>
</table>
<script src="teste2.js"></script>
</body>
</html>

<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />
<?php
error_reporting(0);
include "conexao.php";
$result = mysql_query("select * from tb_itenscompra", $db);
echo "<center><table border='1'>
<tr>
	<td><h1>Codigo</h1></td>
	<td><h1>Codigo compra</h1></td>
	<td><h1>Codigo produto</h1></td>
	<td><h1>Codigo tipo produto</h1></td>
	<td><h1>Codigo nota fiscal</h1></td>
	<td><h1>Codigo fornecedor</h1></td>
	<td><h1>Codigo tipo pagamento</h1></td>
	<td><h1>Embalagem</h1></td>
	<td><h1>Quantidade</h1></td>
	<td><h1>Valor unitario</h1></td>
	<td><h1>Desconto</h1></td>
	<td><h1>Valor total</h1></td>
</tr>";
// Escreve resultado até que não haja mais linhas na tabela
while($row = mysql_fetch_array($result)) {
echo "<tr><td>".$row["itenscompra_codigo"]."</td>
          <td>".$row["com_codigo"]."</td>
		  <td>".$row["pro_codigo"]."</td>
		  <td>".$row["tpp_codigo"]."</td>
		  <td>".$row["nf_codigo"]."</td>
		  <td>".$row["for_codigo"]."</td>
		  <td>".$row["tpg_codigo"]."</td>
		  <td>".$row["itc_embalagem"]."</td>
		  <td>".$row["itc_qtde"]."</td>
		  <td>".$row["itc_valorun"]."</td>
		  <td>".$row["itc_desc"]."</td>
		  <td>".$row["itc_valortotal"]."</td>
	  </tr><br>";
	}
	echo "</table></center>";
	echo "<br />";
mysql_free_result($result);
mysql_close ($db);
?>
<!--Fim Consulta-->