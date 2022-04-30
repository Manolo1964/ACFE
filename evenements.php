<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>ASSOCIATION CYCLISME FRANCO-ESPAGNOLE,activités variées</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta
      name="description"
      content="Cette association vous propose de l'aide et des informations pratiques pour les espagnols qui s'installent en France"
    />
    <link rel="stylesheet" href="style2.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&family=Quicksand&family=Trirong:ital@1&display=swap"
      rel="stylesheet"/>
    <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous"></script>  
  </head>
  <body>
    <div class="container">
      <header class="header">
        <h1>ASSOCIATION CYCLISME FRANCO-ESPAGNOLE</h1>
        <div class="logo-nav">
          <img src="Images\logo.png" alt="Logo ACFE" />
          <nav class="navigation">
            <ul>
              <li><a href="index.php">Accueil</a></li>
              <li><a href="#">Evenements</a></li>
              <li><a href="contact.php">Contact</a></li>                
            </ul>
          </nav>
        </div>
        <br/>
      </header>
      <main class="content">
        <h2>Evenements 2022</h2>
        <div class="enonce">
          <p>Ici vous pouvez trouver toutes les réunions prévues pour cette année 2022</p>
          <p>Vous pouvez nous proposer de nouvelles destinations pour les réunions qui auront lieu en 2023.<br/>
            La date limite de dépôt de vos propositions est fixée au 1er octobre 2022.</p>
        </div>
        <section class="items">
          <article class="item">
            <div class="card">
              <time class="card__date">02-01-22</time> 
              <span class="card__destinations">Strasbourg</span>
            <img class="card__img" src="Images\Strasbourg.jpg"alt="Image Strasbourg"/>
            </div>  
          </article>
          <article class="item">
            <div class="card">
              <time class="card__date">06-02-22</time> 
              <span class="card__destinations">Annecy</span> 
            </div>    
            <img class="card__img" src="Images\Annecy.jpg"alt="Image Annecy"/>
          </article>
          <article class="item">
            <div class="card">
              <time class="card__date">06-03-22</time> 
              <span class="card__destinations">Biarritz</span>
            </div>   
            <img class="card__img" src="Images\Biarritz.jpg"alt="Image Biarritz"/>
          </article>
          <article class="item">
            <div class="card">
              <time class="card__date">03-04-22</time> 
              <span class="card__destinations">Bordeaux</span> 
            <img class="card__img" src="Images\Bordeaux.jpg"alt="Image Bordeaux"/>
          </article>
          <article class="item"> 
            <div class="card">
              <time class="card__date">01-05-22</time> 
              <span class="card__destinations">Collonges Rouge</span>
            </div>  
            <img class="card__img" src="Images\Collonges La Rouge.jpg" alt="Image Collonges La Rouge"/>
          </article>
          <article class="item"> 
            <div class="card">
              <time class="card__date">05-06-22</time>
              <span class="card__destinations">Dinan</span> 
            </div>  
            <img class="card__img" src="Images\Dinan.jpg"alt="Image Dinan"/>
          </article>
          <article class="item">
            <div class="card">
              <time class="card__date">03-07-22</time> 
              <span class="card__destinations">Grenoble</span>
            </div>  
            <img class="card__img" src="Images\Grenoble.jpg"alt="Image Grenoble"/>
          </article>
          <article class="item"> 
            <div class="card">
              <time class="card__date">07-08-22</time> 
              <span class="card__destinations">La Rochelle</span> 
            </div> 
            <img class="card__img" src="Images\La-Rochelle.jpg"alt="Image La Rochelle"/>
          </article>
          <article class="item">
            <div class="card">
              <time class="card__date">04-09-22</time> 
              <span class="card__destinations">La Roque-Gageac</span>
            </div>  
            <img class="card__img" src="Images\La-Roque-Gageac.jpg"alt="Image La Roque Gageac"/>
          </article>
          <article class="item">
            <div class="card">
              <time class="card__date">02-10-22</time> 
              <span class="card__destinations">Lille</span>            
            </div> 
            <img class="card__img" src="Images\Lille.jpg"alt="Image Lille"/></article>
          <article class="item"> 
            <div class="card">
              <time class="card__date">06-11-22</time> 
              <span class="card__destinations">Lyon</span> 
            </div>
            <img class="card__img" src="Images\Lyon.jpg"alt="Image Lyon"/></article>
          <article class="item"> 
            <div class="card">
              <time class="card__date">04-12-22</time> 
              <span class="card__destinations">Paris</span>
            </div> 
            <img class="card__img" src="Images\Paris.jpg"alt="Image Paris"/></article>
        </section>  
      </main>
      <footer class="footer">
        <nav>
          <p class="button">Inscrivez-vous et participez aux différents événements !</p>
          <a href="#">Evenements</a>
        </nav>
        <p class="copyright">&#9400 Copyright 2022 - Tous droits réservés</p>
      </footer>
    </div>
    <?php 
      echo rand(1.800);
    ?>
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    setInterval(
      function(){
        $('#recharger').load('evenements.php')
    },2000);    
  });
</script>