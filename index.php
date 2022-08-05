<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Banian Eboue</title>

  <link rel="stylesheet" href="style.css" />
  <link rel="icon" type="image/x-icon" href="./assets/imgs/icon.ico" />
</head>

<body>
  <main class="main-container">
    <div class="palm-left-container">
      <img src="assets/imgs/palm-left.png" alt="palm leaf" />
    </div>
    <div class="logo-container">
      <img src="assets/imgs/logo.png" alt="logo banian eboue" />
    </div>
    <div class="palm-right-container">
      <img src="assets/imgs/palm-right.png" alt="palm leaf" />
    </div>
  </main>
  <section class="first-section-container">
    <div class="first-section-text">
      <div class="first-section-text-head">
        <h1>Venez Découvrir<br /></h1>
        <h2>le Petit Paradis d'Aboisso</h2>
      </div>

      <div class="first-section-text-text">
        <p>
          Éboué est une localité du sud-est de la Côte d'Ivoire appartenant au
          département d'Aboisso, région du Sud-Comoé. La localité d'Éboué est
          située à 19km au sud-est d'Aboisso, au bord d'une vaste lagune. Le
          village se trouve en pays Sanwi.
        </p>
      </div>
      <img src="./assets/imgs/bande-2.png" alt="bande" />
    </div>
    <div class="first-section-img">
      <img src="assets/imgs/img-1.png" alt="img" />
    </div>
  </section>

  <section class="second-section-container">
    <div class="second-section-img">
      <img src="assets/imgs/img-group.png" alt="img" />
    </div>
    <div class="second-section-text">
      <div class="second-section-text-head">
        <h1>Au Programme</h1>
      </div>

      <div class="second-section-text-text">
        <h2>Randonnée dans les champs</h2>
        <h2>Visite guidée du village</h2>
        <h2>Balade lagunaire</h2>
        <h2>Initiation à la pêche à la canne</h2>
        <h2>Animation</h2>
        <h2>Jeux</h2>
        <h2>Feux de bois</h2>
        <h2>Découverte de mets locaux</h2>
        <h2>Détente & Networking</h2>
      </div>
    </div>
  </section>

  <section class="third-section-container">
    <h1>Participation :</h1>
    <h2>35.000F - Single</h2>
    <h2>65.000F - Couple</h2>

    <img src="./assets/imgs/bande.png" alt="" />
  </section>

  <section class="form-container">
    <div class="form-header">
      <h1>Réservez vite votre place</h1>
      <h2>En remplissant ce formulaire</h2>
    </div>
    <form action="app.php" method="post" class="form-form">
      <div class="form-group">
        <label for="Nom">Nom</label> <br />
        <input type="text" name="nom" id="nom" placeholder="Nom" required />
      </div>

      <div class="form-group">
        <label for="Prenom">Prénom(s)</label> <br />
        <input type="text" name="prenom" id="prenom" placeholder="Prenom" required />
      </div>

      <div class="form-group">
        <label for="num">Numéro de Téléphone</label> <br />
        <input type="text" name="num" id="num" placeholder="(+225) xx xx xx xx xx" required />
      </div>

      <div class="form-group">
        <label for="email">Adresse email</label> <br />
        <input type="email" name="email" id="email" placeholder="example@test.com" />
      </div>

      <div class="form-group">
        <input type="submit" value="Envoyer" name="submit" class="btn-submit" />
      </div>
    </form>
  </section>

  <footer>
    <h3>Powered by JoCode from JVC ©</h3>
  </footer>
  <script src="app.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script>
    ScrollReveal().reveal(".logo-container", {
      delay: 200,
      useDelay: "onload",
      reset: true,
    });
    ScrollReveal().reveal(".first-section-container", {
      delay: 200,
      useDelay: "onload",
      reset: true,
    });

    ScrollReveal().reveal(".second-section-container", {
      delay: 200,
      useDelay: "onload",
      reset: true,
    });
    ScrollReveal().reveal(".third-section-container", {
      delay: 200,
      useDelay: "onload",
      reset: true,
    });
  </script>
</body>

</html>