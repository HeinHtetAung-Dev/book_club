<?php include_once "include/admin_header.php";?>

    <body>

        <?php include_once "include/admin_nav.php"; ?>

        
        <div class="content-wrap">
                <div class="main">               
                    <div class="container-fluid">        
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 
                                <div class="col-lg-12">
                                            <h1 class="page-header">
                                                <b>Welcome To User</b>
                                            </h1>
                                </div><br>

                                <?php
                                if(isset($_POST['user'])){
                                       
                                    $user_name=$_POST["username"];
                                    $user_password=$_POST["password"];
                                    $user_status=$_POST["status"];
                                    $user_email=$_POST["email"];
                                    $user_role=$_POST["role"];
                                    $query="INSERT INTO user (name, password, status, email, role) VALUES ('$user_name','$user_password','$user_status','$user_email','$user_role')";
                                    $result=mysqli_query($con,$query);

                                        if($result){
                                            header('location:view_all_user.php');
                                        }else{
                                             die("Query Failed".mysqli_error($con));
                                        }
                                   }
                                 ?>


                            <form action="" enctype="multipart/form-data" method="post" style="margin-left: 15%">
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="username" style="font-family: Comic Sans MS; font-size: 17px;">Username</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="username" name="username" style="width:300px; height: 35px; border-radius: 25px;" >
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="password" style="font-family: Comic Sans MS; font-size: 17px;">Password</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="password" name="password"  style="width:300px; height: 35px; border-radius: 25px;" >
                                            </div>
                                    </div>
                                   <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="status" style="font-family: Comic Sans MS; font-size: 17px;">Status</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="status" name="status" style="width:300px; height: 35px; border-radius: 25px;" >
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="email" style="font-family: Comic Sans MS; font-size: 17px;" >Email</label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="email" name="email" style="width:300px; height: 35px; border-radius: 25px;" >
                                            </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-4 col-form-label" for="role" style="font-family: Comic Sans MS; font-size: 17px;">Role</label>
                                            <div class="col-lg-8">
                                                <select name="role" id="" class="form-control" style="width:300px; height: 35px; text-align: center;" >
                                                    <option value="subscriber">--- Select ---</option>
                                                    <option value="subscriber">Subscriber</option>
                                                    <option value="admin">Admin</option>
                                                </select>
                                            
                                            </div>
                                    </div><br>
                                    
                                    <div class="form-group row" style="margin-left: 70%"> 
                                            <input type="submit" class="btn btn-primary" name="user" value="Add_User" style="font-family: Comic Sans MS; font-size: 17px;">
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
<?php include_once "include/admin_footer.php";?>