<?php
error_reporting(0);
define('DDROOT', str_replace(DIRECTORY_SEPARATOR,'/',dirname(dirname(__FILE__))));
include(DDROOT.'/comm/lib.php');
include(DDROOT.'/comm/checkpostandget.php');
$webset=dd_get_cache('webset');
$pid=$webset['taoapi']['taobao_chongzhi_pid'];
$uid=(int)$_GET['uid'];

if(strpos($pid,'mm')!==false){
	$pid=$pid;
}
else{
	$pid='mm_'.$pid;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>��ֵ</title>
    <meta charset="gbk"/>
    <meta name="data-spm" content="1" />
 <!--Ƶ��ҳ��js ��� -->
<script type='text/javascript'> 
	// php
    var taoke_channel_referer_id = '<?=$pid?>';
	 // ��ʯչλ
	var alimama_referpid='<?=$pid?>';
</script>
<script type='text/javascript'> 
    tbk_pid='<?=$pid?>';
    tbk_type='5';
    var tbk_pathname = window.location.pathname;
	tbk_pathname=tbk_pathname.substring(tbk_pathname.lastIndexOf("/")+1,tbk_pathname.lastIndexOf(".php"));
    tbk_id="ch_"+tbk_pathname;
    tbk_pre = document.referrer;
</script>
<script type="text/javascript" src="http://z.alimama.com/tbk_inf.js"></script><script> 
var uid = '<?=$uid?>',taokeUrl = 'http://www.alimama.com/',pid = '<?=$pid?>';
</script>    <script type="text/javascript">
        //��ֵ�Ƿ���radioѡ��
        var __isDenominationElse = true;
        //�Ƿ����û���ʷ��¼
        var __isHistory = true;
    </script>
    <link rel="stylesheet" href="http://a.tbcdn.cn/apps/med/other/tbk/chongzhi.css?20121119.css" type="text/css" />
    <script type="text/javascript" src="http://a.tbcdn.cn/s/kissy/1.2.0/kissy-min.js" charset="utf-8"></script>
    <script type="text/javascript" src="http://a.tbcdn.cn/apps/med/other/tbk/convenience/lvxing/moment.js" charset="utf-8"></script><meta http-equiv="Content-Type" content="text/html; charset=gb2312"></head>
<body data-spm="135976"><script type="text/javascript"> 
(function (d) {
var t=d.createElement("script");t.type="text/javascript";t.async=true;t.id="tb-beacon-aplus";
t.setAttribute("exparams","category=&userid=&aplus");
t.src=("https:"==d.location.protocol?"https://s":"http://a")+".tbcdn.cn/s/aplus_v2.js";
d.getElementsByTagName("head")[0].appendChild(t);
})(document);
</script>
 
<div class="tk210x200" id="J_ChongZhiContainer" style="height:198px; border:0">
    <div class="switchable">
                    <a href="http://s.click.taobao.com/t?pid=<?=$pid?>&e=zGU34CA7K%2BPkqB05%2Bm7rfGKas1PIKp0U37pZuBoqR26DdsswrDgHSrCNjO54g48d5VlMunlYrUiLsBvRJ9P9YHtxJAWSpSjB8D7b4%2B3hxm7iWgMrFoI%3D" class=" logo" target="_blank" style=" display:block; width:0px; height:0px"><img src="http://img02.taobaocdn.com/tps/i2/T1kOyqXfRUXXXXXXXX-56-28.png" height="0" width="0"></a>
        <ul class="nav ks-switchable-nav">            <li class="ks-switchable-trigger current">
                <a href="http://s8.taobao.com/search?pid=<?=$pid?>&mode=63&refpos=&cat=50004958&scat=y&catName=%D2%C6%B6%AF%2F%C1%AA%CD%A8%2F%B5%E7%D0%C5%B3%E4%D6%B5%D6%D0%D0%C4" target="_blank" class="nav-other" style="border-left:none">�ֻ���ֵ</a>
                <s class="arrow-top"></s>
            </li>
            <li class="ks-switchable-trigger">
                <a href="http://s8.taobao.com/search?pid=<?=$pid?>&mode=63&refpos=&cat=99&commend=all&s=0&sort=commend&n=40&olu=yes&yp4p_page=0&viewIndex=1" target="_blank" class="nav-other">��Ϸ���</a>
                <s class="arrow-top"></s>
            </li>            <li class="ks-switchable-trigger">
                        <a href="http://s.click.taobao.com/t?pid=<?=$pid?>&e=zGU34CA7K%2BPkqB05%2Bm7rfGKas1PIKp0U37pZuBoqR26DdsswrDgHSrCNjO54g48d5VlMunlYrUiLsBvRJ9P9YHtxJAWSpSjB8D7b4%2B3hxm7iWgMrFoI%3D" target="_blank" class="nav-other">�Ա�����</a>
                <s class="arrow-top"></s>
            </li>        </ul>
    </div>
    <div class="ks-switchable-content">        <div class="ks-switchable-panel">
            <form id="J_TelForm" method="post">
                <div class="tel-section3">
                    <label class="tel-section-title" for="J_TelInput">�ֻ���:</label>
                    <div class="text-wrap">
                        <div class="wrapper">
                            <input class="text-filed" maxlength="11" type="text" name="" id="J_TelInput">
                        </div>
                    </div>
                </div>
                <div class="tel-section3" style="display:block;">
                    <label class="tel-section-title">������:</label>
                    <div class="text-wrap">
                        <span id="J_ZoneAndSP_def" class="tel-section-dft">��Ӫ�̡�����</span>
                        <span id="J_ZoneAndSP_show" class="tel-section-price" style="float:left;display:none;"><span id="J_TelInfoCfm"></span></span>
                    </div>
                </div>
                <div class="tel-section3">
                    <label class="tel-section-title">�桡ֵ:</label>
                    <div class="text-wrap">
                    <input type="radio" name="denom-r" class="denom-r" id="denom-100" checked value="100" data-id="30679" /><label for="denom-100">100Ԫ</label>
                        <input type="radio" name="denom-r" class="denom-r" id="denom-50" value="50" data-id="30678" /><label for="denom-50">50Ԫ</label>
                        <input type="radio" name="denom-r" class="denom-r" id="denom-30" value="30" data-id="30688" /><label for="denom-50">30Ԫ</label>
                        <select style="display:none" id="J_Dnomination" class="tel-section-select3" name=""></select>
                    </div>
                </div>
                <div class="tel-section3">
                    <span class="tel-section-title">�ۡ���:</span>
                    <div class="text-wrap">
                    <span id="J_TelPrice" class="tel-section-price">1Ԫ-1000Ԫ</span>
                       </div>
                </div>
                <div class="tel-buy tp-btn">
                    <a href='#' target="_blank" id="J_TelSubmitBtn" class=" tel-submit" hidefocus="true" >��˳�ֵ</a>
                </div>
            </form>
        </div>        <div style="display:none" class="ks-switchable-panel">            <div class="tel-section3">
                <div class="text-wrap2">
                    <input type="radio" checked="" id="card" name="game">
                    <label hidefocus="true" for="card" class="tel-section-game-label">�㿨</label>
                    <input type="radio" id="gold" name="game">
                    <label hidefocus="true" for="gold" class="tel-section-game-label">QQ</label>
                    <input type="radio" id="game" name="game">
                    <label hidefocus="true" for="game" class=" tel-section-game-label">������Ʒ</label>
                </div>
            </div>
            <div class="tel-section3">
                <label  id="J_labelType" class="tel-section-title">��Ϸ:</label>
                 <div class="text-wrap">
                    <select  id="J_selectType" class="tel-section-select2" name="">
                    </select>
                </div>
            </div>
            <div class="tel-section3">
                <label  id="J_labelPrice" class="tel-section-title">��ֵ:</label>
                <div class="text-wrap">
                    <select  id="J_selectPrice" class="tel-section-select2" name=""></select>
                </div>
            </div>
            <div id="J_price_container" class="tel-section3">
                <span class="tel-section-title">�ۼ�:</span>
                <div class="text-wrap">
                    <span id="J_youxiPrice" class="tel-section-price" style="float:left;margin-right:10px">��ȱ</span>
                </div>
            </div>
            <div class="tel-buy tp-btn">
                <a href='#' target="_blank" id="J_youxiSubmitBtn" class=" tel-submit" hidefocus="true" >��˳�ֵ</a>
                
            </div>
        </div>        <div style="display:none" class="ks-switchable-panel" id="J_lvxingForms">            <div class="tel-section3">
                <ul class="menubar ks-switchable-nav">
                    <li class="ks-lvxing-trigger">
                        <a href="#" class="li-current">���ڻ�Ʊ</a>
                    </li>
                    <li class="ks-lvxing-trigger">
                        <a href="#">���ʻ�Ʊ</a>
                    </li>
                    <li class="ks-lvxing-trigger">
                        <a href="#">�Ƶ�</a>
                    </li>
 
                    <li class="ks-lvxing-trigger">
                        <a href="#" ></a>
                    </li>
                </ul>
            </div>
 
            <div class="ks-lvxing-panel">
                <div class="tel-section3">
                    <label class="tel-section-title2">����:</label>
                    <div class="text-wrap3">
                        <select class="tel-section-select2" id="neDepCity">
                            <option value="">-��ѡ��-</option>
                            <option value="AKU">A������</option>
                            <option value="AAT">A����̩</option>
                            <option value="AKA">A����</option>
                            <option value="AQG">A����</option>
 
                            <option value="AOG">A��ɽ</option>
                            <option value="AVA">A��˳</option>
 
                            <option value="BJS">B����</option>
                            <option value="BSD">B��ɽ</option>
                            <option value="BAV">B��ͷ</option>
                            <option value="BHY">B����</option>
 
                            <option value="BFU">B����</option>
                            <option value="CKG">C����</option>
 
                            <option value="CTU">C�ɶ�</option>
                            <option value="CSX">C��ɳ</option>
                            <option value="CGQ">C����</option>
                            <option value="CGD">C����</option>
 
                            <option value="CIF">C���</option>
                            <option value="CHG">C����</option>
 
                            <option value="CIH">C����</option>
                            <option value="CZX">C����</option>
                            <option value="CNI">C����</option>
                            <option value="DLC">D����</option>
 
                            <option value="DDG">D����</option>
                            <option value="DNH">D�ػ�</option>
 
                            <option value="DLU">D����</option>
                            <option value="DIG">D����</option>
                            <option value="DAX">D����</option>
                            <option value="DAT">D��ͬ</option>
 
                            <option value="DOY">D��Ӫ</option>
                            <option value="ENH">E��ʩ</option>
 
                            <option value="DSN">E������˹</option>
                            <option value="FOC">F����</option>
                            <option value="FYN">F����</option>
                            <option value="FUG">F����</option>
 
                            <option value="FUO">F��ɽ</option>
                            <option value="CAN">G����</option>
 
                            <option value="KWL">G����</option>
                            <option value="KWE">G����</option>
                            <option value="KOW">G����</option>
                            <option value="GOQ">G���ľ</option>
 
                            <option value="GHN">G�㺺</option>
                            <option value="GYS">G��Ԫ</option>
 
                            <option value="HGH">H����</option>
                            <option value="HRB">H������</option>
                            <option value="HFE">H�Ϸ�</option>
                            <option value="HET">H���ͺ���</option>
 
                            <option value="HAK">H����</option>
                            <option value="TXN">H��ɽ</option>
 
                            <option value="HLD">H������</option>
                            <option value="HEK">H�ں�</option>
                            <option value="HMI">H����</option>
                            <option value="HTN">H����</option>
 
                            <option value="HYN">H����</option>
                            <option value="HNY">H����</option>
 
                            <option value="HZG">H����</option>
                            <option value="JIL">J����</option>
                            <option value="TNA">J����</option>
                            <option value="JZH">J��կ��</option>

 
                            <option value="KNC">J����</option>
                            <option value="JNG">J����</option>
 
                            <option value="JMU">J��ľ˹</option>
                            <option value="JGN">J������</option>
                            <option value="JDZ">J������</option>
                            <option value="JHG">J����</option>
 
                            <option value="JJN">J����</option>
                            <option value="JNZ">J����</option>
 
                            <option value="CHW">J��Ȫ</option>
                            <option value="JIU">J�Ž�</option>
                            <option value="JGS">J����ɽ</option>
                            <option value="KMG">K����</option>
 
                            <option value="KRY">K��������</option>
                            <option value="KHG">K��ʲ</option>
 
                            <option value="KRL">K�����</option>
                            <option value="KCA">K�⳵</option>
                            <option value="LHW">L����</option>
                            <option value="LXA">L����</option>
 
                            <option value="LYG">L���Ƹ�</option>
                            <option value="LJG">L����</option>
 
                            <option value="LYI">L����</option>
                            <option value="LZH">L����</option>
                            <option value="LYA">L����</option>
                            <option value="LNJ">L�ٲ�</option>
 
                            <option value="LZO">L����</option>
                            <option value="LCX">L����</option>
 
                            <option value="LUM">Mâ��</option>
                            <option value="MXZ">M÷��</option>
                            <option value="NZH">M������</option>
                            <option value="MIG">M����</option>
 
                            <option value="MDG">Mĵ����</option>
                            <option value="NKG">N�Ͼ�</option>
 
                            <option value="KHN">N�ϲ�</option>
                            <option value="NGB">N����</option>
                            <option value="NAO">N�ϳ�</option>
                            <option value="WUS">N��ƽ</option>
 
                            <option value="NNG">N����</option>
                            <option value="NTG">N��ͨ</option>
 
                            <option value="NNY">N����</option>
                            <option value="PZI">P��֦��</option>
                            <option value="TAO">Q�ൺ</option>
                            <option value="NDG">Q�������</option>
 
                            <option value="SHP">Q�ػʵ�</option>
                            <option value="IQM">Q��ĩ</option>
 
                            <option value="IQN">Q����</option>
                            <option value="JJN">QȪ��</option>
                            <option value="JUZ">Q����</option>
                            <option value="SHA">S�Ϻ�</option>
 
                            <option value="SZX">S����</option>
                            <option value="SHE">S����</option>
 
                            <option value="SJW">Sʯ��ׯ</option>
                            <option value="SZV">S����</option>
                            <option value="SYX">S����</option>
                            <option value="SWA">S��ͷ</option>
 
                            <option value="SHS">Sɳ��</option>
                            <option value="SYM">S˼é</option>
 
                            <option value="TYN">T̫ԭ</option>
                            <option value="TSN">T���</option>
                            <option value="TCG">T����</option>
                            <option value="TNH">Tͨ��</option>
 
                            <option value="TGO">Tͨ��</option>
                            <option value="TEN">Tͭ��</option>
 
                            <option value="WUH">W�人</option>
                            <option value="WNZ">W����</option>
                            <option value="URC">W��³ľ��</option>
                            <option value="WUX">W����</option>
 
                            <option value="WXN">W����</option>
                            <option value="WEF">WΫ��</option>
 
                            <option value="WEH">W����</option>
                            <option value="HLH">W��������</option>
                            <option value="WUZ">W�ں�</option>
                            <option value="WUS">W����ɽ</option>
 
                            <option value="WUZ">W����</option>
                            <option value="WNH">W��ɽ</option>
 
                            <option value="XIY">X����</option>
                            <option value="XMN">X����</option>
                            <option value="DIG">X�������</option>
                            <option value="XNN">X����</option>
 
                            <option value="XUZ">X����</option>
                            <option value="JHG">X��˫����</option>
 
                            <option value="XFN">X�差</option>
                            <option value="XIC">X����</option>
                            <option value="XIL">X���ֺ���</option>
                            <option value="ACX">X����</option>
 
                            <option value="XNT">X��̨</option>
                            <option value="INC">Y����</option>
 
                            <option value="ENY">Y�Ӱ�</option>
                            <option value="YNJ">Y�Ӽ�</option>
                            <option value="YNT">Y��̨</option>
                            <option value="YNZ">Y�γ�</option>
 
                            <option value="YBP">Y�˱�</option>
                            <option value="YIH">Y�˲�</option>
 
                            <option value="YIN">Y����</option>
                            <option value="YIW">Y����</option>
                            <option value="UYN">Y����</option>
                            <option value="YCU">Y�˳�</option>
 
                            <option value="LLF">Y����</option>
                            <option value="CGO">Z֣��</option>
 
                            <option value="ZUH">Z�麣</option>
                            <option value="ZAT">Z��ͨ</option>
                            <option value="DYG">Z�żҽ�</option>
                            <option value="ZHA">Zտ��</option>
 
                            <option value="HSN">Z��ɽ</option>
                            <option value="ZYI">Z����</option>
 
                            <option value="HJJ">Z�ƽ�</option>
                        </select>
                    </div>
                </div>
                <div class="tel-section3">
                    <label class="tel-section-title2">����:</label>
                    <div class="text-wrap3">
                        <select class="tel-section-select2" id="neArrCity" style="color: #C60;">
                            <option value="">-��ѡ��-</option>
                            <option value="AKU">A������</option>
                            <option value="AAT">A����̩</option>
                            <option value="AKA">A����</option>
                            <option value="AQG">A����</option>
 
                            <option value="AOG">A��ɽ</option>
                            <option value="AVA">A��˳</option>
 
                            <option value="BJS">B����</option>
                            <option value="BSD">B��ɽ</option>
                            <option value="BAV">B��ͷ</option>
                            <option value="BHY">B����</option>
 
                            <option value="BFU">B����</option>
                            <option value="CKG">C����</option>
 
                            <option value="CTU">C�ɶ�</option>
                            <option value="CSX">C��ɳ</option>
                            <option value="CGQ">C����</option>
                            <option value="CGD">C����</option>
 
                            <option value="CIF">C���</option>
                            <option value="CHG">C����</option>
 
                            <option value="CIH">C����</option>
                            <option value="CZX">C����</option>
                            <option value="CNI">C����</option>
                            <option value="DLC">D����</option>
 
                            <option value="DDG">D����</option>
                            <option value="DNH">D�ػ�</option>
 
                            <option value="DLU">D����</option>
                            <option value="DIG">D����</option>
                            <option value="DAX">D����</option>
                            <option value="DAT">D��ͬ</option>
 
                            <option value="DOY">D��Ӫ</option>
                            <option value="ENH">E��ʩ</option>
 
                            <option value="DSN">E������˹</option>
                            <option value="FOC">F����</option>
                            <option value="FYN">F����</option>
                            <option value="FUG">F����</option>
 
                            <option value="FUO">F��ɽ</option>
                            <option value="CAN">G����</option>
 
                            <option value="KWL">G����</option>
                            <option value="KWE">G����</option>
                            <option value="KOW">G����</option>
                            <option value="GOQ">G���ľ</option>
 
                            <option value="GHN">G�㺺</option>
                            <option value="GYS">G��Ԫ</option>
 
                            <option value="HGH">H����</option>
                            <option value="HRB">H������</option>
                            <option value="HFE">H�Ϸ�</option>
                            <option value="HET">H���ͺ���</option>
 
                            <option value="HAK">H����</option>
                            <option value="TXN">H��ɽ</option>
 
                            <option value="HLD">H������</option>
                            <option value="HEK">H�ں�</option>
                            <option value="HMI">H����</option>
                            <option value="HTN">H����</option>
 
                            <option value="HYN">H����</option>
                            <option value="HNY">H����</option>
 
                            <option value="HZG">H����</option>
                            <option value="JIL">J����</option>
                            <option value="TNA">J����</option>
                            <option value="JZH">J��կ��</option>
 
                            <option value="KNC">J����</option>
                            <option value="JNG">J����</option>
 
                            <option value="JMU">J��ľ˹</option>
                            <option value="JGN">J������</option>
                            <option value="JDZ">J������</option>
                            <option value="JHG">J����</option>
 
                            <option value="JJN">J����</option>
                            <option value="JNZ">J����</option>
 
                            <option value="CHW">J��Ȫ</option>
                            <option value="JIU">J�Ž�</option>
                            <option value="JGS">J����ɽ</option>
                            <option value="KMG">K����</option>
 
                            <option value="KRY">K��������</option>
                            <option value="KHG">K��ʲ</option>
 
                            <option value="KRL">K�����</option>
                            <option value="KCA">K�⳵</option>
                            <option value="LHW">L����</option>
                            <option value="LXA">L����</option>
 
                            <option value="LYG">L���Ƹ�</option>
                            <option value="LJG">L����</option>
 
                            <option value="LYI">L����</option>
                            <option value="LZH">L����</option>
                            <option value="LYA">L����</option>
                            <option value="LNJ">L�ٲ�</option>
 
                            <option value="LZO">L����</option>
                            <option value="LCX">L����</option>
 
                            <option value="LUM">Mâ��</option>
                            <option value="MXZ">M÷��</option>
                            <option value="NZH">M������</option>
                            <option value="MIG">M����</option>
 
                            <option value="MDG">Mĵ����</option>
                            <option value="NKG">N�Ͼ�</option>
 
                            <option value="KHN">N�ϲ�</option>
                            <option value="NGB">N����</option>
                            <option value="NAO">N�ϳ�</option>
                            <option value="WUS">N��ƽ</option>
 
                            <option value="NNG">N����</option>
                            <option value="NTG">N��ͨ</option>
 
                            <option value="NNY">N����</option>
                            <option value="PZI">P��֦��</option>
                            <option value="TAO">Q�ൺ</option>
                            <option value="NDG">Q�������</option>
 
                            <option value="SHP">Q�ػʵ�</option>
                            <option value="IQM">Q��ĩ</option>
 
                            <option value="IQN">Q����</option>
                            <option value="JJN">QȪ��</option>
                            <option value="JUZ">Q����</option>
                            <option value="SHA">S�Ϻ�</option>
 
                            <option value="SZX">S����</option>
                            <option value="SHE">S����</option>
 
                            <option value="SJW">Sʯ��ׯ</option>
                            <option value="SZV">S����</option>
                            <option value="SYX">S����</option>
                            <option value="SWA">S��ͷ</option>
 
                            <option value="SHS">Sɳ��</option>
                            <option value="SYM">S˼é</option>
 
                            <option value="TYN">T̫ԭ</option>
                            <option value="TSN">T���</option>
                            <option value="TCG">T����</option>
                            <option value="TNH">Tͨ��</option>
 
                            <option value="TGO">Tͨ��</option>
                            <option value="TEN">Tͭ��</option>
 
                            <option value="WUH">W�人</option>
                            <option value="WNZ">W����</option>
                            <option value="URC">W��³ľ��</option>
                            <option value="WUX">W����</option>
 
                            <option value="WXN">W����</option>
                            <option value="WEF">WΫ��</option>
 
                            <option value="WEH">W����</option>
                            <option value="HLH">W��������</option>
                            <option value="WUZ">W�ں�</option>
                            <option value="WUS">W����ɽ</option>
 
                            <option value="WUZ">W����</option>
                            <option value="WNH">W��ɽ</option>
 
                            <option value="XIY">X����</option>
                            <option value="XMN">X����</option>
                            <option value="DIG">X�������</option>
                            <option value="XNN">X����</option>
 
                            <option value="XUZ">X����</option>
                            <option value="JHG">X��˫����</option>
 
                            <option value="XFN">X�差</option>
                            <option value="XIC">X����</option>
                            <option value="XIL">X���ֺ���</option>
                            <option value="ACX">X����</option>
 
                            <option value="XNT">X��̨</option>
                            <option value="INC">Y����</option>
 
                            <option value="ENY">Y�Ӱ�</option>
                            <option value="YNJ">Y�Ӽ�</option>
                            <option value="YNT">Y��̨</option>
                            <option value="YNZ">Y�γ�</option>
 
                            <option value="YBP">Y�˱�</option>
                            <option value="YIH">Y�˲�</option>
 
                            <option value="YIN">Y����</option>
                            <option value="YIW">Y����</option>
                            <option value="UYN">Y����</option>
                            <option value="YCU">Y�˳�</option>
 
                            <option value="LLF">Y����</option>
                            <option value="CGO">Z֣��</option>
 
                            <option value="ZUH">Z�麣</option>
                            <option value="ZAT">Z��ͨ</option>
                            <option value="DYG">Z�żҽ�</option>
                            <option value="ZHA">Zտ��</option>
 
                            <option value="HSN">Z��ɽ</option>
                            <option value="ZYI">Z����</option>
 
                            <option value="HJJ">Z�ƽ�</option>
                        </select>
                    </div>
                </div>
                <div class="tel-section3">
                    <span class="tel-section-title2 tp-tit">����:</span>
                    <div class="text-wrap3">
                        <select class="tel-section-select6" id="J_ds_y_gn"></select>
                        <span>-</span>
                        <select class="tel-section-select7" id="J_ds_m_gn"></select>
                        <span>-</span>
                        <select class="tel-section-select7" id="J_ds_d_gn"></select>
                    </div>
                </div>
                <div class="tel-buy tp-btn">
                    <a class="tel-discount" id="J_gn_submit" href="#" target="_blank">�鿴�ۿۼ�</a>   
                </div>
            </div>
 
            <div class="ks-lvxing-panel" style="display:none;">
                <div class="tel-section3">
                    <label class="tel-section-title2">����:</label>
                    <div class="text-wrap3">
                        <select class="tel-section-select2" id="ieDepCity">
                            <option value="">-��ѡ��-</option>
                            <option value="AKU">A������</option>
                            <option value="AAT">A����̩</option>
                            <option value="AKA">A����</option>
                            <option value="AQG">A����</option>
 
                            <option value="AOG">A��ɽ</option>
                            <option value="AVA">A��˳</option>
 
                            <option value="BJ">B����</option>
                            <option value="BSD">B��ɽ</option>
                            <option value="BAV">B��ͷ</option>
                            <option value="BHY">B����</option>
 
                            <option value="BFU">B����</option>
                            <option value="CKG">C����</option>
 
                            <option value="CTU">C�ɶ�</option>
                            <option value="CSX">C��ɳ</option>
                            <option value="CGQ">C����</option>
                            <option value="CGD">C����</option>
 
                            <option value="CIF">C���</option>
                            <option value="CHG">C����</option>
 
                            <option value="CIH">C����</option>
                            <option value="CZX">C����</option>
                            <option value="CNI">C����</option>
                            <option value="DLC">D����</option>
 
                            <option value="DDG">D����</option>
                            <option value="DNH">D�ػ�</option>
 
                            <option value="DLU">D����</option>
                            <option value="DIG">D����</option>
                            <option value="DAX">D����</option>
                            <option value="DAT">D��ͬ</option>
 
                            <option value="DOY">D��Ӫ</option>
                            <option value="ENH">E��ʩ</option>
 
                            <option value="DSN">E������˹</option>
                            <option value="FOC">F����</option>
                            <option value="FYN">F����</option>
                            <option value="FUG">F����</option>
 
                            <option value="FUO">F��ɽ</option>
                            <option value="CAN">G����</option>
 
                            <option value="KWL">G����</option>
                            <option value="KWE">G����</option>
                            <option value="KOW">G����</option>
                            <option value="GOQ">G���ľ</option>
 
                            <option value="GHN">G�㺺</option>
                            <option value="GYS">G��Ԫ</option>
 
                            <option value="HGH">H����</option>
                            <option value="HRB">H������</option>
                            <option value="HFE">H�Ϸ�</option>
                            <option value="HET">H���ͺ���</option>
 
                            <option value="HAK">H����</option>
                            <option value="TXN">H��ɽ</option>
 
                            <option value="HLD">H������</option>
                            <option value="HEK">H�ں�</option>
                            <option value="HMI">H����</option>
                            <option value="HTN">H����</option>
 
                            <option value="HYN">H����</option>
                            <option value="HNY">H����</option>
 
                            <option value="HZG">H����</option>
                            <option value="JIL">J����</option>
                            <option value="TNA">J����</option>
                            <option value="JZH">J��կ��</option>
 
                            <option value="KNC">J����</option>
                            <option value="JNG">J����</option>
 
                            <option value="JMU">J��ľ˹</option>
                            <option value="JGN">J������</option>
                            <option value="JDZ">J������</option>
                            <option value="JHG">J����</option>
 
                            <option value="JJN">J����</option>
                            <option value="JNZ">J����</option>
 
                            <option value="CHW">J��Ȫ</option>
                            <option value="JIU">J�Ž�</option>
                            <option value="JGS">J����ɽ</option>
                            <option value="KMG">K����</option>
 
                            <option value="KRY">K��������</option>
                            <option value="KHG">K��ʲ</option>
 
                            <option value="KRL">K�����</option>
                            <option value="KCA">K�⳵</option>
                            <option value="LHW">L����</option>
                            <option value="LXA">L����</option>
 
                            <option value="LYG">L���Ƹ�</option>
                            <option value="LJG">L����</option>
 
                            <option value="LYI">L����</option>
                            <option value="LZH">L����</option>
                            <option value="LYA">L����</option>
                            <option value="LNJ">L�ٲ�</option>
 
                            <option value="LZO">L����</option>
                            <option value="LCX">L����</option>
 
                            <option value="LUM">Mâ��</option>
                            <option value="MXZ">M÷��</option>
                            <option value="NZH">M������</option>
                            <option value="MIG">M����</option>
 
                            <option value="MDG">Mĵ����</option>
                            <option value="NKG">N�Ͼ�</option>
 
                            <option value="KHN">N�ϲ�</option>
                            <option value="NGB">N����</option>
                            <option value="NAO">N�ϳ�</option>
                            <option value="WUS">N��ƽ</option>
 
                            <option value="NNG">N����</option>
                            <option value="NTG">N��ͨ</option>
 
                            <option value="NNY">N����</option>
                            <option value="PZI">P��֦��</option>
                            <option value="TAO">Q�ൺ</option>
                            <option value="NDG">Q�������</option>
 
                            <option value="SHP">Q�ػʵ�</option>
                            <option value="IQM">Q��ĩ</option>
 
                            <option value="IQN">Q����</option>
                            <option value="JJN">QȪ��</option>
                            <option value="JUZ">Q����</option>
                            <option value="SH">S�Ϻ�</option>
 
                            <option value="SZX">S����</option>
                            <option value="SHE">S����</option>
 
                            <option value="SJW">Sʯ��ׯ</option>
                            <option value="SZV">S����</option>
                            <option value="SYX">S����</option>
                            <option value="SWA">S��ͷ</option>
 
                            <option value="SHS">Sɳ��</option>
                            <option value="SYM">S˼é</option>
 
                            <option value="TYN">T̫ԭ</option>
                            <option value="TSN">T���</option>
                            <option value="TCG">T����</option>
                            <option value="TNH">Tͨ��</option>
 
                            <option value="TGO">Tͨ��</option>
                            <option value="TEN">Tͭ��</option>
 
                            <option value="WUH">W�人</option>
                            <option value="WNZ">W����</option>
                            <option value="URC">W��³ľ��</option>
                            <option value="WUX">W����</option>
 
                            <option value="WXN">W����</option>
                            <option value="WEF">WΫ��</option>
 
                            <option value="WEH">W����</option>
                            <option value="HLH">W��������</option>
                            <option value="WUZ">W�ں�</option>
                            <option value="WUS">W����ɽ</option>
 
                            <option value="WUZ">W����</option>
                            <option value="WNH">W��ɽ</option>
 
                            <option value="XIY">X����</option>
                            <option value="XMN">X����</option>
                            <option value="DIG">X�������</option>
                            <option value="XNN">X����</option>
 
                            <option value="XUZ">X����</option>
                            <option value="JHG">X��˫����</option>
 
                            <option value="XFN">X�差</option>
                            <option value="XIC">X����</option>
                            <option value="XIL">X���ֺ���</option>
                            <option value="ACX">X����</option>
 
                            <option value="XNT">X��̨</option>
                            <option value="INC">Y����</option>
 
                            <option value="ENY">Y�Ӱ�</option>
                            <option value="YNJ">Y�Ӽ�</option>
                            <option value="YNT">Y��̨</option>
                            <option value="YNZ">Y�γ�</option>
 
                            <option value="YBP">Y�˱�</option>
                            <option value="YIH">Y�˲�</option>
 
                            <option value="YIN">Y����</option>
                            <option value="YIW">Y����</option>
                            <option value="UYN">Y����</option>
                            <option value="YCU">Y�˳�</option>
 
                            <option value="LLF">Y����</option>
                            <option value="CGO">Z֣��</option>
 
                            <option value="ZUH">Z�麣</option>
                            <option value="ZAT">Z��ͨ</option>
                            <option value="DYG">Z�żҽ�</option>
                            <option value="ZHA">Zտ��</option>
 
                            <option value="HSN">Z��ɽ</option>
                            <option value="ZYI">Z����</option>
 
                            <option value="HJJ">Z�ƽ�</option>
                        </select>
                    </div>
                </div>
                <div class="tel-section3">
                    <label class="tel-section-title2">����:</label>
                    <div class="text-wrap3">
                        <select class="tel-section-select2" id="ieArrCity" style="color: #09F;">
                            <option value="">-��ѡ��-</option>
                            <option value="MFM">A����</option>
                            <option value="PAR">B����</option>
 
                            <option value="TYO">D����</option>
                            <option value="OSA">D����</option>
                            <option value="FRA">F�����˸�</option>
                            <option value="KUL">J��¡��</option>
                            <option value="LON">L�׶�</option>
                            <option value="LAX">L��ɼ�</option>
 
                            <option value="BKK">M����</option>
                            <option value="NGO">M������</option>
                            <option value="MEL">Mī����</option>
                            <option value="MUC">MĽ���</option>
                            <option value="NYC">NŦԼ</option>
                            <option value="SEL">S�׶�</option>
 
                            <option value="TPE">T̨��</option>
                            <option value="SIN">X�¼���</option>
                            <option value="HKG">X���</option>
                            <option value="SYD">XϤ��</option>
                        </select>
                    </div>
                </div>
                <div class="tel-section3">
                    <span class="tel-section-title2 tp-tit">����:</span>
                    <div class="text-wrap3">
                        <select class="tel-section-select6" id="J_ds_y_gj"></select>
                        <span>-</span>
                        <select class="tel-section-select7" id="J_ds_m_gj"></select>
                        <span>-</span>
                        <select class="tel-section-select7" id="J_ds_d_gj"></select>
                    </div>
                </div>
                <div class="tel-buy tp-btn">
                    <a class="tel-discount" id="J_gj_submit" target="_blank">�鿴�ۿۼ�</a>
                    
                </div>
            </div>
 
            <div class="ks-lvxing-panel" style="display:none;">
                <form target="_blank" id="J_HotelSearchForm" class="tp-main" action="http://kezhan.trip.taobao.com/hotel_list.htm" name="innerSearch" method="get">
                    <input type="hidden" name="action" value="hotel_list_action">
                    <input type="hidden" name="event_submit_do_search" value="submit">
                    <input type="hidden" id="J_CityCode" name="_fmd.h._0.cit" value="">
                    <input type="hidden" id="J_CountryCode" name="_fmd.h._0.co" value="">
                    <input type="hidden" id="J_Source" name="source" value="">
                    <input type="hidden" id="th:destCityCode" name="_fmho.h._0.de" value="">
                    <input type="hidden" name="payFilter" id="payFilter" value="">
                    <input type="hidden" name="sortBy" id="sortBy" value="">
                    <input type="hidden" id="breakFast" name="breakFast" value="">
                    <input type="hidden" id="wideBand" name="wideBand" value="">
                    <input type="hidden" name="_fmd.h._0.cu" id="currentPage" value="1">
 

                    <div class="tel-section3">
                        <label class="tel-section-title2">��ס:</label>
                        <div class="text-wrap3">
                            <select name="_fmho.h._0.d" class="tel-section-select2" id="J_HotelDestination">
                                <option value="">-��ѡ��-</option>
                                <option value="820000">A����</option>
                                <option value="110100">B������</option>
                                <option value="150200">B��ͷ��</option>
                                <option value="450500">B������</option>
                                <option value="510100">C�ɶ���</option>
                                <option value="500100">C������</option>
                                <option value="130800">C�е���</option>
                                <option value="430100">C��ɳ��</option>
                                <option value="220100">C������</option>
                                <option value="140200">D��ͬ��</option>
                                <option value="210200">D������</option>
                                <option value="210600">D������</option>
                                <option value="230600">D������</option>
                                <option value="371400">D������</option>
                                <option value="441900">D��ݸ��</option>
                                <option value="150600">E������˹��</option>
                                <option value="350100">F������</option>
                                <option value="440600">F��ɽ��</option>
                                <option value="360700">G������</option>
                                <option value="440100">G������</option>
                                <option value="450300">G������</option>
                                <option value="520100">G������</option>
                                <option value="150700">H���ױ�����</option>
                                <option value="150100">H���ͺ�����</option>
                                <option value="230100">H��������</option>
                                <option value="211400">H��«����</option>
                                <option value="460100">H������</option>
                                <option value="330100">H������</option>
                                <option value="340100">H�Ϸ���</option>
                                <option value="341000">H��ɽ��</option>
                                <option value="420200">H��ʯ��</option>
                                <option value="421100">H�Ƹ���</option>
                                <option value="441300">H������</option>
                                <option value="441600">H��Դ��</option>
                                <option value="652200">H���ܵ���</option>
                                <option value="210700">J������</option>
                                <option value="220200">J������</option>
                                <option value="230800">J��ľ˹��</option>
                                <option value="330400">J������</option>
                                <option value="360400">J�Ž���</option>
                                <option value="360200">J��������</option>
                                <option value="370100">J������</option>
                                <option value="421000">J������</option>
                                <option value="440700">J������</option>
                                <option value="620200">J��������</option>
                                <option value="410200">K������</option>
                                <option value="530100">K������</option>
                                <option value="320700">L���Ƹ���</option>
                                <option value="530700">L������</option>
                                <option value="540100">L������</option>
                                <option value="542600">L��֥����</option>
                                <option value="620100">L������</option>
                                <option value="410300">L������</option>
                                <option value="231000">Mĵ������</option>
                                <option value="340500">M��ɽ��</option>
                                <option value="320100">N�Ͼ���</option>
                                <option value="330200">N������</option>
                                <option value="450100">N������</option>
                                <option value="360100">N�ϲ���</option>
                                <option value="130300">Q�ػʵ���</option>
                                <option value="370200">Q�ൺ��</option>
                                <option value="469002">Q����</option>
                                <option value="441800">Q��Զ��</option>
                                <option value="310100">S�Ϻ���</option>
                                <option value="130100">Sʯ��ׯ��</option>
                                <option value="320500">S������</option>
                                <option value="210100">S������</option>
                                <option value="361100">S������</option>
                                <option value="411200">S����Ͽ��</option>
                                <option value="440300">S������</option>
                                <option value="460200">S������</option>
                                <option value="440500">S��ͷ��</option>
                                <option value="120100">T�����</option>
                                <option value="370900">T̩����</option>
                                <option value="130200">T��ɽ��</option>
                                <option value="140100">T̫ԭ��</option>
                                <option value="710100">T̨����</option>
                                <option value="652100">T��³������</option>
                                <option value="320200">W������</option>
                                <option value="330300">W������</option>
                                <option value="371000">W������</option>
                                <option value="420100">W�人��</option>
                                <option value="450400">W������</option>
                                <option value="469005">W�Ĳ���</option>
                                <option value="650100">W��³ľ����</option>
                                <option value="810000">X���</option>
                                <option value="350200">X������</option>
                                <option value="433100">X��������������������</option>
                                <option value="630100">X������</option>
                                <option value="610100">X������</option>
                                <option value="610400">X������</option>
                                <option value="610600">Y�Ӱ���</option>
                                <option value="321000">Y������</option>
                                <option value="370600">Y��̨��</option>
                                <option value="360600">Yӥ̶��</option>
                                <option value="420500">Y�˲���</option>
                                <option value="530400">Y��Ϫ��</option>
                                <option value="640100">Y������</option>
                                <option value="321100">Z����</option>
                                <option value="410100">Z֣����</option>
                                <option value="430200">Z������</option>
                                <option value="430800">Z�żҽ���</option>
                                <option value="440400">Z�麣��</option>
                                <option value="441200">Z������</option>
                            </select>
                            <input id="neDepCityName" name="_fmh.fl._0.s" type="hidden" value=""/>
                        </div>
                    </div>
                    <div class="tel-section3">
                        <span class="tel-section-title2 tp-tit">��ס:</span>
                        <div class="text-wrap3 tp-opt">
                            <select class="tel-section-select6" id="J_ds_y_jdi"></select>
                            <span>-</span>
                            <select class="tel-section-select7" id="J_ds_m_jdi"></select>
                            <span>-</span>
                            <select class="tel-section-select7" id="J_ds_d_jdi"></select>
                        </div>
                        <input type="hidden" id="J_hotelInDate" value="" name="_fmd.h._0.ch">
                    </div>
                    <div class="tel-section3">
                        <span class="tel-section-title2 tp-tit">�뿪:</span>
                        <div class="text-wrap3 tp-opt">
                            <select class="tel-section-select6" id="J_ds_y_jdo"></select>
                            <span>-</span>
                            <select class="tel-section-select7" id="J_ds_m_jdo"></select>
                            <span>-</span>
                            <select class="tel-section-select7" id="J_ds_d_jdo"></select>
                        </div>
                        <input type="hidden" id="J_hotelOutDate" value="" name="_fmd.h._0.che">
                    </div>
                    <div class="tel-buy tp-btn">
                        <a class="tel-discount" id="J_jd_submit">�鿴�ۿۼ�</a>
                        
                   </div>
                </form>
            </div>
 
            <div class="ks-lvxing-panel" style="display:none;">
                <form id="J_TravelSearchForm1" target="_blank" class="tp-main" action="http://z.alimama.com/tksEss.php" method="get">
                    <input name="pid" type="hidden" value="<?=$pid?>">
                    <input name="cat" type="hidden" value="50018968">
                    <div class="tel-section2">
                        <div class="text-search">
                        <label class="">����Ʊ:</label>
                           <input class="text-filed"  id="J_TravelDestination" type="text" name="q" placeholder="������Ŀ�ĵ�����">
                        </div>
                    </div>
                    <div class="tel-section2">
                        <span class="tel-section-title">���ŷ���:</span>
                        <span class="text-wrap">
                            
                                                               <a target="_blank" href="http://search8.taobao.com/search?spm=1.135976.162600.6&pid=<?=$pid?>&q=%BF%A8%C8%AF&mode=63&rt=1323681688769" class="text-hotlink">��ȯ</a>
                                                               <a target="_blank" href="http://search8.taobao.com/search?spm=1.135976.162600.7&pid=<?=$pid?>&q=%C7%A9%D6%A4&mode=63&rt=1323681715675" class="text-hotlink">ǩ֤</a>
                                                               <a target="_blank" href="http://search8.taobao.com/search?spm=1.135976.162600.8&pid=<?=$pid?>&q=%D7%E2%B3%B5&mode=63&rt=1323681736675" class="text-hotlink">�⳵</a>
                                                               <a target="_blank" href="http://search8.taobao.com/search?spm=1.135976.162600.9&pid=<?=$pid?>&q=%D3%CA%C2%D6&mode=63&rt=1323681752301" class="text-hotlink">����</a>
                                                               <a target="_blank" href="http://search8.taobao.com/search?spm=1.135976.162600.10&pid=<?=$pid?>&q=%C2%C3%D3%CE%B6%C8%BC%D9&mode=63&rt=1323681962835" class="text-hotlink">���ζȼ�</a>
                                                           
                        </span>
                    </div>
                    <div class="tel-section2">
                        <span class="tel-section-title">���ų���:</span>
                        <span class="text-wrap">
                            
                                                                <a target="_blank" href="http://search8.taobao.com/search?spm=1.135976.162600.11&pid=<?=$pid?>&q=%CF%E3%B8%DB&mode=63&rt=1323680955228" class="text-hotlink">���</a>
                                                                <a target="_blank" href="http://search8.taobao.com/search?spm=1.135976.162600.12&pid=<?=$pid?>&q=%C8%FD%D1%C7&mode=63&rt=1323680973025" class="text-hotlink">����</a>
                                                                <a target="_blank" href="http://search8.taobao.com/search?spm=1.135976.162600.13&pid=<?=$pid?>&q=%C0%F6%BD%AD&mode=63&rt=1323681059261" class="text-hotlink">����</a>
                                                                <a target="_blank" href="http://search8.taobao.com/search?spm=1.135976.162600.14&pid=<?=$pid?>&q=%B9%F0%C1%D6&mode=63&rt=1323683620559" class="text-hotlink">����</a>
                                                                <a target="_blank" href="http://search8.taobao.com/search?spm=1.135976.162600.15&pid=<?=$pid?>&q=%BE%C5%D5%AF%B9%B5&mode=63&rt=1323681132855" class="text-hotlink">��կ��</a>
                                                            
                        </span>
                    </div>
                    <div class="tel-buy tp-btn">
                        <a class="tel-discount" id="J_lx_submit">�鿴�ۿۼ�</a>
                        
                    </div>
                </form>
            </div>        </div>
    </div>
</div>
</body>
<script type="text/javascript"> 
KISSY.config({
    map:[
        [/(.+convenience\/.+)-min.js(\?[^?]+)?$/, "$1.js$2"]
    ],
    packages:[
        {
            name:"convenience",
            tag:"20120702",
            path:"http://a.tbcdn.cn/apps/med/other/tbk/",
            charset:"utf-8"
        }
    ]
});
KISSY.use("convenience/lvxing/lvxing",function(S,LX){
    new LX();
});
 
KISSY.use("switchable,sizzle", function(S) {
    var Tabs = S.Tabs;
    S.ready(function(S) {
        var $ = S.all;
        var tabs = new Tabs('#J_ChongZhiContainer', {
            activeTriggerCls : 'current',
            markupType : 1,
            switchTo : 0
        });        var tabs2 = new Tabs('#J_lvxingForms', {
            triggerCls : 'ks-lvxing-trigger',
            activeTriggerCls : 'current',
            panelCls : 'ks-lvxing-panel',
            markupType : 1,
            switchTo : 0
        });
 
        tabs2.on('beforeSwitch', function(ev) {
            var index = ev.toIndex;
            var els = $(".menubar li a");
            els.each(function(el,i){
                if(i==index){
                    el.addClass("li-current");
                }
                else{
                    el.removeClass("li-current");
                }
            });
        });    });
});
</script><script src="http://www.taobao.com/go/act/mmbd/phonecard.php"></script>
<script src="http://a.tbcdn.cn/apps/med/other/tbk/history.js" charset="utf-8"></script>
<script src="http://a.tbcdn.cn/apps/med/other/tbk/shouji.js?t=20130709.js" charset="utf-8"></script><script src="http://www.taobao.com/go/act/mmbd/qqcard.php"></script>
<script src="http://www.taobao.com/go/act/mmbd/gamecard.php"></script>
<script src="http://www.taobao.com/go/act/mmbd/hotgame.php"></script>
<script src="http://a.tbcdn.cn/apps/med/other/tbk/youxi.js" charset="utf-8"></script><script src="http://a.alimama.cn/spmact/spmact.js"></script>
</html>