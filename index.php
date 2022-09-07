<?php 
  if (isset($_POST["postalCode"])) {
    echo $_POST["postalCode"];
    exit;
  }
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="storage, box, annexx, storage toulouse" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="Mathieu CAUQUIL" />
    <link rel="stylesheet" href="style.css" />
    <link
      rel="shortcut icon"
      href="./assets/images/favicon.ico"
      type="image/x-icon"
    />
    <!-- Image by <a href=" https://www.vectorportal.com" >Vectorportal.com</a>,  <a class="external text" href="https://creativecommons.org/licenses/by/4.0/" >CC BY</a> -->
    <title>Annexx</title>
  </head>
  <body>
    <!-- Header -->
    <header>
      <img src="./assets/images/padlock.svg" alt="cadenas" width="70px" />
      <div id="header">
        <h1>Annexx</h1>
        <h2>Mon box sécurisé</h2>
      </div>
    </header>

    <!-- Form -->
    <div id="form-container">
      <h2>
        A la recherche d'une solution de stockage ? Nous avons tout ce qu'il
        vous faut
      </h2>

      <h3>Trouvez le box le plus proche de chez vous</h3>
      <div id="form">
        <img
          id="form-arrow"
          src="./assets/images/fleche.png"
          alt="image d'une flèche"
          width="40px"
        />
        <form method="post" id="form-ajax">
          <input
            type="text"
            name="postal-code"
            id="postal-code"
            placeholder="Tapez votre ville ..."
          />
          <button type="submit" id="form-button">Trouver mon box</button>
        </form>
      </div>
    </div>

    <article id="response-responsive">
      <div id="response">
      <p>Le box le plus près de chez vous</p>
      <div class="boxes-title">
            <img
              src="./assets/images/box.svg"
              alt="image d'une boite"
              width="30px"
            />
            <p id="response-city"></p>
          </div>
        
        
        <p id="response-adress"></p>
        <p id="response-phone"></p>
        <p id="response-hours"></p>
      </div>
    </article>


    <article>
      <!-- First row -->
      <div class="informations-row">
        <img
          class="img-border"
          src="./assets/images/annexx-center.webp"
          alt="image d'un centre annexx"
          width="400"
        />
        <p>
          La solution à vos besoins d'espace et de stockage de vos affaires
          c'est le garde-meubles ou le self-stockage à Toulouse.
          <br />
          <br />
          Dans un garde meubles, vous même ou votre déménageur transporte vos
          biens et cartons vers un batiment sous surveillance, où vos biens
          seront stockés dans un box pendant une période déterminée. Dans un
          garde meuble classique dès que vos affaires sont dans le box, vous ne
          pouvez plus y accéder jusqu'à la fin de la durée du stockage.
        </p>
      </div>

      <!-- Second row -->
      <div class="informations-row">
        <p>
          La réponse la plus efficace est la nouvelle génération de
          garde-meubles: le self stockage. Un box individuel accueille vos biens
          et vous en avez la clef. L'avantage du self-stockage c'est que quand
          vous le souhaitez vous pouvez vous rendre à votre box pour ramener ou
          déposer des meubles et cartons. L'accès est illimité et gratuit, tous
          les jours. Voici notre sélection de sites toulousains où vous pourrez
          ranger vos affaires: meubles, matériel ou affaires de sport, cartons.
          en toute sécurité et flexibilité, puisque vous louez sans aucun
          engagement de durée, et pourrez partir quand vous le voudrez.
        </p>
        <img
          class="img-border"
          src="./assets/images/annexx-boxes.webp"
          alt="images des boxs"
          width="400"
        />
      </div>
    </article>

    <article id="boxes-main-container">
      <div id="img-responsive">
        <img
          src="./assets/images/box.svg"
          alt="image d'une boite"
          width="30px"
        />
        <h3 id="boxes-main-container-title">Nos boxs à Toulouse</h3>
      </div>

      <!-- Boxs boxess -->
      <div class="boxes-container">
        <div class="boxes">
          <div class="boxes-title">
            <img
              src="./assets/images/box.svg"
              alt="image d'une boite"
              width="30px"
            />
            <p>Garde Meubles Toulouse Sud</p>
          </div>

          <p>2 Avenue des Crêtes 31520 RAMONVILLE St AGNE</p>

          <p>Tél. 05 62 19 19 79</p>

          <p>
            Horaires des bureaux: Lun-Ven de 9h-12h30; 13h15-17h30, Sam 9h13h.
          </p>
        </div>

        <div class="boxes">
          <div class="boxes-title">
            <img
              src="./assets/images/box.svg"
              alt="image d'une boite"
              width="30px"
            />
            <p>Garde Meubles Toulouse Nord-Est</p>
          </div>

          <p>243 Route d'Albi 31200 TOULOUSE</p>

          <p>Tél. 05 61 11 03 53</p>

          <p>
            Horaires des bureaux: Lun-Ven de 9h-12h30; 13h15-17h30, Sam 9h13h.
          </p>
        </div>
      </div>

      <div class="boxes-container">
        <div class="boxes">
          <div class="boxes-title">
            <img
              src="./assets/images/box.svg"
              alt="image d'une boite"
              width="30px"
            />
            <p>Garde Meubles Toulouse Université</p>
          </div>
          <p>70 Rue Jacques Babinet 31100 TOULOUSE</p>
          <p>Tél. 05 34 60 31 10</p>
          <p>
            Horaires des bureaux: Lun-Ven de 9h-12h30; 13h15-17h30, Sam 9h13h.
          </p>
        </div>

        <div class="boxes">
          <div class="boxes-title">
            <img
              src="./assets/images/box.svg"
              alt="image d'une boite"
              width="30px"
            />
            <p>Garde Meubles Toulouse Ouest</p>
          </div>

          <p>4 Rue de Caulet 31300 TOULOUSE</p>
          <p>Tél. 05 34 55 19 18</p>
          <p>
            Horaires des bureaux: Lun-Ven de 9h-12h30; 13h15-17h30, Sam 9h13h.
          </p>
        </div>
      </div>
    </article>
    <footer>
      <p id="footer-title">Nous sommes également présents à</p>
      <div id="cities-list">
        <ul>
          <li>TOULOUSE</li>
          <li>BORDEAUX</li>
          <li>LYON</li>
          <li>PARIS</li>
          <li>MARSEILLE</li>
          <li>NANTES</li>
          <li>PERPIGNAN</li>
        </ul>
        <ul>
          <li>NICE</li>
          <li>MONTPELLIER</li>
          <li>PAU</li>
          <li>ST-ETIENNE</li>
          <li>GRENOBLE</li>
          <li>TOULON</li>
          <li>ORLEANS</li>
        </ul>
      </div>
      <p>TOULOUSE SOLUTION DE SELF-STOCKAGE &copy; Mathieu CAUQUIL - 2022</p>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript">

