<?php
    if(isset($_POST['operacion'])){
         $num1 = $_POST["num1"];
         $num2 = $_POST["num2"];
         $op = $_POST['operacion'];
/*Comprobación que si manda los num y operación
         var_dump($_POST);
*/
        if(!empty($num1) && !empty($num2) && !empty($op)){//comprobamos que numeros y variables no vengan vacíos
             if(is_numeric($num1) && is_numeric($num2)){//Comprobamos que nos estén enviando números
                if($op == "+"){
                  //Es una suma
                  $resultado = $num1 + $num2;
               }else if($op == "-"){
                  $resultado = $num1 - $num2;
               }else if($op == "*"){
                  $resultado = $num1 * $num2;
               }else if($op == "/"){
                  $resultado = $num1 / $num2;
               }else{
                  $resultado = "Esa no es una operación válida";
               }             
             }else{//Is numeric?
             $resultado = "Esos no son números";
             }    
          }else{
              $resultado = "Debes de teclear los números";
          }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="estilos.css">

     <title>Calculadora</title>
</head>
<body>
  <div class="container">
    <div class="calc">
        <h2>Calculadora</h2>
          <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
             Digita el primer número
             <input type="number" name="num1" value="<?php if(isset($_POST['num1'])){echo $_POST['num1'];}?>">
             Digita el segundo número
             <input type="number" name="num2" value="<?php if(isset($_POST['num2'])){echo $_POST['num2'];}?>">
             <div class="op">
                 <input type="submit" name="operacion" value="+">
             </div>         
             <div class="op">
                 <input type="submit" name="operacion" value="-">
             </div>  
             <div class="op">
                 <input type="submit" name="operacion" value="*">
             </div>  
             <div class="op">
                 <input type="submit" name="operacion" value="/">
             </div>
             <h3 class="resultado"></h3>
                 <?php
                 if(isset($resultado)){
                      echo $resultado;
                 }
               
                 ?>
          </form>        
     </div>    
</div>
</body>
</html>