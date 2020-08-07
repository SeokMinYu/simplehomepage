<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<style>
#loginform {
     width : 400px;
	 margin : 0 auto;
	 font-weight : bold;
	 font-size : 20px;
	 background-color : black;
	 padding : 10px;
	 margin-top : 100px;
	 }
input{
    font-size : 18px;
	line-height : 25px;
}
body
{
	background-color: black;
}
form{
	color : white;
}
</style>
</head>
<body>
<?php
require('dbConnect.php');

session_start( );
//if form submitted, inser values into the database
if (isset($_POST['user_id'])){
	$user_id = $_POST['user_id'];
	$user_password = $_POST['user_password'];
	
	$query = "SELECT * from `members` WHERE user_id='$user_id' and user_password='".md5($user_password)."'";
	$conn->set_charset("utf8");	
	$result = $conn->query($query) or die($conn->error( ));
	$rows = $result->fetch_assoc( );
	   if (isset($rows)) {
		   $_SESSION['user_name']= $rows['user_name']; //사용자명: 예, 홍길동
		   //redirect user to ysmhome.php
		   header("Location: ysmhome.php");//메인 홈피로 돌아가기
	   } else {
		   echo "<div>
		   <h2>User id/password is incorrect!!!.</h2>
		   <br/>
		   Click here to <a href='login.php'>Go to Login page again</a></div>";
	   }
} else {
	?>
<div id="loginform">
<br/>
<form action="" method="post" >
  <fieldset >  <!-- style="border-color:red"  : 이것은 둘레 선의 색을 지정함-->
    <legend align="center" style="font-size:30px; color : white;">login</legend>
	<br/>
    <label> 아이디(ID): <input type="text" name="user_id" size="20" autocomplete="off" required></label><br><br/>
    <label> 비밀 번호 : <input type="password" name="user_password" size="20"  autocomplete="off" required><label>
    <br><br>
    <center>
	<button type="submit" >로그인</button>
	<button type="reset" >초기화</button>
	<button type="button" onClick="history.back();">취소</button>
	</center>
  </fieldset>
</form>
</div>
<?php } ?>
</body>
</html>
