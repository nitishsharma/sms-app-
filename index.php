<?php
$ch = curl_init();
$user="sharma.nitish2010@gmail.com:Spiderman201";
$senderID="9246591931";
$sdtime="2012-06-18 06:00:00";
$edtime="2012-06-19 06:00:00";


curl_setopt($ch,CURLOPT_URL,  "http://api.mVaayoo.com/mvaayooapi/MessageReply");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "user=$user&senderID=$senderID&sdtime=$sdtime&edtime=$edtime");
$buffer = curl_exec($ch);
if(empty ($buffer))
{ echo " buffer is empty "; }
else
{ echo $buffer; }
curl_close($ch);




//echo $_REQUEST['msgtxt'];
?>








<?php
$message=$_REQUEST[''];
$time=$_REQUEST[''];
$number=$_REQUEST[''];

//to receive data from the main longcode
$

?>











<?php



//this assumes that we have the date and time and message and all
//collect message carrying information
//match it's time with the rest of the data if time matched and day matched then check if greater than 3 entries or not
//if more than 3 then recommend other timings
//if yes then tell that the time is free it also suggests other times close to the time if they are free(only 5)
//build another request string api that asks for confirmation 
//this request marks the name of the person in the list with the time slot incrementing time to one more
//check wherever echo is done



  function verify_timeslot($message)
{//establish connection with the table
$dbc= mysql_connect($server,'root','nitish2012');
mysql_select_db("smsapp");
if (!$dbc)
  {
  die('Could not connect:'. $dbc->error);
  echo"failed to establish connection";//or whatever required to be sent back
  }

  $query="SELECT * FROM timeslottable  WHERE time = $message ";
$doquery=mysql_query($query);

$numrows=mysql_num_rows($doQuery);

  if($numrows<3)
  {$query="INSERT INTO timeslottable('number','timeslot','time') VALUES('$number','$message','$time')";
   mysql_query($query);
  send_confirmation_message();

  
  }
  else 
  {preg_match_all('/(\d)|(\w)/', $message, $matches);

$time = implode($matches[1]);
$day = implode($matches[2]);




  
 
$i=1;
$values=0;
$list=array();


while($values<5)
  {$query="SELECT * FROM timeslottable WHERE timeslot=($time+$i).$day ";


$doquery=mysql_query($query);
if(mysql_num_rows($doquery)<3);
{
  $values+=1;
  array_push($list,($time+$i).$day);


}

$query="SELECT * FROM timeslottable WHERE timeslot=($time-$i).$day ";

$doquery=mysql_query($query);
if(mysql_num_rows($doquery)<3);
{
  $values+=1;
  array_push($list,($time-$i).$day);

}

$i++;

  
  }

  $msg="the other suggestions are:-".'</br>';

  $i=0;
while($i<5)
{
$msg=$msg.$list[$i]."</br>";
}
send($msg,$number);
  //now the list element contains the required info


  mysql_close()
}







if($message)        //api part's sending string says verify then&& time in right format )
 verify_timeslot($message);

else
 send("invalid message",$number);//or send this somehow


function send($txtmsg,$number)
{
  $ch = curl_init();
$user="sharma.nitish2010@gmail.com:Spiderman201";
$receipientno=$number;
$senderID="TEST SMS";
$msgtxt=$txtmsg;
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
}



?>