<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario Textarea</title>
</head>
<body>
    <h2>Complete el contrato con los datos correspondientes</h2>
    <form action="procesar_textarea.php" method="post">
        <textarea name="contrato" rows="10" cols="50">
En la ciudad de [........], se acuerda entre la Empresa [..........],
representada por el Sr. [............] en su carácter de Apoderado,
con domicilio en la calle [.............] y el Sr. [.............],
futuro empleado con domicilio en [.............], celebrar el presente
contrato a Plazo Fijo, de acuerdo a la normativa vigente de los
artículos 90,92,93,94,95 y concordantes de la Ley de Contrato de Trabajo N° 20.744.
        </textarea><br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
