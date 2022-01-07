<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
<body style='background-image:url(fondo/wallpaper.jpg);background-attachment:fixed;background-repeat:no-repeat;background-position:50% 50%;'>
     
    <center><strong><h1>Proyecto Emily Lozada Base de Datos</h1></strong></center>
    <p>
        <form action="valida_foto.php" method="POST" enctype="multipart/form-data">
            <center><table border="1">
            <tr bgcolor="skyblue">        
                <td><strong>Nombre:</strong></td><td> <input type="text" name="txtnom" value=""></td>
            </tr>
            <tr bgcolor="skyblue">
            <td bgcolor="skyblue"><strong>Foto:</strong></td>  <td><input type="file" name="foto" id="foto"></td>
            </tr>
            <tr>
            <td colspan="2" align="center" bgcolor="skyblue"><input type="submit" name="enviar" value="Enviar"></td>
            </tr>
            </center></table>
        </form>    
        
        <br><br>
        <?php
        require_once 'conexion.php';
        $res = $mysqli->query("SELECT * FROM foto");
        while($f = $res->fetch_object()){
            echo $f->nombre.' <br/>';
            echo '<img src="'.$f->foto.'" width="100" heigth="100"><br>';
        }
        ?>
    </body>
</html>
