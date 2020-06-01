<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>irina</title>
	 <link rel="stylesheet" type="text/css" href="Irina.css">
       <script src="animate.js"></script>
       <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
</head>
<body> 

 <script type="text/javascript">
/* $(document).ready(function(){
    $("#show").on("click","button", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
            top += 100;
        $('body,html').animate({scrollTop: top}, 200);
    });
});

  $(document).ready(function(){
    $("#show1").on("click","button", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
            top += 850;
        $('body,html').animate({scrollTop: top}, 200);
    });
});

    $(document).ready(function(){
    $("#show2").on("click","button", function (event) {
        event.preventDefault();
        var id  = $(this).attr('href'),
            top = $(id).offset().top;
            top += 1650;
        $('body,html').animate({scrollTop: top}, 200);
    });
});
    */
</script>
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
        <li><a class="special" href="#3">Портфолио</a></li>
        <li><a class="special" href="#6">Контакты</a></li>
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
<p id="learnmore"><a href="#2"> <section id="2"></section>Узнать больше <img class="strelka" src="strelka.png"></a></p>
</div>
<div class="insideright">
	<img id="albert" src="albert.png">
	<img class="ramka" src="ramka.png">
</div>
 </div>

<div class="second">
<div class="insideleft2">
	<img id="second" src="second.png">
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
<section id="3"></section>

<?php

$dir = opendir('new_pic');
$count = -1;
while($file = readdir($dir)){
    if($file == '.'){
        continue;
    }
    $count++;
}

$dir = opendir('new_pic1');
$count1 = -1;
while($file = readdir($dir)){
    if($file == '.'){
        continue;
    }
    $count1++;
}

$dir = opendir('new_pic2');
$count2 = -1;
while($file = readdir($dir)){
    if($file == '.'){
        continue;
    }
    $count2++;
}
?>

<script type="text/javascript">
    if (document.documentElement.clientWidth > 768) {


var N = '<?php echo $count;?>';
/*document.write(N2);*/
var j=0;
var k=1;
var m3=false;
var h1 = -15;
var kek11111 = 40;


            function makeEaseOut(timing) {
      return function(timeFraction) {
        return 1 - timing(1 - timeFraction);
      }
    }

        function quad(timeFraction) {
  return Math.pow(timeFraction, 10);
}

let quadEaseOut = makeEaseOut(quad);
    function AddItem() {
kek11111 = 106;
        var z=k;
        if (k<=N){
            if ((costbool == true) && (costcount > 0))
           document.getElementById("costbutton").style.marginTop = 106 + "px";
if (j==0){

  document.getElementById("cost").style.marginTop = 106 + "px";
            var x=document.createElement("a");
        x.setAttribute("href","#3");
        x.setAttribute("id","hide");
        x.setAttribute("onClick","DelItems()");
         var t = document.createElement("img");
         t.setAttribute("id","medium");
         t.setAttribute("src","arrow_up.png");
          x.appendChild(t);
        document.getElementsByClassName("main31")[0].appendChild(x);
                      setTimeout(kek1 ,200);
                    function kek1(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide").style.opacity = progress;
        }
      });}
                    setTimeout(kek2 ,200);
     function kek2(){animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide").style.height = progress * 1121 + 'px';
        }
      });}
} 
h1+= 560;
if ((j>0) && ((N-k) > 5)) {
                       
     animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide").style.height = progress * 576 + h1 + 'px';
        }
      });
     if ((N1-k1) < 9){
     if(costbool == true && costcount > 0)
     document.getElementById("costbutton").style.marginTop = 40 + "px";
     document.getElementById("cost").style.marginTop = 40 + "px";
     kek11111 = 40;
   }
} else if ((j>0) && ((N-k) <= 5)) {
                       
     animate({
        duration: 750,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide").style.height = progress * 295 + h1 + 'px';
        }
      });
     if(costbool == true && costcount > 0)
     document.getElementById("costbutton").style.marginTop = 40 + "px";
     document.getElementById("cost").style.marginTop = 40 + "px";
     kek11111 = 40;
   
}




        	if (m3==true){
        	        var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main3");
        document.getElementById("items").appendChild(newdiv);
        if ((N-k) <= 5){
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 272.5 + 'px';
        }
      });
          } else {
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });}
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}

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
        document.getElementsByClassName("main3")[j].appendChild(newimg);
    }
}
        

        if (m3==false){
        	        var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main3");
        document.getElementById("items").appendChild(newdiv);
         if ((N-z) <= 6){
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 272.5 + 'px';
        }
      });
          } else {
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });}
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}

        for (var i = z; i <= 6+(z-1); i++) {
        if (k<=N) {k++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic/"+i+".png");
                if ((z-1)+6<=N){
        newimg.setAttribute("id","f1"+(i-z+1));
    }
        else {
    	newimg.setAttribute("id","d1"+(i-z+1));
       document.getElementsByClassName("main3")[j].style.height = "265px";
    }
        document.getElementsByClassName("main3")[j].appendChild(newimg);
}
        }
        m3=!(m3);
        j+=1;

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
if (j==1){
    var el = document.getElementById('show');
el.parentNode.removeChild(el);
}
}
}

