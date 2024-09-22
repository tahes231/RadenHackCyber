<?php
date_default_timezone_set("UTC");

const
title = "usdpick",
versi = "1.0.0",
host = "https://usdpick.io/",
refflink = "https://usdpick.io?ref=EzyGdTZ5O5",
youtube = "https://youtu.be/pH-N-vx5iZY";

if( PHP_OS_FAMILY == "Linux" ){
	define("n","\n");define("d","\033[0m");define("m","\033[1;31m");define("h","\033[1;32m");define("k","\033[1;33m");define("b","\033[1;34m");define("u","\033[1;35m");define("c","\033[1;36m");define("p","\033[1;37m");define("mp","\033[101m\033[1;37m");define("hp","\033[102m\033[1;30m");define("kp","\033[103m\033[1;37m");define("bp","\033[104m\033[1;37m");define("up","\033[105m\033[1;37m");define("cp","\033[106m\033[1;37m");define("pm","\033[107m\033[1;31m");define("ph","\033[107m\033[1;32m");define("pk","\033[107m\033[1;33m");define("pb","\033[107m\033[1;34m");define("pu","\033[107m\033[1;35m");define("pc","\033[107m\033[1;36m");
}else{
	define("n","\n");define("d","\033[0m");define("m","");define("h","");define("k","");define("b","");define("u","");define("c","");define("p","");define("mp","");define("hp","");define("kp","");define("bp","");define("up","");define("cp","");define("pm","");define("ph","");define("pk","");define("pb","");define("pu","");define("pc","");
}

