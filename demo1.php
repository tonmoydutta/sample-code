 <?php
 //session_start();
 
 include ('config.php');
 $from='info@mayabiousacademy.com';

            $to='webtest@mayabious.com';
            

                $headers = 'MIME-Version: 1.0' . "\r\n";

                $headers.= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

                $headers.="FROM:".$from;

                $subject='Registration Details';
				$msg_body='<table style="padding:25px 0 15px 0" cellspacing="0" cellpadding="0" align="center" border="0" width="100%">
      <tbody><tr>
        <td valign="top" width="100%">
          <table style="min-width:600px;margin:0 auto" cellspacing="0" cellpadding="0" bgcolor="f2f2f2" align="center" border="0">
            <tbody>
              <tr>
                <td valign="top">
                  <table cellspacing="0" cellpadding="0" align="center" border="0" width="600">
                    <tbody><tr>
                      <td style="background-color:#008ccb;padding-top:10px">
                        <a href="http://mayabiousacademy.com/" target="_blank"><img src="http://mayabiousacademy.com/images/logo.png" style="text-align:center; padding:5px 0; display:block; margin:0 auto; max-width:250px; width:100%; height:auto;" /></a>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>

              <tr>
                <td valign="top">
                  <table cellspacing="0" cellpadding="0" align="center" border="0" width="600">
                    <tbody><tr>
                      <td style="background-color:#ffffff;color:#666666;font-size:15px;font-family:Arial,sans-serif;text-align:left;padding:15px 10px 20px 30px;line-height:20px" valign="top" >
                      <h2 style="font-size:20px; color:#171717;"><span style="font-weight:normal; font-size:17px;">Registration Information:</span></h2>
                      Dear <span>'.$querydatas['name'].'</span>, <br>This is your <b>registration confirmation</b>
                      
                      <br>
                      <br><b>Name:</b> '.$querydatas['name'].'
                      <br><b>Phone No:</b> '.$querydatas['phone'].'
                      <br><b>Email:</b> '.$querydatas['email'].'
                       <br><b>Course:</b> '.$querydatas['course'].'
					   <br>
					   <br>We shall contact you shortly to complete the process
					   
                      </td>
                      </tr>
                  </tbody></table>
                </td>
              </tr>
              <tr>
                <td style="padding-top:20px" valign="top" width="540">
                  <table cellspacing="0" cellpadding="0" align="center" border="0" width="540">
                    <tbody>
                      <tr>
                        <td style="background-color:#f2f2f2;color:#222222;font-size:12px;font-family:Arial,sans-serif;text-align:left;padding:0 10px 25px 0;line-height:25px;width:50px" valign="middle" align="left">
                          <span style="color:#a4a8ac;line-height:23px">PAYMENT ID</span>
                          <br>
                          <b style="font-size:20px">'.$txnid.'</b>
                        </td>
                        <td style="background-color:#f2f2f2;color:#222222;font-size:12px;font-family:Arial,sans-serif;text-align:center;padding:10px 0px 40px 0px;line-height:20px" valign="top" width="115">
                      </td></tr>
                    </tbody>
                  </table>
                </td>
              </tr>
              <tr>
                <td valign="top">
                  <table cellspacing="0" cellpadding="0" bgcolor="#f37c4a" align="center" border="0" width="540">
                    <tbody><tr>
                      <td width="15">
                      </td>
                      <td style="color:#ffffff;font-size:15px;font-family:Arial,sans-serif;text-align:left;padding:25px 10px 25px 15px;line-height:24px;" valign="top" width="370">
                        <span style="color:#ffffff; font-size:20px;font-weight:bold; text-transform:uppercase;">MAYABIOUS ACADEMY</span>
                        <br>
                        <span style="color:#ffffff">NP-36, Salt Lake City, Kolkata -700 102, West Bengal </span>
                        <br>
                        <!--<span style="color:#ffffff"><span class="aBn" data-term="goog_926916480" tabindex="0"> Sat, 6th May, 2017</span>-->
                      </td>
                      
                      <td width="15">
                    </td></tr>
                  </tbody></table>
                </td>
              </tr>

              <tr>
                <td valign="top">
                  <table style="border:1px solid #e1e5e8" cellspacing="0" cellpadding="0" bgcolor="#ffffff" align="center" border="0" width="538">
                    <tbody>

                    <tr>
                      <td valign="top" width="538">
                        <table cellspacing="0" cellpadding="0" align="center" border="0" width="538">
                          <tbody>
                            <tr>
                              <td style="width:30px">
                              </td><td style="width:265px;background-color:#ffffff;color:#666666;font-size:9px;font-family:Arial,sans-serif;text-align:left;line-height:20px" valign="top"></td>
                              <td style="background-color:#ffffff;color:#666666;font-size:9px;font-family:Arial,sans-serif;text-align:right;vertical-align:top" valign="top" width="213"></td>
                              <td style="width:30px">
                            </td></tr>
                            <tr>
                              <td style="width:30px">
                              </td><td style="width:265px;background-color:#ffffff;color:#666666;font-size:9px;font-family:Arial,sans-serif;text-align:left;line-height:20px" valign="top"></td>
                              <td style="background-color:#ffffff;color:#666666;font-size:9px;font-family:Arial,sans-serif;text-align:right;vertical-align:top" valign="top" width="213"></td>
                              <td style="width:30px">
                            </td></tr>
                            <tr>
                              <td style="width:30px">
                              </td><td style="width:265px;background-color:#ffffff;color:#666666;font-size:9px;font-family:Arial,sans-serif;text-align:left;line-height:20px" valign="top"></td>
                              <td style="background-color:#ffffff;color:#666666;font-size:9px;font-family:Arial,sans-serif;text-align:right;vertical-align:top" valign="top" width="213"></td>
                              <td style="width:30px">
                            </td></tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      
                    </tr>
                    
                    <tr>
                      <td valign="top" width="538">
                        <table cellspacing="0" cellpadding="0" align="center" border="0" width="538">
                          <tbody><tr>
                            <td style="width:30px">
                            </td><td style="width:265px;padding:15px 10px 0px 0;background-color:#ffffff;color:#666666;font-size:16px;font-family:Arial,sans-serif;text-align:left;" valign="top">
                              <strong>AMOUNT PAID</strong>
                            </td>
                            <td style="padding:15px 10px 15px 0;font-size:18px;font-weight:bold;font-family:Arial,sans-serif;text-align:right;background-color:#ffffff;color:#666666;" valign="top" width="213">Rs.500</td>
                            <td style="width:30px">
                          </td></tr>
                        </tbody></table>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
              <!--<tr>
                <td valign="top" width="540">
                  <table cellspacing="0" cellpadding="0" align="center" border="0" width="540">
                    <tbody><tr>
                      <td style="background-color:#efefef;color:#666666;font-size:12px;font-family:Arial,sans-serif;text-align:left;padding:10px 10px 10px 0px;line-height:20px" valign="top" width="202">
                        <b style="text-transform:uppercase;">Registration date &amp; TIME: </b>
                        Fri, 24 Feb, 2017. <span class="aBn" data-term="goog_926916481" tabindex="0"><span class="aQJ">1:50pm</span></span></td>
                      
                    </tr>
                  </tbody></table>
                </td>
              </tr>
              <tr>
                <td style="background-color:#ffffff" valign="top" width="540">
                  <table cellspacing="0" cellpadding="0" align="center" border="0" width="540">
                    <tbody><tr>
                      <td style="color:#666666;font-size:12px;font-family:Arial,sans-serif;text-align:justify;padding:25px 0 25px;line-height:20px" valign="top" width="540">
                        <span style="font-size:12px">
                          <b>Disclaimer</b>
                        </span>
                        <br>Please carry a print out of this email along with your original valid identification card. Entry will be refused if either of the documents are not available at the venue entrance.<br>
                        Tickets once booked cannot be exchanged, cancelled or refunded.</td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>-->
              <tr>
                <td valign="top">
                  <table cellspacing="0" cellpadding="0" bgcolor="008ccb" align="center" border="0" width="600">
                    <tbody><tr>
                      <td style="background-color:#008ccb;color:#fff;font-size:12px;font-family:Arial,sans-serif;text-align:left;padding:10px 10px 10px 20px" valign="top" width="260">For any further assistance<br><a href="mailto:info@save-animation.org" style="text-decoration:none;color:#fff;font-weight:bold" target="_blank">info@save-animation.org</a></td>
                      <td style="width:200px;vertical-align:top;background-color:#008ccb;text-align:right;padding:10px 0 15px 0">
                        <img src="https://ci3.googleusercontent.com/proxy/SyVYUNSQvbO4Vpaz4vI18sLBe2mw869TmO_vsG2pCeAKavB7aEfM4-d-6da_55SKmc90xda9joSORt4Lnq5JrfJ1u0uoUOkq0yze=s0-d-e1-ft#http://in.bmscdn.com/webin/emailer/helpline-phone.png" alt="helpline phone" class="CToWUd" height="20" border="0" width="18">
                      </td>
                      <td style="width:105px;vertical-align:top;padding:10px 0 10px 10px;text-align:left;background-color:#008ccb;color:#fff;line-height:14px;font-size:12px;font-weight:bold">
                        <a href="tel:+912261445050" style="text-decoration:none;color:#fff" target="_blank">8017088228</a>
                        <br>
                        <a href="tel:+912239895050" style="text-decoration:none;color:#fff" target="_blank">9874111500</a>
                      </td>
                    </tr>
                  </tbody></table>
                </td>
              </tr>
            </tbody>
          </table>
        </td>
      </tr>
    </tbody></table>';
	
	$body=stripslashes($msg_body);

                mail($to,$subject,$body,$headers); 
                
         

  
           	   
          $invalidshow = "Thank you for registration!
Please check your registered email address for the registration details. ";
         
           
		    
		   //session_unset();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Mayabious Academy</title>
	
    <?php include("include/csslink.php");?>
    
    
    <script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '877204159018765', {
em: 'insert_email_variable,'
});
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=877204159018765&ev=PageView&noscript=1"
/></noscript>
    
  </head>
  <body>

   
   
<?php include("include/header.php");?>




<div class="inner_wrapper">
	<div class="container" style="min-height:600px;">
	<div class="row">
    	<div class="col-sm-12">
        	<div>

        	<h2>CONGRATULATIONS</h2>
           
            <p><?php echo $invalidshow;?></p>
           
            <div class="clearfix"></div>
            </div>
        </div>

        
        
    <div class="clearfix"></div>    
    </div>
</div>
</div>



<?php include("include/footer.php");?>



<?php include("include/jslink.php");?>



   
    
    
    
  </body>
</html>