<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
	<html>
	<head>
		<title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>
		<meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
		<meta name="description" content="<?php echo ($site_seo_description); ?>">
		
<div class="pMiniBar">
    <div class="wrap clearfix">
        <div class="pTopMap">
            <div class="tmTit" id="pSchoolMap"><a href="http://www.gaosiedu.com/gsschool/" target="_blank">习惯教育专家</a><s></s></div>
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
                <a href="javascript:void(0);" id="addFavorite" class="s1"><s></s>收藏坤凡</a>
                <a href="http://student.gaosiedu.com/" target="_blank" class="s2"><s></s>学员系统</a>
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
        <div class="logo"><a href="./index_files/index.html">坤凡教育</a></div>

        <div class="tSearch">

        </div>

        <div class="tel">
            　课程咨询：<span>010-56639999</span>   (8:00-21:00) <br>
            一对一课程：<span>010-56639988</span>   (9:00-20:00)
        </div>
    </div>
</div>

<div class="header">
    <?php $effected_id="menu-header"; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a class='dropdown-toggle' href='\$href' target='\$target'>\$label</a>"; $showlevel=6; $dropdown='dropdown'; ?>


    <!-- sline end -->
    <div class="navigationBar">
        <div class="navigationBarInnel">
            <tt title="所有产品分类"></tt>
            <div class="mainMenuV">
                <?php echo sp_get_menus("main",$effected_id,$filetpl,$showlevel);?>

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
                            <dt>个性化一对一</dt>
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
                            <dt>精品一对二</dt>
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
                            <dt>精品一对三</dt>
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
                            <dt>精品小班</dt>
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
                            <dt>特色兴趣培养班</dt>
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
                            <dt>兴趣课程</dt>
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
<link href="http://mooc2.edusoho.cn/assets/v2/bootstrap/css/bootstrap.css?1.4.9" rel="stylesheet">


