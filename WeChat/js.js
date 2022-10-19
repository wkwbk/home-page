function weixinTip(ele){
	var ua = navigator.userAgent;
	var isWeixin = !!/MicroMessenger/i.test(ua);
	if(isWeixin){
		ele.onclick=function(e){
			window.event? window.event.returnValue = false : e.preventDefault();
			document.getElementById('JweixinTip').style.display='block';
		}
		document.getElementById('JweixinTip').onclick=function(){
			this.style.display='none';
		}
	}
}
var btn1 = document.getElementById('JdownApp');//下载一
weixinTip(btn1);
var btn2 = document.getElementById('JdownApp2'); //下载二
weixinTip(btn2);