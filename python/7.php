<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
	    <title>统一身份认证网关</title>
        <link type="text/css" rel="stylesheet" href="css/cas.css;jsessionid=E368D1B1F69987AD15F219EE7A0DA5C6" />
           <link rel="stylesheet" href="/css/styles.css;jsessionid=E368D1B1F69987AD15F219EE7A0DA5C6" />
		<script type="text/javascript" src="/js/jquery-1.4.2.min.js;jsessionid=E368D1B1F69987AD15F219EE7A0DA5C6"></script>
		<SCRIPT src="/js/slider.js;jsessionid=E368D1B1F69987AD15F219EE7A0DA5C6" type=text/javascript></SCRIPT>

		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<link rel="icon" href="/favicon.ico;jsessionid=E368D1B1F69987AD15F219EE7A0DA5C6" type="image/x-icon" />

		<meta http-equiv="pragma" content="no-cache"> 
		<meta http-equiv="cache-control" content="no-cache"> 
		<meta http-equiv="expires" content="0">  

	</head>
	<body id="cas" class="fl-theme-iphone" >
		
    <div class="flc-screenNavigator-view-container">
        <div class="fl-screenNavigator-view">
			<div id="header" class="flc-screenNavigator-navbar fl-navbar fl-table">
				<div class="language"><a href="login?locale=en">English</a> | <a href="login?locale=zh_CN">中文</a></div>
				<div id="logo"></div>
                <h1 id="app-name" class="fl-table-cell"></h1>
            </div>		
            <div id="content" class="fl-screenNavigator-scroll-container"  >
			
<div id="content_center">
	<div id="left_side">
		<div id="side_banner">
			<div class="flash" id="jqueryWrapper"> 
				




<script>
	var xmlHttp = false;
	try {
		xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
	} catch (e) {
		try {
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		} catch (e2) {
			xmlHttp = false;
		}
	}
	if (!xmlHttp && typeof XMLHttpRequest != 'undefined') {
		xmlHttp = new XMLHttpRequest();
	}
	function addVist(photoLink,loginPagePhotoID)
	{
		if(photoLink==""||photoLink=='null'||photoLink==null){
			return;
		}
		if(loginPagePhotoID==""){
			return;
		}
		try
		{
			var url = "addVisitHistoryServ?loginPagePhotoID="+loginPagePhotoID;
			xmlHttp.open("GET",url,false);
			xmlHttp.onreadystatechange=function (){handleStateChange(photoLink)};
			xmlHttp.send(null);
		}
		catch (e)
		{
			alert('message_startRequest()'+e.message);
		}
	}
	function handleStateChange(photoLink)
	{
		try
		{
			if(xmlHttp.readyState==4){
				if(xmlHttp.status==200){
					window.open(photoLink,'','');
				}
			}
		}
		catch (e)
		{
			alert('handleStateChange()'+e.message);
		}
	}


</script>


<script>
$(document).ready(function(){
	$("#dot1").css("background-position"," 0 1px");
	clicker(1);
	//alert();
	setInterval(function(){$(".clickerRight").trigger("click")},5000);
});
</script>

		
	<div style="WIDTH: 430px; HEIGHT: 320px;DISPLAY:
		 ;margin:0" id="slider1"> 
		 
		<a href="javascript:addVist('https://sso.buaa.edu.cn','585E5964DCF71A6AE0530642A8C08D7A')" title="开学季">
			<IMG style="WIDTH: 430px;HEIGHT: 320px;" src="findPicServ?loginPagePhotoID=585E5964DCF71A6AE0530642A8C08D7A" >
		</a>
		
	</div>

