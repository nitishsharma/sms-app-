
<?php


$stack=array();
array_push($stack, "apple", "raspberry");
print_r($stack);
$blah= $stack[0].'<br/>'.$stack[1];


echo $blah;

/*$ch = curl_init();
$user="sharma.nitish2010@gmail.com:Spiderman201";
$receipientno="7838923266";
$senderID="TEST SMS";
$msgtxt="this is test message , test";
curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageCompose");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&receipientno=$receipientno&msgtxt=$msgtxt");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer;

echo $msgtxt; }
curl_close($ch);
*/

?>

