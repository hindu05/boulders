<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Tak for din besked</title>
    <link rel="stylesheet" href="css/stylesheet.min.css">
    <style media="screen">

    article.besked{
      width: 100%;
      height: 100vh;
      display: -webkit-box;
      display: -ms-flexbox;
      display: flex;
      -webkit-box-align: center;
          -ms-flex-align: center;
              align-items: center;
      -webkit-box-pack: center;
          -ms-flex-pack: center;
              justify-content: center;
      flex-direction: column;
      padding: 10px;
      text-align: center;
    }

    button{
      border: none;
      border-radius: 20px;
      padding: 5px 10px;
      margin-top: 20px;
      text-transform: uppercase;
    }

    </style>
  </head>
  <body>
    <article class="besked">
      <h1>Ups :(</h1>
      <p>Der skete en fejl, prøv igen senere.</p>
      <button type="button" onclick="document.location.href='kontakt.php'">Tilbage til Aarhus Boulders</button>
    </article>
  </body>
</html>
