<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initialscale=1.0">
 <link rel="stylesheet" href="style.css">
 <title>CÁLCULO DEL ÁREA DEL Octagono Regular</title>
</head>
<body>
 
<div class="contenedor">
    <h2> CÁLCULO DEL AREA </h1>
    <h2> DE UN</h2>
    <h2> OCTAGONO REGULAR</h2>
 
    <img src="1200px-08-L_Octógono.svg.PNG" width="200px">
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

    <label class="Label23" for="Lado">Ingrese el valor de un lado del <br> Octagolo Regular que desea calcular  </label>
   

    <input class="placeholder"type="number" placeholder="Lado" name="Lado" id="Lado" min="1" ><br>

    
    <?php if(!empty($errores)): ?>
      <div class="alert error">
         <?php echo $errores; ?>
    </div>
    <?php elseif($enviado): ?>
       <div class="alert success">
         <p class="Label23" >Calculando...</p>
         <label class="Label23" for="">El valor del area es = <?php echo $enviado; ?> cm2 </label>
         
       </div>
    <?php endif ?>
    <br> 
    
    <input type="submit" name="submit" value="Calcular">
 </form>
 </div>
</body>
</html>
