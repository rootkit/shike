<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>发布试用</title>
    <link rel="stylesheet" href="css/merchant/reset.css">
    <link rel="stylesheet" href="css/merchant/reset_content.css">
    <link rel="stylesheet" href="css/merchant/settings_search.css">
</head>
<body>
<header id="header"></header>
<section id="section">
    <div class="section_main">
        <!--左侧导航-->
        <aside class="left" id="left_nav"></aside>
        <!--右侧店铺管理-->
        <div class="store_content left">
            <h1 class="title">发布试用</h1>
            <!--进度条-->
            <div class="progress_bar">
                <img src="images/merchant/sj_fbsy_bg_jdt_three_default.png" alt="">
            </div>
            <!--3.设置商品搜索-->
            <div class="settings_search">
                <h2 class="title">3.设置商品搜索</h2>
                <div class="search_content">
                    <p>
                        <a href="javascript:void(0);">淘宝平台商品</a>
                        只能选择“通过淘宝自然搜索”，
                        <a href="javascript:void(0);">天猫平台商品</a>
                        需要从“通过淘宝自然搜索”或“通过天猫自然搜索”二选一。
                    </p>
                    <!--通过淘宝搜索-->
                    <div class="by_taobao search_active" data-toggle="search">
                        通过淘宝自然搜索
                    </div>
                    <div class="taobao_content">
                        <h3>请填写搜索信息</h3>
                        <p>请填写
                            <a href="">“商品主图”</a>
                            ，以便试客快速找到任务商品：
                            <input class="picture_url" type="text" placeholder="请输入商品主图URL"/>
                            <span>请输入商品主图URL</span>
                        </p>
                        <h4>搜索关键词：</h4>
                        <p>
                            请试客在www.taobao.com首页的搜索框内输入关键词：
                            <input type="text"/>进行商品搜索（请尽量选择大词和长尾词）
                            <span>商品搜索关键词不能为空</span>
                        </p>
                        <p class="search_commodity">
                            在搜索的列表页面，通过以下分类找到商品：
                            <input type="text"/>
                            <input type="text"/>
                            <input type="text"/>
                            <input type="text"/>
                            <input type="text"/>
                        </p>
                        <p class="such_as">例如：香奈儿、短裙、修身、连衣裙</p>
                        <!--折扣与服务-->
                        <div class="serve">
                            <p>折扣和服务：
                                <span class="checkbox">包邮</span>
                                <span class="checkbox">赠送退货运费险</span>
                                <span class="checkbox">货到付款</span>
                                <span class="checkbox">海外商品</span>
                                <span class="checkbox">二手</span>
                                <span class="checkbox">天猫</span>
                            </p>
                            <p>
                                <span class="checkbox">正品保障</span>
                                <span class="checkbox">24小时内发货</span>
                                <span class="checkbox">7天退换货</span>
                                <span class="checkbox">旺旺在线</span>
                                <span class="checkbox">新品</span>
                            </p>
                            <p>排列方式：
                                <select name="">
                                    <option value="">综合排序</option>
                                    <option value="">销量从高到低</option>
                                    <option value="">信用从高到低</option>
                                </select>
                            </p>
                        </div>
                        <h3>可选搜索信息</h3>
                        <p>试客可用列表筛选中“价格筛选”、“发货地”缩小范围（选填）。</p>
                        <p class="last">价格：
                            <input type="text"/> - <input type="text"/>
                            发货地：<input type="text"/>
                        </p>
                    </div>
                    <!--通过天猫搜索-->
                    <div class="by_tmall" data-toggle="search">
                        通过天猫自然搜索
                    </div>
                    <div class="tmall_content">
                        <h3>请填写搜索信息</h3>
                        <p>请填写
                            <a href="">“商品主图”</a>
                            ，以便试客快速找到任务商品：
                            <input class="picture_url" type="text" placeholder="请输入商品主图URL"/>
                            <span>请输入商品主图URL</span>
                        </p>
                        <h4>搜索关键词：</h4>
                        <p>
                            请试客在www.tmall.com首页的搜索框内输入关键词：
                            <input type="text"/>进行商品搜索（请尽量选择大词和长尾词）
                            <span>商品搜索关键词不能为空</span>
                        </p>
                        <p class="search_commodity">
                            在搜索的列表页面，通过以下分类找到商品：
                            <input type="text"/>
                            <input type="text"/>
                            <input type="text"/>
                            <input type="text"/>
                            <input type="text"/>
                        </p>
                        <p class="such_as">例如：香奈儿、短裙、修身、连衣裙</p>
                        <!--折扣与服务-->
                        <div class="serve">
                            <p>折扣和服务：
                                <span class="checkbox">新到商品</span>
                                <span class="checkbox">包邮</span>
                                <span class="checkbox">折扣</span>
                                <span class="checkbox">搭配减价</span>
                                <span class="checkbox">满就减</span>
                                <span class="checkbox">货到付款</span>
                            </p>
                            <p>排列方式：
                                <select name="" id="">
                                    <option value="">综合排序</option>
                                    <option value="">销量从高到低</option>
                                    <option value="">信用从高到低</option>
                                </select>
                            </p>
                        </div>
                        <h3>可选搜索信息</h3>
                        <p>试客可用列表筛选中“价格筛选”、“发货地”缩小范围（选填）。</p>
                        <p class="last">价格：
                            <input type="text"/> - <input type="text"/>
                        </p>
                    </div>
                </div>

                <div class="nextStep_btn">
                    <input onclick="location.href='/merchant_issue_try2?act_id=<?php echo $act_id ?>'" type="button" value="上一步"/>
                    <input onclick="next_step();" type="button" value="下一步"/>
                </div>
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

        $('[data-toggle="search"]').bind('click',function(){
            $(this).addClass('search_active');
            $(this).siblings().removeClass('search_active');
        });
        $('.by_taobao').click(function(){
            $('.tmall_content').slideUp();
            $('.taobao_content'). slideDown()
        });
        $('.by_tmall').click(function(){
            $('.taobao_content').slideUp();
            $('.tmall_content'). slideDown()
        });
        $('.checkbox').click(function(){
            $(this).toggleClass('search_active');
        });
    })
