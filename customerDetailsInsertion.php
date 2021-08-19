<?php
//define("DB_SERVER", "localhost");
//define("DB_USER", "root");
//define("DB_PASSWORD", "");
//define("DB_DATABASE", "washhit");
session_start();
$conn = new mysqli("localhost","washhit_admin","+nVIYc{5%We)","washhit");
   // Check connection
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }

$name=$_POST['name'];
$phoneNumber= $_POST['phonenumber'];
$email= $_POST['email'];
$datepicker= $_POST['datepicker'];
$time=$_POST['time'];
$select= $_POST['select'];
$houseNumber= $_POST['housenumber'];
$address=$_POST['address'];
$landmark= $_POST['landmark'];
$pincode= $_POST['pincode'];
$subject=$_POST['datepicker'];
$date = str_replace('/', '-', $datepicker );
$newDate = date("Y-m-d", strtotime($date));   
$headersadmin = 'MIME-Version: 1.0' . "\r\n";
$headersadmin .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headersadmin .= 'From:Bookings@washhit.com' . "\r\n";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:Booking@washhit.com';
 $authKey = "281348AYZyS7R5FLv5d36e06e";
         $senderId = "WASHIT";
         $_SESSION['phoneNumber']=$phoneNumber;
        $mobileNumber=$_SESSION['phoneNumber'];
          $resultone = mysqli_query($conn,"SELECT  *FROM customers");
         
