<html>
    <head>
        <meta charset="utf-8">
        <title>游戏交易商城</title>
        <link href="css/main.css" rel="stylesheet" type="text/css" />
        <link href="css/index.css" rel="stylesheet" type="text/css" />
        <script language="javascript" src="js/basic.js"></script>
        <script language="javascript" src="js/index.js"></script>
    </head>
    <body>
        <!-- top-->
        <div class="bfb bfbtop">
            <div class="yjcode">
                <div class="top">
                    <ul class="u1">
                        <li class="l1">
                            <span id="notlogin">
                                <span class="s1">您好，欢迎来游戏交易商城！ <a href="http://www.yx.com/reg/">登录</a> | <a href="http://www.yx.com/reg/reg.php">免费注册</a> | <a class="feng" href="http://www.yx.com/user/qiandao.php">每日签到</a></span>
                            </span>
                        </li>
                        <li class="l2"><a href="http://www.yx.com/">网站首页</a></li>
                        <li class="l2"><a href="http://www.yx.com/user/order.php">我的订单</a></li>
                        <li class="l3" onmouseover="lover(3)" onmouseout="lout(3)" id="topu1l3">
                        <a href="http://www.yx.com/user/" class="a1">会员中心</a>
                        <div class="umenu" id="umenu3" style="display:none;">
                        <a href="http://www.yx.com/user/">购买记录</a>
                        <a href="http://www.yx.com/user/pay.php">在线充值</a>
                        <a href="http://www.yx.com/user/paylog.php">资金明细</a>
                        <a href="http://www.yx.com/user/favpro.php">我的收藏</a>
                        <a href="http://www.yx.com/user/inf.php">个人信息</a>
                        </div>
                        </li>
                        <li class="l0"></li>
                        <li class="l2 l21"><a href="http://www.yx.com/user/pay.php" class="feng">充值</a></li>
                        <li class="l2 l21"><a href="http://www.yx.com/user/tixian.php" class="green">提现</a></li>
                        <li class="l2"><a href="http://www.yx.com/help/">新手帮助</a></li>
                        <li class="l2"><a href="http://www.yx.com/user/gdlx.php" target="_blank" class="red">有问必答</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="bfb bfbtop1">
            <div class="yjcode">
                <div class="top1">
                    <h1 class="logo"><a href="http://www.yx.com/"><img alt="游戏交易商城" border="0" src="img/logo.png" /></a></h1>
                <div class="menu_div2">
                    <div class="menu_select" style="width: 420px;">
                        <div class="input_div">
                            <form name="topf1" method="post" onSubmit="return topftj()">
                                <input type="hidden" id="tx1" name="c1" style="float:left;" value="6771">
                                <input type="hidden" id="tx2" name="c2" style="float:left;">
                                <input type="hidden" id="tx3" name="c3" style="float:left;">
                                <input type="hidden" id="tx4" name="c4" style="float:left;">
                                <input type="hidden" id="tx5" name="gds" value="-1" style="float:left;">
                                <input type="hidden" id="tx6" name="seltype" value="-1" style="float:left;">
                                <input class="input_txtjyj"  style="width:250px" placeholder="请输入关键字" type="text" name="topt" id="topt"   style="color:#999">
                                <input class="fond_a" value="&nbsp;" type="submit" style="border:0px;">
                            </form>
                        </div>
                    </div>
                </div>
                    <div class="blank" style="height:5px;_height:0px;overflow:hidden;margin:0px;padding:0px"></div>
                    <div class="topsad"> </div>
                    <div class="menu">
                        <div class="m2">
                            <a href="http://www.yx.com/">首页</a>
                            <a href="/product/51buy.php">我要买</a>
                            <a href="/user/productlx.php">我要卖</a>
                            <a href="/user/pay.php">我要充值</a>
                            <a href="/user/tixian.php">我要提现</a>
                            <a href="/user/">会员中心</a>
                            <a href="/kfyz.php">客服验证</a>
                            <a href="/user/msglist.php">系统通知</a>
                        </div>
        </div>
    </div>
