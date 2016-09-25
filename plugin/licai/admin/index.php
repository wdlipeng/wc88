<?php 
/**
 * ============================================================================
 * 版权所有 2008-2015 多多科技，并保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/
if(!defined('ADMIN')){
	exit('Access Denied');
}
?>
<form action="index.php?mod=<?=MOD?>&act=<?=ACT?>&do=<?=$do?>&plugin_id=<?=$plugin_id?>" method="post" name="form1">
<table id="addeditable" border=1 cellpadding=0 cellspacing=0 bordercolor="#dddddd"  bgcolor="#FFFFFF">
  <?php include(ADMINROOT.'/template/plugin/dd_set.tpl.php');?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;<input type="submit" name="sub" value=" 保 存 " /></td>
  </tr>
</table>
</form>