<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Les mentions légales</title>
        <link rel="stylesheet" href="Style.css">
        <link rel="icon" href="Logo.jpg">
        <meta name="viewport"
            content="width=device-width, initial-scale=1.0, maximum-scale=1, minimum-scale=1, target-densitydpi=device-dpi">

        <link rel="stylesheet" href="Style.css">

        <link rel="stylesheet" href="CSS-action/font-awesome-pro.css">
        <link rel="stylesheet" href="CSS-action/bootstrap.min.css">
        <link rel="stylesheet" href="CSS-action/scroll_button.css">
        <link rel="stylesheet" href="CSS-action/spacing.css">
        <link rel="stylesheet" href="CSS-action/plugin.css">
        <link rel="stylesheet" href="CSS-action/responsive.css">
    </head>

    <body>
        <?php require "menu.php";?>

        <h1>Mentions légales</h1>
        <h2>Éditeur du site</h2>
        <p>Le présent site est édité par : GSB
            <br>Statut : entreprise de présentation de produit pharmaceutiques
            <br>Adresse : 17 rue des Lilas, 75000 Paris
            <br> Email : gsb@gmail.com
            <br> Téléphone : 07 89 01 23 45
        </p>

        <br>

        <h2>Hébergement</h2>
        <p>Le site est hébergé par : wampserver phpMyadmin</p>


        <h2>Données personnelles (RGPD)</h2>
        <p>Données collectées dans le cadre de l’inscription aux activités proposées sur le site, les données suivantes
            peuvent être collectées :
            <br>

        <ul>
            <li>Nom</li>
            <li>Prénom</li>
            <li>Adresse email</li>
            <li>Numéro de téléphone</li>
            <li>Date de naissance</li>
        </ul>
        </p>

        <h2>Finalité de la collecte</h2>
        <p>Ces données sont collectées uniquement pour :</p>
        <ul>
            <li>Gérer les inscriptions aux activités</li>
            <li>Contacter les participants pour confirmer leur participation</li>
        </ul>

        <h2>Base légale</h2>
        <p>Le traitement des données repose sur le consentement de l’utilisateur lors de son inscription via le formulaire.
        </p>

        <br>

        <h2>Durée de conservation</h2>
        <p>Les données sont conservées pendant une durée maximale de 3 mois après la fin de l’activité, sauf obligation
            légale contraire.</p>

        <h2>Partage des données</h2>
        <p>Les données sont exclusivement destinées à GSB et ne sont en aucun cas vendues ou cédées à des tiers.</p>


        <h2>Sécurité</h2>
        <p>Le site met en œuvre des mesures techniques et organisationnelles afin de protéger les données personnelles
            contre tout accès non autorisé, perte ou divulgation.</p>

        <h2>Droits des utilisateurs</h2>

        <p>Conformément au <strong>Règlement Général sur la Protection des Données (RGPD)</strong>, vous disposez des droits
            suivants :
        <ul>
            <li>Droit d’accès.</li>
            <li>Droit de rectification.</li>
            <li>Droit de suppression.</li>
        </ul>
        <h2>Vous pouvez exercer ces droits en contactant :</h2>
        <p>gsb-reclamations@gmail.com</p>


        <h2>Responsabilité</h2>

        <p>Les informations présentes sur le site sont fournies à titre informatif. L’éditeur ne saurait être tenu
            responsable en cas d’erreur ou d’omission.</p>

        <h2>Propriété intellectuelle</h2>

        <p>Tous les contenus du site (textes, images, logos) sont protégés par le droit d’auteur. Toute reproduction est
            interdite sans autorisation préalable.</p>
                <!--================================
                SCROLL BUTTON START
            =================================-->
      <div class="progress" id="toTop" role="button" aria-label="Remonter en haut">
        <svg class="progress-svg" width="100%" height="100%" viewBox="-1 -1 102 102" aria-hidden="true">
          <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear; stroke-dasharray: 307.919px; stroke-dashoffset: 307.919px;">
          </path>
        </svg>

        <!-- Flèche -->
        <svg class="progress-chevron" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M6 14l6-6 6 6"
                fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <!--================================
                SCROLL BUTTON END
            =================================-->
    </div>
  </div>
<!--Les scripts qui rendent le site dynamique-->
  <script src="CSS-action/plugin.js"></script>
  <!--scroll button js-->
  <script src="CSS-action/scroll_button.js"></script>
  <!--sticky sidebar js-->
  <script src="CSS-action/sticky_sidebar.js"></script>
  <!-- Gsap -->
  <script src="CSS-action/animation.js"></script>
  <!--main/custom js-->
  <script src="CSS-action/main.js"></script>
    </body>
</html>