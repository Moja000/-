<!DOCTYPE html>
<html>
  <head>
  <title>勤怠報告テンプレート</title>
  </head>
  <body>
<h1>勤怠連絡メール作成システム</h1>
<h2>★How to use★</h2>
<p>
  必要事項を入力の上、「送信」ボタンを押してください。<br>
  自動的に勤怠連絡メールの件名、本文を作成します。
</p>
<br>
<?php
//所属チームを配列で呼び出し。
$department = array("所属チームを選択してください","ES1", "ES2", "ES3", "TF1","TF2","TF3");
//申請種類を配列で呼び出し。
$type = array("連絡種別を選択してください","１日有給","時間有給","遅刻","早退","欠勤","有事遅刻","有事早退","休日出勤","休出代休","振替出勤","振替休暇","深夜出休","特別休暇","出張平日","出張休日",);
//配列の要素数を取得
$count_department = count($department)-1;
$count_type = count($type)-1;
?>

<!-- フォーム作成 -->
    <form method="POST" action="form.php" >
<!-- 部署名入力 -->
      <p>
      部署名：
      <select name="department">
        <?php
        for($i = 0; $i <= $count_department; $i++){
          echo "<option value=".$department[$i].">".$department[$i]."</option>";
        }
        ?>
      </select>
      </p>
<!-- 氏名を入力 -->
      <p>
      氏名：
      <input type="text" name="name">
      </p>
<!-- 連絡種別入力 -->
      <p>
      連絡種類：
      <select name="type">
        <?php
        for($i = 0; $i <= $count_type; $i++){
          echo "<option value=".$type[$i].">".$type[$i]."</option>";
                }?>
      </select>
      </p>
<!-- 取得日を選択 -->
      <p>
      取得日：
        <input type="date" name="date" />
      </p>
<!-- 取得理由を入力 -->
      <p>
      取得理由：
        <input type="textarea" name="reason" />
      </p>
<!-- form.phpへ送信 -->
      <input type="submit" value="作成" />
    </form>
  </body>
</html>
