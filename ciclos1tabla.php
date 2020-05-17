<!DOCTYPE html>
<html>
<head>
    <meta> charset="utf-8">
    <title>Ciclos</title>
</head>
<body>
<h1>Ciclos</h1>
<table border="1">
    <tr>
        <th>Numero</th>
        <th>Mensaje</th>
    </tr>
    <?php for ($i = 0; $i<10; $i++){?>
    <tr>
        <th><?php echo $i?></th>
        <th>Hola!</th>
    </tr>
    <?php
    }?>
</table>
</body>


</html>