</div>


        <!--轮播图-->
        <div class="yjcode">
        <div class="qh">
             <div class="container" id="idTransformView">
                 <ul class="slider" id="idSlider">
                     <li><a href="#"><img src="img/1416115010ad94.jpg" width="680" height="221" border="0" /></a></li>
                     <li><a href="#"><img src="img/1416115023ad76.jpg" width="680" height="221" border="0" /></a></li>
                     <li><a href="#"><img src="img/1416115010ad94.jpg" width="680" height="221" border="0" /></a></li>
                     <li><a href="#"><img src="img/1416115023ad76.jpg" width="680" height="221" border="0" /></a></li>
                 </ul>
                 <span style="display:none" id="qhai">2</span>
                 <ul class="num" id="idNum">
                    <li>1</li>
                    <li>2</li> 
                    <li>3</li>
                    <li>4</li> 
                 </ul>
             </div>
        </div>

        <div class="iright">
            <div class="index_login">
                <div class="clear" style="height:20px;"></div>
                <div class="touxiang"><a href="user/" target="_blank"><img src="img/20211013202303.jpg" id="itx"> </a></div>
                <div class="intr"><h5 id="vv881name" style="font-size:12px;">Hi，你好！</h5><p>欢迎您<span id="iuid" class="s1"></span></p></div>
                <ul class="ksdl2" id="ksdl3" style="display:none;">
                    <li class="l1">可用余额：<span id="imoney" class="s2"></span></li>
                    <li class="l3">[<a href="user/">会员中心</a>] [<a href="user/un.php">安全退出</a>]</li>
                </ul>
                <div class="clear" style="height:10px;"></div>
                <div class="indexlogin1  "><a href="/product/search_h2v.html">我要买</a></div>
                <div class="indexlogin2  "><a href="/user/productlx.php">我要卖</a></div>
                <div class="indexlogin3  " id="ksdl1"><a href="/reg/reg.php">免费注册</a></div>
                <div class="indexlogin4  " id="ksdl2"><a href="/reg/">登录</a></div>
                <div class="clear" style="height:15px;"></div>
            </div>
            <div class="web_notice">
                <div class="clear" style="height:5px;"></div>
                <div class="vv881title"><h5>公告通知</h5>
                <a class="themore" href="news/list.php?cat_id=3">&gt;</a></div>
                <ul>
                    <li><a href="help/ggview36.html" title="新手交易须知说明" target="_blank">新手交易须知说明</a></li>
                    <li><a href="help/ggview36.html" title="新手交易须知说明" target="_blank">新手交易须知说明</a></li>
                    <li><a href="help/ggview36.html" title="新手交易须知说明" target="_blank">新手交易须知说明</a></li>
                    <li><a href="help/ggview36.html" title="新手交易须知说明" target="_blank">新手交易须知说明</a></li>
                </ul>                    
            </div>
            <div class="box2_right1" style="margin-top:10px;">
            <div class="clear" style="height:5px;"></div>
            <div class="vv881title"><h5>交易排行</h5><span class="example">热门交易风向标！<i class="bg"></i></span></div>
            <div class="trade-ranking">
                <ul>
                 <div class="trade-ranking-column" id="DivShopPaiHangFlag1_S1"   style="">
                 <div class="rank"><p class="num1">1</p></div>
                 <div class="trade-ranking-text"><a href="http://www.yx.com/product/search_k165v.html">地下城与勇士</a></div>
                </div>
                
                 <div class="trade-ranking-column" id="DivShopPaiHangFlag1_S1"   style="">
                 <div class="rank"><p class="num2">2</p></div>
                 <div class="trade-ranking-text"><a href="http://www.yx.com/product/search_k176v.html">王者荣耀</a></div>
                </div>
                
                 <div class="trade-ranking-column" id="DivShopPaiHangFlag1_S1"   style="">
                 <div class="rank"><p class="num3">3</p></div>
                 <div class="trade-ranking-text"><a href="http://www.yx.com/product/search_k197v.html">梦幻西游</a></div>
                </div>
                
                 <div class="trade-ranking-column" id="DivShopPaiHangFlag1_S1"   style="">
                 <div class="rank"><p class="num3">4</p></div>
                 <div class="trade-ranking-text"><a href="http://www.yx.com/product/search_k166v.html">冒险岛2</a></div>
                </div>
                
                 <div class="trade-ranking-column" id="DivShopPaiHangFlag1_S1"   style="">
                 <div class="rank"><p class="num3">5</p></div>
                 <div class="trade-ranking-text"><a href="http://www.yx.com/product/search_k167v.html">新天龙八部</a></div>
                </div>
                
                 <div class="trade-ranking-column" id="DivShopPaiHangFlag1_S1"   style="">
                 <div class="rank"><p class="num3">6</p></div>
                 <div class="trade-ranking-text"><a href="http://www.yx.com/product/search_k213v.html">魂斗罗：归来</a></div>
                </div>
                
                 <div class="trade-ranking-column" id="DivShopPaiHangFlag1_S1"   style="">
                 <div class="rank"><p class="num3">7</p></div>
                 <div class="trade-ranking-text"><a href="http://www.yx.com/product/search_k227v.html">阴阳师</a></div>
                </div>
                
                 <div class="trade-ranking-column" id="DivShopPaiHangFlag1_S1"   style="">
                 <div class="rank"><p class="num3">8</p></div>
                 <div class="trade-ranking-text"><a href="http://www.yx.com/product/search_k326v.html">天涯明月刀</a></div>
                </div>
                
                 <div class="trade-ranking-column" id="DivShopPaiHangFlag1_S1"   style="">
                 <div class="rank"><p class="num3">9</p></div>
                 <div class="trade-ranking-text"><a href="http://www.yx.com/product/search_k333v.html">魔兽世界</a></div>
                </div>
                </ul>
            </div>
        </div>
        <div class="box2_right2" style="margin-top:10px;">
        <div class="clear" style="height:5px;"></div>
        <div class="vv881title"><h5>常见问题</h5></div>
        <div class="box3_right_con">
            <ul>
                <li><h3><a href="news/txtlist_i42v.html" title="如何联系订单客服" target="_blank"><font color='#333'>如何联系订单客服</font></a></h3><p>1、订单拍下付款成功后，提示如下2、点击[复制]即可直...</p></li>
                <li><h3><a href="news/txtlist_i41v.html" title="提现多久到账" target="_blank"><font color='#333'>提现多久到账</font></a></h3><p>您好，提现时间为：9：30-22：00 &#160;银行提现在15分...</p></li>
            </ul>
        </div>
    </div>
