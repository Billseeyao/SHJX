function change(){
		function change(){
//ͨ����Ԫ��li���ҵ��ֵ�Ԫ��ul
var oSecondDiv = this.parentNode.getElementsByTagName("ul")[0];
//CSS���������ʵ���ԡ���
if(oSecondDiv.className == "myHide")
oSecondDiv.className = "myShow";
else
oSecondDiv.className = "myHide";
}
window.onload = function(){
var oUl = document.getElementById("listUL");
var aLi = oUl.childNodes;//��Ԫ��
var oA;
for(var i=0;i<aLi.length;i++){
//�����Ԫ��Ϊli�������li���Ӳ˵�ul
if(aLi[i].tagName == "LI" && aLi[i].getElementsByTagName("ul").length){
oA = aLi[i].firstChild;//�ҵ�������
oA.onclick = change;//��̬��ӵ������
}
}
}
	}
	
	function init(){
		alert(111);
		}