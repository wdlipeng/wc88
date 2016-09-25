function checkmobile(clkname,objname,dispname,imgcodename){	
	var obj = $('#'+objname);
	var uname = obj.val();
	if (isEmpty(uname) || !RegMobile(uname)) {		
		showhidets(dispname,1,'输入正确的手机号！');	
		obj.focus();
		return false;
    }
    
	var obj2 = $('#'+imgcodename);
	var imgcode = obj2.val();
	if(isEmpty(imgcode)) {
		if(clkname == 'btnregscode'){//注册					
			showhidets('rc_imgcode',1,'请输入正确的图片验证码！');
	 	}if(clkname == 'btncpwdcode'){//注册					
			showhidets('cpwd_imgcode',1,'请输入正确的图片验证码！');
	 	}else{//找回密码				
			showhidets('zh_imgcode',1,'请输入正确的图片验证码！');
	 	}		
		return false;
    }else{
		if(clkname == 'btnregscode'){//注册					
			showhidets('rc_imgcode',0,'');
	 	}
                if(clkname == 'btncpwdcode'){//注册					
			showhidets('cpwd_imgcode',0,'');
	 	}
                else{//找回密码				
			showhidets('zh_imgcode',0,'');
	 	}
	}
    
    var checkurl = "/default/login/verifytheun";
    var data = "uname="+uname+"&code="+imgcode;
    var type = "POST";
    $.ajax({
        url : checkurl,
        data : data,
        type : type,
        cache : false,
        async:false,
        success : function(data) {
            if(data == "err"){
                showhidets(dispname,1,'请您输入正确的手机号！');	
            }else if(data){
                if(clkname == 'btnregscode'){//注册					
                        showhidets(dispname,1,'该手机号码已注册。请更换手机号或<a href="/default/login" >立即登录</a>！');						
                        $("#regusername").focus();
                }else{//找回密码
                        //发送验证码
                        sendsms(clkname,uname,dispname,imgcodename);
                }				 	
            }else{
                if(clkname == 'btnregscode'){//注册	
                        //发送验证码  
                        sendsms(clkname,uname,dispname,imgcodename);    		
                }else{//找回密码
                        showhidets(dispname,1,'该手机号码还未注册，请先去注册！');	
                }		          	
            }
        }
    });
	
}//发送手机验证码
function sendsms(clkname,mobile,dispname,imgcodename){
    var codeobj = $('#'+imgcodename);
    var imgcode = codeobj.val();
    var reg_phone = $('#'+mobile);
    var mobile = reg_phone.val();
    var url = "index.php?mod=ajax&act=get_smscode";
    var data = "mobile="+mobile+"&imgcode="+imgcode;
    var type = "POST";
    $.ajax({
		url : url,
		data : data,
		type : type,
		cache : false,
		async:true,
		success : function(data) {
			if(data == 'err'){
//				showhidets(dispname,1,'请输入正确的手机号！');
				alert('由于系统繁忙，很遗憾短信没有发送成功，请稍后再试');
			}else if(data == -1){				
				if(clkname == 'btnregscode'){//注册
					showhidets('rc_imgcode',1,'请输入正确的图片验证码！');	
				}else if(clkname =='btnsendcode'){ 
					showhidets('zh_imgcode',1,'请输入正确的图片验证码！');	
				}else if(clkname =='btnalycode'){ //申请提现
					showtips(dispname,'请输入正确的图片验证码！');
				}else if(clkname =='btncpwdcode'){ 
					showhidets('cpwd_imgcode',1,'请输入正确的图片验证码！');	
                                }
				
			}else{
				$("#"+clkname).attr("disabled",false);
				if(clkname == 'btnregscode'){
					timeReg(clkname);  
				}else if(clkname =='btnsendcode'){ 
					time(clkname);
				}else if(clkname =='btnalycode'){ 
					timeApply(clkname);
				}else if(clkname =='btncpwdcode'){ 
					timeCpwd(clkname);
				}			
				
			}
		}
	});
	
}

//手机获取验证码倒计时代码――忘记密码页面

var wait=120;
function time(oname) {
	var obj = $("#"+oname);
	if (wait == 0) {	   
	    obj.attr("disabled",false);
	    obj.html("免费获取验证码");
	    wait = 120;
	} else {    
	    obj.attr("disabled",true);
	    obj.html("重新发送(" + wait + "s)");
	    wait--;
	    setTimeout(function() {
	        time(oname)
	    },
	    1000)
	}
} 
//手机获取验证码倒计时代码――注册页面

var waitReg=120;
function timeReg(oname) {
	var obj = $("#"+oname);
	if (waitReg == 0) {	   
	    obj.attr("disabled",false);
	    obj.html("点击获取");
	    waitReg = 120;
	} else {    
	    obj.attr("disabled",true);
	    obj.html("重新发送(" + waitReg + "s)");
	    waitReg--;
	    setTimeout(function() {
	        timeReg(oname)
	    },
	    1000)
	}
}  
//手机获取验证码倒计时代码――申请提现页面

var waitApply=120;
function timeApply(oname) {
	var obj = $("#"+oname);
	if (waitApply == 0) {	   
	    obj.attr("disabled",false);
	    obj.html("免费获取验证码");
	    waitApply = 120;
	} else {    
	    obj.attr("disabled",true);
	    obj.html("重新发送(" + waitApply + "s)");
	    waitApply--;
	    setTimeout(function() {
	        timeApply(oname)
	    },
	    1000)
	}
}
//手机获取验证码倒计时代码――忘记密码页面

var waitCpwd=120;
function timeCpwd(oname) {
	var obj = $("#"+oname);
	if (waitCpwd == 0) {	   
	    obj.attr("disabled",false);
	    obj.html("免费获取验证码");
	    waitCpwd = 120;
	} else {    
	    obj.attr("disabled",true);
	    obj.html("重新发送(" + waitCpwd + "s)");
	    waitCpwd--;
	    setTimeout(function() {
	        timeCpwd(oname)
	    },
	    1000)
	}
}

function showhidets(dispname,status,content){
	if(status == '1'){
		$('#'+dispname).html(content);
		$('#'+dispname).show();
	}else{
		$('#'+dispname).html('');
		$('#'+dispname).hide();
	}
}