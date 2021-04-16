<?php
//ini_set('max_execution_time', 0);
phpinfo();
/*	$mime_boundary = '==MIME_BOUNDARY_' . md5(time());
	$headers = "From: webadmin@chinfo.org\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "BCC: chinfo@thirdeyetechs.com,accounts@chinfo.org,br.sudheer@chinfo.org \r\n";
	$headers .= "Content-Type: text/html;";

$to ='welcometocif@chinfo.org'; // to mail id should give here
//$to ='chinfo@thirdeyetechs.com';
$subject='Application for Advanced Vedanta Immersive';
$message='<table width="700" border="0" cellpadding="0" cellspacing="1" bgcolor="#ececec">
  
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Event&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;Advanced Vedanta Immersive&nbsp;</font></td>
  </tr>
  
   <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Number Of Registrants&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;1&nbsp;</font></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Registrants Name&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;Lalita Gulati&nbsp;</font></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">E-mail&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;drlalitagulati@gmail.com&nbsp;</font></td>
  </tr> 
   <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Address&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;49/1359 Adarsh Nagar {M I G} C.H.S. WORLI MUMBAI PIN 400 030&nbsp;</font></td>
  </tr> 
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Country&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;India&nbsp;</font></td>
  </tr> 
   <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Age&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;78&nbsp;</font></td>
  </tr> 
   <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Gender&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;Female&nbsp;</font></td>
  </tr> 
   <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Phone&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;&nbsp;</font></td>
  </tr> 
   <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Mode of payment&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;offline&nbsp;</font></td>
  </tr>
   <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Special Instructions&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;Nil 
Except I may not be able to walk up the slope so I may be given a place at level  of lecture hall &nbsp;</font></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Are you a student of any of CIF Homestudy Courses&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;YES&nbsp;</font></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Vedantic text(s) studied till date &nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;Atmabodha , Tattvabodha , Upadeshsara , Tattwamasi , Mundak , Ishavasya , Taittareey , Kathopanishad , Ken , Dakshinamurty At present learnig PANCHADASHI &nbsp;</font></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Are you associated with any Spiritual organisation  &nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;Chinmaya Mission &nbsp;</font></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Profession&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;Doctor&nbsp;</font></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Have you studied the Adhyasa Bhashya prior to this &nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;NO&nbsp;</font></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">How would your describe your competency in Sanskrit&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;Can Read&nbsp;</font></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Intent for attending the programme &nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;Yes&nbsp;</font></td>
  </tr>
  <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Are you regular in your scriptural study & sadhana&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;YES&nbsp;</font></td>
  </tr>
   <tr>
    <td align="right" valign="middle">&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
  </tr>
  <tr>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">Amount&nbsp;&nbsp;&nbsp;</font></td>
    <td align="center" ><strong>:</strong></td>
    <td height="30" align="left" valign="middle" bgcolor="#E4E4E4" ><font size="2px" color="#666666">&nbsp;INR 15000&nbsp;</font></td>
  </tr> 
  <tr>
    <td align="right" valign="middle" >&nbsp;</td>
    <td >&nbsp;</td>
    <td align="left" valign="middle" >&nbsp;</td>
  </tr>
</table>';
//$a=mail($to,$subject,$message,$headers);
if($a)
{

echo "<script language='javascript'>alert('mail send successfully');</script>";
}
else
{
	echo 'Unable to send Mail';
//header('location:index.php');
}*/

?>