function DelItems() {
  kek11111 = 40;
          if ((costbool == true) && (costcount > 0))
           document.getElementById("costbutton").style.marginTop = 40 + "px"; 
          document.getElementById("cost").style.marginTop = 40 + "px";
        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items").style.height = -progress * (h1) + h1 + "px";
        }
      });

        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items").style.opacity = -progress + 1;
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore").style.height = -progress * 56 + 56 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore").style.marginTop = -progress * 15 + 15 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore").style.opacity = -progress + 1;
        }
      });

                        animate({
        duration: 1400,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide").style.height = -progress * (h1) + h1 + "px";
        }
      });

                        animate({
        duration: 1300,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide").style.opacity = -progress + 1;
        }
      });

      let blocks = document.getElementsByClassName( "main3" ); // находим элементы с классом block
      for( let i = 0; i < blocks.length; i++){ // проходим циклом по всем элементам массивоподобного объекта
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementsByClassName("main3")[i].style.marginTop = -progress * 15 + 15 + "px";
        }
      });
      }

        setTimeout(Delete,1200);


        function Delete() {
          
        var e2;
        for (var i=0; i<j; i++){
            e2 = document.getElementsByClassName('main3')[0];
            e2.parentNode.removeChild(e2);
        }
        if (k < N){
        e3 = document.getElementById('showmore');
            e3.parentNode.removeChild(e3);
        }
        var x=document.createElement("nav");
        x.setAttribute("id","show");
        document.getElementsByClassName("right3")[0].appendChild(x);
        var t = document.createElement("a");
        t.setAttribute("onClick", "AddItem()");
        document.getElementById("show").appendChild(t);
        var y = document.createTextNode("Показать ещё");
        t.appendChild(y);
        var u = document.createElement("img");
        u.setAttribute("src", "strelka.png");
        u.setAttribute("class", "strelka2");
        t.appendChild(u);
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("show").style.opacity = progress;
        }
      });
        e2 = document.getElementById('hide');
            e2.parentNode.removeChild(e2);
        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items").style.opacity = 1;
        }
      });
                animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items").style.height = "auto";
        }
      });
                     j=0;
 k=1;
 m3=false;
 h1 = -15;

}

}


