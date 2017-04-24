<!DOCTYPE html>
<html lang="fr">
   <head>
     <meta charset="utf-8">
     <title>Exo 5 PHP Les fonctions</title>
   </head>

   <body>


 <?php
$var1=128;
$var2=20;
function perso($var1, $var2){
  if ($var1 < $var2){
    echo "true";
  }
  else{
    echo "false";
  }
}
perso($var1, $var2);
  ?>


<?php


function perso2($var3){
 print $var3;
}
perso2(572828);
   ?>

   <!-- Faire une fonction qui prend en paramètre deux chaines de caractères et qui revoit la concaténation de ces deux chaines -->
      <?php

   function perso3($var5, $var6){
     print $var5 . $var6;
   }
   perso3("Robert", " jules");

       ?>

   <!-- Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :

   Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
   Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
   Les deux nombres sont identiques si les deux nombres sont égaux -->

       <?php



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
       perso4(30, 30);

      ?>

<!-- Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. -->

   <?php

        function perso5($var9 , $var10){
          print $var9 . $var10;
        }
        perso5("bonjour", 300);

         ?>

   <!-- Faire une fonction qui prend trois paramètres : nom, prenom et age. Elle doit renvoyer une chaine de la forme :
   "Bonjour" + nom + prenom + ",tu as" + age + "ans".-->

   <?php

   function human($nom, $prenom, $age)
   {
     echo "Bonjour $nom $prenom , tu as $age ans";
   }
   human("Jean", "momo", 30);
    ?>
    <!-- Faire une fonction qui prend deux paramètres : age et genre. Le paramètre genre peut prendre comme valeur :

        Homme
        Femme

    La fonction doit renvoyer en fonction des paramètres :

        Vous êtes un homme et vous êtes majeur
        Vous êtes un homme et vous êtes mineur
        Vous êtes une femme et vous êtes majeur
        Vous êtes une femme et vous êtes mineur

    Gérer tous les cas. -->

   <?php

  //  $age = 40;
  //  $male = "Homme";
  //  $female = "Femme";
   $genre=NULL;

   function perso9($age, $genre){
   if ($age >= 18 AND $genre == "homme" )
   {
   echo "Vous êtes un Homme et vous êtes majeur";
   }
   elseif ($age >=18 AND $genre == "femme" )
   {
   echo "Vous êtes une femme et vous êtes majeure";
   }
   elseif ($age <= 18 AND $genre == "homme")
   {
   echo "Vous êtes un homme et vous êtes mineur";
   }
   elseif ($age <= 18 AND $genre == "femme")
   {
   echo "Vous êtes une femme et vous êtes mineure";
   }
    }
    perso9(162, "homme");

     ?>

     <!-- Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
     Tous les paramètres doivent avoir une valeur par défaut. -->

    <?php
$number1=10;
$number2= 20;
$number3= 30;
function perso11($number1, $number2, $number3){
$result= ( $number1+ $number2+ $number3);
print $result;
}
perso11($number1, $number2, $number3);
      ?>

  </body>

</html>
