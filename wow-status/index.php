<meta http-equiv="refresh" content="30">
<?php 
include "config.php";
if (! $sock = @fsockopen("tcp://".$worldip, $worldport, $num, $error, 3))
echo '<table width=\"100%\" border=0 cellspacing=0 cellpadding=3>
  <tr>
    <td align=\"left\" valign=\"left\"><font color="#CCCCCC"><b>'.$worldname.'</td><td align=\"right\" valign=\"right\"><img src="offlineS.png"></td>

  </td></tr>'; 
else{ 
echo '<table width=\"100%\" border=0 cellspacing=0 cellpadding=3>
  <tr>
    <td align=\"left\" valign=\"left\"><font color="#00FF00"><b>'.$worldname.'</td><td align=\"right\" valign=\"right\"><img src="onlineS.png"></td>
  </td></tr>'; 
fclose($sock);
} 
if (! $sock = @fsockopen("tcp://".$loginip, $loginport, $num, $error, 3)) 
echo '<table width=\"100%\" border=0 cellspacing=0 cellpadding=3>
  <tr>
    <td align=\"left\" valign=\"middle\"></td>
  <td align=\"left\" valign=\"left\"><font color="#CCCCCC"><b>'.$loginname.'</td><td align=\"right\" valign=\"right\"><img src="offlineS.png"></td>
'; 
else{ 
echo '<table width=\"100%\" border=0 cellspacing=0 cellpadding=3>
  <tr>
    <td align=\"left\" valign=\"left\"><font color="#00FF00"><b>'.$loginname.'</td><td align=\"right\" valign=\"right\"><img src="onlineS.png"></td>

  </tr></table>'; 
fclose($sock);
}
?>    