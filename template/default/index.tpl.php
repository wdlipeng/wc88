<?php
if(!defined('INDEX')){
	exit('Access Denied');
}
define('VIEW_PAGE',1);
//幻灯片
$slides=dd_slides($duoduo,10);

//商城
include(DDROOT.'/comm/mall.class.php');
$mall_class=new mall($duoduo);
$num=11;
$paipai_arr=array();

$malls=$mall_class->index($num,$paipai_arr);
$chongzhi_url=$ddTaoapi->tdj_zujian(1,$dduser['id']);

//友情链接
$yqlj=dd_link($duoduo,30,0);

//合作伙伴
$hzhb=dd_link($duoduo,30,1);

$ajax_load_num=$dd_tpl_data['ajax_load_num'];

$bankuai=$duoduo->select_all('bankuai','id,title,code,bankuai_tpl,web_cid,yugao,yugao_time,huodong_time',"tuijian=1 and status=1 and del=0 ORDER BY sort=0 ASC,sort asc,id desc");
$t=array();
foreach($bankuai as $key=>$vo){
	if($key==0){
		if($vo['huodong_time']){
			$vo['huodong_etime']=strtotime(date('Y-m-d '.$vo['huodong_time'].":00:00",TIME))+24*3600;
		}
		$first_bankuai=$vo;
		$web_cid=$vo['web_cid'];
	}
	if(!in_array($vo['bankuai_tpl'],$t)){
		$css[]=TPLURL."/goods/".$vo['bankuai_tpl']."/css/list.css";
		$t[]=$vo['bankuai_tpl'];
	}
}
$web_cid=unserialize($web_cid);
if($web_cid){
	$where="id in(".implode(',',$web_cid).")";
}else{
	$where=" tag='goods' ";
}
if(!empty($web_cid)){
	$goods_type=$duoduo->select_all("type","id,title",$where."  order by sort=0 asc,sort asc,id desc");
}
$yugao_time=date('Y-m-d '.$first_bankuai['yugao_time'].":00");
if(strtotime($yugao_time)>TIME){
	$yugao_close=true;
}

// $css[]=TPLURL."/inc/css/index.css";
// $css[]=TPLURL."/inc/css/index/bootstrap.css";
// $css[]=TPLURL."/inc/css/index/fancybox.css";
// $css[]=TPLURL."/inc/css/index/font-awesome.css";
// $css[]=TPLURL."/inc/css/index/laydate.css";
// $css[]=TPLURL."/inc/css/index/laydate_002.css";
//$css[]=TPLURL."/inc/css/index/layer.css";
$css[]=TPLURL."/inc/css/index/style1.css";
$css[]=TPLURL."/inc/css/index/poststyle.css";

//$css[]=TPLURL."/inc/css/malllist.css";
include(TPLPATH.'/inc/header.tpl.php');
?>
<script src="template/default/inc/js/index/banner.js" type="text/javascript"></script>
<script type="text/javascript" src="js/scrollpagination.js"></script>
<script>
$(function(){
	fixDiv('#ddlanmu .ddlanmu_c',0);
	countDown('.count_down');
});
</script>


<div class="mainbody_new">
<!--幻灯片-->
<div class="banner">
  <ul class="banner_box">

    <li style="opacity: 0; display: none;">
      <a href="<?=SITEURL?>/ad/newreg09/index.html" style="background:url(template/default/inc/images/index/lubo/57e1f684f23a8.jpg) center top no-repeat"></a>
    </li>
    <li style="opacity: 0; display: none;">
      <a href="<?=SITEURL?>/ad/newreg09/index.html" style="background:url(template/default/inc/images/index/lubo/774826071471662610048.png) center top no-repeat"></a>
    </li>
    <li style="opacity: 0; display: none;">
      <a href="<?=SITEURL?>/ad/newreg09/index.html" style="background:url(template/default/inc/images/index/lubo/93869efa1473404727753.png) center top no-repeat"></a>
    </li>
    <li style="opacity: 0; display: none;">
      <a href="<?=SITEURL?>/ad/newreg09/index.html" style="background:url(template/default/inc/images/index/lubo/lubo4.png) center top no-repeat"></a>
    </li>
    <li style="opacity: 0; display: none;">
      <a href="<?=SITEURL?>/ad/newreg09/index.html" style="background:url(template/default/inc/images/index/lubo/lubo5.png) center top no-repeat"></a>
    </li>

  </ul>