</div>
        <div style="clear: both"></div>
        <!--最新交易开始-->
        <div class="newjy">
            <span class="s1">最新交易</span>
            <ul id="rolltxt">
                <li>龍天 购买了 <span class="blue">【狱血魔神 男 QQ等级1~10级 无QQ好友 身份证未设置 】14满级角色时装基本都有当兵去了</span> 单价：<strong>￥500</strong> [<span class='red'>等待发货</span>]</li>
            </ul>
        </div>
        <span id="jynum" style="display:none;">1</span>
        <script language="javascript" src="js/jy.js"> </script>
        <!--最新交易结束-->

 

        <!--列表开始-->
        <div class="box_left1" style="float:left;margin: 10px 0 0 10px;">
            <div class="box2_tt1">
            <a href="#" id="tt_a0" class="tt1_a2" style="width:60px; font-size:12px; font-family:'微软雅黑';" onMouseOver="sele2('tt_c0',this,'tt_a0')">热门游戏</a>
            <a href="#" id="tt_a1" class="tt1_a1" onMouseOver="sele2('tt_c1',this,'tt_a1')">A</a>
            <a href="#" id="tt_a2" class="tt1_a1" onMouseOver="sele2('tt_c2',this,'tt_a2')">B</a>
            <a href="#" id="tt_a3" class="tt1_a1" onMouseOver="sele2('tt_c3',this,'tt_a3')">C</a>
            <a href="#" id="tt_a4" class="tt1_a1" onMouseOver="sele2('tt_c4',this,'tt_a4')">D</a>
            <a href="#" id="tt_a5" class="tt1_a1" onMouseOver="sele2('tt_c5',this,'tt_a5')">E</a>
            <a href="#" id="tt_a6" class="tt1_a1" onMouseOver="sele2('tt_c6',this,'tt_a6')">F</a>
            <a href="#" id="tt_a7" class="tt1_a1" onMouseOver="sele2('tt_c7',this,'tt_a7')">G</a>
            <a href="#" id="tt_a8" class="tt1_a1" onMouseOver="sele2('tt_c8',this,'tt_a8')">H</a>
            <a href="#" id="tt_a9" class="tt1_a1" onMouseOver="sele2('tt_c9',this,'tt_a9')">I</a>
            <a href="#" id="tt_a10" class="tt1_a1" onMouseOver="sele2('tt_c10',this,'tt_a10')">J</a>
            <a href="#" id="tt_a11" class="tt1_a1" onMouseOver="sele2('tt_c11',this,'tt_a11')">K</a>
            <a href="#" id="tt_a12" class="tt1_a1" onMouseOver="sele2('tt_c12',this,'tt_a12')">L</a>
            <a href="#" id="tt_a13" class="tt1_a1" onMouseOver="sele2('tt_c13',this,'tt_a13')">M</a>
            <a href="#" id="tt_a14" class="tt1_a1" onMouseOver="sele2('tt_c14',this,'tt_a14')">N</a>
            <a href="#" id="tt_a15" class="tt1_a1" onMouseOver="sele2('tt_c15',this,'tt_a15')">O</a>
            <a href="#" id="tt_a16" class="tt1_a1" onMouseOver="sele2('tt_c16',this,'tt_a16')">P</a>
            <a href="#" id="tt_a17" class="tt1_a1" onMouseOver="sele2('tt_c17',this,'tt_a17')">Q</a>
            <a href="#" id="tt_a18" class="tt1_a1" onMouseOver="sele2('tt_c18',this,'tt_a18')">R</a>
            <a href="#" id="tt_a19" class="tt1_a1" onMouseOver="sele2('tt_c19',this,'tt_a19')">S</a>
            <a href="#" id="tt_a20" class="tt1_a1" onMouseOver="sele2('tt_c20',this,'tt_a20')">T</a>
            <a href="#" id="tt_a21" class="tt1_a1" onMouseOver="sele2('tt_c21',this,'tt_a21')">U</a>
            <a href="#" id="tt_a22" class="tt1_a1" onMouseOver="sele2('tt_c22',this,'tt_a22')">V</a>
            <a href="#" id="tt_a23" class="tt1_a1" onMouseOver="sele2('tt_c23',this,'tt_a23')">W</a>
            <a href="#" id="tt_a24" class="tt1_a1" onMouseOver="sele2('tt_c24',this,'tt_a24')">X</a>
            <a href="#" id="tt_a25" class="tt1_a1" onMouseOver="sele2('tt_c25',this,'tt_a25')">Y</a>
            <a href="#" id="tt_a26" class="tt1_a1" onMouseOver="sele2('tt_c26',this,'tt_a26')">Z</a>
        </div>
