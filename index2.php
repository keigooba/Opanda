<?php
//===============================
// error_reporting(E_ALL);

// ini_set('display_errors','On');

//１問目の答え
$question = $_POST['question']; //ラジオボタンの内容を受け取る
$answer = $_POST['answer']; //hiddenで送られた正解を受け取る
//結果の判定
if($question == $answer) {
  $result = "正解";
  $points = 20;
}else{
  $result ="不正解";
  $hint = "ヒント:工務店の名前は？";
  $points = 0;
}
$total_points1 = $points;

//第２問目の問題
$title ='オオバンダクンの好きな食べ物は？';

$question2 = array(); //配列の宣言
$question2 = array('わたがし','ふがし','こんぺいとう','ささ'); //4択の選択肢を設定

$answer2 = $question2[1]; //正解の問題を設定

shuffle($question2); //配列の中身をシャッフル

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
      <p class="<?php if(!empty($hint)) echo 'err' ?>"><?php echo $result ?> <span>得点:<?php echo $total_points1 ?>/100</span></p>
      <p><?php if (!empty($hint)) echo $hint ?></p>
    </div>
    <div class="opanda_text">
      <h1>問2</h1>
      <h2><?php echo $title ?></h2>
      <form action="index3.php" method="post">
       <?php foreach($question2 as $value) { ?>
         <label><input type="radio" name="question2" value="<?php echo $value; ?>"><?php echo $value; ?><br></label>
       <?php } ?>
       <input type="hidden" name="answer2" value="<?php echo $answer2 ?>">
       <input type="hidden" name="total_points1" value="<?php echo $total_points1 ?>">
       <input type="submit" value="送るよ！" class="btn btn-mid">
      </form>
    </div>
  </div>
</div>
</body>
</html>
