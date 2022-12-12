<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estios.css">
  <style>
    div 
    {
     margin-bottom: 1em;
    }
    body {
    
    background-image:url('indice.jpg');
    background-repeat:repeat;
    
  }
  </style>
</head>
<body>
    <h1 class="form">El Lolilo Randomizer</h1>
    <form class="form" action="lolillo.php" method="post" enctype="multipart/form-data">
      
      <div>
        
          <select name="jugadores">
            <option value="">Numero de jugadores:</option>
            
        
            <?php
              for($i=5;$i>=1;$i--){
                echo "<option value='$i'>$i</option>";
              }
            ?>
          </select>
        </p>
        <div>
        <input type="submit" name="enviar" value="Randomizar"/>
        <input type="reset" value="Borrar">
      </div>
     
    </form>
    <footer>
        
    </footer>
</body>
</html>