<div id="tt_c1" class="box2_cc1" style="display: none;"><ul> </ul></div>

<div id="tt_c2" class="box2_cc1" style="display: none;"><ul> </ul></div>

<div id="tt_c3" class="box2_cc1" style="display: none;"><ul> <li> <img src="img/type/type2_347.png"  /> 
  <p><a href="http://xx.8864.com/">新苍穹之剑</a><span class="star5"></span></p></li></ul>
</div>

<div id="tt_c4" class="box2_cc1" style="display: none;"><ul> <li> <img src="img/type/type2_165.png"  /> 
  <p><a href="https://dnf.qq.com/">地下城与勇士</a><span class="star5"></span></p></li>
  <li> <img src="img/type/type2_350.png"  /> 
  <p><a href="https://d2.qq.com/main.shtml">刀剑2</a><span class="star5"></span></p></li>
  </ul></div>
<div id="tt_c5" class="box2_cc1" style="display: none;"><ul> 
 </ul></div>
<div id="tt_c6" class="box2_cc1" style="display: none;"><ul> 
 </ul></div>
<div id="tt_c7" class="box2_cc1" style="display: none;"><ul> 
 </ul></div>
<div id="tt_c8" class="box2_cc1" style="display: none;"><ul> 
 <li> <img src="img/type/type2_213.png"  /> 
  <p><a href="https://hdl.qq.com/index.shtml?ADTAG=media.innerenter.qqcom.index_navigation">魂斗罗：归来</a><span class="star5"></span></p></li>
  <li> <img src="img/type/type2_345.png"  /> 
  <p><a href="https://huoying.qq.com/">火影忍者</a><span class="star5"></span></p></li>
  </ul></div>
