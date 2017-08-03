window.onload = function(){

	var lunbo=document.getElementById("lunbo");
	var ul=document.getElementById("lunboUl");
	var ulLis=ul.getElementsByTagName("li");
	var ol=document.getElementById("lunboOl");
	var olLis=ol.getElementsByTagName("li");
	var rightBtn=document.getElementById("rightBtn");
	var leftBtn=document.getElementById("leftBtn");
	
	ul.style.width = ulLis.length*ulLis[0].offsetWidth+ "px";
	
	ul.style.left = 0;
	var index = 0;
     //点击下面小按钮选择对应图片
	for(var i=0;i<ulLis.length-1;i++){
		olLis[i].index = i;
		olLis[i].onclick = function(){
			index = this.index;
			for(var i=0;i<olLis.length;i++){
				olLis[i].className = "";
			}
			this.className = "actBtn";
			ul.style.left = -ulLis[0].offsetWidth*this.index+"px";
			ul.style.transition = "all 0.4s";
		}
	}
	//当图片轮播到尽头时重新轮播
	function act(){
			for(var i=0;i<olLis.length;i++){
				olLis[i].className = "";
			}
			if(index==2){
				olLis[0].className = "actBtn";
				ul.style.left= -ulLis[0].offsetWidth*index+ "px";
			}else{
				olLis[index].className = "actBtn";
				ul.style.left= -ulLis[0].offsetWidth*index+ "px";
			}
			ul.style.transition =" all 0.4s";
	}	
     //右侧按钮
	rightBtn.onclick = function(){
			index++;
			if(index>2){
				index=1;
				ul.style.transition = "all 0s";
				ul.style.left = 0;
			}
			act();
	}
	//左侧按钮
	leftBtn.onclick = function(){
			index--;
			if(index<0){
				index=2;
				ul.style.transition = "all 0s";
				ul.style.left = -1200+"px";
			}
			act();
	}
	
	//图片自动轮播
	var timer;
	function tim(){
		timer = setInterval(function(){
		index++;
			if(index>2){
				index=1;
				ul.style.transition = "all 0s";
				ul.style.left = 0;
			}
			act();
		},2500)
	}
	tim();
	//鼠标移入图片停止轮播
	lunbo.onmouseover = function(){
		clearInterval(timer);
	}
	//鼠标移出继续轮播
	lunbo.onmouseout = function(){
		tim();
	}


}








