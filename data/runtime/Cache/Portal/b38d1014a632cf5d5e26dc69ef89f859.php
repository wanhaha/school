<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
		
<div class="pMiniBar">
    <div class="wrap clearfix">
        <div class="pTopMap">
            <div class="tmTit" id="pSchoolMap"><a href="http://www.gaosiedu.com/gsschool/" target="_blank">找到离您最近的高思学校</a><s></s></div>
            <div class="tmCon">
                <div class="tmBox">
                    <ul class="schoolList clearfix">
                       </ul>
                </div>
            </div>
        </div>

        <div class="pLogin left "><a href="http://student.gaosiedu.com/?source=aHR0cDovL3d3dy5nYW9zaWVkdS5jb20v" class="btn login">登录</a><a href="http://student.gaosiedu.com/System/User/registerS" class="btn">注册</a></div>
        <div class="pMinav">
            <div class="left">
                <a href="javascript:void(0);" id="addFavorite" class="s1"><s></s>收藏高思</a>
                <a href="http://student.gaosiedu.com/" target="_blank" class="s2"><s></s>学员系统</a>
            </div>
            <div class="qxSite left">
                <a href="http://student.gaosiedu.com/" target="_blank" class="tmTit">
                    旗下网站<s></s>
                </a>
                <ul>
                    <li><a href="http://www.gaosivip.com/" target="_blank">高思一对一</a></li>
                    <li><a href="http://www.aisichuang.com/" target="_blank">爱思创</a></li>
                    <li><a href="http://www.aixuexi.com/" target="_blank">爱学习</a></li>
                    <li><a href="http://www.91haoke.com/" target="_blank">91好课</a></li>
                </ul>
            </div>
            <p class="left">投诉建议：56639900（8:00-21:00）   </p>
        </div>
    </div>
</div>
        <link href="/themes/simplebootx/Public/css/style.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/css/b2c.tip.css" />
        <link href="/themes/simplebootx/Public/css/slippry/slippry.css" rel="stylesheet">
        <script type="text/javascript" src="/themes/simplebootx/Public/js/jquery.js"></script
        <script src="/themes/simplebootx/Public/js/slippry.min.js"></script>
        <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/css/common.css" />
        <link rel="stylesheet" type="text/css" href="/themes/simplebootx/Public/css/b2c_pub.css" />



	</head>
<body class="indexpage" id="default">
<?php echo hook('body_start');?>
<div class="pHeader">
    <div class="wrap clearfix">
        <div class="logo"><a href="./index_files/index.html">高思教育</a></div>

        <div class="tSearch">
            <ul class="tabs">
                <li class="current">模糊搜索</li>
                <li>条件搜索</li>
            </ul>
            <div class="bd">
                <div class="sInput">
                    <form method="post" action="http://www.gaosiedu.com/searchbar/search" target="_blank">
                        <input type="text" name="keyword" placeholder="请输入课程名称或老师姓名" class="input"><input type="submit" value="搜索" class="sbar_button">
                    </form>
                </div>


            </div>
        </div>

        <div class="tel">
            　课程咨询：<span>010-56639999</span>   (8:00-21:00) <br>
            一对一课程：<span>010-56639988</span>   (9:00-20:00)
        </div>
    </div>
</div>

<div class="header">

    <!-- sline end -->
    <div class="navigationBar">
        <div class="navigationBarInnel">
            <tt title="所有产品分类"></tt>
            <div class="mainMenuV">
                <a href="http://www.w2bc.com/">首页</a> <a href="http://www.w2bc.com/" target="_blank">
                网游交易区</a> <a href="http://www.w2bc.com/" target="_blank">积分商城</a> <a href="http://www.w2bc.com/?"
                                                                                     target="_blank">免费游戏</a>
            </div>
            <!-- mainMenuV end -->
        </div>
        <!-- mainMenudl end -->
    </div>
    <!-- navigationBar end -->
</div>
<!-- header end -->


