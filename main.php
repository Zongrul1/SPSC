﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>主页-ESSH组监测数据综合管理信息平台</title>
<style>
</style>
    <link rel="stylesheet" type="text/css" href="/css/spsc.css">
    <link rel="stylesheet" type="text/css" href="/css/main.css">
    <script type="text/javascript" src="plugins/jquery-1.4.4.min.js"></script>
    <script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=您申请的key值"></script>
    <script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/certify.css">
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

<script src="/js/swiper.min.js"></script>
</head>

<body topmargin="0" marginwidth="0" onload="Act0()">
<div class="main">
<script type="text/javascript">
function Act0(){
document.getElementById("wechat").style.display='none';
}
 $(window).load(function()
{
	if(document.referrer==="")
  {
window.location.href='login.html';
	}
});
	</script>
<nav>
<div class="n1">
<div class="n2a">
<div style="height:10px"></div>
<img src="/pic/cau.bmp" alt="logo" height="80" width="100">
</div>
<div class="n2b">
<div style="height:10px"></div>
<img src="/pic/pacau.png" alt="logo" height="80" width="100">
</div>
<div class="n3">
<div class="n4">
    <ul>
      <li><a href="main.php" title="主页" target="_parent">主页</br>INDEX</a></li>
      <li><a href="greenhouse.php" title="温室监测" target="_parent">温室监测</br>Greenhouse</br>Monitoring</a></li>
      <li><a title="土壤养分监测" target="_parent">土壤养分监测</br>SoilNutrient</br>Monitoring</a>
	  <ul>
	  <li><a href="soil1.php" title="土壤养分监测(1)" target="_parent">土壤养分监测(1)</br>SoilNutrient</br>Monitoring(1)</a></li>
	  <li><a href="soil2.php" title="土壤养分监测(2)" target="_parent">土壤养分监测(2)</br>SoilNutrient</br>Monitoring(2)</a></li>
	  </ul>
	  </li>
	  <li><a title="水培作物" target="_parent">水培作物</br>Hydroponic</br>crop</a>
	  <ul>
      <li><a href="strawberry.php" title="水培草莓" target="_parent">水培草莓</br>Hydroponic</br>Strawberry</a></li>
	  <li><a href="tomato.php" title="水培番茄" target="_parent">水培番茄</br>Hydroponic</br>Tomato</a></li>
	  <li><a href="lettuce.php" title="水培生菜" target="_parent">水培生菜</br>Hydroponic</br>Lettuce</a></li>
	  </ul>
	  </li>
	  <li><a href="nutrient.php" title="营养液" target="_parent">营养液监测</br>Nutrient</br>Monitoring</a></li>
      <li><a href="intro.html" title="系统介绍" target="_parent">系统介绍</br>INFO</a></li>
            <li><a href="member.php" title="成员介绍" target="_parent">成员介绍</br>MEMBERS</a></li>
    </ul>
</div>
</div>
<div class="n5">
<img src="/pic/wechat.jpg" alt="wechat" height="100" onmousemove="displaywechat(this)" onmouseout="undisplaywechat(this)"></img>
</div>
<div id="wechat">
<img src="/pic/wechatlogo.jpg" alt="welogo" height="100%" width="100%"></img>
</div>
</div>	
  </nav>   
  <script>
  function displaywechat(x)
  {
  document.getElementById("wechat").style.display='';
  }
  function undisplaywechat(x)
  {
  document.getElementById("wechat").style.display='none';
  }
  </script> 
<div id="wrapper">
<div id="cell">
<h1>「ESSH组监测数据综合管理信息平台」</h1>
</div>
</div>

<div id="wrapper2">
<div id="r1">
<div class="e4"></div>
   <div id="c5">
<div id="c6">
   <p>「ESSH组监测数据综合管理信息平台」</p>
</div>
</div>
<div id="certify">
	<div class="swiper-container">
	<div class="swiper-wrapper">
<div class="swiper-slide"><img src="/pic/greenhouse1.jpg" alt="t1" width="100%" height="300px"></img><div class="w2"><p>温室监测</p></div></div>
<div class="swiper-slide"><img src="/pic/tu1.jpg" alt="t2" width="100%" height="300px"></img><div class="w2"><p>土壤养分监测</p></div></div>
<div class="swiper-slide"><img src="/pic/tu2.jpg" alt="t3" width="100%" height="300px"></img><div class="w2"><p>土壤养分监测（2）</p></div></div>
<div class="swiper-slide"><img src="/pic/mei1.jpg" alt="t4" width="100%" height="300px"></img><div class="w2"><p>水培草莓</p></div></div>
<div class="swiper-slide"><img src="/pic/fan1.jpg" alt="t5" width="100%" height="300px"></img><div class="w2"><p>水培番茄</p></div></div>
<div class="swiper-slide"><img src="/pic/cai3.jpg" alt="t6" width="100%" height="300px"></img><div class="w2"><p>水培生菜</p></div></div>
	</div>
	</div>
<div class="swiper-pagination"></div>
<div class="swiper-button-prev"></div>
<div class="swiper-button-next"></div>
</div>
<div class="e4"></div>
<div class="e4"></div>
   <div class="c5">
<div class="c6">
   <p>「平台功能」</p>
</div>
</div>
<div class="e44"></div>
<div class="e44"></div>
	<div id="gtco-features">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
						</span>
						<h3>温室环境监测</h3>
						<p>使用多种传感器对温室作物的温度、湿度、二氧化碳浓度、光照强度进行监测。</p>
						<p><a href="environment.php" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
						</span>
						<h3>土壤养分监测</h3>
						<p>使用多种传感器对土壤养分的多种参数进行监测。</p></br>
						<p><a href="soil1.php" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<div class="feature-center animate-box" data-animate-effect="fadeIn">
						<span class="icon">
						</span>
						<h3>水培作物监测</h3>
						<p>使用多种传感器对水培草莓、水培番茄、水培生菜的多种参数进行监测。</p>
						<p><a href="strawberry.php" class="btn btn-primary">Learn More</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
certifySwiper = new Swiper('#certify .swiper-container', {
	watchSlidesProgress: true,
	slidesPerView: 'auto',
	centeredSlides: true,
	loop: true,
	loopedSlides: 5,
	autoplay: true,
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

	on: {
		progress: function(progress) {
			for (i = 0; i < this.slides.length; i++) {
				var slide = this.slides.eq(i);
				var slideProgress = this.slides[i].progress;

				if (Math.abs(slideProgress) > 1) {
					modify = (Math.abs(slideProgress) - 1) * 0.4 + 1;
				}
				translate = slideProgress * modify * 318 + 'px';
				scale = 1 - Math.abs(slideProgress) / 5;
				zIndex = 999 - Math.abs(Math.round(10 * slideProgress));
				slide.transform('translateX(' + translate + ') scale(' + scale + ')');
				slide.css('zIndex', zIndex);
				slide.css('opacity', 1);
				if (Math.abs(slideProgress) > 3) {
					slide.css('opacity', 0);
				}
			}
		},
		setTransition: function(transition) {
			for (var i = 0; i < this.slides.length; i++) {
				var slide = this.slides.eq(i)
				slide.transition(transition);
			}

		}
	}

})
</script>
</div>
<div class="e4"></div>
<div class="e4"></div>
</div>
<footer>
            <div id="f1">
 <center>
				版权所有：</br>
                现代精细农业系统集成研究教育部重点实验室，中国农业大学，北京100083</br>
                农业部农业信息获取技术重点实验室，中国农业大学，北京100083</br>
                </center>
            </div>
			</footer>
</div>
</body>
</html>