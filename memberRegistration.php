<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>회원가입</title>
<link rel="stylesheet" href="css/style.css" />
<style>
#container {
   margin : 0 auto;
   width : 600px;
   background-color : black;
   font-weight : bold;
   padding : 10px;
}
#submit1 {
   text-align : center;
   font-size : 25px;
}
body
{
	background-color: black;
}
table,h1{
	color : white;
}
td{
	padding : 10px;
}
</style>
</head>
<body>
<?php
require('dbConnect.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['user_id'])){
    $user_id = $_REQUEST['user_id'];
    $user_password = $_REQUEST['user_password'];
	$user_name = $_REQUEST['user_name'];
    $user_gender = $_REQUEST['user_gender'];
    $user_email = $_REQUEST['user_email'];
	$user_phone = $_REQUEST['user_phone'];
	$user_area = $_REQUEST['user_area'];
	$reg_date = date("Y-m-d H:i:s");
        
	$query = "INSERT into `members` (user_id, user_password, user_name, user_gender,
	                                 user_email,user_phone,user_area, reg_date)
         VALUES ('$user_id', '".md5($user_password)."', '$user_name','$user_gender',
		 '$user_email','$user_phone','$user_area', '$reg_date')";
	$conn->set_charset("utf8");	 
    $result = $conn->query($query);
    if($result){
       echo "<div class='form'>
<h3>회원가입 성공!!!</h3>
<br/>Click here to <a href='loginForm.php'>Login</a></div>";
        }
    }else{
?>
<div id="container" align="center">
<h1>회원가입</h1>
<br><br>
<form name="reg_form" action="" method="post">
<table>
<tr><td>아 이 디 :</td><td><input type="text" name="user_id" size="40" autofocus autocomplete="off"></td></tr>
<tr><td>패스워드:</td><td><input type="password" name="user_password" size="40"  autocomplete="off"></td></tr>
<tr><td>이&nbsp;&nbsp;&nbsp;름 :</td><td><input type="text" name="user_name" size="40"  autocomplete="off"></td></tr>
<tr><td>성&nbsp;&nbsp;&nbsp;별 :</td><td><input name="user_gender" type="radio" value="male">남성
         &nbsp;&nbsp;<input name="user_gender" type="radio" value="female">여성</td></tr>
<tr><td>E-mail:</td><td><input type="email" name="user_email" size="40" maxlength="25" placeholder="ooo@ooo.ooo형식으로 입력"></td></tr>
<tr><td>전화번호:</td><td><input type="tel" name="user_phone" size="40" maxlength="15">
                         <span style="color:red; font-size:small;">주) - 없이 입력</span></td></tr>
<tr><td>본가지역 :</td>
    <td><input type="radio" name="user_area" value="서울">서울
	    <input type="radio" name="user_area" value="경기">경기
		<input type="radio" name="user_area" value="강원">강원
		<input type="radio" name="user_area" value="충북">충북
		</td></tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>
		<input type="radio" name="user_area" value="충남">충남
		<input type="radio" name="user_area" value="전북">전북
		<input type="radio" name="user_area" value="전남">전남
		<input type="radio" name="user_area" value="경북">경북
		</td></tr><tr><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>
		<input type="radio" name="user_area" value="경남">경남
		<input type="radio" name="user_area" value="제주">제주
		<input type="radio" name="user_area" value="그외">그외
		</td>
	</tr>
</table>

<p id="submit1">
<input type="submit" value="가입하기">
<button type="reset" >초기화</button>
<button type="button" onClick="history.back();">취소</button></p>
</form>
</div>
<?php } ?>

</body>
</html>