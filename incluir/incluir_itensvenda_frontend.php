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

<!--Início Incluir-->
<link rel="stylesheet" type="text/css" href="formatarpadrao.css" />

<center>
<form method="post" action="incluir_itensvenda_backend.php"><br>
<p>
Codigo:
<input type="text" name="itensvenda_codigo"><br>
<br>

Codigo venda: <select size="1" name="ven_codigo">
<?php
// gera lista compra // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_vendas");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];	
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select><br><br>

Produto: <select size="1" name="pro_codigo">
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

Tipo produto: <select size="1" name="tpp_codigo">
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

Codigo da Nota: <select size="1" name="nf_codigo">
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

Tipo pagamento: <select size="1" name="tpg_codigo">
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

Funcionario: <select size="1" name="fun_codigo">
<?php
// gera lista de Fornecedor // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_funcionario");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select><br><br>


Embalagem:
<input type="text" name="itv_embalagem"><br>
<br>
Quantidade:
<input type="text" name="itv_qtde"><br>
<br>
Valor unitario:
<input type="text" name="itv_valorun"><br>
<br>
Desconto:
<input type="text" name="itv_desc"><br>
<br>
Valor total:
<input type="text" name="itv_valortotal"><br>
<br>

<input class="botao" type="submit" name="Submit" value="Incluir">
</p>
</form>
</center>
<!--Fim Incluir-->