<?php
//===============================
// error_reporting(E_ALL);

// ini_set('display_errors','On');

//3問目の答え
$question3 = $_POST['question3']; //ラジオボタンの内容を受け取る
$answer3 = $_POST['answer3']; //hiddenで送られた正解を受け取る
$total_points2 = $_POST['total_points2']; //hiddenで前回までの得点を受け取る

//結果の判定
if($question3 == $answer3) {
  $result = "正解";
  $points = 20;
}else{
  $result ="不正解";
  $hint = "ヒント:問１の写真を見返してみて";
  $points = 0;
}
$total_points3 = $total_points2 + $points;

//第4問目の問題
$title ='オオパンダクンの目は何目？';

$question4 = array(); //配列の宣言
$question4 = array('たれ目','丸目','アーモンド目','猫目'); //4択の選択肢を設定

$answer4 = $question4[0]; //正解の問題を設定

shuffle($question4); //配列の中身をシャッフル

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
    <div class="answer_container">
      <p class="<?php if(!empty($hint)) echo 'err' ?>"><?php echo $result ?> <span>得点:<?php echo $total_points3 ?>/100</span></p>
      <p><?php if (!empty($hint)) echo $hint ?></p>
    </div>
    <div class="opanda_text">
      <h1>問4</h1>
      <h2><?php echo $title ?></h2>
      <form action="index5.php" method="post">
       <?php foreach($question4 as $value) { ?>
         <label><input type="radio" name="question4" value="<?php echo $value; ?>"><?php echo $value; ?><br></label>
       <?php } ?>
       <input type="hidden" name="answer4" value="<?php echo $answer4 ?>">
       <input type="hidden" name="total_points3" value="<?php echo $total_points3 ?>">
       <input type="submit" value="送るよ！" class="btn btn-mid">
      </form>
    </div>
  </div>
</div>
</body>
</html>