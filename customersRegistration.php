<?php
$conn = new mysqli("localhost","washhit_admin","+nVIYc{5%We)","washhit");
   if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
    }

$name=$_POST['customerName'];
$phoneNumber= $_POST['phoneNumber'];
$email= $_POST['emailId'];
$location= $_POST['location'];
$messagetext=$_POST['message'];
$subject='contact-page';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:Booking@washhit.com';
 $result = mysqli_query($conn,"SELECT  *FROM customersRegistration");
    while ($row=mysqli_fetch_array($result)){
                         $id=$row[0];
$message = '<TABLE BORDER="0" WIDTH="100%">
 <TR>
  <TD WIDTH=460>
  <table width="460" border="1" cellspacing="1" cellpadding="1">
   <tr bordercolor="#FFFFFF">
     <td width="244" bgcolor="#000000"> <font color="#FFFFFF">user information </font></td>

   </tr>
   <tr>
     <td>  ID : </td>
     <td><strong>WI00</strong>'.$id.'</td>
   </tr>
   <tr>
     <td>  Name : </td>
     <td>'.$name.'</td>
   </tr>
   <tr>
     <td>  mobile : </td>
     <td>'.$phoneNumber.'</td>
   </tr>
   <tr>
     <td> Email : </td>
     <td>'.$email.'</td>
   </tr>
   <tr>
     <td><strong>location </strong>: </td>
     <td>'.$location.'</td>
   </tr>
 </table>

  <TD WIDTH="502">

     <table width="52" border="0" style="margin-top:-90px;" >
     </table>
     </TD>
  </TD>
 </TR>
</TABLE>


 ';
        
            }

 $sql = "INSERT INTO customersRegistration(customername,phonenumber,emailId,location,message)
     VALUES ('$name','$phoneNumber','$email','$location', '$messagetext')";
     if($conn->query($sql)){
         echo "success";
         if($conn->query($sql)){
         echo "success";
         if(mail("washhit2019@gmail.com", $subject, $message, $headers)){
             echo "success";
         }
         else {
             echo "not sent to admin";
         }
     }
     }
       else{
           echo "Error:" .$sql."<br>".$conn->error;
}

    $conn->close();

   
?>