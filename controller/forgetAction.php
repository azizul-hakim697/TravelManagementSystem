<?php 
            

           $username="";
           $userErrMsg="";

           $password="";
           $passErrMsg="";

            if($_SERVER['REQUEST_METHOD']==='POST')
            {

                function test_input($data)
                {
                    $data=htmlspecialchars($data);
                    return $data;
                    
                }

                $username = test_input($_POST['username']);
                $username = test_input($_POST['password']);

                $message = "";

                if(empty($username)){
                    $userErrMsg .= "Empty username";
                    $message .="br";
                
                }
                
                if(empty($password)){
                    $userErrMsg .= "Empty password";
                    $message .="br";
                
                }
                else{
                     echo "$message";
                }
            }
            incude('../model/forgetConnection.php');
            ?>



                
           
 