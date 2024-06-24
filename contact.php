<!DOCTYPE html>
<html lang="en">

<head>
     <!-- Définition de l'encodage des caractères -->
     <meta charset="UTF-8">
     <!-- Définition de la vue pour les appareils mobiles -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Titre de la page -->
     <title>Contact Form</title>
     <!-- Lien vers la feuille de style CSS -->
     <link rel="stylesheet" href="contact.css">
</head>

<body>

     <?php
     require ('nav.php');
     ?>

     </br></br>

     <?php     
    // Vérifie si la méthode de requête est POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Récupère les données du formulaire
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        // Adresse e-mail de destination
        $to = "eget22@gmail.com";
        // Sujet du message avec le nom de l'expéditeur
        $subject = "Nouveau message de $name";
        // Corps du message avec nom, e-mail et message
        $body = "Nom: $name\nEmail: $email\n\n$message";

        // Envoie l'e-mail et vérifie si l'envoi est réussi
        if (mail($to, $subject, $body)) {
            // Affiche un message de succès
            echo "Votre message a été envoyé avec succès!";
        } else {
            // Affiche un message d'erreur en cas d'échec de l'envoi
            echo "Une erreur est survenue lors de l'envoi du message. Veuillez réessayer.";
        }
    }
    ?>

     <div class="info">
          <p>Contactez-nous sur les différents réseaux sociaux à partir des liens du pied de page</p>
          <p>Vous pouvez aussi nous joindre en remplissant le formulaire ci-dessous</p>
     </div>

     <div class="container">
          <!-- Titre du formulaire -->
          <h2>Remplissez le formulaire</h2>
          <!-- Formulaire de contact -->
          <form id="contactForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
               <!-- Champ pour le nom avec une indication obligatoire -->
               <input type="text" id="name" name="name" placeholder="Ex: Henry Potter" required>
               <!-- Champ pour l'e-mail avec une indication obligatoire -->
               <input type="email" id="email" name="email" placeholder="Ex: eget22@gmail.com" required>
               <!-- Champ pour le message avec une indication obligatoire -->
               <textarea id="message" name="message" placeholder="Votre message" required></textarea>
               <!-- Bouton d'envoi du formulaire -->
               <button type="submit">Envoyer</button>
          </form>
          <!-- Affichage de la réponse après l'envoi du formulaire -->
          <div id="response"></div>
     </div>


     </br></br>

     <?php
            require('foother.php');

        ?>
     <!-- Inclusion du script JavaScript -->
     <script src="contact.js"></script>

</body>

</html>