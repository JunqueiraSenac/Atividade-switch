<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>tabuada</title>
</head>

<body>
<div>
<form method="post">
<label for="num">Qual a tabuada que voce quer ver? :</label>
<input type="text" name="num">
<br>
<button type="submit">Enviar</button>
</form>
</div>
<?php
if ($_POST) {
  $num = $_POST['num'];



switch ($num) {

 case 1:
    echo "Voce ta na tabuada do ". $num;
    echo"<br>";   

    for ($i = 1; $i <= 10; $i++){
        echo $num . "X" . $i ." = ". $num * $i;
        echo'<br>';
    }
break;

case 2:
    echo "Voce ta na tabuada do ". $num;
    echo"<br>";   
    for ($i = 1; $i <= 10; $i++) {
        echo $num . "X" . $i ." = ". $num * $i;
        echo'<br>';
       }
break;

case 3:
    echo "Voce ta na tabuada do ". $num;
    echo"<br>";   
    for ($i = 1; $i <= 10; $i++) {
        echo $num . "X" . $i ." = ". $num * $i;
        echo'<br>';
       }
break;

case 4:
    echo "Voce ta na tabuada do ". $num;
    echo"<br>";   
    for ($i = 1; $i <= 10; $i++) {
        echo $num . "X" . $i ." = ". $num * $i;
        echo'<br>';
       }
break;

case 5:
    echo "Voce ta na tabuada do ". $num;
    echo"<br>";   
    for ($i = 1; $i <= 10; $i++) {
        echo $num . "X" . $i ." = ". $num * $i;
        echo'<br>';
       }
break;

case 6:
    echo "Voce ta na tabuada do ". $num;
    echo"<br>";   
    for ($i = 1; $i <= 10; $i++) {
        echo $num . "X" . $i ." = ". $num * $i;
        echo'<br>';
       }
break;

case 7:
    echo "Voce ta na tabuada do ". $num;
    echo"<br>";   
    for ($i = 1; $i <= 10; $i++) {
        echo $num . "X" . $i ." = ". $num * $i;
        echo'<br>';
       }
break;

case 8:
    echo "Voce ta na tabuada do ". $num;
    echo"<br>";   
    for ($i = 1; $i <= 10; $i++) {
        echo $num . "X" . $i ." = ". $num * $i;
        echo'<br>';
       }
break;

case 9:
    echo "Voce ta na tabuada do ". $num;
    echo"<br>";   
    for ($i = 1; $i <= 10; $i++) {
        echo $num . "X" . $i ." = ". $num * $i;
        echo'<br>';
       }
break;

default:
echo"Somente tabuada do 1 ao 9";
break;

}
}

?>
</body>