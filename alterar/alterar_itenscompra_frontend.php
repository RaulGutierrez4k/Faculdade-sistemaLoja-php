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

<!-- Inicio Alterar -->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />

<center>
<form method="post" action="alterar_itenscompra_backend.php">

<br> <p>Codigo:</p> <select size="1" name="itenscompra_codigo">
<?php
// gera lista de codigo // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_itenscompra");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select><br><br>

<p>Codigo compra:</p> <select size="1" name="com_codigo">
<?php
// gera lista compra // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_compras");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];	
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select><br><br>

<p>Produto:</p> <select size="1" name="pro_codigo">
<?php
// gera lista de produtos // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_produtos");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select><br><br>

<p>Tipo produto:</p> <select size="1" name="tpp_codigo">
<?php
// gera lista de tipo produto // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_tipoproduto");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select><br><br>

<p>Codigo da Nota:</p> <select size="1" name="nf_codigo">
<?php
// gera lista de Notas // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_notafiscal");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select><br><br>

<p>Fornecedor:</p> <select size="1" name="for_codigo">
<?php
// gera lista de Fornecedor // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_fornecedor");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select><br><br>

<p>Tipo pagamento:</p> <select size="1" name="tpg_codigo">
<?php
// gera lista de Notas // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_tipopagto");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select><br><br>

<p>Embalagem:</p>
<input type="text" name="itc_embalagem"><br>
<br>
<p>Quantidade:</p>
<input type="text" name="itc_qtde"><br>
<br>
<p>Valor unitario:</p>
<input type="text" name="itc_valorun"><br>
<br>
<p>Desconto:</p>
<input type="text" name="itc_desc"><br>
<br>
<p>Valor total:</p>
<input type="text" name="itc_valortotal"><br>
<br>

<input class="botao" type="submit" name="Submit" value="Alterar">
</form>
</center>