//$message ="name:'.$name.',date:'.$datepicker.',HouseNumber:'.$houseNumber.',Address:'.$address.'";
// Compose a simple HTML email message
                
                 
                    $result = mysqli_query($conn,"SELECT  *FROM customers");
                 
                    while ($row=mysqli_fetch_array($result)){
                         $id=$row[0];
                         $messageadminsms ="Userid: WI00$id  Email: $email  TimeSlot: $time Date: $datepicker  Address: $landmark $houseNumber Mobile: $phoneNumber";
                              $messagesms ="orderid: WI00$id  Email: $email  TimeSlot: $time Date: $datepicker  Address: $landmark $houseNumber Mobile: $phoneNumber";
$message = '  <div style="margin: 0;
             padding: 0;
             background-color: #F7F7F7;"> <div style="background: linear-gradient(to bottom, #AE5CF3 0%, #1283E5 100%);
                padding: 37px 0 88px 0;">
        <div style="max-width: 1140px;
                    width: 100%;
                    padding-right: 15px;
                    padding-left: 15px;
                    margin-right: auto;
                    margin-left: auto;">
            <a href="http://projects.ideeotech.com/WashhIt/" target="_blank">
                <img src="http://projects.ideeotech.com/WashhIt/assets/images/footerLogo.svg" alt="footerLogo">
            </a>
        </div>
    </div>
    <div style="max-width: 1140px;
                    width: 100%;
                    margin-right: auto;
                    margin-left: auto;
                    background-color: #fff;
                    border: 1px solid #ccc;
                    margin-top: -50px;
                    border-radius: 5px;
                    box-shadow: 0px 10px 18px rgba(0,0,0,0.2);">
        <h3 style="padding: 46px 60px 52px 60px;
                       font-size: 26px;
                       border-bottom: 1px solid #ccc">Your Booking Details</h3>
        <div style="padding: 40px 60px 0 60px;">
            <div style="width: 100%;">
                <div style="width: 100%;
                           padding-bottom: 45px;
                            display: flex;">
                    <div style="width: 50%;">
                        <p style="font-size: 14px;
                                  color: #838383;">Name</p>
                        <p style="font-size: 16px;
                                  color: #1283E5;">'.$name.'</p>
                    </div>
                    <div style="width: 50%;">
                        <p style="font-size: 14px;
                                  color: #838383;">Phone Number</p>
                        <p style="font-size: 16px;
                                  color: #1283E5;">'.$phoneNumber.'</p>
                    </div>
                </div>
                <div style="width: 100%;
                           padding-bottom: 45px;
                            display: flex;">
                    <div style="width: 50%;">
                        <p style="font-size: 14px;
                                  color: #838383;">Date</p>
                        <p style="font-size: 16px;
                                  color: #1283E5;">'.$datepicker.'</p>
                    </div>
                    <div style="width: 50%;">
                        <p style="font-size: 14px;
                                  color: #838383;">Email ID</p>
                        <p style="font-size: 16px;
                                  color: #1283E5;">'.$email.'</p>
                    </div>
                </div>
                <div style="width: 100%;
                           padding-bottom: 45px;
                            display: flex;">
                    <div style="width: 50%;">
                        <p style="font-size: 14px;
                                  color: #838383;">Time Slot</p>
                        <p style="font-size: 16px;
                                  color: #1283E5;">'.$time.'</p>
                    </div>
                    <div style="width: 50%;">
                        <p style="font-size: 14px;
                                  color: #838383;">Address</p>
                        <p style="font-size: 16px;
                                  color: #1283E5;">'.$houseNumber.'</p>
                    </div>
                </div>
                <div style="width: 100%;
                           padding-bottom: 45px;
                            display: flex;">
                    <div style="width: 50%;">
                        <p style="font-size: 14px;
                                  color: #838383;">Select Area</p>
                        <p style="font-size: 16px;
                                  color: #1283E5;">'.$select.'</p>
                    </div>
                    <div style="width: 50%;">
                        <p style="font-size: 14px;
                                  color: #838383;">House Number / Apartment name</p>
                        <p style="font-size: 16px;
                                  color: #1283E5;">'.$houseNumber.'</p>
                    </div>
                </div>
                <div style="width: 100%;
                            display: flex;">
                    <div style="width: 50%;">
                        <p style="font-size: 14px;
                                  color: #838383;">Landmark</p>
                        <p style="font-size: 16px;
                                  color: #1283E5;
                                  padding-bottom: 45px;">'.$landmark.'</p>
                        <p style="font-size: 14px;
                                  color: #838383;">Pincode</p>
                        <p style="font-size: 16px;
                                  color: #1283E5;">'.$pincode.'</p>
                    </div>
                    <div style="width: 50%;">
                        <img src="http://projects.ideeotech.com/WashhIt/assets/images/mailImg.svg" alt="mailImg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div style="max-width: 1140px;
                    width: 100%;
                    margin-right: auto;
                    margin-left: auto;">

        <div style="width: 100%;
                    padding: 51px 0 65px 0;
                    display: flex;">
            <div style="width: 70%;">
                <p style="font-size: 14px;
                          color: #838383;">Contact Us</p>
                <p style="font-size: 16px;">
                    <a href="tel:+91 916 403 5555" style="text-decoration: none;
                                                          color: #1283E5">+91 916 403 5555</a> | 
                    <a href="tel:+91 916 404 5555" style="text-decoration: none;
                                                          color: #1283E5">+91 916 404 5555</a>
                </p>
            </div>
            <div style="width: 30%;">
                <p style="font-size: 14px;
                          color: #838383;">Follow Us</p>
                <div style="display: flex;">
                    <a href="https://www.facebook.com/washhit" target="_blank">
                        <img src="http://projects.ideeotech.com/WashhIt/assets/images/facebookMail.svg" alt="facebookMail">
                    </a>
                    <a href="https://in.pinterest.com/washhit/" target="_blank" style="margin-left: 10px;">
                        <img src="http://projects.ideeotech.com/WashhIt/assets/images/pinterestMail.svg" alt="pinterestMail">
                    </a>
                    <a href="https://twitter.com/washhit" target="_blank" style="margin: 0 10px";>
                        <img src="http://projects.ideeotech.com/WashhIt/assets/images/twitterMail.svg" alt="twitterMail">
                    </a>
                    <a href="https://www.instagram.com/washhitofficial/" target="_blank">
                        <img src="http://projects.ideeotech.com/WashhIt/assets/images/instagramMail.svg" alt="instagramMail">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div style="background-color: #1283E5;
                padding: 25px 0px;">
    <div style="max-width: 1140px;
                    width: 100%;
                    margin-right: auto;
                    margin-left: auto;
                color: #fff;
                display: flex;
                justify-content: space-between;
                font-size: 18px;">
        <div>
        <a href="mailto:support@washhit.com" style="text-decoration: none;
                                                    color: #fff;
                                                    padding-right: 50px;">support@washhit.com  </a> 
        <span> | </span>
        <a href="mailto:Info@washhit.com" style="text-decoration: none;
                                                          color: #fff;
                                                 padding-left: 50px;">Info@washhit.com</a>
            </div>
        <a href="www.washhit.com" style="text-decoration: none;
                                        color: #fff;padding-right: 50px;">www.washhit.com</a>
        </div>
    </div>
    </div>


 ';
                    }

 $sql = "INSERT INTO customers(name,phonenumber,email,datepicker,time,select_area,housenumber,address,landmark,pincode)
     VALUES ('$name','$phoneNumber','$email','$newDate', '$time', '$select','$houseNumber', '$address','$landmark','$pincode')";
     if($conn->query($sql)){
         echo "success";
          if(mail($email, $subject, $message, $headersadmin)){
             echo "success";
         }
         
         else {
             echo "not sent to user";
         }
        
         
          $postData = array(
        'authkey' => $authKey,
        'mobiles' => "9614045555",
        'message' => $messageadminsms,
        'sender' => $senderId,
);
     
          $url="https://api.msg91.com/api/sendhttp.php?authkey=281348AYZyS7R5FLv5d36e06e";
          $curl = curl_init($url);
          curl_setopt_array($curl, array(
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS =>$postData,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
        ));

        $response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
          $postData = array(
        'authkey' => $authKey,
        'mobiles' => $mobileNumber,
        'message' => $messagesms,
        'sender' => $senderId,
);
     
          $urlnew="https://api.msg91.com/api/sendhttp.php?authkey=281348AYZyS7R5FLv5d36e06e";
          $curlnew = curl_init($urlnew);
          curl_setopt_array($curlnew, array(
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS =>$postData,
          CURLOPT_SSL_VERIFYHOST => 0,
          CURLOPT_SSL_VERIFYPEER => 0,
        ));

        $response = curl_exec($curlnew);
$errnew = curl_error($curlnew);

curl_close($curlnew);

if ($errnew) {
  echo "cURL Error #:" . $errnew;
} else {
  echo $responsenew;
}
         if(mail("washhit2019@gmail.com", $subject, $message, $headers)){
             echo "success";
         }
         else {
             echo "not sent to admin";
         }
     }
       else{
           echo "Error:" .$sql."<br>".$conn->error;
}

//if( !empty($name) || !empty($phoneNumber) || !empty($email) || !empty($datepicker) || !empty($time) || !empty($select) ||!empty($houseNumber) !empty($address) || !empty($landmark) || !empty($pincode))
//{



//
//$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD, DB_DATABASE);
//     if(mysqli_connect_error()){
//     die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
//     }
//
//
//    else{

    $conn->close();

   //}
//}
?>