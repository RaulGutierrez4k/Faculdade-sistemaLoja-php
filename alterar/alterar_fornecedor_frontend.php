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
<form method="post" action="alterar_fornecedor_backend.php">

<br> <p> Codigo:</p> <select size="1" name="for_codigo">
<?php
// gera lista de codigo // fazer a conexão
include "conexao.php";
$res = mysql_query ("select * from tb_fornecedor");
while ($registro = mysql_fetch_row ($res))
{
$cod=$registro[0];
echo "<option value=\"$cod\">$cod<option>";
}
?>
</select><br>

<p>Nome:</p>
<input type="text" name="for_nome"><br>
<br>
<p>Endereço:</p>
<input type="text" name="for_endereco"><br>
<br>
<p>Numero:</p>
<input type="text" name="for_numero"><br>
<br>
<p>Bairro:</p>
<input type="text" name="for_bairro"><br>
<br>
<p>Cidade:</p>
<input type="text" name="for_cidade"><br>
<br>
<p>UF:</p>
<input type="text" name="for_uf"><br>
<br>
<p>CNPJ / CPF:</p>
<input type="text" name="for_cnpjcpf"><br>
<br>
<p>RG:</p>
<input type="text" name="for_rgie"><br>
<br>
<p>Telefone:</p>
<input type="text" name="for_telefone"><br>
<br>
<p>Fax:</p>
<input type="text" name="for_fax"><br>
<br>
<p>Celular:</p>
<input type="text" name="for_celular"><br>
<br>
<p>E-mail: </p>
<input type="text" name="for_email"><br>
<br>


<input class="botao" type="submit" name="Submit" value="Alterar">
</form>
</center>