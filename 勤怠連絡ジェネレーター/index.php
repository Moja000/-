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


<!-- フォーム作成 -->
    <form method="POST" action="form.php" >
<!-- 部署名入力 -->
      <p>
      部署名：
      <select name="department">
        <option value="所属チームを選択してください">----</option>
        <option value="ES1">ES1</option>
        <option value="ES2">ES2</option>
        <option value="ES3">ES3</option>
        <option value="TF1">TF1</option>
        <option value="TF2">TF2</option>
        <option value="TF3">TF3</option>
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
        <option value="連絡種別を選択してください">----</option>
        <option value="１日有給">１日有給</option>
        <option value="時間有給">時間有給</option>
        <option value="遅刻">遅刻</option>
        <option value="早退">早退</option>
        <option value="欠勤">欠勤</option>
        <option value="有事遅刻">有事遅刻</option>
        <option value="有事早退">有事早退</option>
        <option value="休日出勤">休日出勤</option>
        <option value="休出代休">休出代休</option>
        <option value="振替出勤">振替出勤</option>
        <option value="振替休暇">振替休暇</option>
        <option value="深夜出休">深夜出休</option>
        <option value="特別休暇">特別休暇</option>
        <option value="出張平日">出張平日</option>
        <option value="出張休日">出張休日</option>
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
