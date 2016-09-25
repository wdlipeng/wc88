<?php
// 	//数据库连接类
// 	class DB {
		
// 		//获取对象句柄
// 		static public function getDB() {
// 			$_mysqli = new mysqli('localhost','a0919144316','51018440','a0919144316',3306);
// 			if (mysqli_connect_errno()) {
// 				echo '数据库连接错误！错误代码：'.mysqli_connect_error();
// 				exit();
// 			}
// 			$_mysqli->set_charset('utf8');
// 			return $_mysqli;
// 		}
		
// 		//清理
// 		static public function unDB(&$_result, &$_db) {
// 			if (is_object($_result)) {
// 				$_result->free();
// 				$_result = null;
// 			}
// 			if (is_object($_db)) {
// 				$_db->close();
// 				$_db = null;
// 			}
// 		}
		
// 	}

// 	$test=DB::getDB();
// 	$clo=DB::unDB(null,$test);
// $string='【物筹巴巴】您的验证码：1234';
// $encode = mb_detect_encoding($string, array("ASCII","UTF-8","GB2312","GBK","BIG5"));
// echo $encode;

if(!isset($_GET['mod'])){
	$mod=$_GET['mod']='licai';
	echo $_GET['mod'];
	echo $mod;
	include 'plugin.php';
	echo 'hhhhhhh';
	exit();
}
echo 'hhhhh';
?>