class Display {
	static function Menu($no, $title){print h."---[".p."$no".h."] ".k."$title\n";}
	static function Error($except){return m."---[".p."!".m."] ".p.$except;}
	static function Sukses($msg){return h."---[".p."✓".h."] ".p.$msg.n;}
	static function Cetak($label, $msg = "[No Content]"){$len = 9;$lenstr = $len-strlen($label);print h."[".p.$label.h.str_repeat(" ",$lenstr)."]─> ".p.$msg.n;}
	static function Isi($msg){return m."╭[".p."Input ".$msg.m."]".n.m."╰> ".h;}
	static function Title($activitas){print bp.str_pad(strtoupper($activitas),44, " ", STR_PAD_BOTH).d.n;}
	static function authBan($title, $str){$title_len_s = 8;$strlen_s = 19;$title_len = $title_len_s - strlen($title);$strlen = $strlen_s - strlen($str);return bp." ".$title.str_repeat(" ",$title_len).d.pb." ".$str.str_repeat(" ",$strlen).d.n;}
	static function Ban(){system("clear");
		print n.pm.str_pad(strtoupper("V ".versi),44, " ", STR_PAD_BOTH).d.n;
		print c."──────────────┬".str_repeat("─",29).n;
		print m."<?╔╦╗╔═╗╔═╗".p."╦  ".$line."│".self::authBan("Author", "@fat9ght");
		print m."   ║ ║ ║║ ".p."║║  ".$line."│".self::authBan("Channel", "t.me/MaksaJoin");
		print m."   ╩ ╚═╝╚".p."═╝╩═╝".$line."│".self::authBan("Youtube", "youtube.com/@iewil");
		print m."  ╔═╗╦ ".p."╦╔═╗   ".$line."│".mp.str_pad("!--- 2022 REBORN >", 29, " ", STR_PAD_BOTH).d.n;
		print m."  ╠═╝╠".p."═╣╠═╝   ".$line."│".up.str_pad("@PetapaGenit2, @Zhy_08", 29, " ", STR_PAD_BOTH).d.n;
		print m."  ╩  ".p."╩ ╩╩  ?> ".$line."│".up.str_pad("@IPeop, @MetalFrogs", 29, " ", STR_PAD_BOTH).d.n;
		print c."──────────────┴".str_repeat("─",29).n;
		print hp.str_pad(strtoupper(title),44, " ", STR_PAD_BOTH).d.n;
		print c.str_repeat('─',44).n;
		if(update > null){
			print m."---[".p."^".m."]".h." Update sc Detect\n";
			print m."---[".p."version ".m."] ".p.server['data']['version'].n;
			print m."---[".p."download".m."] ".p.server['data']['link'].n;
			print c.str_repeat('─',44).n;
		}
	}
	static function check($activitas){print k."--[".p."?".k."] ".p."check $activitas";}
	static function detected($activitas){print "\r                                   \r";print h."[".p."√".h."] $activitas detected";sleep(2);print "\r                              \r";}
	static function undetected($activitas){print "\r                              \r";print m."[".p."!".m."] $activitas not detected";sleep(2);print "\r                              \r";}
}
class Functions {
	public $configFile = "config.json";
	public function Clear(){if( PHP_OS_FAMILY == "Linux" ){system('clear');}else{system('cls');}} 
	public function Curl($u, $h = 0, $p = 0,$cookie = 0, $lewat = 0) {while(true){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $u);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_COOKIE,TRUE);if($cookie) {curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");}if($p) {curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $p);}if($h) {curl_setopt($ch, CURLOPT_HTTPHEADER, $h);}curl_setopt($ch, CURLOPT_HEADER, true);$r = curl_exec($ch);if($lewat){return 0;}$c = curl_getinfo($ch);if(!$c) return "Curl Error : ".curl_error($ch); else{$hd = substr($r, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$bd = substr($r, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);if(!$bd){print m."Check your Connection!";sleep(2);print "\r                         \r";continue;}return array($hd,$bd);}}}
	public function Auth($w){$lo[] = $w."L".p."oading....";$lo[] = p."L".$w."o".p."ading....";$lo[] = p."Lo".$w."a".p."ding....";$lo[] = p."Loa".$w."d".p."ing....";$lo[] = p."Load".$w."i".p."ng....";$lo[] = p."Loadi".$w."n".p."g....";$lo[] = p."Loadin".$w."g".p."....";$lo[] = p."Loading".$w.".".p."...";$lo[] = p."Loading.".$w.".".p."..";$lo[] = p."Loading..".$w.".".p.".";return $lo;}
	public function Tmr($tmr){$col = [b,c,d,h,k,m,u];$sym = [' ─ ',' / ',' │ ',' \ ',];$timr = time()+$tmr+rand(5,10);$a = 0;while(true){$a +=1;$x = $col[array_rand($col)];$nic = $this->Auth($x);$res=$timr-time();if($res < 1) {break;}print "         ".$x.$sym[$a % 4].p.date('H',$res).$x.":".p.date('i',$res).$x.":".p.date('s',$res)." ".$nic[$a % count($nic)]."\r";usleep(100000);}print "\r                                   \r";}
	public function Line(){return c.str_repeat('─',44).n;}
	public function Save($nama_data){if(file_exists($nama_data)){$data = file_get_contents($nama_data);}else{$data = readline(Display::Isi($nama_data));echo "\n";file_put_contents($nama_data,$data);}return $data;}
	public function setConfig($key){if(!file_exists($this->configFile)){$config = [];}else{$config = json_decode(file_get_contents($this->configFile),1);}if(isset($config[$key])){return $config[$key];}else{$data = readline(Display::isi($key));print n;$config[$key] = $data;file_put_contents($this->configFile,json_encode($config,JSON_PRETTY_PRINT));return $data;}}
	public function getConfig($key){if(!file_exists($this->configFile)){$config = [];}else{$config = json_decode(file_get_contents($this->configFile),1);}return $config[$key];}
	public function removeConfig($key){$config = json_decode(file_get_contents($this->configFile),1);unset($config[$key]);file_put_contents($this->configFile,json_encode($config,JSON_PRETTY_PRINT));}
	public function HiddenConfig($key, $data){if(!file_exists($this->configFile)){$config = [];}else{$config = json_decode(file_get_contents($this->configFile),1);}if(!$config[$key]){$config[$key] = $data;file_put_contents($this->configFile,json_encode($config,JSON_PRETTY_PRINT));}return $config[$key];}
	public function view($youtube){$tanggal = date("dmy");if(!file_exists($this->configFile)){$config = [];}else{$config = json_decode(file_get_contents($this->configFile),1);}$view = $this->getConfig('view');if($tanggal == $view){return 0;}else{$config['view'] = $tanggal;system("termux-open-url ".$youtube);file_put_contents($this->configFile,json_encode($config,JSON_PRETTY_PRINT));}}
	public function temporary($newdata,$data=0){if(!$data){$data = [];}return array_merge($data,$newdata);}
	public function Server(){$url = "https://iewilbot.my.id/List/server.php";$param = "title=".title;$r = file_get_contents($url."?".$param);return json_decode($r,1);}
	public function getData($r) {
		$data['cloudflare']=(preg_match('/Just a moment.../',$r))? true:false;
		$data['firewall']=(preg_match('/Firewall/',$r))? true:false;
		$data['locked']=(preg_match('/Locked/',$r))? true:false;
		
		//timer
		$tmr1 = explode('-',explode('var wait = ',$r)[1])[0];
		$tmr2 = explode('-',explode('let wait = ',$r)[1])[0];
		$tmr3 = explode(';',explode("var time =",$r)[1])[0];
		$tmr4 = explode(';',explode("var timer =",$r)[1])[0];
		if($tmr1) {
			$data['tmr'] = $tmr1;
		}
		elseif($tmr2) {
			$data['tmr'] = $tmr2;
		}
		elseif($tmr3) {
			$data['tmr'] = $tmr3;
		}
		elseif($tmr4) {
			$data['tmr'] = $tmr4;
		}
		else{
			$data['tmr'] = "";
		}
		
		//limit
		preg_match('/(\d{1,})\/(\d{1,})/',$r,$limit);
		if($limit[2]){
			$data['sisa'] = $limit[1];
			$data['limit'] = $limit[2];
		}
		return $data;
	}
}
class Captcha {
	private $url,$key,$provider, $function;
	public function __construct(){
		$this->function = new Functions();
		if(empty($this->function->getConfig('type'))){
			print "Select Apikey\n";
			Display::Menu(1, "Multibot");
			Display::Menu(2, "Xevil");
            print "Please input number only\n";
            $this->function->setConfig("type");
			print $this->function->Line();
		}
		if($this->function->getConfig("type") == 1){
            $this->url = 'http://api.multibot.in/';
			Display::Cetak("Register","http://api.multibot.in");
			$this->key = $this->function->setConfig("multibot_apikey");
			$this->provider = $this->function->HiddenConfig("provider", "Multibot");
        }
        else{
            $this->url = 'https://sctg.xyz/';
			Display::Cetak("Register","t.me/Xevil_check_bot?start=1204538927");
			$this->key = $this->function->setConfig("xevil_apikey")."|SOFTID1204538927";
			$this->provider = $this->function->HiddenConfig("provider", "Xevil");
        }
	}
	private function in_api($content, $method, $header = 0){$param = "key=".$this->key."&json=1&".$content;if($method == "GET")return json_decode(file_get_contents($this->url.'in.php?'.$param),1);$opts['http']['method'] = $method;if($header) $opts['http']['header'] = $header;$opts['http']['content'] = $param;return file_get_contents($this->url.'in.php', false, stream_context_create($opts));}
	private function res_api($api_id){$params = "?key=".$this->key."&action=get&id=".$api_id."&json=1";return json_decode(file_get_contents($this->url."res.php".$params),1);}
	private function solvingProgress($xr,$tmr, $cap){if($xr < 50){$wr=h;}elseif($xr >= 50 && $xr < 80){$wr=k;}else{$wr=m;}$xwr = [$wr,p,$wr,p];$sym = [' ─ ',' / ',' │ ',' \ ',];$a = 0;for($i=$tmr*4;$i>0;$i--){print $xwr[$a % 4]." Bypass $cap $xr%".$sym[$a % 4]." \r";usleep(100000);if($xr < 99)$xr+=1;$a++;}return $xr;}
	private function getResult($data ,$method, $header = 0){$cap = $this->filter(explode('&',explode("method=",$data)[1])[0]);$get_res = $this->in_api($data ,$method, $header);if(is_array($get_res)){$get_in = $get_res;}else{$get_in = json_decode($get_res,1);}if(!$get_in["status"]){$msg = $get_in["request"];if($msg){print Display::Error($msg.n);}elseif($get_res){print Display::Error($get_res.n);}else{print Display::Error("in_api @".$this->provider." something wrong\n");}return 0;}$a = 0;while(true){echo " Bypass $cap $a% |   \r";$get_res = $this->res_api($get_in["request"]);if($get_res["request"] == "CAPCHA_NOT_READY"){$ran = rand(5,10);$a+=$ran;if($a>99)$a=99;echo " Bypass $cap $a% ─ \r";$a = $this->solvingProgress($a,5, $cap);continue;}if($get_res["status"]){echo " Bypass $cap 100%";sleep(1);print "\r                              \r";print h."[".p."√".h."] Bypass $cap success";sleep(2);print "\r                              \r";return $get_res["request"];}print m."[".p."!".m."] Bypass $cap failed";sleep(2);print "\r                              \r";print Display::Error($cap." @".$this->provider." Error\n");return 0;}}
	private function filter($method){if($method == "userrecaptcha")return "RecaptchaV2";if($method == "hcaptcha")return "Hcaptcha";if($method == "turnstile")return "Turnstile";if($method == "universal" || $method == "base64")return "Ocr";if($method == "antibot")return "Antibot";if($method == "authkong")return "Authkong";if($method == "teaserfast")return "Teaserfast";}
	