var N1 = '<?php echo $count1;?>';
/*document.write(N1);*/
var j1=0;
var k1=1;
var m31=false;
var h2 = -15;
var kek22222 = 40;
    function AddItem1() {
      kek22222 = 106;
        var z1=k1;
        if (k1<=N1){
                        if ((costbool1 == true) && (costcount1 > 0))
           document.getElementById("costbutton1").style.marginTop = 106 + "px";
if (j1==0){
  document.getElementById("cost1").style.marginTop = 106 + "px";
            var x=document.createElement("a");
        x.setAttribute("href","#4");
        x.setAttribute("id","hide1");
        x.setAttribute("onClick","DelItems1()");
         var t = document.createElement("img");
         t.setAttribute("id","medium1");
         t.setAttribute("src","arrow_up.png");
          x.appendChild(t);
        document.getElementsByClassName("main21")[0].appendChild(x);
                      setTimeout(kek1 ,200);
                    function kek1(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide1").style.opacity = progress;
        }
      });}
                    setTimeout(kek2 ,200);
     function kek2(){animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide1").style.height = progress * 1121 + 'px';
        }
      });}
} 
h2+= 560;
if ((j1>0) && ((N1-k1) > 5)) {
                       
     animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide1").style.height = progress * 576 + h2 + 'px';
        }
      });
     if ((N1-k1) < 9){
     if(costbool1 == true && costcount1 > 0)
     document.getElementById("costbutton1").style.marginTop = 40 + "px";
     document.getElementById("cost1").style.marginTop = 40 + "px";
     kek22222 = 40;
   }
} else if ((j1>0) && ((N1-k1) <= 5)) {
                       
     animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide1").style.height = progress * 295 + h2 + 'px';
        }
      });
     if(costbool1 == true && costcount1 > 0)
     document.getElementById("costbutton1").style.marginTop = 40 + "px";
     document.getElementById("cost1").style.marginTop = 40 + "px";
     kek22222 = 40;
   
}




            if (m31==true){
                    var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main2");
        document.getElementById("items1").appendChild(newdiv);
        if ((N1-k1) <= 5){
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 272.5 + 'px';
        }
      });
          } else {
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });}
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}

        for (var i = z1; i <= 9+(z1-1); i++) {
        if (k1<=N1) {k1++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic1/"+i+".png");

        if ((z1-1)+9<=N1){
        newimg.setAttribute("id","f"+(i-z1+1));
    }
    else {
        newimg.setAttribute("id","d"+(i-z1+1));
    }
        document.getElementsByClassName("main2")[j1].appendChild(newimg);
    }
}
        

        if (m31==false){
                    var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main2");
        document.getElementById("items1").appendChild(newdiv);
         if ((N1-z1) <= 6){
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 272.5 + 'px';
        }
      });
          } else {
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });}
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}

        for (var i = z1; i <= 6+(z1-1); i++) {
        if (k1<=N1) {k1++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic1/"+i+".png");
                if ((z1-1)+6<=N1){
        newimg.setAttribute("id","f1"+(i-z1+1));
    }
        else {
        newimg.setAttribute("id","d1"+(i-z1+1));
       document.getElementsByClassName("main2")[j1].style.height = "265px";
    }
        document.getElementsByClassName("main2")[j1].appendChild(newimg);
}
        }
        m31=!(m31);
        j1+=1;

    if (j1 == 1){
        var newbut=document.createElement("input");
        newbut.setAttribute("value","Показать еще");
        newbut.setAttribute("id","showmore1");
        newbut.setAttribute("type","button");
        newbut.setAttribute("onClick","AddItem1()");
        document.getElementById("knopka1").appendChild(newbut);
}else if (k1>N1){
        var e2 = document.getElementById('showmore1');
        e2.parentNode.removeChild(e2);
}
if (j1==1){
    var el = document.getElementById('show1');
el.parentNode.removeChild(el);
}
}
}

function DelItems1() {
  kek22222 = 40;
            if ((costbool1 == true) && (costcount1 > 0))
           document.getElementById("costbutton1").style.marginTop = 40 + "px"; 
          document.getElementById("cost1").style.marginTop = 40 + "px";
        
        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items1").style.height = -progress * (h2) + h2 + "px";
        }
      });

        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items1").style.opacity = -progress + 1;
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore1").style.height = -progress * 56 + 56 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore1").style.marginTop = -progress * 15 + 15 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore1").style.opacity = -progress + 1;
        }
      });

                        animate({
        duration: 1400,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide1").style.height = -progress * (h2) + h2 + "px";
        }
      });

                        animate({
        duration: 1300,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide1").style.opacity = -progress + 1;
        }
      });

      let blocks = document.getElementsByClassName( "main2" ); // находим элементы с классом block
      for( let i = 0; i < blocks.length; i++){ // проходим циклом по всем элементам массивоподобного объекта
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementsByClassName("main2")[i].style.marginTop = -progress * 15 + 15 + "px";
        }
      });
      }

        setTimeout(Delete1,1200);


        function Delete1() {

        var e2;
        for (var i=0; i<j1; i++){
            e2 = document.getElementsByClassName('main2')[0];
            e2.parentNode.removeChild(e2);
        }
        if (k1 < N1){
        e3 = document.getElementById('showmore1');
            e3.parentNode.removeChild(e3);
        }
        var x=document.createElement("nav");
        x.setAttribute("id","show1");
        document.getElementsByClassName("right3")[1].appendChild(x);
        var t = document.createElement("a");
        t.setAttribute("onClick", "AddItem1()");
        document.getElementById("show1").appendChild(t);
        var y = document.createTextNode("Показать ещё");
        t.appendChild(y);
        var u = document.createElement("img");
        u.setAttribute("src", "strelka.png");
        u.setAttribute("class", "strelka2");
        t.appendChild(u);
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("show1").style.opacity = progress;
        }
      });
        var e4 = document.getElementById("hide1");
            e4.parentNode.removeChild(e4);
        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items1").style.opacity = 1;
        }
      });
                animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items1").style.height = "auto";
        }
      });
                     j1=0;
 k1=1;
 m31=false;
 h2 = -15;

}

}


