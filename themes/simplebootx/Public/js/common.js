$(document).ready(function(){
	// 顶部地图, 主导航菜单, 课程，浮动条子内容
	//$('#pSchoolMap, .pMainNav .sub, .pCourseNav h3, #pFloatBar .s').gsmenu();
	$(".pTopMap, .pMainNav .item, .pCourseNav .item, .pCourseNav .schools, .pMinav .qxSite,.indexTeacher .bd .list li,#FloatBar .item").each(function(){
		$(this).hoverDelay();
	})
	if ($('body').attr('class')!='indexpage') {
		$('.pCourseNav').hover(function() {
	 		$(this).toggleClass('open');
	 	});
	}

	// 大幻灯片
	$('#indexSlide').gsslide({navi: true, timer: 5000});
	
	// 浮动条定位
	var fbp = $('#FloatBar').position();
	$(window).scroll(function() {
		var wst = $(window).scrollTop();
		if (wst >= fbp.top) {
			$('#FloatBar').css({'position':'fixed', 'top':'0'});
			$('#gotop').fadeIn(); 
		} else {
			$('#FloatBar').css({'position':'absolute', 'top':''});
			$('#gotop').fadeOut();
		}
	});
	if ($(window).width()<=1024) {
		$('#FloatBar').remove();
		//$('#pFloatBar').css({'left':'auto','right':5+'px','margin-left':'auto'});
	}

	 // 课程-浮动菜单滚动
        $(window).load(function() {
            var wst = $(window).scrollTop();
            if (wst > 128) {
                $('.indexpage .pCourseNav ').css({'position':'fixed', 'top':'0'});
            }
        })
        $(window).scroll(function() {
            var wst = $(window).scrollTop();
            if (wst > 128) {
                $('.indexpage .pCourseNav ').css({'position':'fixed', 'top':'0'});
            } else {
                $('.indexpage .pCourseNav ').css({'position':'absolute', 'top':''});
            }
        });


	// 返回顶部
	$('#gotop').click(function() {
		$('html,body').animate({scrollTop: 0}, 100);
	});

	

	// 选项卡
	$('.tSearch .tabs').gstab({content: '.tSearch .sInput'});

	$('.topicNews-1 .tab ul').gstab({content: '.topicNews-1 .box'});
	$('.topicNews-2 .tab ul').gstab({content: '.topicNews-2 .box'});
	$('.topicNews-3 .tab ul').gstab({content: '.topicNews-3 .box'});
	$('.topicNews-4 .tab ul').gstab({content: '.topicNews-4 .box'});


	$('.indexForum .tab ul').gstab({content: '.indexForum .box'});
	
	$('.indexTeacher .tab ul').gstab({content: '.indexTeacher .box'});
	$('.indexXiaoxue .tab ul').gstab({content: '.indexXiaoxue .box'});
	$('.indexZhongxue .tab ul').gstab({content: '.indexZhongxue .box'});

	$('.aside_area4 .tab ul').gstab({content: '.aside_area4 .box'});
	$('.aside_area5 .tab ul').gstab({content: '.aside_area5 .box'});
	$('.aside_area8 .tab ul').gstab({content: '.aside_area8 .box'});

	
	
	$('.studyTools .tab ul').gstab({content: '.studyTools .box'});

	// 站内搜索
	if ($('.siteSearch .inp').val()) $('.siteSearch .inp').next('.placeholder').hide();
	$('.siteSearch .inp').focus(function() {
		$(this).next('.placeholder').hide();
	}).blur(function() {
		if ($(this).val()=='') $(this).next('.placeholder').show();
	});
	// 设置首页+加入收藏
	$('#setHome').click(function() { SetHome(location.protocol+'//'+location.hostname); });
	$('#addFavorite').click(function() { AddFavorite(window.location, document.title); });

	// 校区介绍页幻灯片
	$('#schoolshow_slide').gsslide({navi:true})

	// 2014春季招生广告
	/*
	var url = location.pathname;
	var pos = url.split("/");
	var ls = pos[1];
	if (ls =='course') {
		$('body').append('<div style="width:75px;height:220px;overflow:hidden;background:url(http://img.gaosiedu.com/uploadfile/pagebanner/2014sqBtn2.png) no-repeat;position:fixed;left:50%;top:175px;margin-left:-560px;z-index:9999999;"><a title="2014高思小学暑秋升班" style="position: absolute;width:54px;height:27px;left:10px;top:148px;text-indent:-9999px;overflow:hidden;" href="http://www.gaosiedu.com/special/2014/shuqiushengban/" target="_blank">2014高思小学暑秋升班</a><a title="2014高思中学暑秋升班" style="position: absolute;width:54px;height:27px;left:10px;top:180px;text-indent:-9999px;overflow:hidden;" href="http://www.gaosiedu.com/special/2014/zxshuqiushengban/" target="_blank">2014高思中学暑秋升班</a></div>');
	} */

	/*$('body').append('<div style="width:95px;height:255px;overflow:hidden;background:url(http://img.gaosiedu.com/uploadfile/gsbcjcx.jpg) no-repeat;position:fixed;left:50%;top:190px;margin-left:-580px;z-index:9999999;"><a href="http://www.gaosiedu.com/special/2015/gsbcjcx/" class="times" target="_blank" style="width:92px; height:255px;display:block"><div id="day" style="font-size:30px;font-family:Arial; position:relative; top:92px; left:40px; color:#ff5a00; font-weight:bold;"></div></a></div>');*/

});

//倒计时
/*var interval = 1000; 
function ShowCountDown(year,month,day,divname) 
{ 
var now = new Date(); 
var endDate = new Date(year, month-1, day); 
var leftTime=endDate.getTime()-now.getTime(); 
var leftsecond = parseInt(leftTime/1000); 
var day1=Math.floor(leftsecond/(60*60*24)); 
var hour=Math.floor((leftsecond-day1*24*60*60)/3600); 
var minute=Math.floor((leftsecond-day1*24*60*60-hour*3600)/60); 
var second=Math.floor(leftsecond-day1*24*60*60-hour*3600-minute*60); 
var cc = document.getElementById(divname); 
cc.innerHTML = +day1; 
} 
window.setInterval(function(){ShowCountDown(2015,4,8,'day');}, interval); */
// 设置首页
function SetHome(sURL){
	if (document.all) {
	    document.body.style.behavior='url(#default#homepage)';
	       document.body.setHomePage(sURL);
	}else{
	    alert("您好,您的浏览器不支持自动设置页面为首页功能,请您手动在浏览器里设置该页面为首页!");
	}
}
// 加入收藏
function AddFavorite(sURL, sTitle) {
    sURL = encodeURI(sURL);
    try{  
        window.external.addFavorite(sURL, sTitle);  
    }catch(e) {  
        try{  
            window.sidebar.addPanel(sTitle, sURL, "");  
        }catch (e) {  
            alert("加入收藏失败，请使用Ctrl+D进行添加,或手动在浏览器里进行设置.");
        }  
    }
}

(function($){
	$.fn.hoverDelay = function(options){
		var defaults = {};
		var sets = $.extend(defaults,options || {});
		var hoverTimer, outTimer;
		return $(this).each(function(){
			var self = $(this);
			self.hover(function(){
				clearTimeout(outTimer);
				hoverTimer = setTimeout(function(){self.addClass('open');}, 100);
			},function(){
				clearTimeout(hoverTimer);
				outTimer = setTimeout(function(){self.removeClass('open');}, 100);
			});
		});
	}
})(jQuery);
