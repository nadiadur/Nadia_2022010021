<?php
include('authentication.php');

if(isset($_POST['add_user']))
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true? '1':'0';

    $query="INSERT INTO users (fname,lname,email,password,role_as,status) VALUES ('$fname','$lname','$email','$password','$role_as','$status')";
    $query_run =mysqli_query($con,$query);

    if($query_run)
    {
        $_SESSION['message'] ="Admin/User Added Successfully";
        header('Location: view-register.php');
        exit(0);
    }
    else
    {
        $_SESSION['message'] ="Something When Wrong.!";
        header('Location: view-register.php');
        exit(0);
    }

}

if(isset($_POST['update_user']))
{
    $user_id = $_POST['user_id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role_as = $_POST['role_as'];
    $status = $_POST['status'] == true ? '1':'0';

    $query ="UPDATE users SET fname='$fname', lname='$lname', email='$email', password='$password', role_as='$role_as', status='$status' 
    WHERE id='$user_id' ";
    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        $_SESSION['message'] = "Updated Successfully";
        header('Location: view-register.php');
        exit(0);
    }
}

?>