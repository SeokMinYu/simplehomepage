<?php
 session_start( );
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<!--<link rel="stylesheet" type="css" href="css/tab.css" /-->
	<meta charset="utf-8">
<script>
	var last_tab = 1;

function loadTab(tab_number)
{
	if (tab_number === last_tab) return;
	
	document.getElementById("tab" + last_tab).style.display = "none";
	document.getElementById("tab" + tab_number).style.display = "block";
	document.getElementById("tab-button" + last_tab).style.opacity = "1.0";
	document.getElementById("tab-button" + tab_number).style.opacity = "0.7";
	last_tab = tab_number;
}
</script>
<style>
body
{
	background-color: black;
}
#container {
	   width : 1000px;
	   margin : 0 auto;
	}
#mainview{
	width : 100%px;
	height : 160px;
	background-color : black;
	position : relative;
	margin : 0 auto;
	}
#title{
	   font-size : 50px;
	   font-weight : bold;
       text-align: center;
	   background : black;
       padding-top:60px; 
       color : white;
	   font-style : italic;
	   font-family : "Times New Roman",Monospace;
	}
header>ul>li {
      /*display:inline;*/
      list-style:none;
      padding:2px; 
      margin-right:10px;
	  margin-top: 10px;
	  float : right;
	}
header>ul>li>a {
	  text-decoration : none;
	  color : white;
	  font-size : 15px;
}
header>ul>li>a:hover{
	color : red;
}
div.tab-button-wrapper ul {
	padding: 0;
	list-style: none;
	margin-left : 60px;
}

div.tab-button-wrapper li {
	float: left;
	background-color : black;
	text-align : center;
	width : 220px;
}

a.tab-button-first {
	border-radius: 5px 0 0 0;
}

a.tab-button-last {
	border-radius: 0 5px 0 0;
	border-right: none;
}

div.tab-button-wrapper a {
	display: inline-block;
	font-size : 20px;
	padding: 7px;;
	text-decoration: none;
	color : white;
	background-color: black;
	border-radius : 20px;
	width : 100px;
}
div.tab-button-wrapper a:hover{
	color : red;
}
div.tab-body {
	margin-top : 70px;
	padding: 1em;
	clear: both;
	background-color: black;
	height: 1000px;
	border-radius: 0 3px 3px 3px;
}

div.tab-body-hidden {
	display: none;
}
table,th,td{
	border : 1px solid black;
	border-collapse:collapse;		
	text-align:center;
	}
th,td{
	width:90px;
	height:30px;		
	padding:10px;
	}
th,h3{
	text-align:center;
	}
.color1{
	background-color : LightGoldenRodYellow;
	}
	a{
		text-decoration : none;
		color : black;
	}
	#canvas { 
	background-color : white;
	border: 1px solid white; 
	}
</style>
<title>유석민홈페이지</title>
</head>
<body>
<div id="container">
<header id="mainview">
   <ul> 
	<?php
	  if (empty($_SESSION['user_name'])) { ?>
	    <li><a href="loginForm.php">로그인</a> </li>
		<li><a href="memberRegistration.php">회원가입</a></li>	
	  <?php }
	  else { ?>
        <li><a href="logout.php">로그아웃</a></li>
		<li style="color : red;"><?php echo $_SESSION['user_name']; ?>님 안녕하세요.</li>
	  <?php } ?>
   </ul>
   <div id="title">Seokmin's homepage</div>
