
<div class="flou"></div><!--- pour avoir un flou sur l'image------->

<div class="about-section" >
  <div class="contenu baniere">
      <h2>Service<span>cam</span></h2><br>
      <span class="text first-text">Un service pour:</span>
      <span class="text second-text"></span>
      <p><small  id="demo" style="color:rgb(202, 198, 198)"></samll></p>
   </div>
</div>

<h2 style="color: darkgrey;width:fit-content; border-bottom: 2px solid darkgrey; margin-left:30%; margin-top:10px;">Services les plus solicites</h2>
<p><strong class="sous-t">Chercher les Experts dans differents domaines en un clique</strong></p>
<p><small style="color: darkgray;margin: 30px;"><i class="fa fa-info-circle " style="font-size:20px"></i>Ici, vous trouverrez les experts dans differents domaines dont vous solicitez pour resoudre votre probleme</small></p>
<div class="filtre mar-filtre" id="tout">
  <div class="titre-filtre"><h3>Filtrer</h3></div>
  <div class="filtre-texte-ic"><i class="fas fa-money-bill-wave filtre-ic"></i><div class="f-t"><a href="index.php?donne=all#tout" onclick="loader()">Tous</a></div></div>
  <div class="filtre-texte-ic"><i class="fa  fa-list-alt filtre-ic"></i><div class="f-t">Autres</div></div>
  <div class="filtre-texte-ic"><i class="fas fa-pencil-ruler filtre-ic"></i><div class="f-t">Graphisme</div></div>
  <div class="filtre-texte-ic"><i class="fas fa-keyboard filtre-ic"></i><div class="f-t">Programmation</div></div>
</div>

<div class="row">
<?php 
$req=$bdd->query('SELECT * FROM services LIMIT 0 ,4');
     while ($donnees=$req->fetch()) {
?>
 <div class="row">
    <div class="column">
    <div class="card">
      <img src="<?php echo 'admin/'.$donnees['images'] ?>" alt="<?php echo $donnees['cathegorie'] ?>" 
style="width:100%" class="img-card">
      <div class="container">
        <h2><?php echo $donnees['nom'] ?></h2>
        <p><?php echo $donnees['descriptions'] ?></p>
      </div>
      <p><a href="users-profiles.php?domain=<?php echo $donnees['cathegorie'] ?>"><button class="button">Consulter</button></a></p>
    </div>
  </div>
  </div>
 <?php } $req->closeCursor(); ?>
</div>

<?php 
if (isset($_GET['donne'])=='all') {
  ?>
  <div class="row" >
  <?php 
  $req=$bdd->query('SELECT * FROM services LIMIT 4,5');
       while ($donnees=$req->fetch()) {
  ?>
   <div class="row">
     <div class="column" >
      <div class="card">
        <img src="<?php echo 'admin/'.$donnees['images'] ?>" alt="<?php echo $donnees['cathegorie'] ?>" 
  style="width:100%" class="img-card">
        <div class="container">
          <h2><?php echo $donnees['nom'] ?></h2>
          <p><?php echo $donnees['descriptions'] ?></p>
        </div>
        <p><a href="users-profiles.php?domain=<?php echo $donnees['cathegorie'] ?>"><button class="button">Consulter</button></a></p>
      </div>
    </div>
    </div>
   <?php } $req->closeCursor(); ?>
  </div>
<?php } ?>

<!--fin des services que offre le site---------------------->
<!--------------------debut cathegories demandes de services------------------->
<article>
<h2 style="color: darkgrey;width:fit-content; border-bottom: 2px solid darkgrey; margin-left:30%; margin-top:10px;">Nouvelles demandes par domaine</h2>
<p><strong class="sous-t">Gagner du boulot en un seul clique</strong></p>
<p><small style="color: darkgray;margin: 30px;font-size:16px"><i class="fa fa-tags "></i>Les demandes sont classees par:</small></p>
<p><small style="color: darkgray;margin:52px;font-size:12px;line-height:2"><i class="fa fa-circle"></i>Les plus proches de vous,</small><br>
<small style="color: darkgray;margin:52px;font-size:12px;line-height:2"><i class="fa fa-circle"></i>Ceux de votre domaine,</small><br>
<small style="color: darkgray;margin:52px;font-size:12px;line-height:2"><i class="fa fa-circle"></i>Les plus rantables.</small><br>
</p>
<div class="filtre mar-filtre">
  <div class="titre-filtre"><h3>Filtrer</h3></div>
  <div class="filtre-texte-ic"><i class="fas fa-money-bill-wave filtre-ic"></i><div class="f-t">Tous</div></div>
  <div class="filtre-texte-ic"><i class="fa  fa-list-alt filtre-ic"></i><div class="f-t">Autres</div></div>
  <div class="filtre-texte-ic"><i class="fas fa-pencil-ruler filtre-ic"></i><div class="f-t">Graphisme</div></div>
  <div class="filtre-texte-ic"><i class="fas fa-keyboard filtre-ic"></i><div class="f-t">Programmation</div></div>
</div>

<div class="row">
   <div class="column">
    <div class="card1">
      <div class="card-head">
      <img src="images/1.jpg" alt="" class="rounded"><span class="mt-text">Gean leonel</span>
      <p class="text-card">Besoin d'un Web designer.</p>
      </div>
      <div class="card-body">
        <img src="images/services_images/12.jpg" >
       <p><div class="ic-bg"><i class="fa fa-comment-dots mb-text"></i>23k<div></p>
       </div>
    </div>
  </div>
 </div>
</div> 
</article>
<section>
  <h2>Nos guides pour toute creation</h2>
<div class="row">
  <div class="column">
    <div class="card1">
      <img src="images/1.jpg" alt="" style="width:100%" class="img-card">
      <div class="container">
        <h2>Day agating</h2>
      </div>
      <p>Je suis tres fiere d'avoir aussi vite decouvrir ce site car grace a lui
          je peux maintenant avoir de quoi manger.
      </p>
    </div>
  </div>
  
  </div>
</section>