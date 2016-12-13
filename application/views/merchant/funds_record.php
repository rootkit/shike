<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>资金记录</title>
    <link rel="stylesheet" href="../../css/reset.css">
    <link rel="stylesheet" href="../../css/reset_content.css">
    <link rel="stylesheet" href="../../css/funds_record.css">
</head>
<body>
<header id="header"></header>
<section id="section">
    <div class="section_main">
        <!--左侧导航-->
        <aside class="left" id="left_nav"></aside>
        <!--资金管理-->
        <div class="funds_record left">
            <h1 class="title">资金记录</h1>
            <ul class="allRecord">
                <li class="record" data-toggle="funds_detail"><a href="javascript:void(0);">资金明细</a><span>|</span></li>
                <li class="record" data-toggle="recharge_record"><a href="javascript:void(0);">充值记录</a><span>|</span></li>
                <li class="record" data-toggle="withdraw_record"><a href="javascript:void(0);">提现记录</a><span>|</span></li>
            </ul>
            <div>
            <!--资金明细-->
            <table class="funds_detail">
                <tr>
                    <td>时间</td>
                    <td>入款</td>
                    <td>扣款</td>
                    <td>结余</td>
                    <td>备注</td>
                </tr>
                <tr>
                    <td>2016.03.03 10:00:00</td>
                    <td>&yen;500.00</td>
                    <td>&yen;0.00</td>
                    <td>&yen;500.00</td>
                    <td>押金充值</td>
                </tr>
                <tr>
                    <td>2016.03.03 10:00:00</td>
                    <td>&yen;0.00</td>
                    <td>&yen;100.00</td>
                    <td>&yen;400.00</td>
                    <td>试用支付冻结</td>
                </tr>
                <tr>
                    <td>2016.03.03 10:00:00</td>
                    <td>&yen;500.00</td>
                    <td>&yen;0.00</td>
                    <td>&yen;300.00</td>
                    <td>押金提现</td>
                </tr>
            </table>
            <!--充值记录-->
            <table class="recharge_record">
                <tr>
                    <td>充值时间</td>
                    <td>充值流水号</td>
                    <td>金额</td>
                    <td>状态</td>
                </tr>
                <tr>
                    <td>2016.03.03 10:00:00</td>
                    <td>123456789</td>
                    <td>&yen;500.00</td>
                    <td>充值成功</td>
                </tr>
                <tr>
                    <td>2016.03.03 10:00:00</td>
                    <td>123456789</td>
                    <td>&yen;500.00</td>
                    <td>充值失败</td>
                </tr>
            </table>
            <!--提现记录-->
            <table class="withdraw_record">
                <tr>
                    <td>提现申请时间</td>
                    <td>提现流水号</td>
                    <td>金额</td>
                    <td>实际到账金额</td>
                    <td>状态</td>
                </tr>
                <tr>
                    <td>2016.03.03 10:00:00</td>
                    <td>12346789</td>
                    <td>&yen;500.00</td>
                    <td>&yen;495.00</td>
                    <td>提现成功</td>
                </tr>
                <tr>
                    <td>2016.03.03 10:00:00</td>
                    <td>4567891233</td>
                    <td>&yen;400.00</td>
                    <td>&yen;395.00</td>
                    <td>提现中</td>
                </tr>
                <tr>
                    <td>2016.03.03 10:00:00</td>
                    <td>45612345662</td>
                    <td>&yen;300.00</td>
                    <td>&yen;300.00</td>
                    <td>押金提现</td>
                </tr>
            </table>
            </div>
        </div>
    </div>
</section>
<footer id="footer"></footer>
<script src="../../js/jquery-1.10.2.js"></script>
<script>
    $(function(){
        $('#header').load("../common/merchant_header.html");
        $('#footer').load("../common/footer.html");
        $('#left_nav').load("../common/left_nav.html");
        $('.record').bind('click',function(){
            $(this).find('a').css('color','#f10180');
            $(this).siblings().find('a').css('color','#323232')
        });

        $('[data-toggle="funds_detail"]').bind('click',function(){
            $('.funds_detail').css('display','block');
            $('.funds_detail').siblings().css('display','none');
        });
        $('[data-toggle="recharge_record"]').bind('click',function(){
            $('.recharge_record').css('display','block');
            $('.recharge_record').siblings().css('display','none');
        });
        $('[data-toggle="withdraw_record"]').bind('click',function(){
            $('.withdraw_record').css('display','block');
            $('.withdraw_record').siblings().css('display','none');
        })
    })
</script>
</body>
</html>