</div>
  <script type="text/javascript"> $(function(){$(".banner").lubo({}); }) </script>
<!--幻灯片结束-->
<!--网站公告-->
  <div style="display:none" class="web_notice clearfix">
    <ul class="notice_box clearfix">
      <li><i class="icon"></i><a href="<?=SITEURL?>" title="物筹巴巴9月下旬活动公告">物筹巴巴9月下旬活动公...</a></li><li><i class="icon"></i><a href="<?=SITEURL?>" title="邦帮堂入驻物筹巴巴【特惠】公告">邦帮堂入驻物筹巴巴【特...</a></li><li><i class="icon"></i><a href="<?=SITEURL?>" title="千林贷加息公告">千林贷加息公告</a></li><li><i class="icon"></i><a href="<?=SITEURL?>" title="物筹巴巴返利加息调整公告">物筹巴巴返利加息调整公...</a></li>     <a class="notice_more" href="<?=SITEURL?>">更多 <i class="icon-angle-right fz16"></i></a>
    </ul>
  </div>
<!--网站公告结束-->

<!--投资AD开始-->
<script>
function closebg(){
  document.getElementById('yindao').style.display='none';
  $('.xinshoulb:nth-child(2n+1)').css('margin-right','12px')
}
setInterval("closebg()",5000);

 function baogao(){
$("#baogao2").show();
$("#baogao1").css("color","#26b4ef");
$("#baogao1").css("text-decoration","underline");

$("#diaoyan2").hide();
$("#diaoyan1").css("color","#545458");
$("#diaoyan1").css("text-decoration","none");
}
function diaoyan(){
$("#baogao2").hide();
$("#baogao1").css("color","#545458");
$("#baogao1").css("text-decoration","none");

$("#diaoyan2").show();
$("#diaoyan1").css("color","#26b4ef");
$("#diaoyan1").css("text-decoration","underline");
}
</script>
<div class="part4">
    <div class="part4_left">
      <ul>
        <li>
          <img src="template/default/inc/images/index/search.png" style="width:67px;height:66px;">
          <span><h4>一站式金融搜索平台</h4></span>
          <span>互联网金融垂直搜索再担保平台</span>
        </li>
        <li>
          <img src="template/default/inc/images/index/money.png" style="width:67px;height:66px;">
          <span><h4>一份投资，双份收益</h4></span>
          <span>投资平台收益+物筹巴巴返利</span>
        </li>
        <li>
          <img src="template/default/inc/images/index/safe.png" style="width:67px;height:66px;">
          <span><h4>风险低，严格风控</h4></span>
          <span>择最优秀的互联网金融平台</span>
        </li>
      </ul>

    </div>
    <div class="part4_right">
          <p class="gonggao" onclick="window.location.href='/default/news/index?newstype=2'" id="baogao1" onmouseover="baogao()" style="color:#26b4ef; text-decoration:underline;margin-left:20px;">网站公告</p>
          <p class="gonggao" onclick="window.location.href='/default/news/index?newstype=7'" id="diaoyan1" onmouseover="diaoyan()" style="margin-left:20px">调研报告</p>
          <div class="clear"></div>
          <ul style="list-style-type:square" id="baogao2">
              <li><a href="/default/news/info?id=999" target="_blank">[公告]&nbsp;国庆献礼千二加息送不停</a></li><li><a href="/default/news/info?id=986" target="_blank">[公告]&nbsp;关于实名认证系统维护</a></li><li><a href="/default/news/info?id=974" target="_blank">[公告]&nbsp;理财范27天－89天限额1...</a></li>          </ul>
          <ul style=" display:none;" id="diaoyan2">
              <li><a href="/default/news/headline?id=965" target="_blank">[报告]&nbsp;海融易调研报告</a></li><li><a href="/default/news/headline?id=918" target="_blank">[报告]&nbsp;玖富调研报告</a></li><li><a href="/default/news/headline?id=891" target="_blank">[报告]&nbsp;君融贷调研报告</a></li>          </ul>
    </div>
  <div class="clear"></div>
