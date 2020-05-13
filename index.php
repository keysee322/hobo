<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>irina</title>
	 <link rel="stylesheet" type="text/css" href="Irina.css">
</head>
<body>
	<section id="1"></section>
 <div class="first" ><div class="fake">
<div class="navbar navbar-inverse navbar-fixed-top"> 
  <div class="container1">
    <div class="navbar-header">
      <div class="navbar-brand"><img id="bruh" src="bruh.svg"> Name_name <div>
      
    </div>
    <div class="navbar-right">
      <nav class="stroke">
      <ul class="navbar-right" align="center">
      	
        <li class="active"><a class="special" href="#1">Главная</a></li>
        <li><a class="special" href="#2">О нас</a></li>
        <li><a class="special" href="#3">Услуги</a></li>
        <li><a class="special" href="#4">Контакты</a></li>
      </ul>
      
    </nav>
    </div>

    <a class="phone" href="#"><img id="phone" src="phone.svg">+8801744430440</a>
</div>
</div>
<div class="left1">
	<div class="insideleft">
	<h1>Lorem ipsum dolor sit amet</h1>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
<p id="learnmore"><a href="#2">Узнать больше <img class="strelka" src="strelka.png"></a></p>
</div>
<div class="insideright">
	<img src="albert.png">
	<img class="ramka" src="ramka.png">
</div>
 </div>
 <section id="2"></section>
<div class="second">
<div class="insideleft2">
	<img src="second.png">
	<img class="ramka1" src="ramka1.png">
	<img class="ramka2" src="ramka2.png">
	<img class="ramka3" src="ramka3.png">
	<img class="ramka4" src="ramka4.png">
</div>
<div class="insideright2">
	<h1>О нас</h1>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
<p id="social">Социальные сети<img class="palka" src="palka.png"> 
	<a href="https://telegram.org"><img class="socialimg" src="tel.svg"></a>
	<a href="https://www.whatsapp.com"><img class="socialimg" src="wut.svg"></a>
	<a href="https://www.instagram.com"><img class="socialimg" src="insta.svg"></a>
	<a href="www.facebook.com"><img class="socialimg" src="facebook.svg"></a>
	<a href="https://vk.com"><img class="socialimg" src="vk.svg"></a>
</p>
</div>
  </div>


<?php

$dir = opendir('new_pic');
$count = -1;
while($file = readdir($dir)){
    if($file == '.'){
        continue;
    }
    $count++;
}
?>