<div id="tt_c9" class="box2_cc1" style="display: none;"><ul> 
 </ul></div>
<div id="tt_c10" class="box2_cc1" style="display: none;"><ul> 
 </ul></div>
<div id="tt_c11" class="box2_cc1" style="display: none;"><ul> 
 </ul></div>
<div id="tt_c12" class="box2_cc1" style="display: none;"><ul> 
 </ul></div>
<div id="tt_c13" class="box2_cc1" style="display: none;"><ul> 
 <li> <img src="img/type/type2_166.png"  /> 
  <p><a href="http://www.yx.com/product/search_k166v.html">冒险岛2</a><span class="star5"></span></p></li>
  <li> <img src="img/type/type2_197.png"  /> 
  <p><a href="http://www.yx.com/product/search_k197v.html">梦幻西游</a><span class="star5"></span></p></li>
  <li> <img src="img/type/type2_333.png"  /> 
  <p><a href="http://www.yx.com/product/search_k333v.html">魔兽世界</a><span class="star5"></span></p></li>
  </ul></div>
<div id="tt_c14" class="box2_cc1" style="display: none;"><ul> 
 </ul></div>
<div id="tt_c15" class="box2_cc1" style="display: none;"><ul> 
 </ul></div>
<div id="tt_c16" class="box2_cc1" style="display: none;"><ul> 
 </ul></div>
<div id="tt_c17" class="box2_cc1" style="display: none;"><ul> 
 <li> <img src="img/type/type2_343.png"  /> 
  <p><a href="http://www.yx.com/product/search_k343v.html">球球大作战</a><span class="star5"></span></p></li>
  <li> <img src="img/type/type2_346.png"  /> 
  <p><a href="http://www.yx.com/product/search_k346v.html">全民奇迹</a><span class="star5"></span></p></li>
  </ul></div>
<div id="tt_c18" class="box2_cc1" style="display: none;"><ul> 
 </ul></div>
<div id="tt_c19" class="box2_cc1" style="display:none;"><ul> 
 </ul></div>
<div id="tt_c20" class="box2_cc1" style="display: none;"><ul> 
 <li> <img src="img/type/type2_326.png"  /> 
  <p><a href="http://www.yx.com/product/search_k326v.html">天涯明月刀</a><span class="star5"></span></p></li>
  </ul></div>
<div id="tt_c21" class="box2_cc1" style="display:none;"><ul> 
 </ul></div>
<div id="tt_c22" class="box2_cc1" style="display:none;"><ul> 
 </ul></div>
<div id="tt_c23" class="box2_cc1" style="display: none;"><ul> 
 <li> <img src="img/type/type2_176.png"  /> 
  <p><a href="http://www.yx.com/product/search_k176v.html">王者荣耀</a><span class="star5"></span></p></li>
  <li> <img src="img/type/type2_344.png"  /> 
  <p><a href="http://www.yx.com/product/search_k344v.html">问道</a><span class="star5"></span></p></li>
  </ul></div>
<div id="tt_c24" class="box2_cc1" style="display: none;"><ul> 
 <li> <img src="img/type/type2_167.png"  /> 
  <p><a href="http://www.yx.com/product/search_k167v.html">新天龙八部</a><span class="star5"></span></p></li>
  </ul></div>
<div id="tt_c25" class="box2_cc1" style="display: none;"><ul> 
 <li> <img src="img/type/type2_227.png"  /> 
  <p><a href="http://www.yx.com/product/search_k227v.html">阴阳师</a><span class="star5"></span></p></li>
  <li> <img src="img/type/type2_349.png"  /> 
  <p><a href="http://www.yx.com/product/search_k349v.html">英雄联盟</a><span class="star5"></span></p></li>
  </ul></div>


