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
<form method="post" action="incluir_produtos_backend.php"><br>
<p>
Codigo:
<input type="text" name="pro_codigo" ><br>
<br>
Descrição:
<input type="text" name="pro_descricao"><br>
<br>

Tipo produto: <select size="1" name="tpp_codigo">
<?php
// gera lista de Tipos produto // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_tipoproduto");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select><br><br>

Preço custo:
<input type="text" name="pro_precocusto"><br>
<br>
Preço venda:
<input type="text" name="pro_precovenda"><br>
<br>
Estoque:
<input type="text" name="pro_estoque"><br>
<br>
Embalagem:
<input type="text" name="pro_embalagem"><br>
<br>
Ipi:
<input type="text" name="pro_ipi"><br>
<br>

<input class="botao" type="submit" name="Submit" value="Incluir">
</p>
</form>
</center>
<!--Fim Incluir-->