<?php 

    	if(isset($_POST['create_msg']))
    	{
    		$msg_details = $_POST['msg_details'];
    		$msg_sender = $_POST['msg_sender'];
    		$msg_id_no = $_POST['msg_id_no'];

    		
    		$res = mysqli_query($con, "SELECT id_no FROM user_information WHERE id_no='$msg_id_no'");
                $row = mysqli_fetch_array($res);

                if (mysqli_num_rows($res) > 0) 
                { 
                    $msql_ins = "INSERT INTO `attnmessage`(`imsg_details`, `imsg_sender`, `id_no`,`imsg_Status`) VALUES ('$msg_details','$msg_sender','$msg_id_no','A')";
					mysqli_query($con, $msql_ins); 

                    echo "<script>alert('Success! A mssage was created for $msg_id_no');</script>";
                }
                else if(mysqli_num_rows($res) == null)
                { 
                   
                	echo "<script>alert('Failed! Cannot create message for $msg_id_no');</script>";
                } 

    	}

    	?>