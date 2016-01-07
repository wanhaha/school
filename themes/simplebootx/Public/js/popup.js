$(document).ready(function(){
	var starttime = new Date("Mar 7 00:00:00 2014");
	var endtime = new Date("Jun 1 23:59:59 2014");
	var nowtime = new Date();
	if (nowtime > starttime && nowtime < endtime) {
		$('.pHeader').before('<div id="adpopup"><a href="http://www.gaosiedu.com/special/2014/xinchuyi/gaosibei.html" target="_blank"><img src="http://img.gaosiedu.com/uploadfile/pagebanner/www2014XCYGSB-'+ showTimes(endtime) +'.gif" width="960" height="335" alt="" /></a><div class="popupClose"></div><!--div class="popupDay" style="left:658px;top:230px;color:#F79421">'+ showTimes(endtime) +'</div--></div>');
	}
	$('#adpopup .popupClose').live('click', function() {
		$('#adpopup').slideUp('fast', function() {
			$(this).remove();
			//$('body').before('<div class="baomingBtn"><a href="http://www.gaosiedu.com/2014gaosibei/" target="_blank" title="2014高思杯报名入口">高思杯报名入口</a></div>');
		});
	});
	if ($('#adpopup').length > 0) {
		var popTimer = setInterval(function(){
			$('#adpopup').slideUp('fast', function() {
				$(this).remove();
			//	$('body').before('<div class="baomingBtn"><a href="http://www.gaosiedu.com/2014gaosibei/" target="_blank" title="2014高思杯报名入口">高思杯报名入口</a></div>');
			});
			clearInterval(popTimer);
		}, 8000);
	}
});
function showTimes(data){
	var AfterTime=data;
	LeaveTime = AfterTime - new Date();
	LeaveDays=Math.floor(LeaveTime/(1000*60*60*24));
	return addzero(LeaveDays+1);
}
function addzero(obj){
	if(obj < 10) obj = "0" + obj;
	return obj;
}