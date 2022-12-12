<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
  	El lolillo los tios
    Manuel Alfonso Asuero Guerrero
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="estios.css">
  <style>
 /* img{
    width:400px;
    height:200px;
  }*/
  body {
    
    background-image:url('indice.jpg');
    background-repeat:repeat;
    
  }
  <?php
    require_once("funciones.php");
  ?>
</style>
</head>

<body>
    <?php
        $campeones=["Aatrox","Ahri","Akali","Akshan","Alistar","Amumu","Anivia","Annie","Aphelios","Ashe","Asol","Azir","Bard","Blitz","Brand","Braum",
    "Caitlyn","Camille","Cassio","cho","Corki","Darius","Diana","DrMundo","Ekko","Elise","Evelyn","Ezreal","Fiddle","Fiora","Fizz","Galio","Gangplank","Garen","Gnar","Gragas","Graves"
,"Gwen","Hecarim","Heimer","Illaoi","Irelia","Ivern","Janna","Jarvan","JAx","Jayce","Jhin","Jinx","Kaisa",
"Kalista","Karma","Karthus","Kassadin","Katarina","Kayle","Kayn","Kennen","Khazix","Kindred","Kled","Kogmaw","Leblanc","LeeSin","Leona","Lillia","Lissandra","Lucian","Lulu","Lux","Malphite","Malzahar","Maokai","MasterYi",
"MissFortune","Mordekaiser","Morgana","Nami","Nasus","Nautilus","Neeko","Nidalee","Nocturne","Nunu","Olaf","Orianna","Ornn","Pantheon",
"Quinn","Rakan","Rammus","RekSai","Rell","Renata_Glasc","Renekton","Rengar","Riven","Rumble","Ryze","Samira","Sejuani","Senna",
"Seraphine","Sett","Shaco","Shen","Shyvana","Singed","Sion","Sivir","Skarner","Sona","Soraka","Swain","Sylas","Syndra",
"TK","Taliyah","Talon","Taric","Teemo","Thresh","Tristana","Trundle","Tryndamere","TF","Twitch","Udyr","Urgot","Varus","Vayne","Veigar","VelKoz","Vi","Viego","Viktor","Vlad",
"Volibear","Warwick","Wukong","Xayah","Xerath","XinZhao","Yasuo","Yone","Yorick","Yuumi","Zac","Zed","Zeri","Ziggs","Zilean","Zoe","Zyra","velve","kasante"];
        
        $jugadores=obtenerValorCampo("jugadores");
        if($jugadores==""){
          echo "<div class='form'>";
          echo "<img src='malphi.webp' alt='malphi' width='800' height='600'  align='middle'/>";
          echo "<h1>Hijo de la grandisima puta elige un número</h1>";
          echo "</div>";
        }
        else{
          $jugadores=$jugadores*3;
        

          echo "<h1>Equipo 1</h1>";
          for($i=0;$i<$jugadores;$i++){
              $clave=array_rand($campeones);
              $foto=$campeones[$clave];
              unset($campeones[$clave]);
              
              echo "<img src='champs/$foto.png' alt='$foto' width='400' height='200'/>";
              
          }

          echo "<h1>Equipo 2</h1>";
          for($i=0;$i<$jugadores;$i++){
              $clave=array_rand($campeones);
              $foto=$campeones[$clave];
              unset($campeones[$clave]);
              
              echo "<img src='champs/$foto.png' alt='$foto' width='400' height='200'/>";
              
              
          }
        
       }
       
    ?>
    <h2 class='form'><a href="form.php">Elegir número de jugadores.</a></h2>
    
        
</body>
</html>