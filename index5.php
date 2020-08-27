<?php
//===============================
// error_reporting(E_ALL);

// ini_set('display_errors','On');

//4問目の答え
$question4 = $_POST['question4']; //ラジオボタンの内容を受け取る
$answer4 = $_POST['answer4']; //hiddenで送られた正解を受け取る
$total_points3 = $_POST['total_points3']; //hiddenで前回までの得点を受け取る

//結果の判定
if($question4 == $answer4) {
  $result = "正解";
  $points = 20;
}else{
  $result ="不正解";
  $hint = "ヒント:他の目の形にはない”ふんわり感”があります";
  $points = 0;
}
$total_points4 = $total_points3 + $points;

//第5問目の問題
$title ='オオバンダクンの鳴き声はどれ？';

$question5 = array(); //配列の宣言
$question5 = array('ニャン','キャン','グオー','ワン'); //4択の選択肢を設定

$answer5 = $question5[3]; //正解の問題を設定

shuffle($question5); //配列の中身をシャッフル

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opanda</title>
    <link rel="stylesheet" href="style.css">
</head>
<body id="background_index">
<div class="index_container">
  <img src="img/panda1.jpg">
  <div class="opanda_wrapper">
    <div class="answer_container">
      <p class="<?php if(!empty($hint)) echo 'err' ?>"><?php echo $result ?> <span>得点:<?php echo $total_points4 ?>/100</span></p>
      <p><?php if (!empty($hint)) echo $hint ?></p>
    </div>
    <div class="opanda_text">
      <h1>最終問題</h1>
      <h2><?php echo $title ?></h2>
      <form action="answer.php" method="post">
       <?php foreach($question5 as $value) { ?>
         <label><input type="radio" name="question5" value="<?php echo $value; ?>"><?php echo $value; ?><br></label>
       <?php } ?>
       <input type="hidden" name="answer5" value="<?php echo $answer5 ?>">
       <input type="hidden" name="total_points4" value="<?php echo $total_points4 ?>">
       <input type="submit" value="送るよ！" class="btn btn-mid">
      </form>
    </div>
  </div>
</div>
</body>
</html>
