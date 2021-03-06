<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title></title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" />
    <script src="http://www.jq22.com/jquery/jquery-1.6.2.js"></script>
    <script type="text/javascript" src="../js/jquery.reveal.js"></script>
    {{--<script src="http://www.jq22.com/js/jq.js"></script>--}}

</head>
<script type="text/javascript">
$(function () {
    $("#send_sms_button").click(function () {
       // var _form=form.getFormData();//获取表单参数
        var moblie_number= $('#mobile_number').val();
        var _token= $('input[name="_token"]').val();
        var password= $('input[name="password"]').val();
        var password_confirmation= $('input[name="password"]').val();

        //判断手机号码是否正确合法
        if(!IsTel(moblie_number)){
            alert('请输入正确的手机号码');
        }
        $.ajax({
            url:'{{route('send.sms')}}',
            data: {
                'username':moblie_number,
                'password':password,
                '_token':_token
            },
            type: 'post',
            dataType: "json",
            stopAllStart: true,
            success: function (data) {
                if (data.sta == '0') {
                        alert(data.msg || '请求成功');
                } else {
                        alert(data.msg || '请求失败');
                }
            },
            error: function () {
                alert('网络发生错误');
                return false;
            }
        });
        function IsTel(Tel){
            var re=new RegExp(/^((\d{11})|^((\d{7,8})|(\d{4}|\d{3})-(\d{7,8})|(\d{4}|\d{3})-(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1})|(\d{7,8})-(\d{4}|\d{3}|\d{2}|\d{1}))$)$/);
            var retu=Tel.match(re);
            if(retu){
                return true;
            }else{
                return false;
            }
        }
    });

});
</script>
<body style="background:url(../img/RELogin.jpg) repeat-x top;">
<div id=RELogin style="">
    <div style=" width:250px; margin:auto;"><a href="index.php"><img src="../img/logolaba.png" style=" width:250px; height:auto"></a></div>
    <div style="width: 850px;HEIGHT: 530px;background:#fff;border-radius:10px;">
        <div class=LoginHead>
            <H1>用户注册</H1>
            <div class=LGRight>&nbsp;</DIV>
        </div>
        <div class="LGn1" style="float:left; margin-left:50px;">
            <div class="LGnt6"><p>手机号码:</p>
                <input type="text" name="mobile_number" id="mobile_number"  class="LGnt2"/>
                {{ csrf_field() }}
            </div>
            <div class="LGnt6"><p>登录密码:</p>
                <input type="password" name="password" id="textfield"  class="LGnt2"/>
            </div>
            <div class="LGnt6"><p>验证码:</p>
                <input type="text" name="user_code" id="textfield"  class="LGnt3"/>
                <div class="LGnt4"><input type="submit" name="button" id="send_sms_button" value="获取验证码" class="LGn3"/></div>
            </div>
            <div class="LGntnn6">
                <input name="" type="checkbox" value="" /><span style="margin-left:10px;"><a  href="" target="_blank">阅读《服务协议》</a></span>
            </div>
            <a  class="big-link" data-reveal-id="myModal">
                <input type="button" name="button" id="button" value="立即注册" class="LGButton3" />
            </a>
        </div>
        <div class="LGn2">
            <h4>已经注册过？<a href="{{route('user.login')}}"><input type="submit" name="button" id="button" value="登 录" class="LGBo1"/></a></h4>
            <span>登录喇叭传媒，三百万网络推广服务商为您服务！</span>
            <p>如有问题，请联系在线客服：</p>
            <div><a href="http://wpa.qq.com/msgrd?v=3&uin=3315033406&site=在线客服&menu=yes" target="_blank"><img src="../img/LGn2.jpg" alt="点我咨询"></a></div>
        </div>
    </div>
</div>

<!--弹窗完善信息页-->
<div id="myModal" class="reveal-modal">
    <div><img src="../img/myModal.jpg" /></div>
    <div style="width:570px;HEIGHT:450px; margin-top:20px;">
        <div class="LGnt7"><p>昵称:</p>
            <input type="text" name="nickname" id="textfield"  class="IFN1"/>
        </div>
        <div class="LGnt7"><p>联系人:</p>
            <input type="text" name="Contacts" id="textfield"  class="IFN1"/>
        </div>
        <div class="LGnt7"><p>电子邮箱:</p>
            <input type="text" name="E-mail" id="textfield"  class="IFN1"/>
            <i>* 请填写有效的邮箱地址，接收通知及定单信息。</i>
        </div>
        <div class="LGnt7"><p>QQ:</p>
            <input type="text" name="QQ" id="textfield"  class="IFN1"/>
        </div>
        <div class="LGnt7"><p style=" height:90px;">资料类型:</p>
            <ul style="display:block;">
                <li><input name="" type="checkbox" value="" />新闻/软文</li>
                <li><input name="" type="checkbox" value="" />草根微信</li>
                <li><input name="" type="checkbox" value="" />草根微博</li>
                <li><input name="" type="checkbox" value="" />草根朋友圈</li>
                <li><input name="" type="checkbox" value="" />名人/媒体微信</li>
                <li><input name="" type="checkbox" value="" />名人/媒体微博</li>
                <li><input name="" type="checkbox" value="" />名人/媒体微信</li>
                <li><input name="" type="checkbox" value="" />平媒</li>
            </ul>
        </div>
        <div><input type="submit" name="button" id="button" value="保  存" class="LGButton3"/></div>
    </div>
    <a class="close-reveal-modal">&#215;</a>
</div>

</body>
</html>
