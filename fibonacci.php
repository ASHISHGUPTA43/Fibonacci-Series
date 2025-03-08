<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <form method="post">
            Enter the number:
            <input type="text" name="number">
            <input type="submit" value="Get Fibonacci number">
        </form>
    </center>
</body>
</html>
<?php
if($_POST){
    $n=$_POST["number"];
    $a=0;
    $b=1;
    $c=$a+$b;
    echo $a;
    echo $b;
    for($i=3;$i<=$n;$i++){
        echo $c;
        $a=$b;
        $b=$c;
        $c=$a+$b;
    }

}
?>