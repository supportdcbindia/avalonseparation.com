<?php

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_ALL);

// echo "<pre>";print_r($_POST);
// echo "<pre>";print_r($_REQUEST);
// exit;

$myfile = fopen("logs.txt", "a+") or die("Unable to open file!");

$logData = [
  "date_time" => date("Y-m-d H:i:s"),
  "server" => $_SERVER,
  "post" => $_POST
];

fwrite($myfile, "\n\n==============================\n");
fwrite($myfile, "NEW REQUEST LOG\n");
fwrite($myfile, "==============================\n");

fwrite($myfile, print_r($logData, true));

fwrite($myfile, "\n==============================\n");

fclose($myfile);

function send_request($data) {

  $curl = curl_init();
  curl_setopt_array($curl, array(
    CURLOPT_URL => 'https://dcbindia.in/akismetcurl/akismet_check.php',
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => '',
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => 'POST',
    CURLOPT_POSTFIELDS => $data,
  ));
  $response = json_decode(curl_exec($curl));
  curl_close($curl);
  return $response;
}

$name = htmlspecialchars(stripslashes(trim($_POST['name'])));
$company = htmlspecialchars(stripslashes(trim($_POST['company'])));
$email = htmlspecialchars(stripslashes(trim($_POST['email'])));
$message = htmlspecialchars(stripslashes(trim($_POST['message'])));
$phone = htmlspecialchars(stripslashes(trim($_POST['phone'])));
$city = htmlspecialchars(stripslashes(trim($_POST['city'])));

$ip = $_SERVER['REMOTE_ADDR'];

// $_POST['form_type'] = "inquiry";