<div class="header">

    <!-- sline end -->
    <div class="navigationBar1">
        <div class="navigationBarInnel">
            <div id="of_mainBody" class="push_t" >
                <!--左侧栏开始-->
                <script>
                    $(document).ready(function () {

                        $("#cardname").keyup(function () {
                            $(this).removeClass("cardnameV");
                        })
                        $("#cardname").blur(function () {
                            if ($(this).val() != "") {
                                $(this).removeClass("cardnameV");
                            } else {
                                $(this).addClass("cardnameV");
                            }
                        })
                        $(".mainProNav dl dt").mouseover(function () {
                            $(".mainProNav dl").removeClass("dlHover");
                            $(this).parent().addClass("dlHover");
                        })
                        $(".mainProNav").hover(function () {
                            $(this).addClass("mainProNavHover");
                        }, function () {
                            $(this).removeClass("mainProNavHover");
                            $(".mainProNav dl").removeClass("dlHover");
                        })
                    });
                </script>
                <div class="side_small tag_line float_l">
                    <div class="mainProNav ">
                        <dl class="navM1 " >
                            <dd>
                                <h6>
                                    <a href="http://www.w2bc.com/">聚合分享</a></h6>
                                <p>
                                    <a href="http://www.w2bc.com/">91游戏</a><a href="http://www.w2bc.com/">梦幻国度</a><a
                                        href="http://www.w2bc.com/">Q币随意直充</a><a href="http://www.w2bc.com/">魔兽世界</a><a href="http://www.w2bc.com/"
                                                                                                                        class="more">查看更多...</a></p>
                                <h6>
                                    <a href="http://www.w2bc.com/">游戏卡密</a></h6>
                                <p>
                                    <a href="http://www.w2bc.com/">骏网一卡通</a><a href="http://www.w2bc.com/">完美一卡通</a><a
                                        href="http://www.w2bc.com/">聚合素材</a><a href="http://www.w2bc.com/">巨人一卡通</a><a href="http://www.w2bc.com/"
                                                                                                                       class="more">查看更多...</a></p>
                                <h5>
                                    上面没找到，别漏了这些哦。</h5>
                                <ul>
                                    <li><a href="http://www.w2bc.com/">网页游戏充值</a></li>
                                    <li><a href="http://www.w2bc.com/">外服网游点卡</a></li>
                                    <li><a href="http://www.w2bc.com/">游戏辅助卡</a></li>
                                    <li><a href="http://www.w2bc.com/">棋牌休闲游戏</a></li>
                                    <li><a href="http://www.w2bc.com/">游戏相关实物</a></li>
                                    <li><a href="http://www.w2bc.com/">手机游戏</a></li>
                                </ul>
                            </dd>
                            <dt>游戏充值类</dt>
                        </dl>
                        <dl class="navM2">
                            <dd>
                                <h2>
                                    <a href="http://www.w2bc.com/">手机充值(直充)</a></h2>
                                <h6>
                                    <a href="http://www.juheweb.com">话费充值卡</a></h6>
                                <p>
                                    <a href="http://www.w2bc.com/">全国移动话费100元卡密</a><a href="http://www.w2bc.com/">全国联通话费100元卡密</a><a
                                        href="http://www.w2bc.com/" class="more">查看更多...</a></p>
                                <ul class="hide">
                                    <li><a href="http://www.w2bc.com/">IP电话卡</a></li>
                                </ul>
                            </dd>
                            <dt>话费充值类</dt>
                        </dl>
                        <dl class="navM3">
                            <dd>
                                <ul>
                                    <li><a href="http://www.w2bc.com/">网络及休闲</a></li>
                                    <li><a href="http://www.w2bc.com/">学习教育</a></li>
                                    <li><a href="http://www.w2bc.com/">娱乐影视</a></li>
                                    <li><a href="http://www.w2bc.com/">网络加速器</a></li>
                                    <li><a href="http://www.w2bc.com/">网上保险</a></li>
                                    <li><a href="http://www.w2bc.com/">电子杂志</a></li>
                                    <li><a href="http://www.w2bc.com/">生活服务类</a></li>
                                </ul>
                            </dd>
                            <dt>互联网充值类</dt>
                        </dl>
                        <dl class="navM4">
                            <dd>
                                <h2>
                                    <a href="http://www.w2bc.com/">银行转帐</a>
                                </h2>
                                <ul class="hide">
                                    <li><a href="http://www.w2bc.com/">信用卡还款</a></li>
                                    <li><a href="http://www.w2bc.com/">欧飞游戏一卡通</a></li>
                                    <li><a href="http://www.w2bc.com/">欧飞话费一卡通</a></li>
                                </ul>
                                <h6>
                                    <a href="http://www.w2bc.com/?cp63.html">支付帐号充值</a></h6>
                                <p>
                                    <a href="http://www.w2bc.com/?630101.htm">支付宝账号充值</a><a href="http://www.w2bc.com/?6303.html">支付宝卡</a><a
                                        href="http://www.w2bc.com/?6304.html">支付宝实物卡</a><a href="http://www.w2bc.com/?cp63.html"
                                                                                           class="more">查看详情...</a></p>
                                <h6>
                                    <a href="http://www.w2bc.com/?6401.html">江苏电费充值缴费卡</a></h6>
                                <p>
                                    <a href="http://www.w2bc.com/?640103.htm">50元</a><a href="http://www.w2bc.com/?640101.htm">100元</a><a
                                        href="http://www.w2bc.com/?640102.htm">200元</a><a href="http://www.w2bc.com/?6401.html"
                                                                                          class="more">查看其他面值...</a></p>
                                <h6>
                                    <a href="http://www.w2bc.com/?3603.html">欧飞游戏一卡通</a></h6>
                                <p>
                                    <a href="http://www.w2bc.com/">5元</a><a href="http://www.w2bc.com/">10元</a><a href="http://www.w2bc.com/">15元</a><a
                                        href="http://www.w2bc.com/">30元</a><a href="http://www.w2bc.com/">50元</a><a href="http://www.w2bc.com/">100元</a><a
                                        href="http://www.w2bc.com/" class="more">查看详情...</a></p>
                                <h6>
                                    <a href="http://www.w2bc.com/">欧飞话费一卡通</a></h6>
                                <p class="last">
                                    <a href="http://www.w2bc.com/">30元</a><a href="http://www.w2bc.com/">50元</a><a href="http://www.w2bc.com/">100元</a><a
                                        href="http://www.w2bc.com/" class="more">查看详情...</a></p>
                            </dd>
                            <dt>缴费支付类</dt>
                        </dl>
                        <dl class="navM5">
                            <dd>
                                <ul>
                                    <li><a href="http://www.w2bc.com/">系统应用类</a></li>
                                    <li><a href="http://www.w2bc.com/">媒体娱乐类</a></li>
                                    <li><a href="http://www.w2bc.com/">股票证券类</a></li>
                                    <li><a href="http://www.w2bc.com/">图形图像类</a></li>
                                    <li><a href="http://www.w2bc.com/">行业管理类</a></li>
                                    <li><a href="http://www.w2bc.com/">网吧特供类</a></li>
                                    <li><a href="http://www.w2bc.com/">在线杀毒卡</a></li>
                                </ul>
                            </dd>
                            <dt>软件产品类</dt>
                        </dl>
                        <dl class="navM6">
                            <dd>
                                <ul>
                                    <li><a href="http://www.w2bc.com/" target="_blank">武尊</a></li>
                                    <li><a href="http://www.w2bc.com/" target="_blank">无双三国</a></li>
                                    <li><a href="http://www.w2bc.com/" target="_blank">武斗乾坤</a></li>
                                    <li><a href="http://www.w2bc.com/" target="_blank">烈焰</a></li>
                                    <li><a href="http://www.w2bc.com/" target="_blank">三国论剑</a></li>
                                    <li><a href="http://www.w2bc.com/" target="_blank">战三国</a></li>
                                </ul>
                                <h2>
                                    <a href="http://www.w2bc.com/" target="_blank">更多超酷游戏</a></h2>
                            </dd>
                            <dt>超酷游戏</dt>
                        </dl>
                    </div>
                    <!-- mainProNav end -->
                </div>
                <!--以下代码不作为插件效果内容 -->

            </div>
            <!-- mainMenuV end -->
        </div>
        <!-- mainMenudl end -->
    </div>
    <!-- navigationBar end -->
