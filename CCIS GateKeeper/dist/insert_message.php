<?php
require 'connection.php';

if(isset($_REQUEST['insertmsg']))
{
 
        $recipient = $_POST['recipient'];
        $sender = $_POST['sender'];
        $msg = $_POST['msg'];
        
        $myqry = "INSERT INTO `attnmessage`(`imsg_details`, `imsg_sender`, `id_no`, `imsg_Status`) 
                  VALUES ($msg, $sender, $recipient, 'A')";

        mysqli_query($con, $myqry);

        echo "<script>alert('Message Created!')</script>";


}
               

?>