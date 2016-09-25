<?php
if(!defined('DDROOT')){
	include ('comm/dd.config.php');
}
unlink(DDROOT.'/update.php');
$w='此补丁为安全补丁，在线升级后会还会提示升级，无需理会。';
echo script('alert("'.$w.'")');
?>