// post request to server
$curlArr = array_merge($_POST, $_SERVER);
$curlArr['sitename'] = $_SERVER['HTTP_HOST'];
$curlArr['save'] = false;
$response = send_request($curlArr);
if ($response->result) {
  $curlArr = array_merge($_POST, $_SERVER);
  $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
  $curlArr['save'] = true;
  $curlArr['bcoz'] = "API CONDITION FAIL";
  $curlArr['status'] = "FAIL";
  $response = send_request($curlArr);
  echo json_encode(array("success" => false));
} else {
  if (isset($name) && trim($name) !== '' && isset($email) && trim($email) !== '' && isset($phone) && trim($phone) !== '' && isset($city) && trim($city) !== '') {
    if (1) {
      if (!preg_match("/^[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $email)) {
        //echo "ERROR junk email detact";
        $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
        $curlArr['save'] = true;
        $curlArr['bcoz'] = "JUNK DETACT";
        $curlArr['status'] = "FAIL";
        $response = send_request($curlArr);
        echo json_encode(array("success" => false));
      } else {
        preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $message, $msg_match);
        preg_match_all('/[\._a-zA-Z0-9-]+@[\._a-zA-Z0-9-]+/i', $message, $msg_match_email);
        $junk_word = "#\b(DarrellRomLL|MADARCHOD|fuck|Fuck|Hey|Revolution|Medico|Postura|Posture|Corrector|50%|OFF|FREE|Worldwide|Shipping|Shipping|medicopostura|online|Thank|CAREDOGBEST|Website|Re-designing|SEO|optimization|promotion|marketing|Marketing|Search|Optimization|advertisements|advertisement|advertising|adversement|Advertisement|graphic|traffic|advertisers|advertise|Advertising|campaigns|Domain|Domains|cheap|dollar|poker|Websites|redesigning|WordPress|newspapers|Eric|sunglasses|Girls|masturbating|porn|Nude|Sex|Naked|Women|website|fantastic|sorry|Google|doc|ADELIAPUTRI|blog|Petr|Velkov|Moscow|Cryptaxbot|http|https|errors|Joe|Celine|Bhoshdiwalo|Bhoshdi|Bhoshd|Bhosh|Madarchod|Madar|madarchod|madar|bhoshdiwalo|bhoshdi|bhoshd|bhosh)\b#";
        preg_match_all($junk_word, $message, $matches_words);
        //print_r($msg_match_email[0]);
        //echo count($msg_match_email[0]);exit;
        if (count($msg_match[0]) > 0 || count($msg_match_email[0]) > 0 || count($matches_words[0]) > 0) {
          //echo "ERROR junk msg";
          $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
          $curlArr['save'] = true;
          $curlArr['bcoz'] = "JUNK DETACT";
          $curlArr['status'] = "FAIL";
          $response = send_request($curlArr);
          echo json_encode(array("success" => false));
        } else {

          $apiKey = "api-B2642BEDD55B47D8BB7EEC84F29641E8"; // ⚠️ Replace with new API key

          $emailArr = array("dcbindia@dcbindia.in", "dcb@dcbindia.in");

          $toEmails = [];
          $bccEmails = [];

          if (in_array($email, $emailArr)) {
            $toEmails[] = "dcbrainsinquiry@gmail.com";
          } else {
            $toEmails[] = "sales@avalonseparation.com";
            $toEmails[] = "avalonseparation@gmail.com";
            $bccEmails[] = "dcbrainsinquiry@gmail.com";
          }


          $subject = "New Enquiry From Avalon Separation - Landing Page";
          $message_body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
                  <html>
                  <head>
                  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
                  <meta name="generator" content="PSPad editor, www.pspad.com">
                  <title></title>
                  <style type="text/css">span.go{display:none} .go{display:none}</style>
                  </head>
                  <body>
                    <div style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;background:#ffffff;border:10px solid #cccccc;width:600px;padding:20px;margin: 0px auto;">
                    <table border="1" cellpadding="5" style="width:500px;font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-collapse:collapse;border:1px solid #cccccc;border-color:#cccccc">
                      <tbody>
                        <tr>
                          <td colspan="2" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-bottom:3px solid #cccccc"><b>Enquiry Details</b></td>
                        </tr>
                        
                        <tr>
                          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Name:</td>
                          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $name . '</b></td>
                        </tr>
                       <tr>
                          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Company:</td>
                          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $company . '</b></td>
                        </tr>
                        <tr>
                          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Email:</td>
                          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $email . '</b></td>
                        </tr>
                       
                        <tr>
                          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Mobile:</td>
                          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $phone . '</b></td>
                        </tr>
                        
                        <tr>
                          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">City:</td>
                          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $city . '</b></td>
                        </tr>

                        <tr>
                          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Message:</td>
                          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;line-height:17px"><b>' . $message . '</b></td>
                        </tr>
                        <tr>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  </body>
                </html>';

          if ($_POST['form_type'] == "catalogue") {
            $subject = "New Catalogue Enquiry From Avalon Separation - Landing Page";

            $message_body = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
                  <html>
                  <head>
                  <meta http-equiv="content-type" content="text/html; charset=windows-1250">
                  <meta name="generator" content="PSPad editor, www.pspad.com">
                  <title></title>
                  <style type="text/css">span.go{display:none} .go{display:none}</style>
                  </head>
                  <body>
                    <div style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;background:#ffffff;border:10px solid #cccccc;width:600px;padding:20px;margin: 0px auto;">
                    <table border="1" cellpadding="5" style="width:500px;font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-collapse:collapse;border:1px solid #cccccc;border-color:#cccccc">
                      <tbody>
                        <tr>
                          <td colspan="2" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000;border-bottom:3px solid #cccccc"><b>Enquiry Details</b></td>
                        </tr>
                        
                        <tr>
                          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Name:</td>
                          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $name . '</b></td>
                        </tr>
                       
                        <tr>
                          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Email:</td>
                          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $email . '</b></td>
                        </tr>
                       
                        <tr>
                          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">Mobile:</td>
                          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $phone . '</b></td>
                        </tr>
                        
                        <tr>
                          <td align="right" style="font-family:arial;font-size:12px;font-weight:normal;color:#000000">City:</td>
                          <td style="font-family:arial;font-size:12px;font-weight:normal;color:#000000"><b>' . $city . '</b></td>
                        </tr>

                        <tr>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  </body>
                </html>';
          }

          $data = [
            "api_key" => $apiKey,
            "to" => $toEmails,
            "sender" => "sales@avalonseparation.com", // Must be verified in SMTP2GO
            "subject" => $subject,
            "html_body" => $message_body,
            "text_body" => strip_tags($message_body),
            "reply_to" => $email
          ];


          if (!empty($bccEmails)) {
            $data["bcc"] = $bccEmails;
          }

          $ch = curl_init();

          curl_setopt($ch, CURLOPT_URL, "https://api.smtp2go.com/v3/email/send");
          curl_setopt($ch, CURLOPT_POST, true);
          curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
          curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/json"
          ]);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
          curl_setopt($ch, CURLOPT_TIMEOUT, 20);

          $response = curl_exec($ch);
          $result = json_decode($response, true);
          if (isset($result['data']['succeeded']) && $result['data']['succeeded'] > 0) {
            echo json_encode(array("success" => true));
          } else {
            echo json_encode(array("success" => false));
          }
        }
      }
    } else {
      $curlArr = array_merge($_POST, $_SERVER);
      $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
      $curlArr['save'] = true;
      $curlArr['bcoz'] = "CAPTCHA MISMATCH";
      $curlArr['status'] = "FAIL";
      $response = send_request($curlArr);
      echo json_encode(array("success" => false));
    }
  } else {
    $curlArr = array_merge($_POST, $_SERVER);
    $curlArr['sitename'] = $_SERVER['HTTP_HOST'];
    $curlArr['save'] = true;
    $curlArr['bcoz'] = "REQUIRED DETAIL MISSING";
    $curlArr['status'] = "FAIL";
    $response = send_request($curlArr);
    echo json_encode(array("success" => false));
  }
}
