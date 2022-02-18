

<?php 
   session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="main.css">
  <title>Date</title>
</head>
<body>
  
<div class="container">

<form action="controller.php" method="post">
    <label for="">Jours</label>
    <input type="text" name="jours" value="<?php if(!isset($_SESSION['error']['jours']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['jours']; else ''  ?>"><br><br>
    <?php if(isset($_SESSION['error']['jours'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['jours'] ?></span>
      <?php endif?>
      <br>
    <label for="">mois</label>
    <input type="text" name="mois" value="<?php if(!isset($_SESSION['error']['mois']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['mois']; else ''  ?>" ><br><br>
    <?php if(isset($_SESSION['error']['mois'])):?>
            <span style="color:red"><?php echo $_SESSION['error']['mois'] ?></span>
      <?php endif?>
      <br>
    <label for="">annee</label>
    <input type="text" name="annee" value="<?php if(!isset($_SESSION['error']['annee']) && isset($_SESSION['post']) ) echo  $_SESSION['post']['annee']; else ''  ?>"><br><br>
    <?php if(isset($_SESSION['error']['annee'])):?>
                <span style="color:red"><?php echo $_SESSION['error']['annee'] ?></span>
        <?php endif?>
      <br>
    <br><input class="button" type="submit" name="btn_ok" value="valider">
</form>

</div>

</body>
</html>

<?php 
if(isset($_SESSION['error'])){
    unset($_SESSION['error']);
}
?>