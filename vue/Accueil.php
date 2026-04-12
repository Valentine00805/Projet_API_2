<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Style.css">
    <link rel="icon" href="Logo.jpg">
    <style>
      .Fermer {
        color: red;
      }

      .Ouvert {
        color: green;
      }
      /*Wonder*/
      .Wonder {
          display: flex ; 
          padding: 0; 
          background-color: fff;
          justify-content: left; 
      }

      .Wonder li {
          list-style-type: none ; 
      }

      .Wonder a {
          display: block; 
          min-width: 120px; 


          margin: 0.5rem;
          padding: 0.4rem 0;
          text-align: center;
          background-color: a9cce3;
          color: 5499c7;
          text-decoration: none; 
          border: 1px solid #5499c7;
          border-radius: 4px;
          transition: all 0.7s; 
      }

      .Wonder a:hover {
          background-color: 5499c7; 
          color: a9cce3; 
          border-color: a9cce3;
      }
      /*fin : Wonder*/
    </style>
  </head>

  <body>
    <?php require "menu.php";?>
    <ul class="Wonder">
      <li>
          <a href="Formulaire_inscription.php">Retour</a>
      </li>
    </ul>
    <br><br>
    <center><img src="Logo.jpg" alt="Le logo" width="300" height="200"></center><br><br>
    <center><table border>
      <center>
        <legend>
          Horaire et jour sur lesquelles les activités sont possibles : 
        </legend>
      </center>
      <br>
      <thead>
        <tr>
          <th scope="col"></th>
          <th scope="col">Lundi</th>
          <th scope="col">Mardi</th>
          <th scope="col">Mercredi</th>
          <th scope="col">Jeudi</th>
          <th scope="col">Vendredi</th>
          <th scope="col">Samedi</th>
          <th scope="col">Dimanche</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">8h/9h</th>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
        </tr>
        <tr>
          <th scope="row">9h/10h</th>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
        </tr>
        <tr>
          <th scope="row">10h/11h</th>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
        </tr>
        <tr>
          <th scope="row">11h/12h</th>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
        </tr>
        <tr>
          <th scope="row">12h/13h</th>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
        </tr>
        <tr>
          <th scope="row">13h/14h</th>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
        </tr>
        <tr>
          <th scope="row">14h/15h</th>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
        </tr>
        <tr>
          <th scope="row">15h/16h</th>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
        </tr>
        <tr>
          <th scope="row">16h/17h</th>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
        </tr>
        <tr>
          <th scope="row">17h/18h</th>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
        </tr>
        <tr>
          <th scope="row">18h/19h</th>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Fermer">Fermer</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
          <td><span class="Ouvert">Ouvert</span></td>
        </tr>
      </tbody>
    </table></center>
  </body>
</html>