var N2 = '<?php echo $count2;?>';
/*document.write(N2);*/
var j2=0;
var k2=1;
var m32=false;
var h3 = -15;
    function AddItem2() {

        var z2=k2;
        if (k2<=N2){
            
if (j2==0){
            var x=document.createElement("a");
        x.setAttribute("href","#5");
        x.setAttribute("id","hide2");
        x.setAttribute("onClick","DelItems2()");
         var t = document.createElement("img");
         t.setAttribute("id","medium");
         t.setAttribute("src","arrow_up.png");
          x.appendChild(t);
        document.getElementsByClassName("main11")[0].appendChild(x);
                      setTimeout(kek1 ,200);
                    function kek1(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide2").style.opacity = progress;
        }
      });}
                    setTimeout(kek2 ,200);
     function kek2(){animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide2").style.height = progress * 1121 + 'px';
        }
      });}
} 
h3+= 560;
if ((j2>0) && ((N2-k2) > 5)) {
                       
     animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide2").style.height = progress * 576 + h3 + 'px';
        }
      });
} else if ((j2>0) && ((N2-k2) <= 5)) {
                       
     animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide2").style.height = progress * 295 + h3 + 'px';
        }
      });
}




            if (m32==true){
                    var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main1");
        document.getElementById("items2").appendChild(newdiv);
        if ((N2-k2) <= 5){
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 272.5 + 'px';
        }
      });
          } else {
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });}
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}

        for (var i = z2; i <= 9+(z2-1); i++) {
        if (k2<=N2) {k2++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic2/"+i+".png");

        if ((z2-1)+9<=N2){
        newimg.setAttribute("id","f"+(i-z2+1));
    }
    else {
        newimg.setAttribute("id","d"+(i-z2+1));
    }
        document.getElementsByClassName("main1")[j2].appendChild(newimg);
    }
}
        

        if (m32==false){
                    var newimg;
        var newdiv=document.createElement("div");
        newdiv.setAttribute("class","main1");
        document.getElementById("items2").appendChild(newdiv);
         if ((N2-z2) <= 6){
              animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 272.5 + 'px';
        }
      });
          } else {
          animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.height = progress * 545 + 'px';
        }
      });}
              setTimeout(kek ,200);
                    function kek(){animate({
        duration: 5000,
        timing: quadEaseOut,
        draw: function(progress) {
          newdiv.style.opacity = progress;
        }
      });}

        for (var i = z2; i <= 6+(z2-1); i++) {
        if (k2<=N2) {k2++;} else {break;}
        newimg=document.createElement("img");
        newimg.setAttribute("src","new_pic2/"+i+".png");
                if ((z2-1)+6<=N2){
        newimg.setAttribute("id","f1"+(i-z2+1));
    }
        else {
        newimg.setAttribute("id","d1"+(i-z2+1));
       document.getElementsByClassName("main1")[j2].style.height = "265px";
    }
        document.getElementsByClassName("main1")[j2].appendChild(newimg);
}
        }
        m32=!(m32);
        j2+=1;

    if (j2 == 1){
        var newbut=document.createElement("input");
        newbut.setAttribute("value","Показать еще");
        newbut.setAttribute("id","showmore2");
        newbut.setAttribute("type","button");
        newbut.setAttribute("onClick","AddItem2()");
        document.getElementById("knopka2").appendChild(newbut);
}else if (k2>N2){
        var e2 = document.getElementById('showmore2');
        e2.parentNode.removeChild(e2);
}
if (j2==1){
    var el = document.getElementById('show2');
el.parentNode.removeChild(el);
}
}
}

