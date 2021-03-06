<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <base href="<?php echo base_url(); ?>">
    <title>欢迎登录</title>
    <link rel="stylesheet" href="css/shike/reset.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<header id="header"></header>
<section id="section" style="background-color: #182126;">
    <div class="login_content">
        <div class="login_box right">
            <div class="password_login">
                <h1 class="left">密码登录</h1>
                <p class="right">
                    <a href="<?=base_url('mall/register/shike_register')?>">注册试客</a>
                    <span>/</span>
                    <a href="<?=base_url('mall/register/merchant_register')?>">注册商家</a>
                </p>
            </div>
            <ul>
                <li class="account"><input type="text" placeholder="账号/手机号" id="account"/></li>
                <li class="password"><input type="password" placeholder="密码" id="password"/></li>
            </ul>
            <p class="error" id="inputerror"><span></span></p>
            <p class="login_btn">
                <input class="enter" type="button" value="登录" onclick="login()" />
            </p>
            <div class="forget_password">
                <a href="/forget_password">忘记密码</a>
                <span>/</span>
                <span>联系客服：</span>
                <img src="images/shike/login_button_QQ_default.png" alt="" onclick="window.open('http://wpa.qq.com/msgrd?v=3&uin=<?php echo $qq;?>&site=qq&menu=yes')">
            </div>
        </div>
    </div>
</section>
<footer id="footer"></footer>
<script src="js/shike/jquery-1.10.2.js"></script>
<script src="<?=base_url("js/common.js")?>"></script>
<script>
    $(function(){
        // $('#header').load('../common/login_header.html');
        // $('#footer').load('../common/footer.html');
    })
    function login(){
        var name = $("#account").val();
        var password = $("#password").val();
        if(name === '' || password === ''){
            $("#inputerror").text("请输入用户名和密码");
            return;
        }else{
            $.ajax({
                url : 'login/check_login',
                type : "POST",
                datatype : "json",
                cache : false,
                timeout : 20000,
                data : {name:name,password:password},
                success : function (result){
                    console.log(result);
                    result = $.parseJSON(result);
                    if(result.status){
                    	var pre_url = document.referrer;
                        console.log(pre_url.indexOf("register"));
                        if(pre_url.indexOf("search")!=-1)
                        {
                            history.back();
                        }else if(pre_url.indexOf("classify")!=-1)
                        {
                            history.back();
                        }else if(pre_url.indexOf("productdetails")!=-1)
                        {
                            history.back();
                        }else
                        {
                            location.href = '';
                        }
                        /*if(pre_url.indexOf("register")!=-1)
                        {
                            location.href = '';
                        }else if(pre_url.indexOf("forget_password")!=-1)
                        {
                            location.href = '';
                        }else {
                            if(result.seller_id){
                                //location.href = '/merchant_personal';
                                history.back();
                            }else{
                                //location.href = '/shike_personal';
                                history.back();
                            }
                        }*/
                    }else{
                        $("#inputerror").text("用户名或密码不正确");
                        return;
                    }
                },
                error : function(XMLHttpRequest, textStatus){
                    console.log(XMLHttpRequest);
                    console.log(textStatus);
                }
            })
        }

    }
</script>
</body>
</html>