	public function getBalance(){$res =  json_decode(file_get_contents($this->url."res.php?action=userinfo&key=".$this->key),1);return $res["balance"];}
	public function RecaptchaV2($sitekey, $pageurl){$data = http_build_query(["method" => "userrecaptcha","sitekey" => $sitekey,"pageurl" => $pageurl]);return $this->getResult($data, "GET");}
	public function Hcaptcha($sitekey, $pageurl ){$data = http_build_query(["method" => "hcaptcha","sitekey" => $sitekey,"pageurl" => $pageurl]);return $this->getResult($data, "GET");}
	public function Turnstile($sitekey, $pageurl){$data = http_build_query(["method" => "turnstile","sitekey" => $sitekey,"pageurl" => $pageurl]);return $this->getResult($data, "GET");}
	public function Authkong($sitekey, $pageurl){$data = http_build_query(["method" => "authkong","sitekey" => $sitekey,"pageurl" => $pageurl]);return $this->getResult($data, "GET");}
	public function Ocr($img){if($this->provider == "Xevil"){$data = "method=base64&body=".$img;}else{$data = http_build_query(["method" => "universal","body" => $img]);}return $this->getResult($data, "POST");}
	public function AntiBot($source){$main = explode('"',explode('data:image/png;base64,',explode('Bot links',$source)[1])[1])[0];if(!$main)return 0;if($this->provider == "Xevil"){$data = "method=antibot&main=$main";}else{$data["method"] = "antibot";$data["main"] = $main;}$src = explode('rel=\"',$source);foreach($src as $x => $sour){if($x == 0)continue;$no = explode('\"',$sour)[0];if($this->provider == "Xevil"){$img = explode('\"',explode('data:image/png;base64,',$sour)[1])[0];$data .= "&$no=$img";}else{$img = explode('\"',explode('src=\"',$sour)[1])[0];$data[$no] = $img;}}if($this->provider == "Xevil"){$res = $this->getResult($data, "POST");}else{$data = http_build_query($data);$ua = "Content-type: application/x-www-form-urlencoded";$res = $this->getResult($data, "POST", $ua);}if($res)return "+".str_replace(",","+",$res);return 0;}
	public function Teaserfast($main, $small){if($this->provider == "Multibot"){return ["error"=> true, "msg" => "not support key!"];}$data = http_build_query(["method" => "teaserfast","main_photo" => $main,"task" => $small]);$ua = "Content-type: application/x-www-form-urlencoded";return $this->getResult($data, "POST",$ua);}
}
class Bot extends Functions{
	public $cookie,$uagent;
	public function __construct(){
		
		$this->server = $this->Server();
		if($this->server['data']['version'] == versi){
			define("update", false);
		}else{
			define("server", $this->server);
			define("update", true);
		}
		Display::Ban();
		cookie:
		if(empty($this->getConfig('cookie'))){
			Display::Cetak("Register",refflink);
			print $this->Line();
		}
		
		$this->cookie = $this->setConfig("cookie");
		$this->uagent = $this->setConfig("user_agent");
		$this->captcha = new Captcha();
		$this->view(youtube);
		
		Display::Ban();
		
		$r = $this->Session();
		if(!$r['name']){
			$this->removeConfig("cookie");
			print(Display::Error("Cookie Expired\n"));
			print $this->line();
			goto cookie;
		}
		Display::Cetak("Username",$r['name']);
		Display::Cetak("Balance",$this->Balance());
		Display::Cetak("Bal_Api",$this->captcha->getBalance());
		print $this->line();
		
		if($this->HourlyFaucet()){
			$this->removeConfig("cookie");
			goto cookie;
		}
	}
	
