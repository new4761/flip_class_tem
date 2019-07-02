<?php
$codes = array(
       100 => array('กรุณาทำบททดสอบก่อนเรียนก่อน', 'กรุณาทำบททดสอบก่อนเรียนก่อน'),
       200 => array('ขออภัยบททดสอบบทเรียนนี้ยังไม่พร้อมใช้งาน', 'กรุณาติดต่ออาจารย์'),
       300 => array('คุณยังไม่สามารถทำแบบทดสอบนี้ได้', 'คุณยังไม่สามารถทำแบบทดสอบนี้ได้.'),
       400 => array('408 Request Timeout', 'Your browser failed to send a request in the time allowed by the server.'),
       500 => array('ไม่สามารถเข้าสู่หน้านี้ได้ค่ะ', 'ไม่สามารถเข้าสู่หน้านี้ได้ค่ะ.'),
       600 => array('502 Bad Gateway', 'The server received an invalid response from the upstream server while trying to fulfill the request.'),
       700 => array('504 Gateway Timeout', 'The upstream server failed to send a request in the time allowed by the server.'),
);

$title = $codes[$statuserrorspage][0];
$message = $codes[$statuserrorspage][1];
if ($title == false || strlen($statuserrorspage) != 3) {
       $message = 'Please supply a valid status code.';
}
echo '<head><title>'.$title.'</title></head>';
echo '<h1>'.$title.'</h1>
<p>'.$message.'</p>';
// Insert footer here
?>