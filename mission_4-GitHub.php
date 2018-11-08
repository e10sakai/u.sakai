<?php
header("Content-Type:text/html;charset=UTF-8");
	$dsn='mysql:dbname=データベース名;host=ホスト名;charset=utf8';
	$user='ユーザー名';
	$password='パスワード';
	$pdo=new PDO($dsn,$user,$password,
	 array(
		PDO::ATTR_EMULATE_PREPARES=>false));

$sql="SELECT * FROM pass";
$res=$pdo->query($sql);
		foreach($res as $row);
if(!empty($_POST['name'])&&!empty($_POST['comment'])&&empty($_POST['editno'])&&$row['id']==$_POST['pass-id1']&&$row['pass']==$_POST['pass1']){
$sql=$pdo->prepare("INSERT INTO mission44(id,name,comment,time)VALUES(null,:name,:comment,:time)");
$sql->bindParam(':name',$name,PDO::PARAM_STR);
$sql->bindParam(':comment',$comment,PDO::PARAM_STR);
$sql->bindParam(':time',$time,PDO::PARAM_STR);
$name=$_POST['name'];
$comment=$_POST['comment'];
$time=date('Y-m-d H:i:s');
$sql->execute();
}
$sql=null;
$sql="SELECT * FROM pass";
$res=$pdo->query($sql);
		foreach($res as $row);
	if(isset($_POST['editno'])&&$row['id']==$_POST['pass-id1']&&$row['pass']==$_POST['pass1']){
	$id=$_POST['editno'];
	$nm=$_POST['name'];
	$kome=$_POST['comment'];
	$zikan=date('Y-m-d H:i:s');
	$sql="update mission44 set name='$nm',comment='$kome',time='$zikan' where id=$id";
	$result=$pdo->query($sql);
	}
$sql=null;
$sql="SELECT * FROM pass";
$res=$pdo->query($sql);
		foreach($res as $row);
		if(isset($_POST['delete'])&&$row['id']==$_POST['pass-id2']&&$row['pass']==$_POST['pass2']){
		$id=$_POST['delete'];
		$sql="delete from mission44 where id=$id";
		$result=$pdo->query($sql);
}
$sql=null;
$res=null;
$row=null;

if(!empty($_POST['edit'])){
$edit=$_POST['edit'];
$sql="SELECT * FROM mission44 WHERE id=$edit";
		$res=$pdo->query($sql);
		foreach($res as $row);
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UFT-8">
</head>
<body>
	<form action="mission_4.php"method="post">
		<tr><td><input type="text"name="name"value="<?php echo $row['name'] ?>"placeholder="名前"></td></tr><br>
		<tr><td><input type="text"name="comment"value="<?php echo $row['comment'] ?>"placeholder="コメント"></td></tr><br>
		<tr><td><input type="hidden"name="editno"value="<?php echo $_POST['edit'] ?>"></td></tr>
		<tr><td><input type="text"name="pass-id1"value=""placeholder="ID"></td></tr><br>
		<tr><td><input type="text"name="pass1"value=""placeholder="パスワード"></td></tr>
	<input type="submit"value="送信"/><br><br>

		<tr><td><input type="text"name="delete"value=""placeholder="削除"></td></tr><br>
		<tr><td><input type="text"name="pass-id2"value=""placeholder="ID"></td></tr><br>
		<tr><td><input type="text"name="pass2"value=""placeholder="パスワード"></td></tr>
	<input type="submit"value="削除"/><br><br>
		<input type="text"name="edit"value=""placeholder="編集">
	<input type="submit"value="編集"/><br><br>
	</form>
<?php
header("Content-Type:text/html;charset=UTF-8");
$dsn='mysql:dbname=データベース名;host=ホスト名;charset=utf8';
$user='ユーザー名';
$password='パスワード名';
$pdo=new PDO($dsn,$user,$password,
array(
	PDO::ATTR_EMULATE_PREPARES=>false));
		
$sql='SELECT*FROM mission44';
$results=$pdo->query($sql);
foreach($results as $row){
echo $row['id'].' ';
echo $row['name'].' ';
echo $row['comment'].' ';
echo $row['time'].'<br>';
}
?>

</body>
</html>
