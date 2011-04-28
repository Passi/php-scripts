<meta http-equiv="refresh" content="30">
<?php 
include "config.php";
mysql_connect($dbhost, $dbuser, $dbpass) or die(mysql_error());
mysql_select_db($dbname) or die(mysql_error());
$sqls = mysql_query("select name,address,port from realmlist");
while($sql = mysql_fetch_array($sqls)) {
if (! $sock = @fsockopen($sql["address"], $sql["port"], $num, $error, 3))
echo '<table width=\"100%\" border=0 cellspacing=0 cellpadding=3>
  <tr>
    <td align=\"left\" valign=\"left\"><font color="#'.$coffline.'"><b>'.$sql["name"].'</td><td align=\"right\" valign=\"right\"><img src="'.$ioffline.'"></td>

  </td></tr>'; 
else{ 
echo '<table width=\"100%\" border=0 cellspacing=0 cellpadding=3>
  <tr>
    <td align=\"left\" valign=\"left\"><font color="#'.$conline.'"><b>'.$sql["name"].'</td><td align=\"right\" valign=\"right\"><img src="'.$ionline.'"></td>
  </td></tr>'; 
fclose($sock);
} 
}
if (! $sock = @fsockopen($ip, $port, $num, $error, 3)) 
echo '<table width=\"100%\" border=0 cellspacing=0 cellpadding=3>
  <tr>
    <td align=\"left\" valign=\"middle\"></td>
  <td align=\"left\" valign=\"left\"><font color="#'.$coffline.'"><b>Login</td><td align=\"right\" valign=\"right\"><img src="'.$ioffline.'"></td>
'; 
else{ 
echo '<table width=\"100%\" border=0 cellspacing=0 cellpadding=3>
  <tr>
    <td align=\"left\" valign=\"left\"><font color="#'.$conline.'"><b>Login</td><td align=\"right\" valign=\"right\"><img src="'.$ionline.'"></td>

  </tr></table>'; 
fclose($sock);
}
?>    