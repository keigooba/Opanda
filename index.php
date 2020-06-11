<?php
//===============================
// error_reporting(E_ALL);

// ini_set('display_errors','On');

$title ='右のマスコットの名前は何でしょう？';

$question = array(); //配列の宣言
$question = array('パンダクン','オバンダクン','オオバンダクン','バンダリアンクン'); //4択の選択肢を設定

$answer = $question[2]; //正解の問題を設定

shuffle($question); //配列の中身をシャッフル

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>大庭工務店４択クイズ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="background_index">
<div class="index_container">
  <img src="img/panda1.jpg">
  <div class="opanda_wrapper">
    <div class="opanda_text">
      <h1>問１</h1>
      <h2><?php echo $title ?></h2>
      <form action="index2.php" method="post">
       <?php foreach($question as $value) { ?>
         <label><input type="radio" name="question" value="<?php echo $value; ?>"><?php echo $value; ?><br></label>
       <?php } ?>
       <input type="hidden" name="answer" value="<?php echo $answer ?>">
       <input type="submit" value="送るよ！" class="btn btn-mid">
      </form>
    </div>
    <div class="opanda_image">
      <img src="img/panda3.jpg">
    </div>    
  </div>
</div>
</body>
</html>