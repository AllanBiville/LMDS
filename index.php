<?php
include("php/header.php");
session_start();
?>
<div class="conteneur_sous_header">
        <img class="sous_header"></img>
        <div class="sous_header_texte">
        <img id="sous_header-logo_magasin" src="images/logo.png"/>
            <h1>Réparations téléphones, tablettes<br/> et vente d'accessoires</h1>
            <a href="devis.php">Demander un devis</a>
        </div>
    </div>
    
<main>
    <br/><br/><br/>
    <h1 class="titre_service_box">Notre Boutique</h1><br/><br/><br/><br/>
  <div class="global_service_box">
    <div class="service_box_colonne">
      <div class="service-box">
        <div class="service-box-icon">
        <i class="fas fa-question"></i>
        </div>
        <div class="service-box-titre">
          <h2>Info 1</h2>
        </div>
        <div class="service-box-contenu">
        Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla
        </div>
      </div>
    </div>
    <div class="service_box_colonne">
      <div class="service-box">
        <div class="service-box-icon">
        <i class="fas fa-question"></i>
        </div>
        <div class="service-box-titre">
          <h2>Info 2</h2>
        </div>
        <div class="service-box-contenu">
        Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla
        </div>
      </div>
    </div>
    <div class="service_box_colonne">
      <div class="service-box">
        <div class="service-box-icon">
        <i class="fas fa-question"></i>
        </div>
        <div class="service-box-titre">
          <h2>Info 3</h2>
        </div>
        <div class="service-box-contenu">
        Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla
        </div>
      </div>
    </div>
    <div class="service_box_colonne">
      <div class="service-box">
        <div class="service-box-icon">
        <i class="fas fa-question"></i>
        </div>
        <div class="service-box-titre">
          <h2>Info 4</h2>
        </div>
        <div class="service-box-contenu">
        Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla Bla bla bla  bla
        </div>
      </div>
    </div>
  </div>
</div>

<hr class="separateur-index">
    <h1 class="titre_phototheque">Photothèque</h1><br/><br/><br/><br/>

<div class="phototheque">
<div class="photos-mini">
<div class="miniature">
<input name="phototheque" type="radio" checked class="fen" id="lightbox-1" />
<label for="lightbox-1">
<img src="images/phototheque/1.jpg" alt>
</label>
<img class="fenetre" src="images/phototheque/1.jpg" alt>
<figcaption>La Maison du Smartphone</figcaption>
</div>
<div class="miniature">
<input name="phototheque" type="radio" class="fen" id="lightbox-2" />
<label for="lightbox-2">
<img src="images/phototheque/2.jpg" alt>
</label>
<img class="fenetre" src="images/phototheque/2.jpg" alt>
<figcaption>La Maison du Smartphone</figcaption>
</div>
<div class="miniature">
<input name="phototheque" type="radio" class="fen" id="lightbox-3" />
<label for="lightbox-3">
<img src="images/phototheque/3.jpg" alt>
</label>
<img class="fenetre" src="images/phototheque/3.jpg" alt>
<figcaption>La Maison du Smartphone</figcaption>
</div>
<div class="miniature">
<input name="phototheque" type="radio" class="fen" id="lightbox-4" />
<label for="lightbox-4">
<img src="images/phototheque/4.jpg" alt>
</label>
<img class="fenetre" src="images/phototheque/4.jpg" alt>
<figcaption>La Maison du Smartphone</figcaption>
</div>
<div class="miniature">
<input name="phototheque" type="radio" class="fen" id="lightbox-5" />
<label for="lightbox-5">
<img src="images/phototheque/5.jpg" alt>
</label>
<img class="fenetre" src="images/phototheque/5.jpg" alt>
<figcaption>La Maison du Smartphone</figcaption>
</div>
<div class="miniature">
<input name="phototheque" type="radio" class="fen" id="lightbox-6" />
<label for="lightbox-6">
<img src="images/phototheque/6.jpg" alt>	
</label>
<img class="fenetre" src="images/phototheque/6.jpg" alt>
<figcaption>La Maison du Smartphone</figcaption>
</div>
</div>
</div>

</main>
<?php
include("php/footer.php");
?>