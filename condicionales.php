<!DOCTYPLE html>
<html>
<head>
<meta charset="uth-8">
<title>Prueba condicionales</title>
</head>
<body>
    <?php

        $a = 5;
        $b = 4;
        $c = 6;

        if($a < $b){
        ?>
            <h1> La variable a es menor que b</h1>
        <?php

        }elseif($a < $c){
        ?>
            <h1>La variable a es menor que c</h1>
        <?php
        }else{
        ?>
        <h1>La variable a es mayor que b y c </h1>
        <?php
        }?>
</body>
</html>