$(document).ready(function(){
      $('#form-ajax').on("submit", (e) => {
        e.preventDefault();
         var postalCode = $('#postal-code').val();

         $.ajax({
            type: 'post',
            data: {ajax: 1,postalCode: postalCode},
            success: function(response){
              $("#response").show();

              switch (response.toLowerCase()) {
                case "toulouse sud":
                  $('#response-city').text("Garde Meubles Toulouse Sud");
                  $('#response-adress').text("2 Avenue des Crêtes 31520 RAMONVILLE St AGNE");
                  $('#response-phone').text("Tél. 05 62 19 19 79");
                  $('#response-hours').text("Horaires des bureaux: Lun-Ven de 9h-12h30; 13h15-17h30, Sam 9h13h.");
                  break;
                case "toulouse nord-est":
                  $('#response-city').text("Garde Meubles Toulouse Nord-Est");
                  $('#response-adress').text("243 Route d'Albi 31200 TOULOUSE");
                  $('#response-phone').text("Tél. 05 61 11 03 53");
                  $('#response-hours').text("Horaires des bureaux: Lun-Ven de 9h-12h30; 13h15-17h30, Sam 9h13h.");
                  break;
                case "toulouse université":
                  $('#response-city').text("Garde Meubles Toulouse Université");
                  $('#response-adress').text("70 Rue Jacques Babinet 31100 TOULOUSE");
                  $('#response-phone').text("Tél. 05 34 60 31 10");
                  $('#response-hours').text("Horaires des bureaux: Lun-Ven de 9h-12h30; 13h15-17h30, Sam 9h13h.");
                  break;
                case "toulouse ouest":
                  $('#response-city').text("Garde Meubles Toulouse Ouest");
                  $('#response-adress').text("4 Rue de Caulet 31300 TOULOUSE");
                  $('#response-phone').text("Tél. 05 34 55 19 18");
                  $('#response-hours').text("Horaires des bureaux: Lun-Ven de 9h-12h30; 13h15-17h30, Sam 9h13h.");
                  break;
              
                default:
                $('#response-city').text("Aie... Une erreur est arrivée, tapez à nouveau votre ville");
                  break;
              }
              
              // console.log(response);
              //  $('#response').text('postalCode : ' + response);
            }
         });
      });
   });
    </script>
  </body>
</html>
