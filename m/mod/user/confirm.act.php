<?php

/**
 * ============================================================================
 * 版权所有 多多科技，保留所有权利。
 * 网站地址: http://soft.duoduo123.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和使用；
 * 不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
*/

if (!defined('INDEX')) {
	exit ('Access Denied');
}
/**
* @name 订单确认
* @copyright duoduo123.com
* @example 示例user_confirm();
* @return $parameter 结果集合
*/
function act_user_confirm() {
	global $duoduo;
	$webset = $duoduo->webset;
	$dduser = $duoduo->dduser;
	$errorData = $duoduo->errorData;
	$do = empty ($_GET['do']) ? 'tao' : $_GET['do'];
		$id = $_GET["id"] ? intval($_GET["id"]) : intval($_POST["id"]); //订单ID
		$trade = $duoduo->select('tradelist', '*', 'id="' . $id . '"');
		if($trade['trade_id_former']==0){
			$trade['trade_id_former']=preg_replace('/_\d+$/','',$trade['trade_id']);
			$data=array('trade_id_former'=>$trade['trade_id_former']);
			$duoduo->update('tradelist',$data,'id="' . $id . '"');
		}
		
		if (!$trade['id']) {
			jump(-1, $errorData[46]);
		}
		
		if ($trade['checked'] != 0) {
			jump(-1, $errorData[45]);
		}
		
		if ($_POST['sub'] == '') {
			if(TAOTYPE==2){
				$trade['trade_id_former']=$trade['trade_id'];
			}
			
			$trade['trade_id'] = fuzzyTradeId($trade['trade_id_former']);
		} else {
			$fxje=fenduan($trade['commission'],$webset['fxbl'],$dduser['type']);
			$jifenbao=jfb_data_type($fxje*TBMONEYBL);
			$captcha = $_POST['captcha'];
			if (reg_captcha($captcha) == 0) {
				jump(-1, $errorData[5]);
			}
			$trade_id = trim($_POST['trade_id']);
			if(!preg_match('/^\d+$/',$trade_id)){
				$trade_id=0;
			}
			
			if (TAOTYPE == 2) { //淘宝api形式
				if ($trade['trade_id'] != $trade_id && $trade['mini_trade_id']!=substr($trade_id,0,8).substr($trade_id,-4)) {
					jump(-1, $errorData[47]);
				}
				if ($webset['taoapi']['trade_check'] == 1) { //人工审核
					/*$uploadname = 'up_pic';
					$file_name = upload($uploadname);
					if (is_numeric($file_name)) {
						jump(-1, $errorData[$file_name]);
					}*/
					$checked = 1;
					$data = array (
						'checked' => 1,
						'ddjt' => $file_name,
						'qrsj' => TIME,
						'outer_code' => $dduser['id'],
						'uid' => $dduser['id'],
						'fxje'=>$fxje,
						'jifenbao'=>$jifenbao
					);
					
					$duoduo->update('tradelist', $data, 'id="' . $id . '"');
					jump(wap_l('user','order',array('do'=>'taobao')), '确认成功，等待网站审核');
				}
				elseif ($webset['taoapi']['trade_check'] == 0) { //自动审核
					if ($trade['status'] == 5) {
						$trade['ddjt'] = '';
						$trade['checked'] = 2;
						$duoduo->rebate($dduser, $trade, 8); //8号明细，确认淘宝订单
					} else {
						$fxje=fenduan($trade['commission'],$webset['fxbl'],$dduser['type']);
						$jifenbao=jfb_data_type($fxje*TBMONEYBL);
						$update['checked'] = 3;
						$update['outer_code'] = $dduser['id'];
						$update['uid'] = $dduser['id'];
						$update['fxje'] = $fxje;
						$update['jifenbao'] = $jifenbao;
						$duoduo->update('tradelist', $update, 'id=' . $trade['id']);
					}
					jump(wap_l('user','order',array('do'=>'taobao')), '确认成功');
				}
			}
			elseif (TAOTYPE == 1) { //淘点金形式
				if($trade_id!=$trade['trade_id_former']){
					jump(-1, $errorData[46]);
				}
				if ($webset['taoapi']['trade_check'] == 1) { //人工审核
					$checked = 1;
					$data = array (
						'checked' => 1,
						'ddjt' => $file_name,
						'qrsj' => TIME,
						'outer_code' => $dduser['id'],
						'uid' => $dduser['id'],
						'fxje'=>$fxje,
						'jifenbao'=>$jifenbao
					);
					$where = 'trade_id_former = "' . $trade_id . '"';
					$duoduo->update('tradelist', $data, $where);
					jump(wap_l('user','order',array('do'=>'taobao')), '确认成功，等待网站审核');
				}
				elseif ($webset['taoapi']['trade_check'] == 0) { //自动审核
					$where = 'trade_id_former = "' . $trade_id . '" and uid=0 and checked=0';
					$trades = $duoduo->select_all('tradelist', '*',$where);
					foreach ($trades as $trade) {
						if ($trade['status'] == 5) {
							$trade['ddjt'] = '';
							$trade['checked'] = 2;
							$duoduo->rebate($dduser, $trade, 8); //8号明细，确认淘宝订单
						} else {
							$fxje=fenduan($trade['commission'],$webset['fxbl'],$dduser['type']);
							$jifenbao=jfb_data_type($fxje*TBMONEYBL);
							$update['checked'] = 3;
							$update['outer_code'] = $dduser['id'];
							$update['uid'] = $dduser['id'];
							$update['fxje'] = $fxje;
							$update['jifenbao'] = $jifenbao;
							$duoduo->update('tradelist', $update, 'id=' . $trade['id']);
						}
					}
					
					if($webset['taoapi']['auto_fanli']==1){
						$duoduo->trade_uid($dduser['id'],$trade['trade_id_former'],'add');
					}
					
					jump(wap_l('user','order',array('do'=>'taobao')), '确认成功');
				}
			}
		}

	
	unset ($duoduo);
	$parameter['do'] = $do;
	$parameter['trade'] = $trade;
	$parameter['id'] = $id;
	$parameter['errorData'] = $errorData;
	return $parameter;
}
?>