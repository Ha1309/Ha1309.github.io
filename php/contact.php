<?php
$field_name = $_POST['cf_name'];
$field_email = $_POST['cf_email'];
$field_subject = $_POST['cf_subject'];
$field_message = $_POST['cf_message'];

$mail_to = 'ha@minhhaduong.com';
$subject = 'Message from a site visitor '.$field_name": ".$field_subject;

$body_message = 'From: '.$field_name."\n";
$body_message .= 'E-mail: '.$field_email."\n";
$body_message .= 'Subject: '.$field_subject."\n";
$body_message .= 'Message: '.$field_message;

$headers = 'From: '.$field_email."\r\n";
$headers .= 'Reply-To: '.$field_email."\r\n";

// Defining mail() function and assigning it to a variable $mail_status, which is used below to check whether the mail has been sent or not
$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
    <script language="javascript" type="text/javascript">
        alert('Thank you for the message. I will contact you shortly.');         // Print a message
        window.location = 'http://minhhaduong.com/';         // Redirect to some page of the site. You can also specify full URL, e.g. http://template-help.com

    </script>
    <?php
}
else { ?>
        <script language="javascript" type="text/javascript">
            alert('Message failed. Please, send an email to ha (at) URL or reach out via social networks');
            window.location = 'http://minhhaduong.com/';

        </script>
        <?php
}
?>