</header>  
<div class="tab-button-wrapper">
		<ul>
			<li><a class="tab-button-first"
				id="tab-button1"
				href="javascript:void(0)"
				onclick="loadTab(1)"><strong>picture</strong></a></li>
			<li><a class="tab-button-hidden" 
				id="tab-button2"
				href="javascript:void(0)"
				onclick="loadTab(2)"><strong>schedule</strong></a></li>
			<li><a class="tab-button-hidden" 
				id="tab-button3"
				href="javascript:void(0)"
				onclick="loadTab(3)"><strong>newspaper</strong></a></li>
			<li><a class="tab-button-hidden tab-button-last" 
				id="tab-button4"
				href="javascript:void(0)"
				onclick="loadTab(4)"><strong>canvas</strong></a></li>
		</ul>
	</div> 
	<div class="tab-body-wrapper">
		<div class="tab-body" id="tab1"><p style="text-align:center; color:white;">
		<center>
		<div id="slideshow">
        <img src="갈대.JPG" style="width:700px;height:300px;" alt="갈대" />
        <img src="강릉2.JPG" style="width:700px;height:300px;" alt="강릉2" />
        <img src="전시회.JPG" style="width:700px;height:300px;" alt="전시회" />
        <img src="카페1.JPG" style="width:700px;height:300px;" alt="카페1" />
        <img src="햄버거1.JPG" style="width:700px;height:300px;" alt="햄버거1" />
		<img src="카페2.JPG" style="width:700px;height:300px;" alt="카페2" />
     </center>
	<div style="border: 1px solid black; float: left; width: 33%; margin-top:90px; color:white;">
	<a href="갈대.JPG" target="_blank">
	<img src="갈대.JPG" style="width:300px;height:200px;" alt="갈대"/></a>
	<br><br>#&nbsp;하늘공원
	</div>
	<div style="border: 1px solid black; float: left; width: 33%; margin-top:90px;color:white;">
	<a href="강릉2.JPG" target="_blank">
	<img src="강릉2.JPG" style="width:300px;height:200px;" alt="강릉2"/></a><br><br>#&nbsp;wolhwa_street
	</div>
	<div style="border: 1px solid black; float: left; width: 33%; margin-top:90px;color:white;">
	<a href="전시회.JPG" target="_blank">
	<img src="전시회.JPG" style="width:300px;height:200px;" alt="전시회"/></a>
	<br><br>#&nbsp;용산전시회
	</div>
	<div style="border: 1px solid black; float: left; width: 33%; margin-top:60px;color:white;">
	<a href="카페1.JPG" target="_blank">
	<img src="카페1.JPG" style="width:300px;height:200px;" alt="카페1"/></a>
	<br><br>#&nbsp;cafe_beambalm
	</div>
		<div style="border: 1px solid black; float: left; width: 33%; margin-top:60px;color:white;">
		<a href="햄버거1.JPG" target="_blank">
	<img src="햄버거1.JPG" style="width:300px;height:200px;" alt="햄버거1"/></a>
	<br><br>#&nbsp;강릉수제버거
	</div>
		<div style="border: 1px solid black; float: left; width: 33%; margin-top:60px;color:white;">
		<a href="카페2.JPG" target="_blank">
	<img src="카페2.JPG" style="width:300px;height:200px;" alt="카페2"/></a>
	<br><br>#&nbsp;혜화_카페
	</div>
    </div>
    <script>
