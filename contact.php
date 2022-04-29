<!DOCTYPE html>
<html lang="fr">
  <head>
    <title>ASSOCIATION CYCLISME FRANCO-ESPAGNOLE,activités variées</title>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta
      name="description"
      content="Cette association vous propose de l'aide et des informations pratiques pour les espagnols qui s'installent en France"
    />
    <link rel="stylesheet" href="style3.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lora&family=Quicksand&family=Trirong:ital@1&display=swap"
      rel="stylesheet"
    />
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
              <li><a href="evenements.php">Evenements</a></li>
              <li><a href="contact.php">Contact</a></li>                
            </ul>
          </nav>
        </div>
        <br />
      </header>
      <main class="content">
<form name="datos" id="datos" method="post" action="registre.php" >
<br>         
<h2 id="A">Contact</h2>
<p id="O">

<br/><input type="text" name="code" autofocus="" required=""/><br/>
E-mail:
<br/><input type="text" name="email" autofocus="" required="" placeholder="e-mail"/><br/>
Téléphone:
<br/><input type="text" name="telephone" autofocus="" required="" placeholder="Téléphone"/><br/>
Nom:
<br/><input type="text" name="nom" autofocus="" required="" placeholder="Nom"/> <br/>
Message:
<br/><textarea type="text" name="message" autofocus="" required="" placeholder="Écrivez ici votre message"></textarea><br/>
<br/>
<input type="submit" name="Finir l’enregistrement" value="Finir l’enregistrement" id="Button_envoyer" />
</form>
      </main>
      <footer class="footer">
        <nav>
          <p class="button">
            Inscrivez-vous et participez aux différents événements !
          </p>
          <a href="#">Contact</a>
        </nav>
        <p class="copyright">&#9400 Copyright 2022 - Tous droits réservés</p>
      </footer>
    </div>
  </body>
</html>