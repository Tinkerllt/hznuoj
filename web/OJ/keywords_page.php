<?php $title="Key_words"; ?>
<?php

require_once "template/hznu/header.php";
?>
<!-- <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.0.js"> -->
<script src="/OJ/plugins/jquery/jquery-3.5.1.min.js"></script>
</script>
<style>
    .box{
      border: 1px solid #eee;
      padding: 30px 30px 0px 30px;
      margin: 25px 0px 15px 0;
      box-shadow: 2px 2px 10px 0 #ccc;
    }
    .class-name-ch{
      font-size: xx-large;
    }
    .class-name-en{

    }
    .class-title{
      padding-bottom: 15px;
    }
    .class-description{
      color: #515151;
    }
    .content-block{
      margin-bottom: 50px;
    }
    .content-block:last-child{
      margin-bottom: 15px;
    }
    .content-block-title{
      font-size: x-large;
      font-weight: bold;
      border-bottom: 1px solid #eee;
      margin-bottom: 10px;
    }
    .content-block-body{
      padding-left: 20px;
    }
    .detail-table{
      width: 100%;
      -ms-word-break: break-all;
      word-break: break-all;
    }
    .detail-table>tbody>tr>td{
      border-left: 1px solid #eee;
      border-bottom: 1px solid #eee;
      padding: 10px;
    }
    .detail-table tr td:first-child{
      border-left: 0;
    }
    .detail-table tbody tr:last-child td{
      border-bottom: 0;
    }
    .class-mean{
      float: right;
    }

    .box {
        border: 1px solid #eee;
        padding: 30px 50px;
        /* margin: 25px 0 15px 0; */
        box-shadow: 2px 2px 10px 0 #ccc;
    }
    li{
        line-height: 300%;
        list-style:none;
    }
    a {
        color: #0e90d2;
    }
    a {
        text-decoration: none;
    }
    a {
        background-color: transparent;
    }
    .am-list>li>a {
        display: block;
        /* padding: 0.1rem 0; */
    }
    a:hover {
        color: #0066CC;
    }
    .am-text-truncate {
        word-wrap: normal;
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }
    /* *, :after, :before {
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
    } */
    ul {
        display: block;
        list-style-type: disc;
        margin-block-start: 0em;
        margin-block-end: 0em;
        margin-inline-start: 0px;
        margin-inline-end: 0px;
        padding-inline-start: 0px;
    }
    li {
        line-height: 200%;
        list-style: none;
    }
    li:hover{
        color: #3a90ca;
        /* font-weight: bolder; */
    }
    hr {
        border: 0.4px solid #E0E0E0;
        /* background-color: #FFFFFF; */
        /* background-color:#00ff00; */
    }
   </style>
  <div class="am-container" style="padding-top: 30px;">
    <div class="box">
      <div class="class-title">
        <div class="class-name-ch">
          <span>???????????????</span>
          <div class="class-mean">
            <span class="am-badge am-badge-success am-text-xl">????????????</span>
          </div>
        </div>
        <div class="class-name-en">
          Key words for levels
        </div>
        <br>
        <div class="class-name-explain">
           <p>??????????????????????????????????????????????????????????????????????????????????????????</p>
        </div>
      </div>
    </div>
    <div class="am-g">
      <div class="am-u-md-8">
        <div class="box">
        <h1>???????????????</h1>
          <div class="content-block">
            <div class="content-block-title">
              <span><div class="keyWords">?????????:</div></span>
            </div>
            <div class="content-block-body">
              <ul>
                <li>?????????????????????<span>struct</span>???<span>typedef</span>???<span>void</span></li>
                <li>?????????????????????<span>switch-case-default</span>???<span>if-else if-else</span></li>
                <li>???????????????????????????<span>break</span>???<span>continue</span>???<span>return</span>???<span>goto</span></li>
                <li>?????????????????????<span>do-while</span>???<span>for</span>???<span>while</span></li>
                <li>?????????????????????<span>sizeof</span></li>
                <li>???????????????<span>\n</span>???<span>\\</span>???<span>\'</span>???<span>\"</span>???<span>\?</span></li>
              </ul>
            </div>
         </div>
           <div class="content-block">
            <div class="content-block-title">
              <span><div class="types">???????????????</div></span>
            </div>
            <div class="content-block-body">
              <table width="841" class="detail-table">
                <tbody>
                  <tr>
                     <td colspan="5">
                        <p>????????????</p>
                     </td>
                     <td colspan="5">
                        <p>????????????</p>
                     </td>
                     <td colspan="5">
                        <p>????????????</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>char</p>
                     </td>
                     <td colspan="5">
                        <p>%c</p>
                     </td>
                     <td colspan="5">
                        <p>%c</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>short</p>
                     </td>
                     <td colspan="5">
                        <p>%hd</p>
                     </td>
                     <td colspan="5">
                        <p>%d</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>int</p>
                     </td>
                     <td colspan="5">
                        <p>%d</p>
                     </td>
                     <td colspan="5">
                        <p>%d</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>double</p>
                     </td>
                     <td colspan="5">
                        <p>%lf</p>
                     </td>
                     <td colspan="5">
                        <p>%lf/%f</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>float</p>
                     </td>
                     <td colspan="5">
                        <p>%f</p>
                     </td>
                     <td colspan="5">
                        <p>%f</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>long</p>
                     </td>
                     <td colspan="5">
                        <p>%ld</p>
                     </td>
                     <td colspan="5">
                        <p>%ld</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>long long</p>
                     </td>
                     <td colspan="5">
                        <p>%lld</p>
                     </td>
                     <td colspan="5">
                        <p>%lld</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>long double</p>
                     </td>
                     <td colspan="5">
                        <p>%Lf</p>
                     </td>
                     <td colspan="5">
                        <p>%Lf</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>unsiged int</p>
                     </td>
                     <td colspan="5">
                        <p>%u</p>
                     </td>
                     <td colspan="5">
                        <p>%u</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>unsiged long</p>
                     </td>
                     <td colspan="5">
                        <p>%lu</p>
                     </td>
                     <td colspan="5">
                        <p>%lu</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>unsiged long long</p>
                     </td>
                     <td colspan="5">
                        <p>%llu</p>
                     </td>
                     <td colspan="5">
                        <p>%llu</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>enum</p>
                     </td>
                     <td colspan="5">
                        <p>???</p>
                     </td>
                     <td colspan="5">
                        <p>???</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>???????????????</p>
                     </td>
                     <td colspan="5">
                        <p>%s</p>
                     </td>
                     <td colspan="5">
                        <p>%s</p>
                     </td>
                  </tr>
                   <tr>
                     <td colspan="5">
                        <p>????????????</p>
                     </td>
                     <td colspan="5">
                        <p>%p</p>
                     </td>
                     <td colspan="5">
                        <p>%p</p>
                     </td>
                  </tr>
                </tbody>
              </table>
            </div>
          <div class="content-block">
            <div class="content-block-title">
              <span><div class="dataStructure">????????????:</div></span>
            </div>
            <div class="content-block-body">
              <ul>
                <li>???????????????????????????????????????</li>
                <li>??????????????????????????????if???switch????????????????????????</li>
                <li>?????????????????????while???do-while???for???????????????</li>
                <li>?????????????????????while???if??????????????????for???????????????</li>
                <li>???????????????????????????????????????</li>
                <li>??????????????????????????????????????????????????????????????????????????????</li>
                <li>??????????????????????????? </li>
              </ul>
            </div>
           </div>
           <div class="content-block">
            <div class="content-block-title">
              <span><div class="scoringCriteria">????????????:</div></span>
            </div>
            <div class="content-block-body">
              <p>?????????????????????</p>
                <ol>
                  <li>
                    ???????????????????????????????????????????????????????????????10??????????????????100??????????????????1000??????????????????10000???????????????(?????????????????????????????????)
                  </li>
                  <li>
                    ???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????60???70??????????????????????????????????????????????????????????????????????????????????????????????????????
                  </li>
                </ol>
                <br>
               <p>????????????</p>
                  <table width="841" class="detail-table">
                  <tbody>
                     <tr>
                        <td colspan="5">
                           <p>?????????</p>
                        </td>
                        <td colspan="5">
                           <p>??????</p>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="5">
                           <p>newbie</p>
                        </td>
                        <td colspan="5">
                        <canvas id="myCanvas" width="200" height="50" style="border:1px solid #c3c3c3;">
                        Your browser does not support the canvas element.
                        </canvas>
                        <script type="text/javascript">
                           var canvas=document.getElementById('myCanvas');
                           var ctx=canvas.getContext('2d');
                           ctx.height=100;
                           ctx.fillStyle='#fffacd';
                           ctx.fillRect(0,0,200,50);
                        </script>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="5">
                           <p>pupil</p>
                        </td>
                        <td colspan="5">
                        <canvas id="myCanvas1" width="200" height="50" style="border:1px solid #c3c3c3;">
                        Your browser does not support the canvas element.
                        </canvas>
                        <script type="text/javascript">
                           var canvas=document.getElementById('myCanvas1');
                           var ctx=canvas.getContext('2d');
                           ctx.height=100;
                           ctx.fillStyle='#90ee90';
                           ctx.fillRect(0,0,200,50);
                        </script>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="5">
                           <p>expert</p>
                        </td>
                        <td colspan="5">
                        <canvas id="myCanvas2" width="200" height="50" style="border:1px solid #c3c3c3;">
                        Your browser does not support the canvas element.
                        </canvas>
                        <script type="text/javascript">
                           var canvas=document.getElementById('myCanvas2');
                           var ctx=canvas.getContext('2d');
                           ctx.height=100;
                           ctx.fillStyle='#87CEFA';
                           ctx.fillRect(0,0,200,50);
                        </script>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="5">
                           <p>candidate master</p>
                        </td>
                        <td colspan="5">
                        <canvas id="myCanvas3" width="200" height="50" style="border:1px solid #c3c3c3;">
                        Your browser does not support the canvas element.
                        </canvas>
                        <script type="text/javascript">
                           var canvas=document.getElementById('myCanvas3');
                           var ctx=canvas.getContext('2d');
                           ctx.height=100;
                           ctx.fillStyle='#BA55D3';
                           ctx.fillRect(0,0,200,50);
                        </script>
                        </td>
                     </tr>
                     <tr>
                        <td colspan="5">
                           <p>master</p>
                        </td>
                        <td colspan="5">
                        <canvas id="myCanvas4" width="200" height="50" style="border:1px solid #c3c3c3;">
                        Your browser does not support the canvas element.
                        </canvas>
                        <script type="text/javascript">
                           var canvas=document.getElementById('myCanvas4');
                           var ctx=canvas.getContext('2d');
                           ctx.height=100;
                           ctx.fillStyle='#FF0000';
                           ctx.fillRect(0,0,200,50);
                        </script>
                        </td>
                     </tr>
                  </tbody>
                  </table>
            </div>
           </div>
           </div>
        </div>
      </div>
      <div class="am-u-md-4">
        <div class="am-sticky-placeholder" style="height: 182.2px; margin: 25px 0px 15px;"><div class="am-sticky-placeholder" style="height: 199.8px; margin: 0px;"><div class="box" data-am-sticky="{top:60}" style="margin: 0px;">
          <div class="content-block">
            <div class="content-block-title">
              ??????
            </div>
            <div class="content-block-body">
              <ol>
                <li><a class="scroll_keywords">?????????</a></li>
                <li><a class="scroll_types">????????????</a></li>
                <li><a class="scroll_dataStructure">????????????</a></li>
                <li><a class="scroll_scoringCriteria">????????????</a></li>
                <!-- <li><a class="scroll_top">????????????</li> -->
              </ol>
            </div>
          </div>
           <?php $user=$_SESSION['user_id'];if($user==TRUE)include_once "keywords_search.php"?>
           <br>
          </div>
      </div>

      </div>
    </div>
  </div><!-- container -->
  <script type="text/javascript">
      jQuery(document).ready(function($){
      // $('.scroll_top').click(function(){$('html,body').animate({scrollTop: '0px'}, 800);});
      $('.scroll_keywords').click(function(){$('html,body').animate({scrollTop:$('.keyWords').offset().top-60}, 800);});
      $('.scroll_types').click(function(){$('html,body').animate({scrollTop:$('.types').offset().top-60}, 800);});
      $('.scroll_dataStructure').click(function(){$('html,body').animate({scrollTop:$('.dataStructure').offset().top-60}, 800);});
      $('.scroll_scoringCriteria').click(function(){$('html,body').animate({scrollTop:$('.scoringCriteria').offset().top-60}, 800);});
      });

  </script>

<?php require_once "template/hznu/footer.php" ?>