</div>


<?php $home_slides=sp_getslide("index"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>
<ul id="homeslider" class="unstyled">
    <?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li>
            <div class="caption-wraper">

            </div>
            <a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a>
        </li><?php endforeach; endif; ?>
</ul>


<div class="of_whole">
    <!--tp通栏广告-->



</div>

<?php echo hook('footer');?>

<!--页脚-->
<div class="pAboutlink">
    <div class="wrap clearfix">
        <dl class="d1">
            <dt><i></i>关于高思</dt>
            <dd><a href="http://www.gaosiedu.com/about/gsjs/" target="_blank">高思介绍</a></dd>
            <dd><a href="http://www.gaosiedu.com/about/gswh/" target="_blank">高思文化</a></dd>
            <dd><a href="http://www.gaosiedu.com/about/jyln/" target="_blank">教育理念</a></dd>
            <dd><a href="http://www.gaosiedu.com/sitemap.shtml" target="_blank">网站地图</a></dd>
        </dl>
        <dl class="d2">
            <dt><i></i>选择高思</dt>
            <dd><a href="http://www.gaosiedu.com/about/pinpai/" target="_blank">高思品牌</a></dd>
            <dd><a href="http://www.gaosiedu.com/about/mingshi/" target="_blank">优秀名师</a></dd>
            <dd><a href="http://www.gaosiedu.com/about/chengji/" target="_blank">成绩斐然</a></dd>
            <dd><a href="http://www.gaosiedu.com/about/fuwu/" target="_blank">优质服务</a></dd>
        </dl>
        <dl class="d3">
            <dt><i></i>加入高思</dt>
            <dd><a href="http://job.gaosiedu.com/" target="_blank">高思招聘</a></dd>
            <dd><a href="http://www.gaosiedu.com/help/question/show-5565.shtml" target="_blank">报班指南</a></dd>
            <dd><a href="http://www.gaosiedu.com/about/lxgs/" target="_blank">合作洽谈</a></dd>
            <dd><a href="http://www.gaosiedu.com/flink/" target="_blank">友情链接</a></dd>
        </dl>
        <dl class="d5">
            <dt><i></i>旗下网站</dt>
            <dd><a target="_blank" href="http://www.gaosivip.com/">高思一对一</a></dd>
            <dd><a target="_blank" href="http://www.aisichuang.com/">爱思创</a></dd>
            <dd><a target="_blank" href="http://www.aixuexi.com/">爱学习</a></dd>
            <dd><a target="_blank" href="http://www.91haoke.com/">91好课</a></dd>
        </dl>
        <dl class="d4">
            <dt><i></i>联系高思</dt>
            <dd>课程咨询：56639999（8:00-21:00）</dd>
            <dd>1对1咨询：56639988（9:00-20:00）</dd>
            <dd>投诉建议：56639900（8:00-21:00）</dd>
        </dl>
    </div>
</div>
<div class="pCopyright">
    咨询电话：56639999　建议邮箱：gsjy@gaosiedu.com<br>
    Copyright © 2015 Gaosiedu.com, All Rights Reserved 高思教育 版权所有<br>
    京ICP备12028606号-1 京公网安备1101802010374号
</div>
<!-- 统计 -->


<?php echo ($site_tongji); ?>

<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "",
    JS_ROOT: "/public/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/public/js/jquery.js"></script>
    <script src="/public/js/wind.js"></script>
    <script src="/themes/simplebootx/Public/simpleboot/bootstrap/js/bootstrap.min.js"></script>
    <script src="/public/js/frontend.js"></script>
	<script>
	$(function(){
		$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
		
		$("#main-menu li.dropdown").hover(function(){
			$(this).addClass("open");
		},function(){
			$(this).removeClass("open");
		});
		
		$.post("<?php echo U('user/index/is_login');?>",{},function(data){
			if(data.status==1){
				if(data.user.avatar){
					$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"/data/upload/avatar/"+data.user.avatar);
				}
				
				$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
				$("#main-menu-user li.user.login").show();
				
			}
			if(data.status==0){
				$("#main-menu-user li.user.offline").show();
			}
			
		});	
		;(function($){
			$.fn.totop=function(opt){
				var scrolling=false;
				return this.each(function(){
					var $this=$(this);
					$(window).scroll(function(){
						if(!scrolling){
							var sd=$(window).scrollTop();
							if(sd>100){
								$this.fadeIn();
							}else{
								$this.fadeOut();
							}
						}
					});
					
					$this.click(function(){
						scrolling=true;
						$('html, body').animate({
							scrollTop : 0
						}, 500,function(){
							scrolling=false;
							$this.fadeOut();
						});
					});
				});
			};
		})(jQuery); 
		
		$("#backtotop").totop();
		
		
	});
	</script>


<script src="/themes/simplebootx/Public/js/slippry.min.js"></script>
<script>
    $(function() {
        var demo1 = $("#homeslider").slippry({
            transition: 'fade',
            useCSS: true,
            captions: false,
            speed: 1000,
            pause: 3000,
            auto: true,
            preload: 'visible'
        });
    });
</script>


<?php echo hook('footer_end');?>
</body>
</html>