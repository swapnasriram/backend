<?php

require('connection.php');

if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM 'registered_users' WHERE 'username'='' OR 'email'='$_POST[email]'";
    $resultmysqli_query($con,$user_exist_query);
}
    if($result)
    
        if(mysqli_num_rows($result)>0)
       {
     $result_fetch=mysli_fetch_assoc($result);
       }
       if($result_fetch['username']==$_POST['username'])
       echo"
        <script>
        alert('$result_fetch[username]-Username already taken');
        window.loaction.href='index.php';
        </script>
       }
       else
       {
        $query "SELECT * FROM `registered_users` WHERE 1'(`full_name`,`email`,`password`) VALUES('$_POST[fullname]','$_POST[username]','$_POST[password]')";
        if(mysqli_query($con,$query))
       }
    
       
     else{
        echo"
        <script>alert('cannot run query');
        window.loaction.href='index.php';
        </script>
     }
     ?>