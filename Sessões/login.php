<?php
  session_start();
  if(isset($_SESSION["email"])){
    header("location:index.php");
    die();
  }else{
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      $_SESSION["email"] = $_POST["email"];
      header("location:index.php");
      die();
    }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
  <title>Título da Página/Aba</title>
</head>
<body>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    E-mail: <input type="email" name="email">
    <br/><br/>
    Senha: <input type="password" name="senha">
    <br/><br/>
    <input type="submit">
  </form>
</body>
</html>