<?php
include('connect.php');
    if (isset($_POST['signUp'])){
$errors = array();
      //this id for generate user code
      function genUserCode(){
        $str="AB1CDE2FG3HI4JK5LM6NO7PQ8RS9TU0VQXYZ".time();
        $str= str_split($str,1);
        $l = count($str);
        $user_code='';
        for($i=0;$i<8;$i++){
        $tn = rand(0,$l);
        $user_code.=$str[$tn];
        }
        
        return $user_code;
        
        }
        $id=genUserCode();
        
        $fname=mysqli_real_escape_string($conn,$_POST['firstName']);
        $lname=mysqli_real_escape_string($conn,$_POST['lastName']);
        $email=mysqli_real_escape_string($conn,$_POST['inputEmail']);
        $mob=$_POST['mob'];
        $refler=$_POST['reflerCode'];
        $password=$_POST['password'];
          // first check the database to make sure 
          // a user does not already exist with the same username and/or email
          $user_check_query = "SELECT * FROM login WHERE Id='$id'  LIMIT 1";
          $result = mysqli_query($conn, $user_check_query);
          $user = mysqli_fetch_assoc($result);
          $user_check_query2 = "SELECT * FROM login WHERE Email='$email'  LIMIT 1";
          $result2 = mysqli_query($conn, $user_check_query2);
          $user2 = mysqli_fetch_assoc($result2);
        
          if ($user['Id'] === $id) {
            array_push($errors, "Id already exists");
            
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Id already exists")';  
            echo '</script>';
            echo"<script>window.location.href='signUp.php';</script>";

            
          }
          if ($user2['Email'] === $email) {
            array_push($errors, "email already exists");
            
            echo '<script type ="text/JavaScript">';  
            echo 'alert("email already exists")';  
            echo '</script>';
            echo"<script>window.location.href='signUp.php';</script>";

            
          }
        if (count($errors) == 0)
        {
            $hashpassword=password_hash($password,PASSWORD_DEFAULT);
            $sql="INSERT INTO login(Id,sponsorId,doj,Fname,Lname,Email,Mob,Password) VALUES 
            ('$id','$refler',current_timestamp(),'$fname','$lname','$email','$mob','$hashpassword');";
            $result=mysqli_query($conn,$sql);
            if($result){
              $html="<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
              <html xmlns='http://www.w3.org/1999/xhtml'>
              <head>
                <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
                <meta name='viewport' content='width=device-width' />
                <title>Airmail Welcome</title>
                <style type='text/css'>
              
                * {
                  margin:0;
                  padding:0;
                  font-family: Helvetica, Arial, sans-serif;
                }
              
                img {
                  max-width: 100%;
                  outline: none;
                  text-decoration: none;
                  -ms-interpolation-mode: bicubic;
                }
              
                .image-fix {
                  display:block;
                }
              
                .collapse {
                  margin:0;
                  padding:0;
                }
              
                body {
                  -webkit-font-smoothing:antialiased;
                  -webkit-text-size-adjust:none;
                  width: 100%!important;
                  height: 100%;
                  text-align: center;
                  color: #747474;
                  background-color: #ffffff;
                }
              
                h1,h2,h3,h4,h5,h6 {
                  font-family: Helvetica, Arial, sans-serif;
                  line-height: 1.1;
                }
              
                h1 small, h2 small, h3 small, h4 small, h5 small, h6 small {
                  font-size: 60%;
                  line-height: 0;
                  text-transform: none;
                }
              
                h1 {
                  font-weight:200;
                  font-size: 44px;
                }
              
                h2 {
                  font-weight:200;
                  font-size: 32px;
                  margin-bottom: 14px;
                }
              
                h3 {
                  font-weight:500;
                  font-size: 27px;
                }
              
                h4 {
                  font-weight:500;
                  font-size: 23px;
                }
              
                h5 {
                  font-weight:900;
                  font-size: 17px;
                }
              
                h6 {
                  font-weight:900;
                  font-size: 14px;
                  text-transform: uppercase;
                }
              
                .collapse {
                  margin:0!important;
                }
              
                td, div {
                  font-family: Helvetica, Arial, sans-serif;
                  text-align: center;
                }
              
                p, ul {
                  margin-bottom: 10px;
                  font-weight: normal;
                  font-size:14px;
                  line-height:1.6;
                }
              
                p.lead {
                  font-size:17px;
                }
              
                p.last {
                  margin-bottom:0px;
                }
              
                ul li {
                  margin-left:5px;
                  list-style-position: inside;
                }
              
                a {
                  color: #747474;
                  text-decoration: none;
                }
              
                a img {
                  border: none;
                }
              
                .head-wrap {
                  width: 100%;
                  margin: 0 auto;
                  background-color: #f9f8f8;
                  border-bottom: 1px solid #d8d8d8;
                }
              
                .head-wrap * {
                  margin: 0;
                  padding: 0;
                }
              
                .header-background {
                  background: repeat-x url(https://www.filepicker.io/api/file/wUGKTIOZTDqV2oJx5NCh) left bottom;
                }
              
                .header {
                  height: 42px;
                }
              
                .header .content {
                  padding: 0;
                }
              
                .header .brand {
                  font-size: 16px;
                  line-height: 42px;
                  font-weight: bold;
                }
              
                .header .brand a {
                  color: #464646;
                }
              
                .body-wrap {
                  width: 505px;
                  margin: 0 auto;
                  background-color: #ffffff;
                }
              
                .soapbox .soapbox-title {
                  font-size: 30px;
                  color: #464646;
                  padding-top: 25px;
                  padding-bottom: 28px;
                }
              
                .content .status-container.single .status-padding {
                  width: 80px;
                }
              
                .content .status {
                  width: 90%;
                }
              
                .content .status-container.single .status {
                  width: 300px;
                }
              
                .status {
                  border-collapse: collapse;
                  margin-left: 15px;
                  color: #656565;
                }
              
                .status .status-cell {
                  border: 1px solid #b3b3b3;
                  height: 50px;
                }
              
                .status .status-cell.success,
                .status .status-cell.active {
                  height: 65px;
                }
              
                .status .status-cell.success {
                  background: #f2ffeb;
                  color: #51da42;
                }
              
                .status .status-cell.success .status-title {
                  font-size: 15px;
                }
              
                .status .status-cell.active {
                  background: #fffde0;
                  width: 135px;
                }
              
                .status .status-title {
                  font-size: 16px;
                  font-weight: bold;
                  line-height: 23px;
                }
              
                .status .status-image {
                  vertical-align: text-bottom;
                }
              
                .body .body-padded,
                .body .body-padding {
                  padding-top: 34px;
                }
              
                .body .body-padding {
                  width: 41px;
                }
              
                .body-padded,
                .body-title {
                  text-align: left;
                }
              
                .body .body-title {
                  font-weight: bold;
                  font-size: 17px;
                  color: #464646;
                }
              
                .body .body-text .body-text-cell {
                  text-align: left;
                  font-size: 14px;
                  line-height: 1.6;
                  padding: 9px 0 17px;
                }
              
                .body .body-signature-block .body-signature-cell {
                  padding: 25px 0 30px;
                  text-align: left;
                }
              
                .body .body-signature {
                  font-family: 'Comic Sans MS', Textile, cursive;
                  font-weight: bold;
                }
              
                .footer-wrap {
                  width: 100%;
                  margin: 0 auto;
                  clear: both !important;
                  background-color: #e5e5e5;
                  border-top: 1px solid #b3b3b3;
                  font-size: 12px;
                  color: #656565;
                  line-height: 30px;
                }
              
                .footer-wrap .container {
                  padding: 14px 0;
                }
              
                .footer-wrap .container .content {
                  padding: 0;
                }
              
                .footer-wrap .container .footer-lead {
                  font-size: 14px;
                }
              
                .footer-wrap .container .footer-lead a {
                  font-size: 14px;
                  font-weight: bold;
                  color: #535353;
                }
              
                .footer-wrap .container a {
                  font-size: 12px;
                  color: #656565;
                }
              
                .footer-wrap .container a.last {
                  margin-right: 0;
                }
              
                .footer-wrap .footer-group {
                  display: inline-block;
                }
              
                .container {
                  display: block !important;
                  max-width: 505px !important;
                  clear: both !important;
                }
              
                .content {
                  padding: 0;
                  max-width: 505px;
                  margin: 0 auto;
                  display: block;
                }
              
                .content table {
                  width: 100%;
                }
              
              
                .clear {
                  display: block;
                  clear: both;
                }
              
                table.full-width-gmail-android {
                  width: 100% !important;
                }
              
                </style>
              
                <style type='text/css' media='only screen'>
              
                @media only screen {
              
                  table[class*='head-wrap'],
                  table[class*='body-wrap'],
                  table[class*='footer-wrap'] {
                    width: 100% !important;
                  }
              
                  td[class*='container'] {
                    margin: 0 auto !important;
                  }
              
                }
              
                @media only screen and (max-width: 505px) {
              
                  *[class*='w320'] {
                    width: 320px !important;
                  }
              
                  table[class='status'] td[class*='status-cell'],
                  table[class='status'] td[class*='status-cell'].active {
                    display: block !important;
                    width: auto !important;
                  }
              
                  table[class='status-container single'] table[class='status'] {
                    width: 270px !important;
                    margin-left: 0;
                  }
              
                  table[class='status'] td[class*='status-cell'],
                  table[class='status'] td[class*='status-cell'].active,
                  table[class='status'] td[class*='status-cell'] [class*='status-title'] {
                    line-height: 65px !important;
                    font-size: 18px !important;
                  }
              
                  table[class='status-container single'] table[class='status'] td[class*='status-cell'],
                  table[class='status-container single'] table[class='status'] td[class*='status-cell'].active,
                  table[class='status-container single'] table[class='status'] td[class*='status-cell'] [class*='status-title'] {
                    line-height: 51px !important;
                  }
              
                  table[class='status'] td[class*='status-cell'].active [class*='status-title'] {
                    display: inline !important;
                  }
              
                }
                </style>
              </head>
              
              <body bgcolor='#ffffff'>
              
                <div align='center'>
                  <table class='head-wrap w320 full-width-gmail-android' bgcolor='#f9f8f8' cellpadding='0' cellspacing='0' border='0' width='100%'>
                    <tr>
                      <td background='https://www.filepicker.io/api/file/UOesoVZTFObSHCgUDygC' bgcolor='#ffffff' width='100%' height='8' valign='top'>
                        <!--[if gte mso 9]>
                        <v:rect xmlns:v='urn:schemas-microsoft-com:vml' fill='true' stroke='false' style='mso-width-percent:1000;height:8px;'>
                          <v:fill type='tile' src='https://www.filepicker.io/api/file/UOesoVZTFObSHCgUDygC' color='#ffffff' />
                          <v:textbox inset='0,0,0,0'>
                        <![endif]-->
                        <div height='8'>
                        </div>
                        <!--[if gte mso 9]>
                          </v:textbox>
                        </v:rect>
                        <![endif]-->
                      </td>
                    </tr>
                    <tr class='header-background'>
                      <td class='header container' align='center'>
                        <div class='content'>
                          <span class='brand'>
                            <a href='#'>
                              Binary Tech
                            </a>
                          </span>
                        </div>
                      </td>
                    </tr>
                  </table>
              
                  <table class='body-wrap w320'>
                    <tr>
                      <td></td>
                      <td class='container'>
                        <div class='content'>
                          <table cellspacing='0'>
                            <tr>
                              <td>
                                <table class='soapbox'>
                                  <tr>
                                    <td class='soapbox-title'>Welcome to Binary Tech!</td>
                                  </tr>
                                </table>
                                <table class='status-container single'>
                                  <tr>
                                    <td class='status-padding'></td>
                                    <td>
                                      <table class='status' bgcolor='#fffeea' cellspacing='0'>
                                        <tr>
                                          <td class='status-cell'>
                                          <b>Username</b> : $email
                                          </td>
                                        </tr>
                                        <tr>
                                          <td class='status-cell'>
                                            <b>Password </b>: $password
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                    <td class='status-padding'></td>
                                  </tr>
                                </table>
                                <table class='body'>
                                  <tr>
                                    <td class='body-padding'></td>
                                    <td class='body-padded'>
                                      <div class='body-title'>Hey $fname , thanks for signing up</div>
                                      <table class='body-text'>
                                        <tr>
                                          <td class='body-text-cell'>
                                            We're really excited for you to join our community!.Enjoy free course , E-books & many projects of technology.
                                          </td>
                                        </tr>
                                      </table>
                                      <div style='text-align:left;'><!--[if mso]>
                                        <v:roundrect xmlns:v='urn:schemas-microsoft-com:vml' xmlns:w='urn:schemas-microsoft-com:office:word' href='#' style='height:38px;v-text-anchor:middle;width:190px;' arcsize='11%' strokecolor='#407429' fill='t'>
                                          <v:fill type='tile' src='https://www.filepicker.io/api/file/N8GiNGsmT6mK6ORk00S7' color='#41CC00' />
                                          <w:anchorlock/>
                                          <center style='color:#ffffff;font-family:sans-serif;font-size:17px;font-weight:bold;'>Come on back</center>
                                        </v:roundrect>
                                      <![endif]--><a href='http://binarytech.epizy.com/signIn.php'
                                      style='background-color:#41CC00;background-image:url(https://www.filepicker.io/api/file/N8GiNGsmT6mK6ORk00S7);border:1px solid #407429;border-radius:4px;color:#ffffff;display:inline-block;font-family:sans-serif;font-size:17px;font-weight:bold;text-shadow: -1px -1px #47A54B;line-height:38px;text-align:center;text-decoration:none;width:190px;-webkit-text-size-adjust:none;mso-hide:all;'>Login Now!</a></div>
                                      <table class='body-signature-block'>
                                        <tr>
                                          <td class='body-signature-cell'>
                                            <p>Thanks so much,</p>
                                            <p class='body-signature'>Binary Tech</p>
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                    <td class='body-padding'></td>
                                  </tr>
                                </table>
                              </td>
                            </tr>
                          </table>
                        </div>
                      </td>
                      <td></td>
                    </tr>
                  </table>
              
                  <table class='footer-wrap w320 full-width-gmail-android' bgcolor='#e5e5e5'>
                    <tr>
                      <td class='container'>
                        <div class='content footer-lead'>
                          <a href='#'><b>Get in touch</b></a> if you have any questions or feedback
                        </div>
                      </td>
                    </tr>
                  </table>
                  <table class='footer-wrap w320 full-width-gmail-android' bgcolor='#e5e5e5'>
                    <tr>
                      <td class='container'>
                        <div class='content'>
                          <a href='#'>Contact Us</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                          <span class='footer-group'>
                            <a href='#'>Facebook</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href='#'>Twitter</a>&nbsp;&nbsp;|&nbsp;&nbsp;
                            <a href='#'>Support</a>
                          </span>
                        </div>
                      </td>
                    </tr>
                  </table>
                </div>
              
              </body>
              </html>";
              include('smtp/PHPMailerAutoload.php');
              $mail=new PHPMailer(true);
              $mail->isSMTP();
              $mail->Host="smtp.gmail.com";
              $mail->Port=587;
              $mail->SMTPSecure="tls";
              $mail->SMTPAuth=true;
              $mail->Username="digitaluniverse.india@gmail.com";
              $mail->Password="Easytron123";
              $mail->SetFrom("digitaluniverse.india@gmail.com");
              $mail->addAddress($email);
              $mail->IsHTML(true);
              $mail->Subject="BTC Welcome Letter";
              $mail->Body=$html;
              $mail->SMTPOptions=array('ssl'=>array(
                  'verify_peer'=>false,
                  'verify_peer_name'=>false,
                  'allow_self_signed'=>false
              ));
              if($mail->send()){
                  //echo "Mail send";
              }else{
                  //echo "Error occur";
              }
                echo '<script type ="text/JavaScript">';  
                echo 'alert("You are successfully Register")';  
                echo '</script>';
                echo"<script>window.location.href='index.php';</script>";
             
            }
            else{
                echo '<script type ="text/JavaScript">';  
                echo 'alert("ERROR -found something wrong")';  
                echo '</script>';
                echo"<script>window.location.href='signUp.php';</script>";
                
            }
        }

    }

?>