</script>
<script>
    function next_step(){
        //var seller_id = <?php echo $seller_id ?>;
        var act_id = "<?php echo $act_id ?>";
         location.href=admin.url+"merchant_issue_try4?act_id="+act_id;
        // var commodity_name = $("#commodity_name").val();
        // var shop_url = $("#shop_url").val();
        // var commodity_classify = $("#commodity_classify").val();
        // var commodity_picture = $("#commodity_picture").val();
        // var thecolor = $("#thecolor").val();
        // var thesize = $("#thesize").val();
        // var unit_price = $("#unit_price").val();
        // var buy_num = $("#buy_num").val();
        // var freight = $("#freight").val();
        // alert(shop_name);
        // alert(platform_id);
        // alert(seller_id);
        // $.ajax({
        //     url : admin.url+'merchant_issue_try2/update_fake_activity2',
        //     data:{act_id:act_id,commodity_name:commodity_name,shop_url:shop_url,commodity_classify:commodity_classify,commodity_picture:commodity_picture,thecolor:thecolor,thesize:thesize,unit_price:unit_price,buy_num:buy_num,freight:freight},
        //     type : 'post',
        //     cache : false,
        //     success : function (data){
        //        console.log(data);
        //        location.href=admin.url+"merchant_issue_try3?act_id="+act_id;
        //     },
        //     error : function (XMLHttpRequest, textStatus){
        //         console.log("insert_fake_activity false");
        //         console.log(XMLHttpRequest);
        //         console.log(textStatus);
        //     }
        // })
    }
</script>
</body>
</html>









