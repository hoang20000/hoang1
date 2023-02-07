<?php
error_reporting(0);
session_start();
date_default_timezone_set('Asia/Ho_Chi_Minh');
/***[ Color ]***/
$nau= "\e[38;5;94m";
$xnhac = "\033[1;36m";
$do = "\033[1;31m";
$luc = "\033[1;32m";
$vang = "\033[1;33m";
$xduong = "\033[1;34m";
$hong = "\033[1;35m";
$trang = "\033[1;37m";
/****[ CẶC ]*****/
$c1 = "
\033[1;32m╔═════════════════════╗
\033[1;32m║    \033[1;33mTin Tức Mới      \033[1;32m║
\033[1;32m╚═════════════════════╝\n";
$c2 = "
\033[1;32m╔═════════════════════╗
\033[1;32m║    \033[1;33mTrao Đổi Sub     \033[1;32m║
\033[1;32m╚═════════════════════╝\n";
$c3 = "
\033[1;32m╔═════════════════════╗
\033[1;32m║    \033[1;33mTương Tác Chéo   \033[1;32m║
\033[1;32m╚═════════════════════╝\n";
$c4 = "
\033[1;32m╔═════════════════════╗
\033[1;32m║     \033[1;33m  Tik Tok       \033[1;32m║
\033[1;32m╚═════════════════════╝\n";
$c5 = "
\033[1;32m╔═════════════════════╗
\033[1;32m║    \033[1;33m Kiếm Tiền       \033[1;32m║
\033[1;32m╚═════════════════════╝\n";
$c6 = "
\033[1;32m╔═════════════════════╗
\033[1;32m║    \033[1;33m  Tiện ích       \033[1;32m║
\033[1;32m╚═════════════════════╝\n";
$c7 = "
\033[1;32m╔═════════════════════╗
\033[1;32m║    \033[1;33m  Check Xu       \033[1;32m║
\033[1;32m╚═════════════════════╝\n";
$c8 = "
\033[1;32m╔═════════════════════╗
\033[1;32m║    \033[1;33m  Instagram      \033[1;32m║
\033[1;32m╚═════════════════════╝\n";
/***[ USERAGENT ]***/
$_SESSION['useragent'] = 'Mozilla/5.0 (Linux; Android 10; CPH1819) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36';
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 200;
} else {
	$_SESSION['load'] = 0;
}
/***[ Delay ]***/
if (strtoupper(substr(PHP_OS, 0, 3)) === 'LIN') {
	$_SESSION['load'] = 1500;
	$_SESSION['delay'] = 2000;
} else {
	$_SESSION['load'] = 0;
	$_SESSION['delay'] = 1000;
}
/***[ checkkey]***/
$ip_2 = file_get_contents("https://api64.ipify.org/");
$Ngay = date("d/m");
$day= date('d-m-y');    
$today = date("d-m-y");
$d = date("d-m");
/***[ Đánh Dấu Bản Quyền ]***/
$hien = $trang."".$do."[".$luc."🍓".$do."] ".$trang."➩ ";
/***[ Banner ]***/
$banner = $vang."
                                                       
\033[1;33m  ,--,     ,---,                ___                         ,--,    
\033[1;33m,--.'|   ,--.' |              ,--.'|_                     ,--.'|    
\033[1;33m|  | :   |  |  :              |  | :,'   ,---.     ,---.  |  | :    
\033[1;33m:  : '   :  :  :              :  : ' :  '   ,'\   '   ,'\ :  : '    
\033[1;33m|  ' |   :  |  |,--.        .;__,'  /  /   /   | /   /   ||  ' |    
\033[1;33m'  | |   |  :  '   |        |  |   |  .   ; ,. :.   ; ,. :'  | |    
\033[1;33m|  | :   |  |   /' :        :__,'| :  '   | |: :'   | |: :|  | :    
\033[1;33m'  : |__ '  :  | | |          '  : |__'   | .; :'   | .; :'  : |__  
\033[1;33m|  | '.'||  |  ' | :          |  | '.'|   :    ||   :    ||  | '.'| 
\033[1;33m;  :    ;|  :  :_:,'          ;  :    ;\   \  /  \   \  / ;  :    ; 
\033[1;33m|  ,   / |  | ,'              |  ,   /  `----'    `----'  |  ,   /  
\033[1;33m---`-'  `--''                 ---`-'                      ---`-'   
                              
\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
\033[1;34mYoutobe: \033[1;35mHiến Tool
\033[1;33mZalo: \033[1;36m0379691408
\033[1;32mHôm Nay Ngày: \033[1;33m$d-2022
\033[1;31mIP Của Bạn: \033[1;37m$ip_2
\033[1;37m- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -                                    
                                                                    \n";
@system('clear'); 
for($i = 0; $i < strlen($banner); $i++){echo $banner[$i];usleep(5000);}
for($i = 0; $i < strlen($c1); $i++){echo $c1[$i];usleep(5000);}
echo"\033[1;37m- \033[1;31mLưu ý: \033[1;33mVì tránh bị keylog nên mọi người nhập access_token \n";
usleep(50000);
echo"  vài lần sẽ vào đc tool nhé\n";
  usleep(50000);
  echo "\033[1;37m- \033[1;35mLiên hệ zalo: \033[1;36m0379691408\n";
  usleep(50000);
  echo "\033[1;37m- \033[1;32mYoutobe: \033[1;35mHIẾN TOOL\n";
  usleep(50000);
  echo "\033[1;37m- \033[1;32mMua Key Vip Tại: \033[1;33mhttp://keysiuvip.tk/\n";
usleep(50000);
for($i = 0; $i < strlen($c2); $i++){echo $c2[$i];usleep(500);}
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."1".$do."] ".$luc."Tool TDS Đa Cookie\n";
usleep(50000);
for($i = 0; $i < strlen($c3); $i++){echo $c3[$i];usleep(5000);}
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."2".$do."] ".$luc."Tool TTC Đa Cookie \033[1;31m(\033[1;33mLog Access_Token\033[1;31m)\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."2.2".$do."] ".$luc."Tool TTC Đa Token \033[1;31m(\033[1;33mV1\033[1;31m) \033[1;31m(\033[1;33mLog Tk&Mk\033[1;31m)\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."2.3".$do."] ".$luc."Tool TTC Đa Token \033[1;31m(\033[1;33mV2\033[1;31m) \033[1;31m(\033[1;33mLog Access_Token\033[1;31m)\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."3".$do."] ".$luc."Tool TTC TikTok\n";
usleep(50000);
for($i = 0; $i < strlen($c4); $i++){echo $c4[$i];usleep(5000);}
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."4".$do."] ".$luc."Tool Buff Views TikTok\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."5".$do."] ".$luc."Tool Buff Share TikTok\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."6".$do."] ".$luc."Tool Buff Yêu Thích TikTok\n";
usleep(50000);
for($i = 0; $i < strlen($c5); $i++){echo $c5[$i];usleep(5000);}
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."7".$vang."] ".$luc."Tool Rút Gọn Link1s \033[1;31m(\033[1;33mMới\033[1;31m)\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."7.1".$do."] ".$luc."Tool Rút Gọn Mneylink \033[1;33m(\033[1;31mBảo Trì\033[1;33m)\n";
usleep(50000);
for($i = 0; $i < strlen($c6); $i++){echo $c6[$i];usleep(5000);}
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."8".$do."] ".$luc."Tool Reg Page \033[1;31m(\033[1;33mVị Trí\033[1;31m)\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."9".$do."] ".$luc."Tool Auto Chọc Bạn Bè  \n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."10".$do."] ".$luc."Tool Nuôi Fb Đa Cookie \033[1;31m(\033[1;33mLike + Cmt + Ad\033[1;31m) \n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."11".$do."] ".$luc."Tool Hủy Follow Fb\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."12".$do."] ".$luc."Tool Lọc mail\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."13".$do."] ".$luc."Tool Lấy Token Bằng Cookie\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."14".$do."] ".$luc."Tool Lấy Thông Tin Fb Bằng Token\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."15".$do."] ".$luc."Tool Auto Thêm bb\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."16".$do."] ".$luc."Tool Auto Share Bài Viết\033[1;31m (\033[1;33mMới\033[1;31m)\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."17".$do."] ".$luc."Tool Spam Call + Sms \033[1;33m(\033[1;31mBảo Trì\033[1;33m)\n";
usleep(50000);
for($i = 0; $i < strlen($c7); $i++){echo $c7[$i];usleep(5000);}
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."18".$do."] ".$luc."Tool Check Xu Tds \033[1;31m(\033[1;33mMới\033[1;31m)\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."19".$do."] ".$luc."Tool Check Xu Ttc \033[1;31m(\033[1;33mMới\033[1;31m)\n";
usleep(50000);
for($i = 0; $i < strlen($c8); $i++){echo $c8[$i];usleep(5000);}
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."20".$do."] ".$luc."Tool Cày Xu ViPIG - Auto Follow \033[1;31m(\033[1;33mMới\033[1;31m)\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."21".$do."] ".$luc."Tool Cày Xu ViPIG - Auto Tim \033[1;31m(\033[1;33mMới\033[1;31m)\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."22".$do."] ".$luc."Tool Cày Xu TOPIG - Auto Follow \033[1;33m(\033[1;31mBảo Trì\033[1;33m)\n";
usleep(50000);
echo $hien.$luc."Nhập ".$do."[".$vang."23".$do."] ".$luc."Tool Cày Xu TOPIG - Auto Tim \033[1;33m(\033[1;31mBảo Trì\033[1;33m)\n";
usleep(50000);
echo "\n";
while(true){
echo $hien.$luc."Nhập Số ".$trang."===>: $vang";
$chedo = trim (fgets(STDIN));
if ($chedo == '1')
{ if(!$sock = @fsockopen('www.google.com', 80))
 { echo 'Vui lòng bật kết nối mạng'; exit(); } 
eval(file_get_contents('https://run.mocky.io/v3/7cbe092d-20f1-4080-8fea-038690bafc00'));}  
else if ($chedo == '2'){eval(file_get_contents('https://run.mocky.io/v3/71c9b643-8f23-4422-8892-335b4a9a325f')); } 
else if ($chedo == '2.2'){eval(file_get_contents('https://run.mocky.io/v3/66a4d6d2-39e9-46e6-ab89-1e9daa45939f')); }  
else if ($chedo == '2.3'){eval(file_get_contents('https://run.mocky.io/v3/d4c6e89c-bff5-40e9-a9c3-78a899241394')); } 
else if ($chedo == '3'){eval(file_get_contents('https://run.mocky.io/v3/bd4e5a8e-df06-4c74-9814-cda0d3b21263')); } 
else if ($chedo == '4'){eval(file_get_contents('https://run.mocky.io/v3/15876f1e-d0db-43b8-ac27-e1ed44e574f4'));}  
else if ($chedo == '5'){eval(file_get_contents('https://run.mocky.io/v3/65a1d1eb-cd3e-4e29-ae3f-fca8abcc6c17')); } 
else if ($chedo == '6'){eval(file_get_contents('https://run.mocky.io/v3/418cce4c-2ab2-4939-a4e1-cc33b54bc333')); } 
else if ($chedo == '7'){eval(file_get_contents('https://run.mocky.io/v3/4adc7c5e-f179-4673-88e1-ffba46ce4718')); } 
else if ($chedo == '7.1'){eval(file_get_contents('')); } 
else if ($chedo == '8'){eval(file_get_contents('https://run.mocky.io/v3/33bd329f-f372-4783-859b-4889ab473985')); } 
else if ($chedo == '9'){eval(file_get_contents('https://run.mocky.io/v3/50c29bb7-be5a-4f62-bad6-1e9fe7104411')); } 
else if ($chedo == '10'){eval(file_get_contents('https://run.mocky.io/v3/a2fb0cb5-d91a-45fa-8b93-fe660afa4240')); } 
else if ($chedo == '11'){eval(file_get_contents('https://run.mocky.io/v3/48bcff9d-dbea-4161-8779-15ef0e46e64b')); } 
else if ($chedo == '12'){eval(file_get_contents('https://run.mocky.io/v3/d13aa1ed-47b4-4695-a3cb-185d691e0a61')); } 
else if ($chedo == '13'){eval(file_get_contents('https://run.mocky.io/v3/431366be-c92e-402e-9d42-981b2c437bc4')); } 
else if ($chedo == '14'){eval(file_get_contents('https://run.mocky.io/v3/d3c275e8-29a2-4313-8e81-e73d844b9048')); } 
else if ($chedo == '15'){eval(file_get_contents('https://run.mocky.io/v3/a91f7dee-9166-4a56-a207-5054fe40d046')); } 
else if ($chedo == '16'){eval(file_get_contents('https://run.mocky.io/v3/c23f5357-7ca0-4ab8-8896-22f83bb10129')); } 
else if ($chedo == '17'){eval(file_get_contents('https://run.mocky.io/v3/94edec22-046a-4444-ba7b-880dc09dfc5d')); } 
else if ($chedo == '18'){eval(file_get_contents('https://run.mocky.io/v3/b3fafeda-eb71-4082-b323-3534541d8962')); } 
else if ($chedo == '19'){eval(file_get_contents('https://run.mocky.io/v3/110dc681-a6c1-48ff-9be1-f6decfbb1cd0')); } 
else if ($chedo == '20'){eval(file_get_contents('https://run.mocky.io/v3/a24da2d6-e715-4333-9100-94ed73228fa1')); } 
else if ($chedo == '21'){eval(file_get_contents('https://run.mocky.io/v3/346be642-db12-4b6c-8fb4-18270af97a9e')); } 
else if ($chedo == '22'){eval(file_get_contents('')); } 
else if ($chedo == '23'){eval(file_get_contents('')); } 
else if ($chedo == ""){
	echo "\033[1;31mNhập Sai\n";
	exit;
	}
}
eval(file_get_contents('url code'));
function getlinkl2($url){
    while(true){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        $headers[] = 'User-Agent: Mozilla/5.0 (Linux; Android 7.0; 601SO) AppleWebKit/537.36 (KHTML, like Gecko) S-TOOL SOI TOOL 0765826980/537.365.12.60';
        $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
        $headers[] = 'Accept-Language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5';
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        if (curl_errno($ch)) {
            echo "\033[1;31m Vui Lòng Kiểm Tra Kết Nối Internet     \r"; sleep(1);
        } else if(file_get_contents("https://google.com")){
    	    $result = curl_exec($ch);
    	    curl_close($ch);
		    return ($result);
        } else {
    	    echo "\033[1;31m Vui Lòng Kiểm Tra Kết Nối VPN    \r"; sleep(1);
        }
    }
}
function duyvip($code) {
    $code = str_replace('md_loader(duyvippro):=='."", '', $code);
    $list = array('な','ぽ','ぼ','ね','ぐ','お','ぶ','ふ','す','あ','く','で','こ','ぢ','の','ぴ','ぬ','か','に','つ','ほ','と','が','せ','ご','う','い','じ','ち','も','ず','き','さ','む','は','ぷ','げ','づ','ゆ','ら','だ','り','や','け','び','べ','ぜ','ざ','ぎ','そ','ば','へ','よ','ぺ','ぱ','た','ひ','て','め','し','え','み','ぞ','ど','ま');
    $code = gzinflate($code);
    $code = str_replace($list,array('I','e','d','T','N','M','Y','S','v','q','W','O','Q','l','K','w','4','3','y','0','i','8','E','u','k','o','+','G','h','U','Z','7','m','D','A','J','6','s','H','/','f','L','1','C','p','=','g','X','a','x','B','5','V','j','b','r','t','c','9','R','2','z','F','P','n'),$code);
    $code = base64_decode($code);
    return $code;
}

function getlinkney($api_url){
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $api_url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_9_3) AppleWebKit/537.75.14 (KHTML, like Gecko) Version/7.0.3 Safari/E7FBAF");
curl_setopt($ch, CURLOPT_ENCODING, '');
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$h = curl_exec($ch); curl_close($ch);
return json_decode($h,true);
}
?>
