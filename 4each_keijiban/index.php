<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<title>掲示板</title>
	<link rel="stylesheet" type=""text/css href="style.css">
</head>
	
	
<body>
    
    <?php
    
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=yuki;host=localhost;","root","mysql");
    $stmt = $pdo->query("select*from 4each_keijiban");
    
    ?>
    
        <img src="./4eachblog_logo.jpg" width="25%">
        <header>
        <ul>
            <li>トップ</li>
            <li>プロフィール</li>
            <li>4eachについて</li>
            <li>登録フォーム</li>
            <li>問い合わせ</li>
            <li>その他</li>
        </ul>
    </header>

    
    <main>
       <div class="left">
           <h2>
               <div class="h">プログラミングに役立つ情報</div>
           </h2>
              <div class="box1"><h2>入力ホーム</h2>
              <form action="insert.php" method="post" class="form">
                  ハンドルネーム<br>
                  <input type="text" class="text" size="20" name="handlename">
                  <br>
                  タイトル<br>
                  <input type="text" class="text" size="20" name="title">
                  <br>
                  コメント<br>
                  <textarea name="comments" cols="40" rows="5"></textarea><br>
                  <input type="submit" value="投稿" class="submit">
              </form></div>
               
        
                
                <?php
                
                while($row=$stmt->fetch()){
                
                echo"<div class='box5'>";
                echo "<h3>".$row['title']."</h3>";
                echo"<div class='contents'>";
                echo $row['comments'];
                echo "<div class='handlename'>posted by".$row['handlename']."</div>";
                echo "</div>";
                 echo "</div>";
                }
               ?>
              
              </div>
      
       
       
       <div class="right">
           <h3>人気の記事</h3>
           PHPオススメ本
           <p>PHP MyAdminの使い方</p>
           <p>今人気のエディタ　TOP5</p>
           <p>HTMLの基礎</p>
           <h3>オススメリンク</h3>
           <p>インターノウス株式会社</p>
           <p>XAMPPのダウンロード</p>
           <p>Eclipseのダウンロード</p>
           <p>Bracketsのダウンロード</p>
           <h3>カテゴリ</h3>
           <p>HTML</p>
           <p>PHP</p>
           <p>MuSQL</p>
           <p>JavaScript</p>
       </div>
        
        </main>


    <footer>
       <div class="box2">
           copyright @ Internous | 4each blog is the one which provides A to Z about programming
       </div> 
        
    </footer>

</body>
</html>