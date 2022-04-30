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
<form action="registre.php" method="post"  >
<br>         
<h2>Contact</h2>
Nom:
<br/><input type="text" name="nom" placeholder="Nom" required/> <br/>
Password:
<br/><input type="password" name="password" placeholder="password" required/> <br/>
E-mail:
<br/><input type="email" name="email" placeholder="e-mail" required/><br/>
Téléphone:
<br/><input type="phone" name="telephone" placeholder="Téléphone" required/><br/>
Message:
<br/><textarea type="text" name="message" placeholder="Écrivez ici votre message" required></textarea><br/>
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