</div>
<!--投资AD结束-->

<!--活动优惠-->
  <div class="activity clearfix">
    <div class="activity_left">
      <div class="top_title"><h3>限时抢购</h3><cite>加倍收益，名额有限，预约从速</cite></div>
      <div class="fanli">
        <div class="fanli_bt"><img src="template/default/inc/images/index/yl.png" style="border: solid 1px #eee; " width="128px" height="51px"><em><a href="#">定期宝B2016092604</a></em></div>
        <div class="fanli_nr clearfix">
          <ul>
            <li style="width: 222px;"><span class="text_tag">10.50<i>%</i></span><span class="fanli_type">平台年化</span></li>
            <li style="width: 260px;"><span class="text_tag">9.50<i>%</i></span><span class="fanli_type2">财气加息</span></li>
            <li style="width:242px;"><span class="text_tag">20.00<i>%</i></span><span class="fanli_type3">综合年化</span></li>
          </ul>
        </div>
        <div class="fanli_btn"><i class="icon clock"></i>开抢时间：2016-09-26 00:00:00 <a href="<?=SITEURL?>">立即投资</a></div>
      </div>
    </div>
    <div class="activity_rig">
      <div class="top_title"><h3>活动专区</h3><a class="activity_more" href="<?=SITEURL?>">更多 <i class="icon-angle-right fz16"></i></a></div>
      <div class="activity_rig_nr">
        <a href="#"><img src="template/default/inc/images/index/activity1.png"></a>
        <a href="#"><img src="template/default/inc/images/index/activity2.png"></a>
      </div>
    </div>
  </div>
<!--活动优惠结束-->

