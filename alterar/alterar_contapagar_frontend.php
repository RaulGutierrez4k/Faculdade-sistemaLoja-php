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
<form method="post" action="alterar_contapagar_backend.php">

<br> <p> Codigo: </p> <select size="1" name="cp_codigo">
<?php
// gera lista de codigo // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_contapagar");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select><br>

<br><br> <p> Valor.: </p>  
<input type="text" name="cp_valorconta">
<br><br> <p> Data vencimento.: </p>  
<input type="text" name="cp_datavencimento">
<br><br> <p> Data pagamento.: </p>
<input type="text" name="cp_datapagamento">

<br><br> <p> Codigo nota fiscal: </p> <select size="1" name="nf_codigo">

<?php
// gera lista de codigo // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_notafiscal");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select>

<br><br> <p> Observações.: </p>  
<input type="text" name="cp_observacoes">
<br><br>

<input class="botao" type="submit" name="Submit" value="Alterar">
</form>
</center>