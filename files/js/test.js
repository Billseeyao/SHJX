function change(){
		function change(){
//通过父元素li，找到兄弟元素ul
var oSecondDiv = this.parentNode.getElementsByTagName("ul")[0];
//CSS交替更换来实现显、隐
if(oSecondDiv.className == "myHide")
oSecondDiv.className = "myShow";
else
oSecondDiv.className = "myHide";
}
window.onload = function(){
var oUl = document.getElementById("listUL");
var aLi = oUl.childNodes;//子元素
var oA;
for(var i=0;i<aLi.length;i++){
//如果子元素为li，且这个li有子菜单ul
if(aLi[i].tagName == "LI" && aLi[i].getElementsByTagName("ul").length){
oA = aLi[i].firstChild;//找到超链接
oA.onclick = change;//动态添加点击函数
}
}
}
	}
	
	function init(){
		alert(111);
		}