	public function headers(){
		$h[] = "Host: ".parse_url(host)['host'];
		$h[] = "content-type: application/json";
		$h[] = "cookie: ".$this->cookie;
		$h[] = "X-Requested-With: XMLHttpRequest";
		$h[] = "user-agent: ".$this->uagent;
		return $h;
	}																			
	
	public function Session(){
		$r = json_decode($this->curl(host.'api/auth/session',$this->headers())[1],1);
		return $r['user'];
	}
	public function Balance(){
		$r = json_decode($this->curl(host.'api/account/tokens/usdt',$this->headers())[1],1);
		return $r['data']['balance']/1000000000000000000;
	}
	public function getTime($last_claim){
		if($last_claim){
			$last_claim = strtotime($last_claim);
			$now = time();
			$next_claim = strtotime("+1 hours", $last_claim);
			if($next_claim > $now){
				$tmr = $next_claim-$now;
				$this->Tmr($tmr);
			}
		}
	}
	public function HourlyFaucet(){
		while(true){
			$r = $this->curl(host.'faucet',$this->headers());
			$js = explode('"',explode('static/chunks/app/faucet/',$r[1])[1])[0];
			$js = file_get_contents(host.'_next/static/chunks/app/faucet/'.$js);
			$sitekeyRv = explode('"',explode('sitekey:"', $js)[1])[0];
			
			$r = json_decode($this->curl(host.'api/faucet',$this->headers())[1],1);
			$last_claim = $r['data']['last_claimed_at'];
			$this->getTime($last_claim);
			
			if($sitekeyRv){
				$cap = $this->captcha->RecaptchaV2($sitekeyRv, host.'faucet');
				if(!$cap)continue;
				$data = '{"reCaptchaCode":"'.$cap.'"}';
			}else{
				print Display::Error("Sitekey Error\n");
				continue;
			}
			$r = json_decode($this->curl(host.'api/faucet',$this->headers(),$data)[1],1);
			
			if($r["data"]["claimed_amount"]){
				print Display::Sukses($r["data"]["claimed_amount"]/1000000000000000000);
				Display::Cetak("Balance",$this->Balance());
				Display::Cetak("Bal_Api",$this->captcha->getBalance());
				print $this->line();
			}else{
				print_r($r);
				print $this->line();
				exit;
			}
			$this->Tmr(3600);
		}
	}
}

error_reporting(0);
new Bot();