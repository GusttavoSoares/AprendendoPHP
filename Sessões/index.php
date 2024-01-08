<?php
  session_start();
  $email = "";
  if(!isset($_SESSION["email"])){
    session_destroy();
    header("location:login.php");
    die();
  }else{
    $email = $_SESSION["email"];
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Título da Página/Aba</title>
</head>
<body>
  <?php
    echo "Olá " . $email . "!<br/><br/>";
    echo "Id da sessão: " . session_id() . "<br/><br/>";
    echo "Nome da sessão: " . session_name() . "<br/><br/>";
  ?>

    <form method="post">
    <input type="submit" name="submit" value="Sair">
    </form>
</body>
</html>

<?php 
function destroySession() {
  session_destroy();
  header("location:login.php");
  die();
}

if(isset($_POST['submit'])) {
 destroySession();
}
?>
