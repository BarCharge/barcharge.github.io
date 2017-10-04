<?php
  $fname = $_POST['fname'];
  $email = $_POST['email'];
  $phone = $_POST['phone_nr'];
  $payment_info = $_POST['payment_info'];
  $dorm = $_POST['dorm_rm_nr'];
  $subject = "BOOZE ORDER";
  $inquiry = $_POST['booze'];
//  $message = "FROM: " + $f_name + " " + $l_name + "\r\n" + "EMAIL: " + $email + "\r\n" + "COMPANY: " + $company + "\r\n" + "SUBJECT: " + $subject + "\r\n" + "MESSAGE: " + $inquiry;
echo $message = <<<MSG
  FROM: $fname \n
  EMAIL: $email \n
  PHONE NUMBER: $phone \n
  PAYMENT INFO: $payment_info \n
  DORM: $dorm \n
  SUBJECT: $subject \n
  MESSAGE: $inquiry
MSG;
  mail("da1123581347", $subject, $message);
  echo '<script>window.location = "youdidit.html"</script>';
 ?>
