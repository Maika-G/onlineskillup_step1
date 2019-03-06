<!DOCTYPE html>
  <head>
    <meta charset="utf-8">
    <title>PHPのサンプル</title>
    <link rel="stylesheet" href="../form/form.css">
    <link href="https://fonts.googleapis.com/css?family=Sawarabi+Mincho" rel="stylesheet">
  </head>
  <body>
    <?php
    if (isset($_POST["userid"],$_POST["nickname"],$_POST["mailaddress"],
       $_POST["title"], $_POST["content"])) {

      $userid = htmlspecialchars($_POST["userid"]);
      $nickname = htmlspecialchars($_POST["nickname"]);
      $mailaddress = htmlspecialchars($_POST["mailaddress"]);
      $title = htmlspecialchars($_POST["title"]);
      $content = htmlspecialchars($_POST["content"]);

      echo '<div class="form">';
      echo "以下の内容で送信しました。<br>";
      echo "ユーザーID：${userid}<br>";
      echo "ニックネーム：${nickname}<br>";
      echo "メールアドレス：${mailaddress}<br>";
      echo "タイトル：${title}<br>";
      echo "内容：${content}<br>";
      echo '</div>';
    } else {
   ?>
   <h1>Noback Board</h1>
   <form action="index.php" method="post">
     <div class="cp_iptxt">
       <label>ユーザーID(必須)</label>
     <input class="ef" type="text" name="userid" placeholder="" required>
     <span class="focus_line">
   </div>
   <div class="cp_iptxt">
     <label>ニックネーム（必須）</label>
     <input class="ef" type="text" name="nickname" placeholder="" required>
     <span class="focus_line">
   </div>
   <div class="cp_iptxt">
     <label>メールアドレス(必須)</label>
     <input class="ef" type="text" name="mailaddress" placeholder="" required>
     <span class="focus_line">
   </div>
　　　<div class="cp_iptxt">
  <label>タイトル(任意)</label>
     <input class="ef" type="text" name="title" placeholder="[無題]">
     <span class="focus_line">
   </div>
     <div class="cp_iptxt">
       <label>内容（必須）</label>
     <input class="ef" type="text" name="content">
     <span class="focus_line">
   </div>
       <div class="button_wrapper">
       <button type="submit">投稿</button>
     </div>
   </form>
<?php
    }
?>
  </body>
</html>