function DelItems2() {

        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items2").style.height = -progress * (h3) + h3 + "px";
        }
      });

        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items2").style.opacity = -progress + 1;
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore2").style.height = -progress * 56 + 56 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore2").style.marginTop = -progress * 15 + 15 + "px";
        }
      });

                        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("showmore2").style.opacity = -progress + 1;
        }
      });

                        animate({
        duration: 1400,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide2").style.height = -progress * (h3) + h3 + "px";
        }
      });

                        animate({
        duration: 1300,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("hide2").style.opacity = -progress + 1;
        }
      });

      let blocks = document.getElementsByClassName( "main1" ); // находим элементы с классом block
      for( let i = 0; i < blocks.length; i++){ // проходим циклом по всем элементам массивоподобного объекта
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementsByClassName("main1")[i].style.marginTop = -progress * 15 + 15 + "px";
        }
      });
      }

        setTimeout(Delete2,1200);


        function Delete2() {

        var e2;
        for (var i=0; i<j2; i++){
            e2 = document.getElementsByClassName('main1')[0];
            e2.parentNode.removeChild(e2);
        }
        if (k2 < N2){
        e3 = document.getElementById('showmore2');
            e3.parentNode.removeChild(e3);
        }
        var x=document.createElement("nav");
        x.setAttribute("id","show2");
        document.getElementsByClassName("right3")[2].appendChild(x);
        var t = document.createElement("a");
        t.setAttribute("onClick", "AddItem2()");
        document.getElementById("show2").appendChild(t);
        var y = document.createTextNode("Показать ещё");
        t.appendChild(y);
        var u = document.createElement("img");
        u.setAttribute("src", "strelka.png");
        u.setAttribute("class", "strelka2");
        t.appendChild(u);
        animate({
        duration: 1000,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("show2").style.opacity = progress;
        }
      });
        var e4 = document.getElementById("hide2");
            e4.parentNode.removeChild(e4);
        animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items2").style.opacity = 1;
        }
      });
                animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("items2").style.height = "auto";
        }
      });
                     j2=0;
 k2=1;
 m32=false;
 h3 = -15;

}

}
var costbool = true;
var costcount = 0;

function AddCost(){
if (costcount == 0){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost").style.height = progress * 530 + "px";
        }
      });

    document.getElementById("insidecost").style.paddingTop = 55 + "px";



  document.getElementById("cost").style.background = "#D8D8D8";

  var x=document.createElement("div");
  x.setAttribute("id","leftcost");
  x1 = document.createTextNode("Масло");
  document.getElementById("insidecost").appendChild(x);
   document.getElementById("leftcost").appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("30х40 см");
  document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[0].appendChild(x1);
   document.getElementsByClassName("leftcost1")[0].style.marginTop = 55 + "px";
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("6 500 руб.");
      document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[0].appendChild(x1);
      document.getElementsByClassName("leftcost2")[0].style.marginTop = 55 + "px";

      x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("40х50 см");
  document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[1].appendChild(x1);
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("9 500 руб.");
      document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[1].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("50х70 см");
  document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[2].appendChild(x1);
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("11 500 руб.");
      document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[2].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("60х80 см");
  document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[3].appendChild(x1);
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("14 500 руб.");
      document.getElementById("leftcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[3].appendChild(x1);




  var x=document.createElement("div");
  x.setAttribute("id","rightcost");
  x1 = document.createTextNode("Карандаш");
  document.getElementById("insidecost").appendChild(x);
     document.getElementById("rightcost").appendChild(x1);

x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("30х40 см");
  document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[4].appendChild(x1);
      document.getElementsByClassName("leftcost1")[4].style.marginTop = 55 + "px";
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("3 500 руб.");
      document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[4].appendChild(x1);
      document.getElementsByClassName("leftcost2")[4].style.marginTop = 55 + "px";

   x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("40х50 см");
  document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[5].appendChild(x1);
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("4 500 руб.");
      document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[5].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("50х70 см");
  document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[6].appendChild(x1);
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("6 200 руб.");
      document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[6].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","leftcost1");
  x1 = document.createTextNode("60х80 см");
  document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost1")[7].appendChild(x1);
   x=document.createElement("div");
  x.setAttribute("class","leftcost2");
    x1 = document.createTextNode("7 200 руб.");
      document.getElementById("rightcost").appendChild(x);
   document.getElementsByClassName("leftcost2")[7].appendChild(x1);



document.getElementById("costhyper").innerHTML = "Свернуть";
  x=document.createElement("img");
  x.setAttribute("id","downarrow1");
  x.setAttribute("src","down_arrow.png");
  document.getElementById("costhyper").appendChild(x);

     x=document.createElement("a");
  x.setAttribute("id","order");
  x.setAttribute("href","#6");
  x1 = document.createTextNode("Заказать");
  document.getElementById("costhyperdiv").appendChild(x);
  document.getElementById("order").appendChild(x1);
  costcount++;
} else {
if (costbool == false){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost").style.height = 530 + -progress * 530 + "px";
        }
      });
  x=document.createElement("button");
  x.setAttribute("id","costbutton");

  x.setAttribute("onClick","AddCost()");
  x1 = document.createTextNode("Стоимость");
  document.getElementsByClassName("third")[0].appendChild(x);
  document.getElementById("costbutton").appendChild(x1);
  document.getElementById("costbutton").style.marginTop = kek11111 + "px";
    x=document.createElement("img");
  x.setAttribute("id","downarrow");
  x.setAttribute("src","down_arrow.png");
  document.getElementById("costbutton").appendChild(x);

  setTimeout(appear,1400);


  function appear(){
animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("costbutton").style.opacity = progress;
        }
      });}

} else {
  e3 = document.getElementById('costbutton');
            e3.parentNode.removeChild(e3);
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost").style.height = progress * 530 + "px";
        }
      });
}

}

 costbool = !costbool;



}


