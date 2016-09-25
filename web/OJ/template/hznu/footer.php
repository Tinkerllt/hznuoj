<?php
  /**
   * This file is created
   * by yybird
   * @2016.03.22
   * last modified
   * by yybird
   * @2016.03.24
  **/
?>

<footer class="blog-footer">
  <hr />
  <a href="https://github.com/wlx65003/HZNUOJ">HZNUOJ</a> is based on <a href="https://github.com/zhblue/hustoj" target="_blank">HUSTOJ</a><br />
  It's maintained by <a href="mailto:yybird@hsACM.cn">yybird</a> && <a href="userinfo.php?user=hhhh">hhhh</a> && <a href="mailto:wlx65005@163.com">D_Star</a> now <br />
  ★Server Time: <span id='footerdate'></span><?php //echo date('20y-m-d h:i:s',time()); ?>★

  <!-- go to top btn START -->
  <div class="amz-toolbar" id="go-top" style="display: none; position: fixed; bottom: 15px; right: 15px;">
    <a data-am-smooth-scroll href="#" title="回到顶部" class="am-icon-btn am-icon-arrow-up"></a>
  </div>
  <!-- go to top btn END -->
</footer>
<!--[if (gte IE 9)|!(IE)]><!-->

<!-- <script src="AmazeUI/js/jquery.min.js"></script> -->
<!-- <script src="AmazeUI/js/amazeui.min.js"></script> -->
<script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.amazeui.org/amazeui/2.7.2/js/amazeui.min.js"></script>
<!-- <script src="AmazeUI/js/handlebars.min.js"></script> -->

<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.1/jquery.min.js"></script>
<![endif]-->

<!-- go to top btn auto hide START -->
<script type="text/javascript">
  $(window).on("scroll load",function(){
    if($(window).scrollTop()>=400){
      $("#go-top").fadeIn("fast");
    }
    else{
      $("#go-top").fadeOut("fast");
    }
  });
</script>
<!-- go to top btn auto hide END -->
<!-- 动态显示时间 start -->
<script>
  var diff = new Date("<?php echo date("Y/m/d H:i:s")?>").getTime()-new Date().getTime();
  //alert(diff);
  function clock_foot() {
    var x,h,m,s,n,xingqi,y,mon,d;
    var x = new Date(new Date().getTime()+diff);
    y = x.getYear()+1900;
    if (y>3000) y-=1900;
    mon = x.getMonth()+1;
    d = x.getDate();
    xingqi = x.getDay();
    h=x.getHours();
    m=x.getMinutes();
    s=x.getSeconds();

    n=y+"-"+mon+"-"+d+" "+(h>=10?h:"0"+h)+":"+(m>=10?m:"0"+m)+":"+(s>=10?s:"0"+s);
    //alert(n);
    document.getElementById('footerdate').innerHTML=n;
    setTimeout("clock_foot()",1000);
  } 
  clock_foot();
</script>
<!-- 动态显示时间 end -->


</body>
</html>
