<?php
session_start();
session_regenerate_id(true);
if (isset($_SESSION['login']) == false) {
  print 'ログインされていません<br>';
  print '<a href="../staff_login/staff_login.html">ログイン画面へ</a>';
  exit();
} else {
  print $_SESSION['staff_name'];
  print 'さんログイン中<br>';
  print '<br>';
}
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>SAMPLE MART</title>
  </head>
  <body>
    スタッフ追加<br><br>
    <form class="" action="staff_add_check.php" method="post">
      スタッフ名を入力して下さい<br>
      <input type="text" name="name" style="width:200px" value=""><br>
      パスワードを入力して下さい<br>
      <input type="password" name="pass" style="width:100px" value=""><br>
      パスワードをもう一度入力して下さい<br>
      <input type="password" name="pass2" style="width:100px" value=""><br><br>
      <input type="button" onclick="history.back()" value="戻る">
      <input type="submit" value="OK">
    </form>
  </body>
</html>
