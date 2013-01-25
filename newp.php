<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>DATOS</title>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript">
/*var x=$document;
x.ready(inicio);
function inicio(){
var x;
x=$("#guardar");
x.click(guardar);
}
function guardar(){

}*/

$(document).ready(function(){

$('#registro').submit(function(){


$.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function() 
			{alert('Datos guardados correctamente');
			$('#id_select').append('<option>'+$('#id').val()+'</option>');}
}); 




return false;
});

$('#id_select').change(function(){
alert($('#id_select :selected').text());
});
});

</script>
</head>
<body>
<?php
require_once("cx.php"); 
$opc="";
$id=mysql_query("select id from datos order by id;");
echo '<select id="id_select">';
while($list=mysql_fetch_row($id)){
$opc=$opc."<option>".$list[0]."</option>";
}
echo $opc;
echo "</select>";
?>
</br>
<form id="registro" action="guardar.php" method="POST">
<label for="nombre">NOMBRE:  </label><input type="text" name="nombre" method="post" id="nombre" required>
<label for="id">ID:       </label><input type="text" name="id" id="id" required>
<label for="descri">DESCRIPCIÒN:      </label><input type="text" name="descri" id="descri" required></br>
<input type="submit" value="Guardar" id="guardar">
</form>
</body>
</html>