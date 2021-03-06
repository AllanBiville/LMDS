<?php
include("php/header.php");
?> 
<main>
<div class="page-contact">
  <div class="page-contact-item-gauche">
    <h1> Contact par mail </h1>
    <form class="form-contact">
      <fieldset>
          <input type="text"  placeholder="Nom"     name="nom"     required></input>
          <input type="text"  placeholder="Prénom"  name="prenom"  required></input>
          <input type="text"  placeholder="Email"   name="email"   required></input>
          <input type="text"  placeholder="Objet"   name="objet"   required></input>
          <textarea rows="10" placeholder="Message" name="message" required></textarea>
      </fieldset>
      <input type="submit" value="Envoyer un mail">
    </form>
  </div>
  <hr class="separateur-hr0"/>
  <div class="page-contact-item-droite">
    <h1> Adresse & Téléphone </h1>
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2634.024835207034!2d-1.363457284151049!3d48.68588982079092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4809552944bd3143%3A0x1a7fc93556c09a37!2sLa%20Maison%20Du%20Smartphone!5e0!3m2!1sfr!2sfr!4v1625147998863!5m2!1sfr!2sfr" 
    width="92%" height="450" allowfullscreen="" loading="lazy"></iframe><br/><br/>
    <i class="fa fa-map-marker fa-2x"></i><span><a target="_blank" href="https://maps.google.com/maps?ll=48.685886,-1.361269&z=16&t=m&hl=fr&gl=FR&mapclient=embed&daddr=La%20Maison%20Du%20Smartphone%206%20Rue%20de%20la%20Constitution%2050300%20Avranches@48.6858863,-1.3612686" >
    6 Rue de la Constitution <br/>50300 Avranches</a></span><br/><br/>
    <i class="fas fa-phone-alt"></i></i><span><a href="tel:02 33 51 88 92">02 33 51 88 92</a></span><br/><br/><br/>

  </div>
</div>
<hr class="separateur-hr"/>
<div class="container-hours">
<div class="hours">
    <h1>Horaires d'ouverture</h1>
    <ul>
      <li>
        <ul>
          <li>Lundi</li>
          <li class="close">Fermé</li>
        </ul>
      </li>
      <li>
        <ul>
          <li>Mardi</li>
          <li>10h00 - 19h00</li>
        </ul>
      </li>
      <li>
        <ul>
          <li>Mercredi</li>
          <li>10h00 - 19h00</li>
        </ul>
      </li>
      <li>
        <ul>
          <li>Jeudi</li>
          <li>10h00 - 19h00</li>
        </ul>
      </li>
      <li>
        <ul>
          <li>Vendredi</li>
          <li>10h00 - 19h00</li>
        </ul>
      </li>
      <li>
        <ul>
          <li>Samedi</li>
          <li>10h00 - 19h00</li>
        </ul>
      </li>
      <li>
        <ul>
          <li>Dimanche</li>
          <li class="close">Fermé</li>
        </ul>
      </li>
    </ul>
  </div>
</div>
  </div>
</main>

<?php
include("php/footer.php");
?>