<div id="tt_c26" class="box2_cc1" style="display: none;"><ul> 
 <li> <img src="img/type/type2_348.png"  /> 
  <p><a href="http://www.yx.com/product/search_k348v.html">征途2S</a><span class="star5"></span></p></li>
  </ul></div>



<div class="box2_cc1" id="tt_c0" style="display: block;">
<ul> 
  
<li><a href="http://www.yx.com/product/search_k166v.html"> <img src="img/type/type2_166.png"  /> </a>
  <p><a href="http://www.yx.com/product/search_k166v.html">冒险岛2</a><span class="star5"></span></p></li>
  
<li><a href="http://www.yx.com/product/search_k176v.html"> <img src="img/type/type2_176.png"  /> </a>
  <p><a href="http://www.yx.com/product/search_k176v.html">王者荣耀</a><span class="star5"></span></p></li>
  
<li><a href="http://www.yx.com/product/search_k227v.html"> <img src="img/type/type2_227.png"  /> </a>
  <p><a href="http://www.yx.com/product/search_k227v.html">阴阳师</a><span class="star5"></span></p></li>
  
<li><a href="http://www.yx.com/product/search_k326v.html"> <img src="img/type/type2_326.png"  /> </a>
  <p><a href="http://www.yx.com/product/search_k326v.html">天涯明月刀</a><span class="star5"></span></p></li>
  
<li><a href="http://www.yx.com/product/search_k333v.html"> <img src="img/type/type2_333.png"  /> </a>
  <p><a href="http://www.yx.com/product/search_k333v.html">魔兽世界</a><span class="star5"></span></p></li>
  
<li><a href="http://www.yx.com/product/search_k343v.html"> <img src="img/type/type2_343.png"  /> </a>
  <p><a href="http://www.yx.com/product/search_k343v.html">球球大作战</a><span class="star5"></span></p></li>
  
<li><a href="http://www.yx.com/product/search_k344v.html"> <img src="img/type/type2_344.png"  /> </a>
  <p><a href="http://www.yx.com/product/search_k344v.html">问道</a><span class="star5"></span></p></li>
  
<li><a href="http://www.yx.com/product/search_k345v.html"> <img src="img/type/type2_345.png"  /> </a>
  <p><a href="http://www.yx.com/product/search_k345v.html">火影忍者</a><span class="star5"></span></p></li>
  
<li><a href="http://www.yx.com/product/search_k346v.html"> <img src="img/type/type2_346.png"  /> </a>
  <p><a href="http://www.yx.com/product/search_k346v.html">全民奇迹</a><span class="star5"></span></p></li>
  
<li><a href="http://www.yx.com/product/search_k348v.html"> <img src="img/type/type2_348.png"  /> </a>
  <p><a href="http://www.yx.com/product/search_k348v.html">征途2S</a><span class="star5"></span></p></li>
  
<li><a href="http://www.yx.com/product/search_k349v.html"> <img src="img/type/type2_349.png"  /> </a>
  <p><a href="http://www.yx.com/product/search_k349v.html">英雄联盟</a><span class="star5"></span></p></li>
  
<li><a href="http://www.yx.com/product/search_k350v.html"> <img src="img/type/type2_350.png"  /> </a>
  <p><a href="http://www.yx.com/product/search_k350v.html">刀剑2</a><span class="star5"></span></p></li>
  </ul>
</div>



</div>

 <div class="box_left1" style="float:left;margin: 10px 0 0 10px; height:480px">
 
 <div class="box3_div">
