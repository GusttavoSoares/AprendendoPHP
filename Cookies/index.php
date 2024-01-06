<html>
  <head>
    <title>Cookies - Index</title>
  </head>
  <body>
     <form action="cookies.php" method="POST">
        Seu nome: <input type="text" name="nomeUsuario"><br/>
        Seu estado: <input type="text" name="estado"><br/>
        Permitir cookie? <br/>
        <input type="checkbox" name="permitir" value="yes" checked>
        <label for="yes">Sim</label><br>
        <input type="checkbox" name="permitir" value="no">
        <label for="no">Não</label><br>
        <input type="submit">
      </form>

<p>Para visualizar seu cookie é preciso atualizar a página</p>

<?php
    print_r($_COOKIE);
?>
  </body>
</html>
