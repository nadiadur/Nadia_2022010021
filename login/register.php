<?php
include('includes/header.php');
include('includes/navbar.php');
?>


<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
               <div class="card">
                <div class="card-header">
                    <h4>Register</h4>
                </div>
                <div class="card-body">

                    <div class="form-group mb-3">
                        <label >First Name</label>
                        <input type="email" placeholder="Enter First Name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label >Last Name</label>
                        <input type="email" placeholder="Enter Last Name" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label >Email Id</label>
                        <input type="email" placeholder="Enter Email Address" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <label >Password</label>
                        <input type="password" placeholder="Enter Password" class="form-control">
                    </div>
                    <div class="form-group mb-3">
                        <button type="submit" class="btn btn-primary">Login Now</button>
                    </div>
                </div>
               </div>
            </div>
        </div>
    </div>
</div>
<?php 
include('includes/footer.php');
?>