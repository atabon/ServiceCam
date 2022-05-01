<?php
try {
    $bdd=new PDO('mysql:host=localhost;dbname=bd_servicecam','root','');
} catch (Exeption $e) {
    die('Erreur lors de la connection'.$e->getMessage());
}
?>
<?php
if (isset($_POST['submit'])) {
   $nom=$_POST['nom'];
   $email=$_POST['email'];
   $mdp=$_POST['pass'];
   if (isset($_POST['rem'])) {
    $rem=1;
   }else{
       $rem=0;
   }
   $req=$bdd->prepare('INSERT INTO utilisateurs 
   (mdp_utilisateur,email_utilisateur ,nom,se_souvenir ) VALUES
   (:mdp,:email,:nom,:rem)');
   $req->execute(
       array(
       'mdp'=>$mdp,
       'email'=>$email,
       'nom'=>$nom,
       'rem'=>$rem)
   );
  $scr="<script> var a=confirm('Donnees bien transmit, retourner a l'accueil?');
    if (a==1) {
        window.hef='database.php';
    } else {
       alert('MErci de rester');
    }
    
   </script>";
   echo $scr;
}else{
    echo "oooooooooh";
}
?>