var slideShow = function(container) {
    this.images = [];
    this.curImage = 0;
    for (i = 0; i < container.childElementCount; i++) {
        this.images.push(container.children[i]);
        this.images[i].style.display = "none";
    }
    // Handle going to to the next slide
    var nextSlide = function() {
        for (var i = 0; i < this.images.length; i++) {
            this.images[i].style.display = "none";
        }
        this.images[this.curImage].style.display = "block";
        this.curImage++;
        if (this.curImage >= this.images.length) {
            this.curImage = 0;
        }
        window.setTimeout(nextSlide.bind(this), 2000);
    };
    
    nextSlide.call(this);
};
slideShow(document.getElementById("slideshow"));
    </script>
		</p></div>
		
		<div class="tab-body tab-body-hidden" id="tab2"><p>
		<div style="text-align:center;color:white">개인시간표</div><br><div style="color:red">*사진이 아닙니다*</div>
		<table>
		<thead>
			<tr class="color1">
			<th></th>
			<th>Monday(월)</th>
			<th>Tuesday(화)</th>
			<th>Wednesday(수)</th>
			<th>Thursday(목)</th>
			<th>Friday(금)</th>
			<th>Saturday(토)</th>
			<th>Sunday(일)</th>
			</tr>
		</thead>
		<tbody>
		 <tr>
		  <td class="color1"><b>01~02교시</b><br>(09:30~10:45)</td>
		  <td style="background-color : PALEGREEN;">컴퓨터구조<br>(18312)</td>
		  <td style="background-color : CORNSILK;">운영체제<br>(18106)</td>		
		<td style="background-color : GAINSBORO;">e-비지니스<br>설계및응용<br>(18521)</td>
		<td style="background-color:darkgray"></td><td style="background-color : LightCyan;" rowspan="10">
		알바<br>or<br>과제</td><td style="background-color : LavenderBlush;" rowspan="10">여자친구와데이트</td>
		 <td style="background-color : LightCyan;" rowspan="10">알바<br>or<br>과제</td>
		 </tr>
		 <tr>
		  <td class="color1"><b>03~04교시</b><br>(11:00~12:15)</td>
		  <td style="background-color : GAINSBORO;">e-비지니스<br>설계및응용<br>(18521)</td><td style="background-color:darkgray"></td>
		  <td style="background-color : PALEGREEN;">컴퓨터구조<br>(18312)</td>
		  <td style="background-color : CORNSILK;">운영체제<br>(18106)</td>
		 </tr>
		 <tr>
		  <td class="color1"><b>05~06교시</b><br>(12:15~13:00)</td>
		  <td style="background-color : PEACHPUFF;" colspan="4"><b>LUNCH</b></td>
		 </tr>
		 <tr>
		  <td class="color1"><b>07~08교시</b><br>(13:00~14:15)</td>
		  <td style="background-color:darkgray"></td><td style="background-color : PALEGOLDENROD;">데이터통신<br>(18521)</td>
		  <td style="background-color:darkgray"></td><td style="background-color : PALEGOLDENROD;">데이터통신<br>(18521)</td>
		 </tr>
		 <tr>
		  <td class="color1"><b>09~10교시</b><br>(14:30~15:45)</td>
		<td style="background-color : LIGHTSALMON;">인터넷프로그래밍<br>(18312)</td><td style="background-color:darkgray"></td>
		  <td style="background-color : LIGHTSALMON;">인터넷프로그래밍<br>(18312)</td><td style="background-color:darkgray"></td>
		 </tr>
		 <tr>
		  <td class="color1"><b>11교시</b><br>(16:00~16:50)</td>
			<td style="background-color:darkgray"></td><td style="background-color : Lavender;" rowspan="4">알고리즘<br>(18521)</td>
		  <td style="background-color : MISTYROSE;">채플<br>(채플실)</td><td style="background-color:darkgray"></td>
		 </tr>
		 <tr>
		  <td class="color1"><b>12교시</b><br>(16:50~17:15)</td>
		  <td style="background-color:darkgray"></td>
		  <td style="background-color:darkgray"></td><td style="background-color:darkgray"></td>
		 </tr>
		 <tr>
		  <td class="color1"><b>13교시</b><br>(17:30~18:20)</td>
		  <td style="background-color:darkgray"></td>
		  <td style="background-color : POWDERBLUE;">사회생활길잡이</td><td style="background-color:darkgray"></td>
		 </tr>
		 <tr>
		  <td class="color1"><b>14교시</b><br>(18:20~18:45)</td>
		  <td style="background-color:darkgray"></td><td style="background-color:darkgray"></td><td style="background-color:darkgray"></td>
		 </tr>
		</tbody>
	</table>
		</p></div>
		<div class="tab-body tab-body-hidden" id="tab3"><p>
		<table style="color:white">
		<tr><td><li><a href="http://m.khan.co.kr/" target="frame1"style="color:white"><strong>경향신문</strong></a></td>
		<td><li><a href="http://m.seoul.co.kr/" target="frame1"style="color:white"><strong>서울신문</strong></a></td>
		<td><li><a href="http://m.hani.co.kr/" target="frame1"style="color:white"><strong>한겨례</strong></a></td>
		<td><li><a href="http://m.mk.co.kr/" target="frame1"style="color:white">
		<strong>매일경제</strong></a></td>
		<td><li><a href="http://m.etnews.com/" target="frame1"style="color:white"><strong>전자신문</strong></a></td></tr>
		</table>
		<div style="color:red">텍스트를 클릭해보세요!</div>
		<iframe name="frame1" width="960"height="700" style="background-color : white;">
		</iframe>
		</p></div>
		<div class="tab-body tab-body-hidden" id="tab4"><p style="color:white">