<div class="clear" style="height:5px;"></div>
<div class="vv881title"><h5>最新发布</h5>
<!--<a class="themore" href="#">></a>--></div>
    <div class="ordercon" style=" width:400px; float:left">
            <div class="align_bottom">
                        <dl>
                <dd class="col1"><a href="product/view29.html" target="_blank">双神兽号</a></dd>
                <dd class="col2">￥29960</dd>
                <dd class="col3">
                剩余1件                </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view28.html" target="_blank">v7超值号谁来赶紧秒了带qq54级</a></dd>
                <dd class="col2">￥1000</dd>
                <dd class="col3">
                剩余0件                </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view27.html" target="_blank">41041金1988钻_过防沉迷_五英雄(东皇太一)_三无金币号</a></dd>
                <dd class="col2">￥30</dd>
                <dd class="col3">
                剩余1件                </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view26.html" target="_blank">50089金币2963钻石 6英雄 未打排位 三无号秒绑手机</a></dd>
                <dd class="col2">￥50</dd>
                <dd class="col3">
                剩余1件                </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view25.html" target="_blank">凤求凰白龙吟末日机甲</a></dd>
                <dd class="col2">￥200</dd>
                <dd class="col3">
                剩余1件                </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view24.html" target="_blank">满英雄10个英雄满熟练大部分皮肤武则天韩信</a></dd>
                <dd class="col2">￥5500</dd>
                <dd class="col3">
                剩余1件                </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view23.html" target="_blank">VIP7 武则天 战队赛头像框 满铭文 微信三无 安全保证</a></dd>
                <dd class="col2">￥3000</dd>
                <dd class="col3">
                剩余10件               </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view22.html" target="_blank">限定皮肤，四赛季王者号</a></dd>
                <dd class="col2">￥3500</dd>
                <dd class="col3">
                剩余10件               </dd>
            </dl>
            
                
                                        </div>
        
</div>




<div class="ordercon" style=" width:400px; float:left">
            <div class="align_bottom">
            
                        <dl>
                <dd class="col1"><a href="product/view20.html" target="_blank">+9奶锤奶妈碎星随时+10大量稀有绝版坐骑时装，黑胖无压力</a></dd>
                <dd class="col2">￥800</dd>
                <dd class="col3">
                剩余1件                </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view19.html" target="_blank">+9橙极限套法师，原石够可直接10，送+11符文标飞，+9弓箭，奶妈搬砖号。</a></dd>
                <dd class="col2">￥5500</dd>
                <dd class="col3">
                剩余1件                </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view18.html" target="_blank">+13黑爵狂战带+10高台法师一枚满宝石黑胖轻松1.2E三无QQ</a></dd>
                <dd class="col2">￥5000</dd>
                <dd class="col3">
                剩余1件                </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view17.html" target="_blank">【天帝 男 90 身份证未设置 QQ等级11-20级 无QQ好友 】★五星签约★天空套，妖刀时光套深渊恶魔套恍惚卢克C号</a></dd>
                <dd class="col2">￥2800</dd>
                <dd class="col3">
                剩余1件                </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view16.html" target="_blank">2256万金币 ＝ 50元 【在线发货，方便快捷】</a></dd>
                <dd class="col2">￥50</dd>
                <dd class="col3">
                剩余1件                </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view14.html" target="_blank">【30级】 贵族5差30块钱贵族6，至尊宝皮肤，150暴击符文，两个改名卡</a></dd>
                <dd class="col2">￥348</dd>
                <dd class="col3">
                剩余1件                </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view9.html" target="_blank">【狱血魔神 男 QQ等级1~10级 无QQ好友 身份证未设置 】14满级角色时装基本都有当兵去了</a></dd>
                <dd class="col2">￥1000</dd>
                <dd class="col3">
                剩余9999件             </dd>
            </dl>
            
                <dl>
                <dd class="col1"><a href="product/view8.html" target="_blank">【狱血魔神 男 QQ等级1~10级 无QQ好友 身份证未设置 】14满级角色时装基本都有当兵去了</a></dd>
                <dd class="col2">￥1000</dd>
                <dd class="col3">
                剩余98件               </dd>
            </dl>
            
                
            
                                        </div>
        
</div>



</div>
 
 </div>
<!--列表结束-->