var costbool1 = true;
var costcount1 = 0;

function AddCost1(){
if (costcount1 == 0){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost1").style.height = progress * 590 + "px";
        }
      });

    document.getElementById("leftcostdown").style.paddingTop = 55 + "px";



  document.getElementById("cost1").style.background = "#D8D8D8";

  var x=document.createElement("div");
  x.setAttribute("class","secondcost1");
  x1 = document.createTextNode("Простая");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost1")[0].appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","secondcost11");
  x1 = document.createTextNode("трафаретная роспись");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost11")[0].appendChild(x1);
   document.getElementsByClassName("secondcost11")[0].style.marginTop = 65 + "px";

      x=document.createElement("div");
  x.setAttribute("class","secondcost11");
  x1 = document.createTextNode("нанесение логотипа");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost11")[1].appendChild(x1);
   document.getElementsByClassName("secondcost11")[1].style.marginTop = 25 + "px";

x=document.createElement("div");
  x.setAttribute("class","secondcost11");
  x1 = document.createTextNode("детская тематика");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost11")[2].appendChild(x1);
   document.getElementsByClassName("secondcost11")[2].style.marginTop = 25 + "px";

    x=document.createElement("div");
  x.setAttribute("class","secondcost11");
  x1 = document.createTextNode("простой пейзаж");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost11")[3].appendChild(x1);
   document.getElementsByClassName("secondcost11")[3].style.marginTop = 25 + "px";

   x=document.createElement("div");
  x.setAttribute("class","secondcost11");
  x1 = document.createTextNode("небо");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost11")[4].appendChild(x1);
   document.getElementsByClassName("secondcost11")[4].style.marginTop = 25 + "px";

      x=document.createElement("div");
  x.setAttribute("class","secondcost1");
  x1 = document.createTextNode("от 1 500 руб.");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementsByClassName("secondcost1")[1].appendChild(x1);
   document.getElementsByClassName("secondcost1")[1].style.marginTop = 35 + "px";





var x=document.createElement("div");
  x.setAttribute("id","secondcost2");
  x1 = document.createTextNode("Средняя");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementById("secondcost2").appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","secondcost12");
  x1 = document.createTextNode("детальная трафаретная роспись");
  document.getElementById("secondcost2").appendChild(x);
   document.getElementsByClassName("secondcost12")[0].appendChild(x1);
   document.getElementsByClassName("secondcost12")[0].style.marginTop = 31 + "px";

      x=document.createElement("div");
  x.setAttribute("class","secondcost12");
  x1 = document.createTextNode("нанесение логотипа с прорисовкой");
  document.getElementById("secondcost2").appendChild(x);
   document.getElementsByClassName("secondcost12")[1].appendChild(x1);
   document.getElementsByClassName("secondcost12")[1].style.marginTop = 25 + "px";