<script type="text/javascript">
var N = '<?php echo $count;?>';
document.write(N);
var j=0;
var k=1;
var m3=true;
    function AddItem() {

        var z=k;
        if (k<=N){
        	if (m3==true){
        	        var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main3");
        document.getElementById("items").appendChild(newdiv);
        for (var i = z; i <= 9+(z-1); i++) {
        if (k<=N) {k++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic/"+i+".png");
        if ((z-1)+9<=N){
        newimg.setAttribute("id","f"+(i-z+1));
    }
    else {
    	newimg.setAttribute("id","d"+(i-z+1));
    }
        document.getElementsByClassName("main3")[j+1].appendChild(newimg);
    }
}
        

        if (m3==false){
        	        var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main3");
        document.getElementById("items").appendChild(newdiv);
        for (var i = z; i <= 6+(z-1); i++) {
        if (k<=N) {k++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic/"+i+".png");
                if ((z-1)+6<=N){
        newimg.setAttribute("id","f1"+(i-z+1));
    }
        else {
    	newimg.setAttribute("id","d"+(i-z+1));
    }
        document.getElementsByClassName("main3")[j+1].appendChild(newimg);
}
        }
        m3=!(m3);
        j+=1;
    }

    if (j == 1){
        var newbut=document.createElement("input");
        newbut.setAttribute("value","Показать еще");
        newbut.setAttribute("id","showmore");
        newbut.setAttribute("type","button");
        newbut.setAttribute("onClick","AddItem()");
        document.getElementById("knopka").appendChild(newbut);
}else if (k>N){
        var e2 = document.getElementById('showmore');
        e2.parentNode.removeChild(e2);
}

    var el = document.getElementById('show');
el.parentNode.removeChild(el);

}
</script>

<section id="3"></section>
<div class="third">

<div class="left3">
Портреты
</div>
<div class="right3">  
	<button id="show" onClick="AddItem()">Показать ещё <img class="strelka2" src="strelka.png"></button>

</div><div class="main5">
<div class="main3">
	<img id="f1" src="pics/1.png">
	<img id="f2" src="pics/2.png">
	<img id="f3" src="pics/3.png">
	<img id="f4" src="pics/4.png">
	<img id="f5" src="pics/5.png">
	<img id="f6" src="pics/6.png">
	<img id="f7" src="pics/7.png">
	<img id="f8" src="pics/8.png">
	<img id="f9" src="pics/9.png">
	
	

</div>
</div>
<div id="items"></div>
	<div id="knopka"></div><p id="knopka1">white</p>
</div>

<div class="four">

<div class="left3">
Роспись интерьера
</div>
<div class="right3">  
    <button id="show" onClick="AddItem()">Показать ещё <img class="strelka2" src="strelka.png"></button>

</div><div class="main5">
<div class="main2">
    <img id="f1" src="pics/11.png">
    <img id="f2" src="pics/12.png">
    <img id="f3" src="pics/13.png">
    <img id="f4" src="pics/14.png">
    <img id="f5" src="pics/15.png">
    <img id="f6" src="pics/16.png">
    <img id="f7" src="pics/17.png">
    <img id="f8" src="pics/18.png">
    <img id="f9" src="pics/19.png">
    
    

</div>
</div>
<div id="items"></div>
    <div id="knopka"></div><p id="knopka1">white</p>
</div>

<div class="five">

<div class="left3">
Роспись одежды
</div>
<div class="right3">  
    <button id="show" onClick="AddItem()">Показать ещё <img class="strelka2" src="strelka.png"></button>

</div><div class="main5">
<div class="main1">
    <img id="f1" src="pics/21.png">
    <img id="f2" src="pics/22.png">
    <img id="f3" src="pics/23.png">
    <img id="f4" src="pics/24.png">
    <img id="f5" src="pics/25.png">
    <img id="f6" src="pics/26.png">
    <img id="f7" src="pics/27.png">
    <img id="f8" src="pics/28.png">
    <img id="f9" src="pics/29.png">
    
    

</div>
</div>
<div id="items"></div>
    <div id="knopka"></div><p id="knopka1">white</p>
</div>

<section id="4"></section>
 <div class="six">
 	<div class="insideleft6">
	<h1 class="sixh">Lorem ipsum dolor sit amet</h1>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
<p id="learnmore6">От 2000 руб.</p>
</div>
<div class="insideright6">	
	<input class="input" type="text" placeholder="Ваше имя"> </input>
	<input class="input" type="tel" placeholder="Телефон"> </input>
	<input class="input" type="email" placeholder="Email"> </input>
	<button class="order">Заказать</button>

	<img class="file" src="file.png">

</div>
<div class="kek">
    <div class="navbar-header1">
      <div class="navbar-brand"><img id="bruh" src="bruh.svg"> Name_name <div>
      
    </div>
    <div class="navbar-right">
      <nav class="stroke">
      <ul class="navbar-right" align="center">
        <li class="active"><a class="special" href="#1">Главная</a></li>
        <li><a class="special" href="#2">О нас</a></li>
        <li><a class="special" href="#3">Услуги</a></li>
        <li><a class="special" href="#4">Контакты</a></li>
      </ul>
      
    </nav>
    </div>

    <a class="phone" href="#"><img id="phone" src="phone.svg">+8801744430440</a>
</div>
</div>
</div>
  </div>

  </div>
</div>
</div>
</div>
</body>
</html>