<link rel="stylesheet" media="screen" href="http://mooc2.edusoho.cn/themes/mooc/css/theme.css?1.4.9">
<section class="es-section section-gray" id="course-list">
    <div class="container">
        <div class="course-filter section-header" id="course-filter">
            推荐课程
            <div class="course-sort btn-group">

            </div>
        </div>
        <div class="section-bodyer">
            <div class="home-course-list row">
                <div class="col-md-4 col-sm-6">
                    <div class="course-item">
                        <div class="course-img ">
                            <a href="http://mooc2.edusoho.cn/course/37">
                                <img class="img-responsive" src="./在线教学联盟 - Powered By EduSoho_files/235055f5a97a573998.jpg">
                            </a>
                        </div>
                        <div class="course-caption ">
                            <div class="title"><a href="http://mooc2.edusoho.cn/course/37">皮牙子旅游</a></div>
                            <div class="metas clearfix">
                                <span class="teacher-name">周进学</span>
                                <!-- <span class="course-period">1课时</span> -->
                                <span class="student-mun"><i class="es-icon es-icon-people mrm"></i>6人</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="course-item">
                        <div class="course-img ">
                            <a href="http://mooc2.edusoho.cn/course/8">
                                <img class="img-responsive" src="./在线教学联盟 - Powered By EduSoho_files/220343f5358e052002.jpg">
                            </a>
                        </div>
                        <div class="course-caption ">
                            <div class="title"><a href="http://mooc2.edusoho.cn/course/8">中国文论经典的诗性魅力</a></div>
                            <div class="metas clearfix">
                                <span class="teacher-name">李建中</span>
                                <!-- <span class="course-period">6课时</span> -->
                                <span class="student-mun"><i class="es-icon es-icon-people mrm"></i>21人</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="course-item">
                        <div class="course-img ">
                            <a href="http://mooc2.edusoho.cn/course/5">
                                <img class="img-responsive" src="./在线教学联盟 - Powered By EduSoho_files/230029d3ce22308657.jpg">
                            </a>
                        </div>
                        <div class="course-caption ">
                            <div class="title"><a href="http://mooc2.edusoho.cn/course/5">MOOCs制作与运营</a></div>
                            <div class="metas clearfix">
                                <span class="teacher-name">汪琼</span>
                                <!-- <span class="course-period">24课时</span> -->
                                <span class="student-mun"><i class="es-icon es-icon-people mrm"></i>29人</span>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="course-item">
                        <div class="course-img ">
                            <a href="http://mooc2.edusoho.cn/course/7">
                                <img class="img-responsive" src="./在线教学联盟 - Powered By EduSoho_files/193027319704636455.jpg">
                            </a>
                        </div>
                        <div class="course-caption ">
                            <div class="title"><a href="http://mooc2.edusoho.cn/course/7">西方历史的源头</a></div>
                            <div class="metas clearfix">
                                <span class="teacher-name">潘迎春</span>
                                <!-- <span class="course-period">8课时</span> -->
                                <span class="student-mun"><i class="es-icon es-icon-people mrm"></i>19人</span>

                                <span class="label label-gray-light label-sm">已结束</span>                                        </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="course-item">
                        <div class="course-img ">
                            <a href="http://mooc2.edusoho.cn/course/46">
                                <img class="img-responsive" src="./在线教学联盟 - Powered By EduSoho_files/15495318ae45386125.jpg">
                            </a>
                        </div>
                        <div class="course-caption ">
                            <div class="title"><a href="http://mooc2.edusoho.cn/course/46">C语言</a></div>
                            <div class="metas clearfix">
                                <span class="teacher-name">张中一</span>
                                <!-- <span class="course-period">14课时</span> -->
                                <span class="student-mun"><i class="es-icon es-icon-people mrm"></i>6人</span>

                                <span class="label label-primary label-sm">已开课</span>                                                                  <span class="pull-right"><span class="text-primary">5.0</span>学分</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="course-item">
                        <div class="course-img ">
                            <a href="http://mooc2.edusoho.cn/course/34">
                                <img class="img-responsive" src="./在线教学联盟 - Powered By EduSoho_files/095827346d56754539.png">
                            </a>
                        </div>
                        <div class="course-caption ">
                            <div class="title"><a href="http://mooc2.edusoho.cn/course/34">大数据研究</a></div>
                            <div class="metas clearfix">
                                <span class="teacher-name">张中一</span>
                                <!-- <span class="course-period">0课时</span> -->
                                <span class="student-mun"><i class="es-icon es-icon-people mrm"></i>1人</span>

                                <span class="label label-gray-light label-sm">已结束</span>                                          <span class="pull-right"><span class="text-primary">5.0</span>学分</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center mvl">
                <a href="http://mooc2.edusoho.cn/mooc/course/explore" class="btn btn-gylight btn-md">
                    更多<i class="fa fa-angle-right mls"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="es-section section-gray">
    <div class="container">
        <div class="section-header" id="course-filter">
            名师风采
        </div>
        <div class="section-bodyer">
            <div class="home-teacher-list row">
                <div class="teacher-item col-md-4 col-sm-4">
                    <div class="teacher-img">
                        <a href="http://mooc2.edusoho.cn/user/66">
                            <img class="img-responsive" src="./在线教学联盟 - Powered By EduSoho_files/215124ceefa4156130.jpg" alt="">
                            <div class="mask">
                                <div class="teacher-about">
                                    穿越千年的丝路传奇~千回西域！...
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="teacher-name">
                        <a href="http://mooc2.edusoho.cn/user/66">周进学</a>
                    </div>
                    <div class="teacher-position">
                        蓝泽欧网络
                    </div>              </div>
                <div class="teacher-item col-md-4 col-sm-4">
                    <div class="teacher-img">
                        <a href="http://mooc2.edusoho.cn/user/14">
                            <img class="img-responsive" src="./在线教学联盟 - Powered By EduSoho_files/1554306eb7d2363898.jpeg" alt="">
                            <div class="mask">
                                <div class="teacher-about">
                                    马费成，男，武汉大学教授、博士生导师，曾任武汉大学信息管理学院院长，现任教育部人...
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="teacher-name">
                        <a href="http://mooc2.edusoho.cn/user/14">马费成</a>
                    </div>
                    <div class="teacher-position">
                        教授
                    </div>              </div>
                <div class="teacher-item col-md-4 col-sm-4">
                    <div class="teacher-img">
                        <a href="http://mooc2.edusoho.cn/user/9">
                            <img class="img-responsive" src="./在线教学联盟 - Powered By EduSoho_files/152741d0a864862514.jpeg" alt="">
                            <div class="mask">
                                <div class="teacher-about">
                                    李志，现任武汉大学哲学学院副教授，入选武汉大学第一批“珞珈青年学者”，主要研究方...
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="teacher-name">
                        <a href="http://mooc2.edusoho.cn/user/9">李志</a>
                    </div>
                    <div class="teacher-position">
                        副教授
                    </div>              </div>
            </div>
            <div class="text-center mvl">
                <a href="http://mooc2.edusoho.cn/teacher" class="btn btn-gylight btn-md">
                    更多 <i class="fa fa-angle-right mls"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<div class="main">
    <div class="container">
        <div class="h4title"> <h4>坤凡动态</h4></div>
        <div>
            <div class="newsleft">1</div>
            <div class="newsline">1</div>
            <div class="newsright">3</div>
        </div>

    </div>

</div>
    <!--tp通栏广告-->




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