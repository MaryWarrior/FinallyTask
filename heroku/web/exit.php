<html>
  <head>
  </head>
  <body>
    <form action="" method="post">
        <div>
          <label>Выхотите завершить сессию?</label>
        </div>
        <div>
          <button name="send" type="submit">Завершить сессию</button>
        </div>
    </form>
  </body>
</html>
<?php
if(isset($_POST['send'])){
    unset($_SESSION['name']);
    header('location: index.php'); 
}
?>