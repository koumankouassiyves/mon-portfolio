<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - KOUMAN K. Yves</title>
  <link rel="stylesheet" href="contact.css">
</head>
<body>
  <header>
    <h1>KOUMAN K. Yves</h1>
   <nav>
      <a href="accueil.php">Accueil</a>
      <a href="about.php">À propos</a>
      <a href="projects.php">Projets</a>
      <a href="contact.php">Contact</a>
    </nav>
  </header>

  <section id="contact">
    <h2>Contact</h2>
    <p>Email : <a href="mailto:yveskouassikouman@gmail.com">yveskouassikouman@gmail.com</a></p>
    <p>Télécharger mon CV : <a href="mon cv.PDF" download>Mon CV</a></p>

    <h3>Formulaire de visite</h3>
    <form action="contact_form.php" method="post">
      <input type="text" name="name" placeholder="Nom" required>
      <input type="email" name="email" placeholder="Email" required>
      <textarea name="message" placeholder="Message" required></textarea>
      <button type="submit">Envoyer</button>
    </form>
  </section>

  <footer>
    <p>&copy; 2025 KOUMAN K. Yves</p>
  </footer>
   <script src="main.js"></script>
</body>





<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "yveskouassikouman@gmail.com";
    $subject = "Nouveau message de votre portfolio";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if(mail($to, $subject, $body, $headers)){
        echo "<p>Merci, votre message a été envoyé avec succès !</p>";
    } else {
        echo "<p>Erreur : le message n'a pas pu être envoyé.</p>";
    }
}
?>




</html>
