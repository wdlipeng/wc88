<?php //升级
define('INDEX',1);

if(!defined('DDROOT')){
	$show_message=1;
	include ('comm/dd.config.php');
}
else{
	$show_message=0;
}

if(!function_exists('php_self')){
	function php_self(){
		$php_self=substr($_SERVER['PHP_SELF'],strrpos($_SERVER['PHP_SELF'],'/')+1);
		return $php_self;
	}
}

$current_banben=include(DDROOT.'/data/banben.php');

$update_banben='20160811';
$need_banben='20160629';

if($current_banben<$need_banben){
	exit('请升级到'.$need_banben.'后再升级此补丁');
}

$msg[]='修复采集规则分类设置无效的bug';
$msg[]='修复跳转提示页注册错误的bug';
$msg[]='修复群发短信字数统计';
$msg[]='升级部分网站淘宝登录失效的问题';
$msg[]='增加后台登录超时时间（1天过期）';

file_put_contents(DDROOT.'/data/update.log',$update_banben.' '.date('Y-m-d H:i:s')."\r\n",FILE_APPEND);
file_put_contents(DDROOT.'/data/banben.php','<?php return '.$update_banben.';?>');

if($show_message==1){
	foreach($msg as $v){
		echo $v."<br/>";
	}
}
echo "更新完毕";
unlink('update.php');
?>
<script>
window.parent.frames['leftFrame'].location.reload(true);
</script>
<?php 

$duoduo->close();
unset ($duoduo);
unset ($ddTaoapi);
unset ($webset);
?>