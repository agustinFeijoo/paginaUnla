<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h2{
            text-align:center;
        }
        table{
            width:50%;
            margin:auto;
            border 2px solid rgb(122,122,0);
            padding:5px;
            background-color:rgb(152,22,194);
        }
        td{
            padding:5px;
        }
        

    
    </style>
</head>
<body>
    <h2>Nueva entrada</h2>
<form action="../handler/Transacciones.php" method="POST" enctype="multipart/form-data" name="form1">
<table>
<tr>
<td>Título:
<label for="campoTitulo"></label>
</td>
<td><input type="text" name="campoTitulo" id="campoTitulo"></td>
</tr>
<tr><td>Comentarios:
<label for="areaComentarios"></label></td>
<td><textarea name="areaComentarios" id="areaComentarios" cols="30" rows="10"></textarea></td>
</tr>
<input type="hidden" name="MAX_TAM" value="2097152">
<tr>
<td colspan="2" align="center">Selecciona una imagen con tamaño menor a 2 MB</td>
</tr>
<tr>
<td colspan="2" align="left"><input type="file" name="imagen" id="imagen"></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="enviar" id="enviar" value="Enviar"></td></tr>
<tr><td colspan="2" align="center"><a href="MostrarBlog.php">Visualizar blog</a></td></tr>

</table>
</form>
</body>
</html>