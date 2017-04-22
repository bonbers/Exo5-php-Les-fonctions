<!DOCTYPE html>
<html lang="fr">
   <head>
     <meta charset="utf-8">
     <title>Exo 5 PHP Les fonctions</title>
   </head>

   <body>

 <p><?php

function perso($var1, $var2){
  if ($var1 < $var2){
    echo "true";
  }
  else{
    echo "false";
  }
}
perso(15, 20);
  ?></p>

  <p><?php

// $var3= "Bonjour les apprentis codeurs !";
function perso2($var3){
 print $var3;
}
perso2 ("bonjour les apprentis codeurs !");
   ?></p>

   <p><?php

function perso3($var5, $var6){
  print $var5 . $var6;
}
perso3("bonjour les filles ". "bonjour les garçons");

    ?></p>

    <p><?php

    function perso4($var7, $var8){
      if ($var7 > $var8){
        print " 1er nombre plus grand";
      }
    elseif ($var7 == $var8) {
      print "deux nombre identique";
    } else {
      print "1er nombre plus petit";
        }
    }
    perso4(15, 25);

     ?></p>

     <p><?php
     $var9= "hello";
     $var10= 700;
     function perso5($var9 , $var10){
       print $var9 . $var10;
     }
     perso5($var9  .  $var10);

      ?></p>

<p><?php

$nom = "Arthur ";
$prenom= "Zebulon des bois ";
$age = 42;
function human($nom, $prenom, $age)
{
  echo "Bonjour " . $nom . $prenom . " , tu as" . $age . " ans";
}
human($nom . $prenom . $age);
 ?></p>


  </body>

</html>
