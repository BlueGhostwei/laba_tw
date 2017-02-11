<script type="text/javascript">
    //头部DIV隐藏显示切换
    function showHideCode(){
        $(".ITuser").css("display","none")
        $(".ITuserda").show();
    }
    function showIMenuda(){
        $(".ITuserda").css("display","none")
        $(".ITuser").show();
    }
    function showexpmenu(){
        $(".menunt").css("display","none")
        $(".menuntda,.expmenu").show();
    }
    function showmenunt(){
        $(".menuntda,.expmenu").css("display","none")
        $(".menunt").show();
    }
</script>

<div class="frame">
    <div class="logo"><a href="index.php"><img src="img/logolaba.png" /></a></div>
    <div class="menunt" onclick="showexpmenu()"></div>
    <div class="menuntda" onclick="showmenunt()"></div>

    <div class="w_w">

    <div class="ITuser">
        <div class="Hlogo"><img src="img/bn66.png" /><div class="Hltext">5</div></div>
        <div class="IName" onClick="show();" >
            <p class="name">1171801173@qq.com</p>
            <p class="account">认证账户</p>
        </div>
        <div class="IMenu" onclick="showHideCode()"></div>
    </div>
        <div class="w_nav_1">
            <ul class="nav_1">
                <li><a href="login.php">登录</a></li>
                <li><a href="reg.php">注册</a></li>
                <li><a href="fapiao.php">发票申请</a></li>
                <li><a href="chongzhi.php">账户充值</a></li>
                <li><a href="huiyuanedit.php">会员资料编辑</a></li>
                <li><a href="huodongorder.php" title="媒体供应商_活动订单.psd">活动订单</a></li>
            </ul>
        </div>
</div>
<!--右弹购物车-->
<div class="ITuserda">
    <div style="background:#204186; float:left; width:260px; height:auto;">
        <div class="Hlogo"><img src="img/bn66.png" /></div>
        <div class="IName">
            <p class="name">1171801173@qq.com</p>
            <p class="account">认证账户</p>
        </div>
        <div class="IMenuda" onclick="showIMenuda()"></div>
        <div style="width:260px; float:left; height:auto;">
            <div class="IT_nt1"><div class="Hltext">5</div></div>
            <div class="IT_nt2"><div class="Hltext">5</div></div>
            <div class="IT_nt3"><img src="img/IT_nt3.png" /></div>
            <div class="IT_nt4"><img src="img/IT_nt4.png" /></div>
        </div>
    </div>
    <div style="background:#1d3a78; float:left; width:260px; height:auto;">
        <div class="IIO_nt">购物车共：<span>20</span>个</div>
        <ul class="ITorder">
            <li><a href="">
                    <div class="IOimg"><img src="img/bn66.png" /></div>
                    <div class="IOtext">
                        <h3>定单标题</h3>
                        <p>微信号：123456</p>
                    </div>
                </a></li>
            <li><a href="">
                    <div class="IOimg"><img src="img/bn66.png" /></div>
                    <div class="IOtext">
                        <h3>定单标题</h3>
                        <p>微信号：123456</p>
                    </div>
                </a></li>
        </ul>
    </div>
</div>
</div>