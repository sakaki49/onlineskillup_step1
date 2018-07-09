<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>POSTのサンプル</title>
  </head>
  <body>
    <?php
      //commentがPOSTされているなら
      if(isset($_POST["comment"])){
        //エスケープしてから表示
	$hn = htmlspecialchars($_POST["hn"]);
        $comment = htmlspecialchars($_POST["comment"]);
	print("名前:${hn}\n");
	echo nl2br("\n");
        print("コメント:${comment}");
	echo nl2br("\n");
      } else {
    ?>
	<p>名前</p>
        <form method="POST" action="post.php">
         <input name="hn">
        <p>コメントしてください。</p>
        <form method="POST" action="post.php">
          <input name="comment" />
          <input type="submit" value="送信" />
        </form>
    <?php
      }
    ?>
  </body>
</html>