<!--网贷专区-->
<style>
  .fresh_main{}
  .fresh_main .list1_text2_div1 a{color:#333333;text-decoration:none;cursor: text;}
  .fresh_main .list1_text2_div1{padding-left:0;}
  .fresh_main  a.btn_a1:link, .fresh_main  a.btn_a1:visited {
    color: #fff;
    font-size: 12px;}
</style>

  <div class="fresh mt30 clearfix">
    <div class="fresh_main">
      <div class="fresh_top"><h3>理财返利</h3><cite>首投加息送红包，复投加息永不停</cite><a class="activity_more" href="<?=SITEURL?>/plugin.php?mod=licai&act=index#4429">更多 <i class="icon-angle-right fz16"></i></a></div>
      <div class="fresh_list clearfix">
<ul>
          <li class="l2_li2 li_h list1_text2_shade" style="height:365px">
            <div class="list1_text2">
              <div class="list1_text2_top">
                <img class="list1_text2_topimg" src="template/default/inc/images/index/houben-logo.jpg">
              </div>
                 <div class="list1_text2_div2">
                <div class="_left" style="text-align:center">
                  <span class="list1_text2_div2_left_s1">9.9</span>%<br>
                  <span class="list1_text2_div2_left_s2">最高收益率</span>
                </div>
                <div class="_right" style="text-align:center">
                  <span class="list1_text2_div2_left_s1">7.0</span>%<br>
                  <span class="list1_text2_div2_left_s2">本站最高再返</span>
                </div>
              </div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">红杉资本Sequoia Capital投资</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">安全、透明安心理财</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">严格的风险控制体系</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">新手即享15%年化收益</a></div>



              <a class="btn_a1 btn_bg" target="_blank" href="http://u.duoduo123.com/index.php?g=mall&amp;m=mall&amp;a=jump&amp;siteurl=http%3A%2F%2Fwww.5chou88.cn&amp;mid=1&amp;chanpin=7&amp;mall_url=https%3A%2F%2Fwww.houbank.com%2Fmobile%2Fhouqianbao%2Fregister%3Futm_source%3DZT001">投资拿返利</a>
            </div>
          </li>
      <li class="l2_li2 li_h list1_text2_shade" style="height:365px">
            <div class="list1_text2">
              <div class="list1_text2_top">
                <img class="list1_text2_topimg" src="template/default/inc/images/index/huitou_logo.jpg">
              </div>
                 <div class="list1_text2_div2">
                <div class="_left" style="text-align:center">
                  <span class="list1_text2_div2_left_s1">10.8</span>%<br>
                  <span class="list1_text2_div2_left_s2">最高收益率</span>
                </div>
                <div class="_right" style="text-align:center">
                  <span class="list1_text2_div2_left_s1">3.0</span>%<br>
                  <span class="list1_text2_div2_left_s2">本站最高再返</span>
                </div>
              </div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3"> 国资控股 </a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3"> 国有 安全 好收益 </a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">双重风控体制</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">投资即可获得本站额外返</a></div>



              <a class="btn_a1 btn_bg" target="_blank" href="http://u.duoduo123.com/index.php?g=mall&amp;m=mall&amp;a=jump&amp;siteurl=http%3A%2F%2Fwww.5chou88.cn&amp;mid=1&amp;chanpin=7&amp;mall_url=http%3A%2F%2Fwww.huitoup2p.com">投资拿返利</a>
            </div>
          </li>
      <li class="l2_li2 li_h list1_text2_shade" style="height:365px">
            <div class="list1_text2">
              <div class="list1_text2_top">
                <img class="list1_text2_topimg" src="template/default/inc/images/index/minxindai_logo.jpg">
              </div>
                 <div class="list1_text2_div2">
                <div class="_left" style="text-align:center">
                  <span class="list1_text2_div2_left_s1">15</span>%<br>
                  <span class="list1_text2_div2_left_s2">最高收益率</span>
                </div>
                <div class="_right" style="text-align:center">
                  <span class="list1_text2_div2_left_s1">3.85</span>%<br>
                  <span class="list1_text2_div2_left_s2">本站最高再返</span>
                </div>
              </div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">40倍银行活期存款收益</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">本息保障制度 安全理财</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">活期理财9%</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">活期理财9%</a></div>



              <a class="btn_a1 btn_bg" target="_blank" href="http://u.duoduo123.com/index.php?g=mall&amp;m=mall&amp;a=jump&amp;siteurl=http%3A%2F%2Fwww.5chou88.cn&amp;mid=1&amp;chanpin=7&amp;mall_url=http%3A%2F%2Fwww.minxindai.com">投资拿返利</a>
            </div>
          </li>
      <li class="l2_li2 li_h list1_text2_shade" style="height:365px">
            <div class="list1_text2">
              <div class="list1_text2_top">
                <img class="list1_text2_topimg" src="template/default/inc/images/index/hl-logo.jpg">
              </div>
                 <div class="list1_text2_div2">
                <div class="_left" style="text-align:center">
                  <span class="list1_text2_div2_left_s1">20</span>%<br>
                  <span class="list1_text2_div2_left_s2">最高收益率</span>
                </div>
                <div class="_right" style="text-align:center">
                  <span class="list1_text2_div2_left_s1">1.4</span>%<br>
                  <span class="list1_text2_div2_left_s2">本站最高再返</span>
                </div>
              </div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">更好的服务保障</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">已加入《本息保障计划》</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">实地外访，7道严格风控机制</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">起投金额只需1元</a></div>



              <a class="btn_a1 btn_bg" target="_blank" href="http://u.duoduo123.com/index.php?g=mall&amp;m=mall&amp;a=jump&amp;siteurl=http%3A%2F%2Fwww.5chou88.cn&amp;mid=1&amp;chanpin=7&amp;mall_url=http%3A%2F%2Fwww.zrcaifu.com">投资拿返利</a>
            </div>
          </li>
      <li class="l2_li2 li_h list1_text2_shade" style="height:365px;">
            <div class="list1_text2">
              <div class="list1_text2_top">
                <img class="list1_text2_topimg" src="template/default/inc/images/index/zhongrui-logo.jpg.png">
              </div>
                 <div class="list1_text2_div2">
                <div class="_left" style="text-align:center">
                  <span class="list1_text2_div2_left_s1">20</span>%<br>
                  <span class="list1_text2_div2_left_s2">最高收益率</span>
                </div>
                <div class="_right" style="text-align:center">
                  <span class="list1_text2_div2_left_s1">1.7</span>%<br>
                  <span class="list1_text2_div2_left_s2">本站最高再返</span>
                </div>
              </div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">起投金额：100元</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">法律援助基金</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">P2B供应链金融信息服务平台</a></div>
              <div class="list1_text2_div1"><a href="javascript:void(0);" class="a3">100%全额本息担保+千万级风险备用金</a></div>



              <a class="btn_a1 btn_bg" target="_blank" href="http://u.duoduo123.com/index.php?g=mall&amp;m=mall&amp;a=jump&amp;siteurl=http%3A%2F%2Fwww.5chou88.cn&amp;mid=1&amp;chanpin=7&amp;mall_url=http%3A%2F%2Fwww.zrcaifu.com">投资拿返利</a>
            </div>
          </li>
</ul>
      </div>
    </div>
  </div>
<!--专区结束-->



<!--新闻资讯-->
  <div class="news mt30">
    <div class="news_main clearfix">
      <div class="news_left">
        <div class="news_nr">
          <div class="hd">
          <h3>行业动态</h3>

            </div>
            <div class="bd">
              <div class="news_short clearfix" style="">
                  <div class="short_left">
                    <span class="short_img"><img src="template/default/inc/images/index/57e24bca7a2ae.jpg"></span>
                          <span class="short_tip"><a href="<?=SITEURL?>">专家支招返利攻略  来物筹巴巴实...</a></span>
                          <span class="short_nr">随着国民经济的快速发展，投资理财已经变得司空见惯。对于广大的投资者来说，如何在安全的基础上获得更高的...<a href="<?=SITEURL?>">【全文】</a></span>                 </div>
                  <div class="short_rig">
                    <div class="short_title clearfix">
                      <h3><a href="<?=SITEURL?>">理财首选物筹巴巴   P2P返利时时享...</a></h3>
                                                          <a href="<?=SITEURL?>" class="short_list">网贷返利 促进P2P环境...</a>                              <a href="<?=SITEURL?>" class="short_list">物筹巴巴：网贷返利 高收益...</a>                    </div>
                    <div class="box_list">
                                              <li><i></i><a href="<?=SITEURL?>">物筹巴巴：让网贷返利走进大众视野</a></li>                       <li><i></i><a href="<?=SITEURL?>">P2P理财决策不再“拔剑四顾心茫然”</a></li>                        <li><i></i><a href="<?=SITEURL?>">分散投资降低理财风险</a></li><li class="mt10"><i></i><a href="<?=SITEURL?>">投资搭搭配 收益翻翻倍</a></li>
                                                <li><i></i><a href="<?=SITEURL?>">互金整治平台骤减 网贷返利成收益保障</a></li>                        <li><i></i><a href="<?=SITEURL?>">金融返利 帮助P2P行业建立“标准”</a></li>                    </div>
                  </div>
                </div>            </div>
        </div>
        <script type="text/javascript">jQuery(".news_nr").slide(); </script>
        <!---->
      </div>

      <div class="news_rig">
        <div class="news_rig_title"><h3>媒体报道</h3><a class="media_more" href="<?=SITEURL?>">更多 <i class="icon-angle-right fz16"></i></a></div>
        <div class="news_rigNr clearfix">
          <ul>
            <li class="clearfix">
              <span class="media_img"><img src="template/default/inc/images/index/57e20461d305b.jpg"></span>
              <span class="media_info"><a href="<?=SITEURL?>">物筹巴巴：理财返利 引领P...</a><p>物筹巴巴作为中国领先的互联网金融理财返利平台，稳健的风控和专业...</p></span></li><li class="clearfix">
              <span class="media_img"><img src="template/default/inc/images/index/57e20649274b8.jpg"></span>
              <span class="media_info"><a href="<?=SITEURL?>">物筹巴巴：网贷返利先驱 助...</a><p>金融行业素来对其参与者具有一定的要求和门槛，特别是金融理财方...</p></span></li><li class="clearfix">
              <span class="media_img"><img src="template/default/inc/images/index/57e207201e641.jpg"></span>
              <span class="media_info"><a href="<?=SITEURL?>">物筹巴巴：P2P返利平台 ...</a><p>随着互联网金融的不断发展，P2P网贷平台成为越来多人的首选理...</p></span></li>          </ul>
        </div>
      </div>
    </div>
  </div>
<!--新闻资讯结束-->

<!--合作伙伴-->
  <div class="hezuo mt30">
    <div class="hezuo_main">
      <div class="hezuo_top"><h3>合作伙伴</h3></div>
      <div class="hezuo_nr">
        <div class="_leftbtn icon"></div>
        <div class="_rightbtn icon"></div>
        <div class="hezuo_list">
          <ul style="margin-left: 0px;">
                    <li><a target="view_window" title="1号钱庄"><img src="template/default/inc/images/index/16c4b3ba1473155879258.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="融和贷"><img src="template/default/inc/images/index/6939b2d41469001250952.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="拓道金服"><img src="template/default/inc/images/index/646d80b41469168774053.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="爱钱进"><img src="template/default/inc/images/index/93698aeb1462355141238.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="千林贷"><img src="template/default/inc/images/index/c3271d5f1458286904731.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="银豆网"><img src="template/default/inc/images/index/3f1191181459410742080.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="抱财网"><img src="template/default/inc/images/index/d4f853441460524054922.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="帮友贷"><img src="template/default/inc/images/index/7130f6841461822219215.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="壹佰金融"><img src="template/default/inc/images/index/def5992a1461913966420.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="团贷网"><img src="template/default/inc/images/index/19ad642f1463042709543.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="鼎有财"><img src="template/default/inc/images/index/dc80c46d1472539602253.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="乐金所"><img src="template/default/inc/images/index/7ea8d5a91463466670480.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="易通贷"><img src="template/default/inc/images/index/d3c8404a1463470459765.png" style="width:119px;height:56px;border:0px"></a></li><li><a target="view_window" title="襄金所"><img src="template/default/inc/images/index/fc480d8a1467774088107.png" style="width:119px;height:56px;border:0px"></a></li></ul>
        </div>
      </div>
    </div>
  </div>
  <!--图片滚动-->
  <script type="text/javascript">
    var flag = "left";
    function DY_scroll(wraper,prev,next,img,speed,or){
    var wraper = $(wraper);
    var prev = $(prev);
    var next = $(next);
    var img = $(img).find('ul');
    var w = img.find('li').outerWidth(true);
    var s = speed;
    next.click(function(){
    img.animate({'margin-left':-w},function(){
    img.find('li').eq(0).appendTo(img);
    img.css({'margin-left':0});
    });
    flag = "left";
    });
    prev.click(function(){
    img.find('li:last').prependTo(img);
    img.css({'margin-left':-w});
    img.animate({'margin-left':0});
    flag = "right";
    });
    if (or == true){
    ad = setInterval(function() { flag == "left" ? next.click() : prev.click()},s*1000);
    wraper.hover(function(){clearInterval(ad);},function(){ad = setInterval(function() {flag == "left" ? next.click() : prev.click()},s*1000);});
      }
    }
    DY_scroll('.hezuo_nr','._leftbtn','._rightbtn','.hezuo_list',3,true);// true为自动播放，不加此参数或false就默认不自动
  </script>
<!--合作伙伴结束-->

<!--友情链接-->
  <div class="friendLink mt30 mb30">
    <div class="friendLink_main clearfix">
      <ul>
        <li class="links_first">友情链接：</li>
        <li><a href="http://www.caiqi.com/" title="物筹巴巴" target="_blank">物筹巴巴</a></li><li><a href="http://www.licaizhijia.com/" title="理财之家" target="_blank">理财之家</a></li><li><a href="http://www.jijinzhijia.com/" title="基金之家" target="_blank">基金之家</a></li><li><a href="http://www.wangdaidp.com/" title="网贷点评网" target="_blank">网贷点评网</a></li><li><a href="http://www.caiqi.com/" title="理财返利平台" target="_blank">理财返利平台</a></li><li><a href="http://www.caiqi.com/" title="理财返利" target="_blank">理财返利</a></li><li><a href="http://www.caiqi.com/" title="网贷返利" target="_blank">网贷返利</a></li><li><a href="http://www.wangjinkeji.com/" title="网金科技" target="_blank">网金科技</a></li><li><a href="http://www.xiangjins.com/" title="襄金所" target="_blank">襄金所</a></li>      </ul>
    </div>
  </div>
<!--友情链接结束-->
</div>
<?php
$a=$url_arr;
$a['code']=trim($_GET['code']);
$contentData=json_encode($a);
?>
<script>
var scrollPaginationPage=1;
var ajaxLoadNum=<?=$ajax_load_num?>;
var lanmuChangeStop=0;
var ajaxGet=0;
<?php
foreach($bankuai as $k=>$v){
	$indexAjaxCodeObj[$v['code']]=1;
}
?>
var indexAjaxCodeObj=<?=dd_json_encode($indexAjaxCodeObj)?>;
$(function(){
	if(typeof getCookie('userlogininfo')=='undefined'){
		$('#index-chongzhi-tiplogin-beijing,#index-chongzhi-tiplogin-wenzi').show();
	}
	$("#KinSlideshow").KinSlideshow({
		isHasTitleFont:false,
		isHasTitleBar:false,
		moveStyle:'up',
		btn:{btn_fontHoverColor:"#FFFFFF"}
	});
	$('.clearfix ul li').hover(function(){
		$(this).css('position','relative');
		$(this).find('.fuxuanting').show();
	},function(){
		$(this).css('position','static');
		$(this).find('.fuxuanting').hide();
	});

	indexAjaxLoad('<?=$first_bankuai['code']?>');
	var $homeTabLi=$('.home-tab li');
	$homeTabLi.click(function(){
		if(lanmuChangeStop==1){
			return false;
		}
		scroller('ddlanmu',500,50);
		$homeTabLi.removeClass('current');
		$(this).addClass('current');
		var code=$(this).attr('code');
		//分类选择显示
		$(".jy_nav").hide();
		$("#"+code+"_nav").show();
		var $indexGoods=$('#index-goods');
		$indexGoods.find('.ddgoods').hide();
		$indexGoods.find('#'+code+'Div').show();
		var show=$indexGoods.find('#'+code+'Div').attr('show');
		$('#ajax_goods_loading').html('<img src="<?=TPLURL?>/inc/images/white-ajax-loader.gif" style="margin-bottom:-2px" alt="加载商品" />&nbsp;&nbsp;正在加载商品').hide();
		if(show==0){
			$indexGoods.find('#'+code+'Div div ul').html('<div id="ajax_goods_loading" style=" display:block"><img src="<?=TPLURL?>/inc/images/white-ajax-loader.gif" style="margin-bottom:-2px" alt="加载商品" />&nbsp;&nbsp;正在加载商品</div>');
			$indexGoods.find('#'+code+'Div').attr('show',1);
			/*setTimeout(function(){
				changelanmu(code);
			},500);*/

			lanmuChangeStop=1;
			ajaxGet=1;
			changelanmu(code);
		}
	});
	fixDiv('#ddlanmu .ddlanmu_c',0);
});

function indexAjaxLoad(code){
	LazyLoad($('#'+code+'Div'));
	for(var i in indexAjaxCodeObj){
		if(i!=code){
			$('#'+i+'Div .goods_items').stopScrollPagination();
		}
	}
	ajaxLoad('#'+code+'Div .goods_items','',ajaxLoadNum,CURURL+u('goods','data'),{"code":code},500,LazyLoad);
}

function changelanmu(code,first){
	var arr=new Array()
	arr['code']=code;
	arr['page']=1;
	scrollPaginationPage=1;
	var url=CURURL+u('goods','data',arr);
	$.get(url,function(data){
		$('#'+code+'Div').html(data);
		indexAjaxLoad(code);
		lanmuChangeStop=0;
		ajaxGet=0;
	});
	//分类
	var arr=new Array()
	arr['code']=code;
	var url=CURURL+u('ajax','goods_type',arr);
	$.get(url,function(data){
		$(".jy_nav").hide();
		$(".jy_auto").append(data);
	});
}
</script>
<?php include(TPLPATH.'/inc/footer.tpl.php');?>