x=document.createElement("div");
  x.setAttribute("class","secondcost12");
  x1 = document.createTextNode("детская тематика с деталзиацией");
  document.getElementById("secondcost2").appendChild(x);
   document.getElementsByClassName("secondcost12")[2].appendChild(x1);
   document.getElementsByClassName("secondcost12")[2].style.marginTop = 25 + "px";

    x=document.createElement("div");
  x.setAttribute("class","secondcost12");
  x1 = document.createTextNode("пейзаж с архитектурой");
  document.getElementById("secondcost2").appendChild(x);
   document.getElementsByClassName("secondcost12")[3].appendChild(x1);
   document.getElementsByClassName("secondcost12")[3].style.marginTop = 25 + "px";

   x=document.createElement("div");
  x.setAttribute("class","secondcost12");
  x1 = document.createTextNode("детальная прорисовка неба");
  document.getElementById("secondcost2").appendChild(x);
   document.getElementsByClassName("secondcost12")[4].appendChild(x1);
   document.getElementsByClassName("secondcost12")[4].style.marginTop = 25 + "px";

      x=document.createElement("div");
  x.setAttribute("id","secondcost21");
  x1 = document.createTextNode("от 3 500 руб.");
  document.getElementById("secondcost2").appendChild(x);
   document.getElementById("secondcost21").appendChild(x1);
   document.getElementById("secondcost21").style.marginTop = 35 + "px";




   var x=document.createElement("div");
  x.setAttribute("id","secondcost3");
  x1 = document.createTextNode("Сложная");
  document.getElementById("leftcostdown").appendChild(x);
   document.getElementById("secondcost3").appendChild(x1);

   x=document.createElement("div");
  x.setAttribute("class","secondcost13");
  x1 = document.createTextNode("художественная роспись");
  document.getElementById("secondcost3").appendChild(x);
   document.getElementsByClassName("secondcost13")[0].appendChild(x1);
   document.getElementsByClassName("secondcost13")[0].style.marginTop = 31 + "px";

      x=document.createElement("div");
  x.setAttribute("class","secondcost13");
  x1 = document.createTextNode("сложная архитектру");
  document.getElementById("secondcost3").appendChild(x);
   document.getElementsByClassName("secondcost13")[1].appendChild(x1);
   document.getElementsByClassName("secondcost13")[1].style.marginTop = 25 + "px";

x=document.createElement("div");
  x.setAttribute("class","secondcost13");
  x1 = document.createTextNode("фотореализм");
  document.getElementById("secondcost3").appendChild(x);
   document.getElementsByClassName("secondcost13")[2].appendChild(x1);
   document.getElementsByClassName("secondcost13")[2].style.marginTop = 25 + "px";

    x=document.createElement("div");
  x.setAttribute("class","secondcost13");
  x1 = document.createTextNode("3D рисунок");
  document.getElementById("secondcost3").appendChild(x);
   document.getElementsByClassName("secondcost13")[3].appendChild(x1);
   document.getElementsByClassName("secondcost13")[3].style.marginTop = 25 + "px";

      x=document.createElement("div");
  x.setAttribute("id","secondcost31");
  x1 = document.createTextNode("от 5 000 руб.");
  document.getElementById("secondcost3").appendChild(x);
   document.getElementById("secondcost31").appendChild(x1);
   document.getElementById("secondcost31").style.marginTop = 95 + "px";

   document.getElementById("costhyperdiv1").style.marginTop = 515 + "px";


