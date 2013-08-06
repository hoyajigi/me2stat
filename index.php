<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>me2toy 2.0</title>
<!-- Dependencies -->
<!-- Sam Skin CSS for TabView -->
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/tabview/assets/skins/sam/tabview.css">
<link rel="stylesheet" type="text/css" href="http://yui.yahooapis.com/2.7.0/build/fonts/fonts-min.css" />

<!-- JavaScript Dependencies for Tabview: -->
<script type="text/javascript" src="http://yui.yahooapis.com/2.7.0/build/yahoo-dom-event/yahoo-dom-event.js"></script>
<script type="text/javascript" src="http://yui.yahooapis.com/2.7.0/build/element/element-min.js"></script>


<!-- Source file for TabView -->
<script type="text/javascript" src="http://yui.yahooapis.com/2.7.0/build/tabview/tabview-min.js"></script>

<script language="javascript">
function check_submit(){
	if(document.myForm.userid.value == ''||document.myForm.userid.value == '여기에 미투데이 아이디를 입력해 주세요'){
		alert('어랏! 미투데이 아이디를 입력을 안하셨네요! 저도 미투데이 전체를 프로파일링하고 싶지만 서버 성능이 딸려서 말이죠...그러니 미투데이 아이디를 적어주세요')
		document.myForm.name.focus();
		return;
	}
	else{
		document.myForm.action = "graph.php";
		document.myForm.submit();
	}
}
</script>

</head>
<body class="yui-skin-sam">
<div id="tabview" class="yui-navset">
    <ul class="yui-nav">
        <li class="selected"><a href="#tab1"><em>Introduction to me2toy</em></a></li>
        <li><a href="#tab2"><em>me2stat</em></a></li>
        <li><a href="#tab3"><em>Textcube publish plugin</em></a></li>
        <li><a href="#tab4"><em>blog2me</em></a></li>
        <li><a href="#tab5"><em>me2secret</em></a></li>
        <li><a href="#tab6"><em>Uploader</em></a></li>
        <li><a href="#credit"><em>Credit</em></a></li>
    </ul>
    <div class="yui-content">
        <div id="tab1">
        
        </div>
        <div id="tab2">
			<h1>me2stat</h1>
			<br>
			참고로 매우매우매우매우매우매우매우매우매우매우 오래걸립니다ㅠ
			<br>
			<br>
			<img alt="Vertical bars chart" src="http://me2toy.hoyajigi.com/generated/hoyajigi1.png" style="border: 1px solid gray;"/>
			<br />
			<img alt="Pie chart" src="http://me2toy.hoyajigi.com/generated/hoyajigi2.png" style="border: 1px solid gray;"/>
			<br>
			<br>
			<form name="myForm" target="http://me2toy.hoyajigi.com/me2stat/graph.php">
				<input maxlength=2048 name='userid' title="" value="여기에 미투데이 아이디를 입력해 주세요" style="width:800; height:50; border:1 solid red; font-family:Comic Sans MS; font-size:20pt;" onclick=this.value="">
				<input style="width:100; height:50; border:1 solid red; font-family:Comic Sans MS; font-size:20pt;" name=btn type=submit value="야호!" onclick='javascript:check_submit();'>
			</form>
		</div>
        <div id="tab3"><p>Textcube publing plugin</p></div>
        <div id="tab4"><p>blog2me</p></div>
        <div id="tab5"><p>me2secret</p></div>
        <div id="tab6"><p>Uploader</p></div>
        <div id="credit"><p>This is credit</p></div>
    </div>
</div>
<script>
(function() {
    var tabView = new YAHOO.widget.TabView('tabview');
})();
</script>

</body>

</html>