<script>
window.onload = function() {
   var canvas = document.getElementById("canvas");
   var pen = document.getElementById("ch");
   var img = canvas.getContext("2d");
   var ch;
 
   pen.onchange = function() { 
    ch = this.value 
    var x = 0;      
    var y = 0;       
    img.beginPath();  
    canvas.onmousedown = function() {  
     if (ch == "del") {               
      canvas.onmousemove = function() {
       img.fillStyle = "white";  
       img.fillRect(event.x -canvas.offsetLeft  -25, event.y-canvas.offsetTop  -25, 50, 50);
      }
      canvas.onmouseup = function() { 
       canvas.onmousemove = null;
      }
     } 
	else if (ch == "black" || ch == "yellow" || ch == "blue" 
		|| ch =="green" || ch == "red" || ch == "purple") { 
      if (ch == "black") {
       img.strokeStyle = "black";      
       img.lineWidth = "3";  //그릴 선의 굵기
       img.lineCap = "round";    
      } else if (ch == "yellow") {
       img.strokeStyle = "yellow";    // 색변경
       img.lineWidth = "3";          //굵기 변경
       img.lineCap = "round";        //Cap 스타일 변경
      }
	   else if (ch == "blue") {
       img.strokeStyle = "blue";    // 색변경
       img.lineWidth = "3";          //굵기 변경
       img.lineCap = "round";        //Cap 스타일 변경
      }
	   else if (ch == "green") {
       img.strokeStyle = "green";    // 색변경
       img.lineWidth = "3";          //굵기 변경
       img.lineCap = "round";        //Cap 스타일 변경
      }
	   else if (ch == "red") {
       img.strokeStyle = "red";    // 색변경
       img.lineWidth = "3";          //굵기 변경
       img.lineCap = "round";        //Cap 스타일 변경
      }
	   else if (ch == "purple") {
       img.strokeStyle = "purple";    // 색변경
       img.lineWidth = "3";          //굵기 변경
       img.lineCap = "round";        //Cap 스타일 변경
      }
      img.moveTo(event.x -canvas.offsetLeft, event.y-canvas.offsetTop);
      canvas.onmousemove = function() {

       img.lineTo(event.x -canvas.offsetLeft, event.y-canvas.offsetTop);
       img.stroke();

      }//end mouse down
      canvas.onmouseup = function() {
       canvas.onmousemove = null;
      }
     }
    }// end change
   }
  }
	</script>
  <select id="ch">
   <option value="">선택</option>
   <option value="black">검정색</option>
   <option value="yellow">노란색</option>
   <option value="blue">파란색</option>
   <option value="green">초록색</option>
   <option value="red">빨간색</option>
   <option value="purple">보라색</option>
   <option value="del">지우개</option>
  </select>&nbsp;&nbsp;-------------옵션을 선택하기!!&nbsp;&nbsp;선택한후 그려보세요!!<br><br>
    <canvas id="canvas" width="950" height="500">
   <div id="del"></div>
  </canvas>
</p>
</div>
<footer style="text-align:center; color:white;">&copy; 한신대학교 정보통신학부 201355082 유석민</footer>	
</div>	
</body>
</html>