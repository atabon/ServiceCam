<?php session_start(); ?>
<?php
try {
    $bdd=new PDO('mysql:host=localhost;dbname=bd_servicecam','root','');
} catch (Exeption $e) {
    die('Erreur lors de la connection'.$e->getMessage());
}
?>