
<?php 

 require('connection.php');
 session_start();

 # for Login

if(isset($_POST['Login']))
{
    $query="SELECT * FROM `registered_users` WHERE `email`='$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $result=mysqli_query($con,$query);

    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if(password_verify($_POST['password'],$result_fetch['Password']))
            {  #if password match
               $_SESSION['Logged_In']=true;
               $_SESSION['username']=$result_fetch['username'];
               
               header("location: dashboard.php");
            }
            else
            { 
                echo"
                    <script>
                        alert('Incorrect Password..');
                        window.location.href='index.php';
                    </script>
                ";
            }
        }
        else
        { 
            echo"
               <script>
                   alert('Email or Username Not Registered');
                   window.location.href='index.php';
               </script>
            ";

        }
    }
    else
    {
       echo"
        <script>
            alert('Cannot Run Query');
            window.location.href='index.php';
        </script>
       ";
    }
}


 # for Registration
if(isset($_POST['signup']))
{
    $user_exist_query="SELECT * FROM `registered_users` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result=mysqli_query($con,$user_exist_query);

    if($result)
    {
       if(mysqli_num_rows($result)>0)  #it will be executed if email or username already taken
       {
          #if any user has already taken username or  email
          $result_fetch=mysqli_fetch_assoc($result);
          if($result_fetch['username']==$_POST['username'])
          {
            #error for username already  registered
            echo"
                <script>
                   alert('$result_fetch[username] - Username Already Taken');
                   window.location.href='index.php';
                </script>
            ";
          }
          else
          {
            #error for email already registered
            echo"
                <script>
                    alert('$result_fetch[email] - Email Already Registered');
                    window.location.href='index.php';
                </script>
            ";
          }
       }
       else
       {  #it will be excutes if no one haas taken email or username 
          $password=password_hash($_POST['password'],PASSWORD_BCRYPT);
          $query="INSERT INTO `registered_users`(`Name`, `Email`, `username`, `Phone no`, `Password`) VALUES ('$_POST[fullname]','$_POST[email]','$_POST[username]','$_POST[phoneNo]','$password')";
          if(mysqli_query($con,$query))
          {
            #if data cannot be inserted 
            echo"
                <script>
                    alert('Registration Successfull.');
                    window.location.href='index.php';
                </script>
            ";
            
          }
          else
          {
            #if data cannot be inserted 
            echo"
                <script>
                    alert('Cannot Run Query');
                    window.location.href='index.php';
                </script>
            ";

          }
        }
    }
    else
    {
    echo"
       <script>
           alert('Cannot Run Query');
           window.location.href='index.php';
       </script>
    ";
    }
}

?>