</div>
			<a href="http://tpfbgl.buaa.edu.cn:8080/ViewHistoryPhotoApp.html" class="banner_more" target="_blank"></a>
		</div>
		<div id="sidebar">
			出于安全考虑，一旦您访问过那些需要您提供凭证信息的应用时，请操作完成之后关闭浏览器。</div>
	</div>
	<div class="box fl-panel" id="login">
	<div id="other_link"><a href="http://ucs.buaa.edu.cn/web/service/index.jsp"></a></div>
	<div id="login_box">
		<h2>统一身份认证中心</h2>
		<form id="fm1" class="fm-v clearfix" action="/login;jsessionid=E368D1B1F69987AD15F219EE7A0DA5C6" method="post" onsubmit="return checkCode()"><div class="errors_box" id="bigDiv">
				</div>
			<!-- 统一身份认证中心 -->
			<div class="row fl-controls-left">
				<div class="required_bg">
					<input id="username" name="username" class="required" tabindex="1" accesskey="n" type="text" value="" size="25" maxlength="40" autocomplete="false"/><input id="password" name="password" class="required" tabindex="2" accesskey="p" type="password" value="" size="25" maxlength="25" autocomplete="off"/><span class="username_label">用户账号：</span>
					<span class="password_label">密　　码：</span>
				</div>
				<div id="Forgot_Password">
					<a href="http://ucs.buaa.edu.cn/rePasswordAnonyAction.do" target="_blank">忘记密码</a>
				</div>
			</div>
			<div id="codeDiv" class="code-content" style="display:none">
				<label for="password" class="code-label">
					验证码</label>
				<!--form:input cssClass="required" cssErrorClass="error" id="code" size="15" maxlength="4" tabindex="3" accesskey="n" path="code" /-->
				<input class="code-input" type="text" id="code" name="code" maxlength="4" ><img class="code-img" alt="" id="ImageCodeServlet" src="/ImageCodeServlet" /> <a href="#" class="code-text" onClick="javascript:reloadCode();" title="点击更新验证码">看不清？</a>
			</div>
			<div class="row check" style="display:none">
				<input id="warn" name="warn" value="true" tabindex="3" accesskey="w
				" type="checkbox" />
				<label for="warn">
					转向其他站点前提示我。</label>
			</div>
			<div class="row btn-row">
				<input type="hidden" name="lt" value="LT-155058-MwnStCygJsafSUdDn5MlUAlp6n4Xbc" />
				<input type="hidden" name="execution" value="e1s1" />
				<input type="hidden" name="_eventId" value="submit" />
				<input class="btn-submit" name="submit" onfocus='this.blur()' accesskey="l" value="登录" tabindex="4" type="submit" />
				<input class="btn-reset" style="display:none" name="reset" accesskey="c" value="重置
				" tabindex="5" type="reset" /> 
			</div>
			<div id="function_link">
			<ul>
				<li class="float_left"><a href="http://ucs.buaa.edu.cn/validateRegEmpAnonyAction.do?flag_todo=firstStep" target="_blank">教职工账号激活</a></li>
				<!--li><a href="http://ucs.buaa.edu.cn/validateRegRetireAnonyAction.do?flag_todo=firstStep" target="_blank">离退休职工账号激活</a></li-->
				<li class="float_right"><a href="http://ucs.buaa.edu.cn/validateRegStuAnonyAction.do?flag_todo=firstStep" target="_blank">学生账号激活</a></li>
				<li class="float_left"><a href="http://ucs.buaa.edu.cn/validateRegTempAnonyAction.do?flag_todo=firstStep" target="_blank">其他人员账号激活</a></li>
				<li class="float_right"><a href="http://ucs.buaa.edu.cn" target="_blank">用户中心</a></li>
				<li class="clear"><a href="http://nic.buaa.edu.cn/zyfw/74618.htm" target="_blank">统一认证使用说明</a></li>
			</ul>
			</div>
		</form></div>
</div>
<script>
//�л���֤��
function reloadCode(){
	var newDate = new Date().getTime(); 
	document.getElementById("ImageCodeServlet").src = "/ImageCodeServlet?d="+newDate;
}

var objName = "fail";
var c = document.cookie.indexOf(objName+"="); 
if(c!=-1){
	document.getElementById("codeDiv").style.display="";
}else{//δ����cookie
	if(0 >=3){ //���ʳ����������ƴ���
		document.getElementById("codeDiv").style.display="";
		var date = new Date();
		var ms = 1800*1000;
		date.setTime(date.getTime() + ms)
		var str = objName+"=fail;expires=" + date.toGMTString();
		document.cookie = str;
	}
}

//��֤��Ч��
function checkCode(){
	var code = document.getElementById("codeDiv");
	var netID = document.getElementById("username").value;
	if(code.style.display!="none"){
		if(document.getElementById("code").value.length==0){
			document.getElementById("bigDiv").innerHTML="<div id=\"msg\" class=\"errors\">请输入验证码！</div>";
			document.getElementById("code").focus();
			return false;
		}
	}
	return true;
}

$(function(){
	//���û���������������ʽ����
	var inputs = $("input");
	for(var i=0;i<inputs.length;i++){
		if(inputs[i].name=="username" || inputs[i].name=="password"){
			var inputObj = $("input[name=" + inputs[i].name + "]");
			if(inputObj.hasClass("error")){
				inputObj.removeClass();
				inputObj.parent().removeClass();
				inputObj.addClass("input_errorbg");
				inputObj.parent().addClass("required_errorbg");
			}else{
				inputObj.removeClass();
				inputObj.parent().removeClass();
				inputObj.addClass("input_bg");
				inputObj.parent().addClass("required_bg");
			}
		}
	}
});
</script>
</div>
			
                <div id="footer" class="fl-panel fl-note fl-bevel-white fl-font-size-80">
                	<div id="footer_text">维护部门：网络信息中心 电话：86-10-82317005&nbsp;&nbsp;&nbsp;&nbsp;版权所有 2013 北京航空航天大学</div>
                </div>
            </div>
        </div>
		
		<script type="text/javascript" src="/js/jquery-ui.min.js;jsessionid=E368D1B1F69987AD15F219EE7A0DA5C6"></script>
        <script type="text/javascript" src="/js/cas.js;jsessionid=E368D1B1F69987AD15F219EE7A0DA5C6" ></script>
		
    </body>
</html>