document.getElementById("costhyper1").innerHTML = "Свернуть";
  x=document.createElement("img");
  x.setAttribute("id","downarrow1");
  x.setAttribute("src","down_arrow.png");
  document.getElementById("costhyper1").appendChild(x);

     x=document.createElement("a");
  x.setAttribute("id","order1");
  x.setAttribute("href","#6");
  x1 = document.createTextNode("Заказать");
  document.getElementById("costhyperdiv1").appendChild(x);
  document.getElementById("order1").appendChild(x1);
  costcount1++;
} else {
if (costbool1 == false){
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost1").style.height = 590 + -progress * 590 + "px";
        }
      });
  x=document.createElement("button");
  x.setAttribute("id","costbutton1");

  x.setAttribute("onClick","AddCost1()");
  x1 = document.createTextNode("Стоимость");
  document.getElementsByClassName("four")[0].appendChild(x);
  document.getElementById("costbutton1").appendChild(x1);
  document.getElementById("costbutton1").style.marginTop = kek22222 + "px";
    x=document.createElement("img");
  x.setAttribute("id","downarrow");
  x.setAttribute("src","down_arrow.png");
  document.getElementById("costbutton1").appendChild(x);

  setTimeout(appear,1400);


  function appear(){
animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("costbutton1").style.opacity = progress;
        }
      });}

} else {
  e3 = document.getElementById('costbutton1');
            e3.parentNode.removeChild(e3);
  animate({
        duration: 1500,
        timing: quadEaseOut,
        draw: function(progress) {
          document.getElementById("cost1").style.height = progress * 590 + "px";
        }
      });
}

}

 costbool1 = !costbool1;



}
}




</script>


<div class="third">

<div class="left3">
Портреты
</div>
<div class="right3">  
	<nav id="show"><a onClick="AddItem()">Показать ещё <img class="strelka2" src="strelka.png"></a></nav>

</div><div class="main5">
<div class="main31">
	<img id="f1" src="pics/1.png">
	<img id="f2" src="pics/2.png">
	<img id="f3" src="pics/3.png">
	<img id="f4" src="pics/4.png">
	<img id="f5" src="pics/5.png">
	<img id="f6" src="pics/6.png">
	<img id="f7" src="pics/7.png">
	<img id="f8" src="pics/8.png">
	<img id="f9" src="pics/9.png">
    <img id="f10" src="pics/10.png">


</div>
    <section id="31"></section>
</div>
<div id="items"></div>
	<nav id="knopka"></nav>

</div>
<div id="cost">
  <div id="insidecost">
  

</div>

<div id="costhyperdiv"><a id="costhyper" onClick="AddCost()">Стоимость<img id="downarrow" src="down_arrow.png">
</a></div>

</div>
<section id="4"></section>
<div class="four">

<div class="left3">
Роспись интерьера
</div>
<div class="right3">  
    <nav id="show1"><a onClick="AddItem1()">Показать ещё <img class="strelka2" src="strelka.png"></a></nav>

</div><div class="main5">
<div class="main21">
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
<section id="32"></section>
<div id="items1"></div>
    <div id="knopka1"></div>
</div>
<div id="cost1">
  <div id="leftcostdown">
  

</div>

<div id="costhyperdiv1"><a id="costhyper1" onClick="AddCost1()">Стоимость<img id="downarrow" src="down_arrow.png">
</a></div>

</div>
<section id="5"></section>
<div class="five">

<div class="left3">
Роспись одежды
</div>
<div class="right3">  
    <nav id="show2"><a onClick="AddItem2()">Показать ещё <img class="strelka2" src="strelka.png"></a></nav>

</div><div class="main5">
<div class="main11">
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
<section id="33"></section>
<div id="items2"></div>
    <div id="knopka2"></div><p id="knopk">white</p>
</div>
<div id="cost2">
  <div id="leftcostdown1">
  

</div>

<div id="costhyperdiv2"><a id="costhyper2" onClick="AddCost2()">Стоимость<img id="downarrow" src="down_arrow.png">
</a></div>

</div>
<section id="6"></section>
 <div class="six">
 	<div class="insideleft6">
	<h1 class="sixh">Lorem ipsum dolor sit amet</h1>
Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
<p id="learnmore6">От 2000 руб.</p>
</div>
<div class="insideright6">	
    <form action="mail.php" method="POST">
	<input required class="input" name="username" type="text" placeholder="Ваше имя"> </input>
	<input required class="input" name="userphone" type="tel" placeholder="Телефон"> </input>
	<input required class="input" name="email" type="email" placeholder="Email"> </input>
	<button type="submit" class="order">Заказать</button>

	<img class="file" src="file.png">
</form>
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