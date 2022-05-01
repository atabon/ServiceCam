<?php
include_once '../includes/config.php';
if (isset($_POST['submit'])) {
    $ns=$_POST['nom'];
    $cath=$_POST['cathegorie'];
    $des=$_POST['description'];

    $ifo_fic=pathinfo($_FILES['image']['name']);
    $extension_fic=$ifo_fic['extension'];
    $extension_auto=array('jpg','png','gif','jpeg');
    if (in_array($extension_fic,$extension_auto)) {
        move_uploaded_file($_FILES['image']['tmp_name'],'uploads/'.basename($_FILES['image']['name']));
    }
    $req=$bdd->prepare('INSERT INTO services (nom,descriptions,cathegorie,images) VALUES 
    (:nom,:descrip,:cath,:images)');
    $req->execute(array(
           'nom'=>$ns,
           'descrip'=>$des,
           'cath'=>$cath,
           'images'=>'uploads/'.basename($_FILES['image']['name'])
    ));
    header("Location: index.php");
}else{
    echo "error";
}
?>