<!--评论B-->
  <!--友情B-->
        <div class="bolink">
            <section>
                <div class="safepromise">
                    <div class="safe_item1">
                        <p class="f14r">安全保障</p>
                        <p>防盗措施 保障交易安全</p>
                    </div>
                    <div class="safe_item2">
                        <p class="f14r">免手续费</p>
                        <p>所有交易无任何手续费</p>
                    </div>
                    <div class="safe_item3">
                        <p class="f14r">专业团队</p>
                        <p>快速专业引导完成交易</p>
                    </div>
                    <div class="safe_item4">
                        <p class="f14r">7X24小时客服</p>
                        <p>客服7X24小时贴心服务</p>
                    </div>
                </div>
            </section>
        </div>

</div>
        <div class="bfb bfbbot">
            <div class="yjcode">
                <div class="bottom">
                    <ul class="u1">
                        <li>
                        <span class="fontyh"><a href="http://www.yx.com/help/search_j38v.html">服务中心</a></span>
                        <a href="http://www.yx.com/help/search_j38v_k41v.html" class="a1">我要咨询</a><br>
                        <a href="http://www.yx.com/help/search_j38v_k39v.html" class="a1">我要建议</a><br>
                        <a href="http://www.yx.com/help/search_j38v_k40v.html" class="a1">我要投诉</a><br>
                        <a href="http://www.yx.com/help/search_j38v_k42v.html" class="a1">在线客服</a><br>
                        </li>

                        <li>
                        <span class="fontyh"><a href="http://www.yx.com/help/search_j9v.html">买家指南</a></span>
                        <a href="http://www.yx.com/help/search_j9v_k14v.html" class="a1">如何注册</a><br>
                        <a href="http://www.yx.com/help/search_j9v_k15v.html" class="a1">如何购买</a><br>
                        <a href="http://www.yx.com/help/search_j9v_k16v.html" class="a1">搜索商品</a><br>
                        <a href="http://www.yx.com/help/search_j9v_k17v.html" class="a1">支付方式</a><br>
                        </li>

                        <li>
                        <span class="fontyh"><a href="http://www.yx.com/help/search_j10v.html">卖家指南</a></span>
                        <a href="http://www.yx.com/help/search_j10v_k18v.html" class="a1">如何出售</a><br>
                        <a href="http://www.yx.com/help/search_j10v_k19v.html" class="a1">收费标准</a><br>
                        <a href="http://www.yx.com/help/search_j10v_k20v.html" class="a1">入驻签约</a><br>
                        </li>

                        <li>
                        <span class="fontyh"><a href="http://www.yx.com/help/search_j11v.html">安全交易</a></span>
                        <a href="http://www.yx.com/help/search_j11v_k21v.html" class="a1">钓鱼防骗</a><br>
                        <a href="http://www.yx.com/help/search_j11v_k22v.html" class="a1">预防盗号</a><br>
                        <a href="http://www.yx.com/help/search_j11v_k23v.html" class="a1">谨防诈骗</a><br>
                        <a href="http://www.yx.com/help/search_j11v_k24v.html" class="a1">实名认证</a><br>
                        </li>

                        <li>
                        <span class="fontyh"><a href="http://www.yx.com/help/search_j12v.html">常见问题</a></span>
                        <a href="http://www.yx.com/help/search_j12v_k25v.html" class="a1">如何充值</a><br>
                        <a href="http://www.yx.com/help/search_j12v_k26v.html" class="a1">如何提现</a><br>
                        <a href="http://www.yx.com/help/search_j12v_k27v.html" class="a1">真假客服</a><br>
                        <a href="http://www.yx.com/help/search_j12v_k28v.html" class="a1">忘记密码</a><br>
                        </li>
                    </ul>
        <div class="ad"></div>
        <div class="bq">
            <a href="http://www.yx.com/">网站首页</a> | 
            <a href="http://www.yx.com/help/aboutview2.html">关于我们</a> | 
            <a href="http://www.yx.com/help/aboutview3.html">广告合作</a> | 
            <a href="http://www.yx.com/help/aboutview4.html">联系我们</a> | 
            <a href="http://www.yx.com/help/aboutview5.html">隐私条款</a> | 
            <a href="http://www.yx.com/help/aboutview6.html">免责声明</a><br>
            CopyRight 2022 游戏交易商城<br> </div>
        </div>
    </div>
</div>
    </body>
</html>
