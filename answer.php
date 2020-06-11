<?php
//===============================
// error_reporting(E_ALL);

// ini_set('display_errors','On');

//5問目の答え
$question5 = $_POST['question5']; //ラジオボタンの内容を受け取る
$answer5 = $_POST['answer5']; //hiddenで送られた正解を受け取る
$total_points4 = $_POST['total_points4']; //hiddenで前回までの得点を受け取る

//結果の判定
if($question5 == $answer5) {
  $result = "正解";
  $points = 20;
}else{
  $result ="不正解";
  $hint = "ヒント:どこかにヒントが隠されています。";
  $points = 0;
}
$total_points = $total_points4 + $points;

if($total_points == 100) {
  $result_text = "オオバンダも喜んでいます！";
} else if($total_points < 100 && $total_points >= 80) {
  $result_text = "ラスト１問！ワン!";
} else if($total_points < 80 && $total_points >= 60) {
  $result_text = "後もう少し！頑張って！";
} else {
  $result_text = "もう一度やってみよう！";
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>大庭工務店４択クイズ</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="background_answer">
<div class="lastanswer_container">
  <img src="img/panda2.jpg">
  <div class="lastanswer_wrapper">
    <h1 class="<?php if(!empty($hint)) echo 'err' ?>"><?php echo $result ?></h1> 
    <h3><?php if (!empty($hint)) echo $hint ?></h3>
    <div class="result_container">
      <h1>結果発表<span><?php echo $total_points ?></span>点</h1>
      <p><?php echo $total_points ?>点です！<br>
      <p><?php echo $result_text ?></p>
    </p>
      <form action="index.php" method="post">
        <input type="submit" value="最初の問題へ" class="btn btn-mid"> 
      </form> 
    </div>
  </div>
</div>
</body>
</html>
