<?php
//===============================
// error_reporting(E_ALL);

// ini_set('display_errors','On');

//2問目の答え
$question2 = $_POST['question2']; //ラジオボタンの内容を受け取る
$answer2 = $_POST['answer2']; //hiddenで送られた正解を受け取る
$total_points1 = $_POST['total_points1']; //hiddenで前回までの得点を受け取る

//結果の判定
if($question2 == $answer2) {
  $result = "正解";
  $points = 20;
}else{
  $result ="不正解";
  $hint = "ヒント:色は焦げ茶色で形は太い棒状";
  $points = 0;
}
$total_points2 = $total_points1 + $points;

//第3問目の問題
$title ='問１の写真のオオバンダクンはどこを指差していたでしょう?';

$question3 = array(); //配列の宣言
$question3 = array('斜め左上','斜め左下','斜め右上','斜め右下'); //4択の選択肢を設定

$answer3 = $question3[2]; //正解の問題を設定

shuffle($question3); //配列の中身をシャッフル

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
      <p class="<?php if(!empty($hint)) echo 'err' ?>"><?php echo $result ?> <span>得点:<?php echo $total_points2 ?>/100</span></p>
      <p><?php if (!empty($hint)) echo $hint ?></p>
    </div>
    <div class="opanda_text">
      <h1>問3</h1>
      <h2><?php echo $title ?></h2>
      <form action="index4.php" method="post">
       <?php foreach($question3 as $value) { ?>
         <label><input type="radio" name="question3" value="<?php echo $value; ?>"><?php echo $value; ?><br></label>
       <?php } ?>
       <input type="hidden" name="answer3" value="<?php echo $answer3 ?>">
       <input type="hidden" name="total_points2" value="<?php echo $total_points2 ?>">
       <input type="submit" value="送るよ！" class="btn btn-mid">
      </form>
    </div>
  </div>
</div>
</body>
</html>
