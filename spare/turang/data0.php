﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>主页-智慧果园土壤养分信息管理系统</title>
<style>
</style>
<link rel="stylesheet" type="text/css" href="/spsc.css">
<link rel="stylesheet" type="text/css" href="/main.css"> 
<script type="text/javascript" src="/plugins/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="http://webapi.amap.com/maps?v=1.3&key=您申请的key值"></script>
<script type="text/javascript" src="http://cache.amap.com/lbs/static/addToolbar.js"></script>
</head>

<body topmargin="0" marginwidth="0" onload="Act0()">
<div class="main">
<div class="loading" id="loading">
    <center>
    <img src="/pic/loading.gif" alt="load"></img>
    <div class="progress" id="progress">加载中：0%</div>
    </center>
</div>
<script type="text/javascript">
var $loading = $('#loading')
var $progress = $('#progress')
var prg = 0

var timer = 0

progress([80, 90], [1, 3], 100)  // 使用数组来表示随机数的区间


function progress (dist, speed, delay, callback) {
  var _dist = random(dist)
  var _delay = random(delay)
  var _speed = random(speed)
  window.clearTimeout(timer)
  timer = window.setTimeout(() => {
    if (prg + _speed >= _dist) {
      window.clearTimeout(timer)
      prg = _dist
      callback && callback()
    } else {
      prg += _speed
      progress (_dist, speed, delay, callback)
    }

    $progress.html('加载中：'+parseInt(prg) + '%')  // 留意，由于已经不是自增1，所以这里要取整
    console.log(prg)
  }, _delay)
}

function random (n) {
  if (typeof n === 'object') {
    var times = n[1] - n[0]
    var offset = n[0]
    return Math.random() * times + offset
  } else {
    return n
  }
}
function Act0()
        {
			    progress(100, [1, 5], 10, () => {
    window.setTimeout(() => {  // 延迟了一秒再隐藏loading
      $loading.hide()
    }, 1000)
  })
    document.getElementById("wechat").style.display='none';
		}
 $(window).load(function()
{
	if(document.referrer==="")
  {
window.location.href='main.html';
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
<a href="http://www.causpsc.com/interface.html"><img src="/pic/pacau.png" alt="logo" height="80" width="100"></a>
</div>
<div class="n3">
<div class="n4">
    <ul>
      <li><a href="data0.php" title="主页" target="_parent">主页</br>INDEX</a></li>
	  <li><a href="chart.php" title="详细数据" target="_parent">详细数据</br>DATABASE</a></li>
      <li><a href="info0.html" title="系统介绍" target="_parent">系统介绍</br>INFO</a></li>
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
<div id="wrapper_b">
<div id="cell">
<h1>「智慧果园土壤养分信息管理系统」</h1>
</div>
</div>

<div id="wrapper2">

<div id="c5">
<div id="c6">
<h2>「土壤数据」</h2>
</div>
</div>
<span style="se1"><td>取样点：</td>
<td>
<select id="se2" onchange="ChangeSelect(this.options[this.options.selectedIndex].value)">
<option>--请选择--</option>
<?php
$con = mysql_connect("localhost","root1","123456");
mysql_select_db("ciee", $con);
$sql="select sample_ID from soil";
$result=mysql_query($sql);
while($row=mysql_fetch_assoc($result)){
?>

<option value=<?php echo $row['sample_ID'] ?>><?php echo $row['sample_ID'] ?></option>  
<?php
}

?>
</select>
</td>
</span>
<script>
var arr1=[],arr2=[],arr3=[],arr4=[],arr5=[],arr6=[],arr7=[],arr8=[],arr9=[],arr10=[];

function ChangeSelect(val)
{           
$.ajax({
                  type:"POST",
                  async:false,
                  url:"/data/data2.php",
                  data:{},
                  dataType : 'json',
                  success:function(result){
                    if (result) {
                      for (var i = 0; i < result.length; i++) {
                          arr1.push(result[i].sample_ID);
                          arr2.push(result[i].ISE_N);
						  arr3.push(result[i].ISE_K);
	                      arr4.push(result[i].EC);
                          arr5.push(result[i].pH);
						  arr6.push(result[i].UV_N);
						  arr7.push(result[i].AAS_K);
						  arr8.push(result[i].UV_P);
						  arr9.push(result[i].ISE_Cl);
						  arr10.push(result[i].t);
                      }
                    }
                  },
error : function(XMLHttpRequest, textStatus, errorThrown) { //这个error函数调试时非常有用，如果解析不正确，将会弹出错误框 　　　　
alert(XMLHttpRequest.responseText);  
alert(XMLHttpRequest.status); 
alert(XMLHttpRequest.readyState); 
alert(textStatus); // parser error; 
} 

                })	
				  			
	for(var i=0;i<document.getElementById("se2").options.length;i++)
	{
		if(val==arr1[i])
	{
	 document.getElementById("z1").innerHTML=arr2[i];
	 document.getElementById("z2").innerHTML=arr3[i];
	 document.getElementById("z3").innerHTML=arr4[i];
	 document.getElementById("z4").innerHTML=arr5[i];
	 document.getElementById("z5").innerHTML=arr6[i];
	 document.getElementById("z6").innerHTML=arr7[i];
	 document.getElementById("z7").innerHTML=arr8[i];
	 document.getElementById("z8").innerHTML=arr9[i];
	}
}
}
</script>
<div id="c77">
<div class="e1"><p>ISE_N(ppm)</p><div id="z1" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>ISE_K(ppm)</p><div id="z2" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>EC(us/cm)</p><div id="z3" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>pH</p><div id="z4" class="e3" style="font-size:60px"></div></div>
<div class="e1"><p>UV_N(ppm)</p><div id="z5" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>AAS_K(ppm)</p><div id="z6" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>UV_P(ppm)</p><div id="z7" class="e3" style="font-size:60px"></div></div>
<div class="e2"><p>ISE_Cl(ppm)</p><div id="z8" class="e3" style="font-size:60px"></div></div>
</div>

<div id="c2">
<div id="c3">
<h2>「土壤监测站点」</h2>
</div>
</div>

<div id="c4">
  <div id="mmap">
  </div>
</div>

<div class="e4">
</div>

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
<script type="text/javascript">
    //初始化地图对象，加载地图
      var map = new AMap.Map('mmap', {
        resizeEnable: true,
        zoom:6,
        center: [102,24]
            
    });
    var lnglats = [
        [116.41667, 39.91667],
        [121.43333, 31.50000],
        [117.20000, 39.13333],
        [106.45000, 29.56667],
[126.63333,45.75000],
[125.35000,43.88333],
[111.48, 40.49],
[102.8332200000,24.8796600000],

    ];
var infoWindow = new AMap.InfoWindow({offset: new AMap.Pixel(0, -30)});
    for (var i = 0, marker; i < lnglats.length; i++) {
        var marker = new AMap.Marker({
            position: lnglats[i],
            map: map
        });
	}
</script>
</div>
</body>
</html>