																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																																<?php
if(substr($validity,-1) == "d"){
$validity = "Masa aktif:".substr($validity,0,-1)."Hari";
}else if(substr($validity,-1) == "h"){
$validity = "Masa aktif:".substr($validity,0,-1)."Jam";}
if(substr($timelimit,-1) == "d" & strlen($timelimit) >3){
$timelimit = "Durasi:".((substr($timelimit,0,-1)*7) + substr($timelimit, 2,1))."Hari";
}else if(substr($timelimit,-1) == "d"){
$timelimit = "Durasi:".substr($timelimit,0,-1)."Hari";
}else if(substr($timelimit,-1) == "h"){
$timelimit = "Durasi:".substr($timelimit,0,-1)."Jam";
}else if(substr($timelimit,-1) == "w"){
$timelimit = "Durasi:".(substr($timelimit,0,-1)*7)."Hari";}
if($getprice == "3000"){ $color = "#01579B";} 
elseif($getprice == "1500"){ $color = "#BA68C8";}
elseif($getprice == "2000"){ $color = "#01579B";}
elseif($getprice == "4000"){ $color = "#800000";}
elseif($getprice == "12000"){ $color = "#006400";}
elseif($getprice == "22000"){ $color = "#ff4500";}
elseif($getprice == "20000"){ $color = "#4B0082";}
elseif($getprice == "35000"){ $color = "#4B0082";}
else{ $color = "#DC143C";}?>
<style type="text/css">
.rotate {
vertical-align: center;
text-align: center;
font-size: 20px;}.rotate span {
-ms-writing-mode: tb-rl;
-webkit-writing-mode: vertical-rl;
writing-mode: vertical-rl;
transform: rotate(180deg);
white-space: nowrap;}
<!--mks-mulai-->
</style>
<!--mks-border-mulai-->
<table class="voucher" align="center" width="450px" style="border: 4px solid <?php echo $color;?>">
<!--mks-border-akhir-->	
<tbody>
<!--mks-price-->	
<tr>
<td style="font-weight: bold; border-right: 6px dotted white; color:#FFFFFF;background-color:<?php echo $color;?>; -webkit-print-color-adjust: exact;" class="rotate" rowspan="6"><span><?php echo $price;?></span></td>
<!--td style="font-weight: bold; border-left: 6px dotted white; color:#271c19;background-color:<?php echo $color;?>; -webkit-print-color-adjust: exact;" class="rotate" rowspan="6"><span></span></td-->	
<!--mks-price-akhir-->	
<!--mks-logo-->	
<td style="font-weight: bold" colspan="3"><p align="center"> <img src="<?php echo $logo;?>" alt="logo" style="height: 81px;width: 400px;"></td>
<!--mks-logo-akhir-->	
	
<!--mks-voucher-->
	<tr>
<td style="padding:0px;border-bottom:2px solid;text-align:center;font-weight:bold;font-size:16px;color:#111">Kode Voucher <?= $num; ?></div>		
<?php if($usermode == "vc"){?> 
<div style="padding:0px;border-bottom:2px solid;text-align:center;font-weight:bold;font-size:30px;color:<?php echo $color ?>"></div>
<div style="padding:0px;border-bottom:2px solid;text-align:center;font-weight:bold;font-size:30px;color:<?php echo $color ?>"><?php echo $username;?></div>
<?php }elseif($usermode == "up"){?>
<div style="padding:0px;border-bottom:2px solid;text-align:center;font-weight:bold;font-size:30px;color:<?php echo $color ?>"></div>		
<div style="padding:0px;border-bottom:2px solid;text-align:center;font-weight:bold;font-size:30px;color:<?php echo $color ?>"><?php echo "User: ".$username."<br>Pass: ".$password;?></div>
<?php }?>
<!--mks-voucher-akhir-->	
<!--mks-limitasi-mulai-->	
</div>
<div style="font-size:12px;font-weight:bold;color:#111">
<?php echo $validity;?> <<>> Login:->http://<?php echo $dnsname;?>
	</div>
  <div style="font-weight: bold; font-size: 15px; color:#af0412; padding-left: 0px;">KERTAS VOUCHER HARUS DI SIMPAN ,<br>SAMPAI MASA AKTIF HABIS !!!</div>
<div style="font-weight: bold; font-size: 10px; color:#111; padding-left: 0px;">Harga Sudah Termasuk PPN 11% </div>
<tr>
  <td style="text-align: left; font-size: 12px; font-weight:bold; black solid; color:<?php echo $color ?>">PT.Media Lintas Jaringan <<>> <?php echo $comment;?></div></td></tr>
<!--mks-voucher-->	
</table> 
<!--mks-cs-akhir-->
<!--mks-selesai-->	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        	        