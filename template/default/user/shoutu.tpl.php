<?php
$parameter=act_user_shoutu();
extract($parameter);
$css[]=TPLURL.'/inc/css/usercss.css';
include(TPLPATH.'/inc/header.tpl.php');
?>
<script type="text/javascript"> 
    function jsCopy(e){ 
        e.select(); //选择对象 
        document.execCommand("Copy"); //执行浏览器复制命令

       alert("已复制好，可贴粘。"); 
    } 
</script> 

<div class="mainbody">
	<div class="mainbody1000">
    <?php include(TPLPATH."/user/top.tpl.php");?>
    	<div class="adminmain">
        	<div class="adminleft">
                <?php include(TPLPATH."/user/left.tpl.php");?>
            </div>
        	<div class="adminright">
                <?php include(TPLPATH."/user/notice.tpl.php");?>
                <div class="admin_xfl">
                    <ul>
                    <li id="url"><a href="<?=u(MOD,ACT,array('do'=>'url'))?>">我要收徒</a> </li>
                    <li id="list"><a href="<?=u(MOD,ACT,array('do'=>'list'))?>">我的徒弟</a> </li>
                    <li id="list2"><a href="<?=u(MOD,ACT,array('do'=>'list2'))?>">我已出师的徒弟</a> </li>
                    </ul>
                    <script>
                    $(function(){
					    $('.admin_xfl li#<?=$do?>').addClass('admin_xfl_xz');
					})
                    </script>
              	</div>
                <div class="adminright_yuye">
                    <div class="tishitubiao"></div>
                    <p>成功收到徒弟后，只要教您的徒弟从本站去淘宝、拍拍等商城购物拿返利，您最高可以获取<span style="color:#FF0000"><?=$webset['tgfz']?> </span>元 作为带您徒弟的奖励！<a id="shoutusm" href="" style="text-decoration:underline">详细说明</a></p>
                </div>
                <?php if($do=='list'){?> 
                <div class="admin_table">
                    <table width="770" border="0" cellpadding="0" cellspacing="1">
                      <tr>
                        <th width="167" height="26">徒弟昵称</th>
                        <th width="184">已获奖励</th>
                        <th width="162">登录次数</th>
                        <th width="118">会员等级</th>
                        <th width="133">注册时间</th>
                      </tr>
                      <?php foreach($tuiguang as $arr){?>
                      <tr>
                        <td height="33"><?=$arr['ddusername']?></td>
                        <td><?=$arr['yj']?></td>
                        <td><?=$arr['loginnum']?></td>
                        <td><?=$arr['level']?></td>
                        <td><?=$arr['regtime']?></td>
                      </tr>
                      <?php }?>
                    </table>
              </div>
               <div class="megas512" style="clear:both"><?=pageft($total,$pagesize,u(MOD,ACT,array('do'=>$do)))?></div>
              <?php }elseif($do=='list2'){?>
              <div class="admin_table">
                    <table width="770" border="0" cellpadding="0" cellspacing="1">
                      <tr>
                        <th width="167" height="26">徒弟昵称</th>
                        <th width="184">已获奖励</th>
                        <th width="162">登录次数</th>
                        <th width="118">会员等级</th>
                        <th width="133">注册时间</th>
                      </tr>
                      <?php foreach($tuiguang as $arr){?>
                      <tr>
                        <td height="33"><?=$arr['ddusername']?></td>
                        <td><?=$arr['yj']?></td>
                        <td><?=$arr['loginnum']?></td>
                        <td><?=$arr['level']?></td>
                        <td><?=$arr['regtime']?></td>
                      </tr>
                      <?php }?>
                    </table>
              </div>
               <div class="megas512" style="clear:both"><?=pageft($total,$pagesize,u(MOD,ACT,array('do'=>$do)))?></div>
              <?php }elseif($do=='url'){?>
              <div class="adminright_yuye">
                    <div class="tishitubiao"></div>
                    <p>如何收徒弟？ 答：亲！~非常简单，您只需要使用下面的收徒链接发给您的亲戚、朋友注册本站会员即可自动成为您的徒弟。</p>
                </div>
              <div class="union_link" style="font-size:12px; height:auto;">
     	<DIV class=share_QQ>
<DIV class=share_title></DIV>
<DIV class=share_link>
<H4>这是您的专用收徒链接，请通过 MSN 或 QQ 发送给好友来做您的徒弟：</H4>
<INPUT class=text value="<?=$webset['tgurl']?>rec=<?=$rec?> 亲爱的，有个省钱利器我必须告诉你，能省很多Money！" type=text id="recom_qq"> <INPUT class=smt onclick="jsCopy(document.getElementById('recom_qq'))" value="复制收徒连接" type="button" /> 
</DIV></DIV>
<DIV class=share_blog>
<DIV class=share_title></DIV>
<DIV class=share_link>
<H4>在支持HTML的网页（比如论坛、博客），可以复制下列HTML代码：</H4><TEXTAREA id=recom_html class=area>&lt;a href="<?=$webset['tgurl']?>rec=<?=$rec?>" target="_blank"&gt;亲爱的，有个省钱利器我必须告诉你，能省很多Money！&lt;/a&gt;</TEXTAREA> 
<INPUT class=smt onclick="jsCopy(document.getElementById('recom_html'))" value="复制收徒连接" type="button" name="button" /> 
</DIV>
</DIV>
<DIV class=union_share>
<H4>分享收徒：</H4>
<UL>
  <LI><A  href="http://v.t.sina.com.cn/share/share.php?title=<?=urlencode("推荐一个省钱网站——#".WEBNAME."#，能省很多Money @".WEBNAME." ".$webset['tgurl']."rec=".$rec."")?>&url=http://<?=URL?>" target=_blank><IMG src="<?=TPLURL?>/inc/images/share_01.gif"><BR>新浪微博</A> </LI>
  <LI><A href="http://share.renren.com/share/buttonshare.do?link=<?=urlencode($webset['tgurl'].'rec='.$rec)?>" target=_blank><IMG src="<?=TPLURL?>/inc/images/share_02.gif" width=49 height=49><BR>人人网</A> </LI>
  <LI><a href="javascript:u=location.href;t='<?=WEBNAME?>';c = %22%22 + (window.getSelection ? window.getSelection() : document.getSelection ? document.getSelection() : document.selection.createRange().text);var url=%22http://cang.baidu.com/do/add?it=%22+encodeURIComponent(t)+%22&iu=%22+encodeURIComponent(u)+%22&dc=%22+encodeURIComponent(c)+%22&fr=ien#nw=1%22;window.open(url,%22_blank%22,%22scrollbars=no,width=600,height=450,left=75,top=20,status=no,resizable=yes%22); void 0"><IMG src="<?=TPLURL?>/inc/images/share_03.gif" width=49 height=49><BR>百度收藏夹</A> </LI>
  <LI><a href=javascript:window.open('http://shuqian.qq.com/post?from=3&title='+encodeURIComponent('<?=WEBNAME?>')+'&uri='+encodeURIComponent('<?=$webset['tgurl']?>rec=<?=$rec?>')+'&jumpback=2&noui=1','favit','');void(0)><IMG src="<?=TPLURL?>/inc/images/share_04.gif" width=48 height=49><BR>QQ书签</A> </LI>
  <LI><A  href="http://www.kaixin001.com/~repaste/repaste.php?rtitle=<?=WEBNAME?>-能省很多Money&rurl=<?=$webset['tgurl']?>rec=<?=$rec?>" target=_blank><IMG src="<?=TPLURL?>/inc/images/share_05.gif" width=49 height=49><BR>开心网</A> </LI>
  <LI><A  href="http://xianguo.com/service/submitdigg/?title=<?=urlencode("推荐一个省钱网站——#".WEBNAME."#，能省很多Money @".WEBNAME." ".$webset['tgurl']."rec=".$rec)?>" target="_blank"><IMG src="<?=TPLURL?>/inc/images/share_06.gif" width=49 height=49><BR>鲜果网</A> </LI>
  <LI><A  href="https://www.google.com/bookmarks/mark?op=edit&bkmk=http%3A%2F%2F<?=URL?>&output=popup&title=<?=urlencode("推荐一个省钱网站——#".WEBNAME."#，能省很多Money @".WEBNAME." ".$webset['tgurl']."rec=".$rec)?>"  target=_blank><IMG src="<?=TPLURL?>/inc/images/share_07.gif" width=49 height=49><BR>Google书签</A> </LI>
</UL></DIV>
  </div>
            <?php }?>
            
    	</div>
  </div>
</div>
</div>
<script>
$(function(){
    $('#shoutusm').jumpBox({  
		title: '收徒说明',
		titlebg:1,
		LightBox:'show',
	    contain: '<p style=" line-height:25px; font-size:14px">收徒成功后，将按照您徒弟返利额的<?=$webset['tgbl']*100?>%来获取奖励，直到最高奖励额度<?=$webset['tgfz']?>元时结束师徒的关系</p>',
		height:180,
		width:400
    });
});
</script>
<?php
include(TPLPATH.'/inc/footer.tpl.php');
?>