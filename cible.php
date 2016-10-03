<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Formulaire</title>
 </head>

 <body>


<?php

if (empty($_POST['nom']) && empty($_POST['prenom'])) {
       echo "il faut indiquer votre nom et prénom";
     }
     elseif(empty($_POST['nom'])) {
     echo 'Le champs nom n\'est pas indiqué';
   }
   elseif (empty($_POST['prenom'])) {
     echo "le champs prénom n'est pas indiqué";
   }
   elseif (empty($_POST['sexe'])) {
     echo "le champs sexe n'est pas indiqué";
   }
   elseif (empty($_POST["sport"]) && empty($_POST["lecture"]) && empty($_POST["cinema"])) {
     echo "aucune case loisirs cocher";
   }
   elseif (!ctype_alpha($_POST['nom']) || !ctype_alpha($_POST['prenom'])) {
     echo "veuillez ne pas mettre de chiffre dans votre nom ou prénom tu n'es pas un robot couillon";
   }
   else {
     echo htmlspecialchars("Bonjour"." ".$_POST["prenom"]." ".$_POST["nom"]." "."tu as"." ".$_POST["age"]." "."ans"." "."je vois que tu es de sexe"." ".$_POST["sexe"]." "."et que tu aimes"." ".$_POST["sport"]." ".$_POST["lecture"]." ".$_POST["cinema"]." "."et maintenant que tu habite dans la ville de"." ".$_POST["ville"]);
   }
   if (isset($_FILES['monfichier']) AND $_FILES['monfichier']['error'] == 0)
{
  if ($_FILES['monfichier']['size'] <= 1000000)
       {
echo mime_content_type('formulaire.php');
       }

}



?>

   <a href="formulaire.php"> Retour a l'index</a>
 </body>
</html>
