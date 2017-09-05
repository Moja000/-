<h2>勤怠連絡メールを作成しました！</h2>
<p>
  注意！：勤怠連絡表の添付を忘れずに！！<br>
  勤怠連絡表は以下のリンクよりダウンロードできます。<br>

<!-- まだダウンロード未対応です。 -->
  <button><a href="#">ダウンロード</a></button>

</p>

<?php
// フォームから取得した日時を$dateに代入。
$date = $_POST['date'];
// 日時をYYYYMMDDフォーマットに変換
$dateType1 = str_replace("-",'',$date);
// 日時をYYYY/MM/DDフォーマットに変換
$dateType2 = str_replace("-",'/',$date);

//HTMLインジェックションを無効化
function Reciver($value){
  echo htmlspecialchars($value);
}
?>


<!--件名を表示-->
<h2>＜件名＞</h2>
【勤怠連絡】<?php echo $_POST['type']."_".$dateType1."_".$_POST['department']."_".$_POST['name'];?>

<!-- 本文を表示 -->
<h2><本文></h2>
ご担当者様各位。<br>
 <br>
お疲れ様です。<?php echo $_POST['department'] ;?>の<?php echo $_POST['name'] ;?>です。<br>
以下の内容で勤怠連絡をさせて頂きます。<br>
<br>

————————————<br>
部署：<?php Reciver($_POST['department']);?><br>
氏名：<?php Reciver($_POST['name']) ;?><br>
取得種類：<?php Reciver($_POST['type']) ;?><br>
取得日：<?php Reciver($dateType2) ;?><br>
理由：<?php Reciver($_POST['reason']) ;?><br><br>
————————————<br>
<br>
本メールに勤怠連絡表を添付致しました。お手数ですが、ご確認をお願い致します。<br>
尚、常駐先には連絡済みです。<br>
<br>
以上、宜しくお願い致します。<br>
<br>
<br>

<!-- 入力ページへ戻る。 -->
<button><a href="http://192.168.33.10:8000/">戻る</a></button>
