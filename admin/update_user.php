<?php include_once "include/admin_header.php";?>
<?php include_once "include/admin_nav.php";?>

        <div class="content-wrap">
                <div class="main">               
                    <div class="container-fluid">        
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 
                                <div class="col-lg-12">
                                            <h1 class="page-header">
                                                Update User
                                            </h1>
                                </div> 
                                          <?php
                                            if(isset($_GET['update'])){
                                              $user_id =  $_GET['update'];
                                              $query = "SELECT * FROM user WHERE user_id = $user_id";
                                              $result = mysqli_query($con,$query);
                                              while ($row = mysqli_fetch_assoc($result)) {
                                                 $name = $row['name'];
                                                 $password= $row['password'];
                                                 $status = $row['status'];
                                                 $email = $row['email'];
                                                 $role = $row['role'];
                                              }
                                              ?>
                                              <form class="" action="" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                  <label for="" class="control-label">Name</label>
                                                  <input type="text" name="name" value="<?php echo $name; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                  <label for="" class="control-label">Password</label>
                                                  <input type="text" name="password" value="<?php echo $password; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                  <label for="" class="control-label">Status</label>
                                                  <input type="text" name="status" value="<?php echo $status; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                  <label for="" class="control-label">Email</label>
                                                  <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                  <label for="" class="control-label">Role</label>
                                                  <select name="role" class="form-control" >
                                                    <option value="<?php echo $role ?>"><?php echo $role;?></option>
                                                    <?php 
                                                    if ($role=='suscriber') {
                                                      echo "<option value='admin'>admin</option>";
                                                      # code...
                                                    }else{
                                                      echo "<option value='suscriber'>suscriber</option>";
                                                    }
                                                    ?>
                                                  </select>
                                                  
                                                </div>
                                                <div class="form-group">
                                                  <input type="submit" name="update_users" value="Update User" class="btn btn-primary">
                                                </div>
                                              </form>
                                              <?php
                                            }
                                          ?>




                                          <?php
                                            if(isset($_POST['update_users'])){
                                                $name = $_POST['name'];
                                                $password = $_POST['password'];
                                                // $user_password = password_hash($password,);
                                                $status=$_POST['status'];
                                                $email = $_POST['email'];
                                                $role = $_POST['role'];

                                              $query = "UPDATE user SET name='$name',password='$password',status ='$status',email='$email',role='$role' WHERE user_id='$user_id'";

                                              echo $result = mysqli_query($con,$query);
                                              if($result){
                                                          header('Location:view_all_user.php');
                                                      }else{
                                                           die("Query Failed".mysqli_error($con));
                                                      }
                                            }
                                          ?>

                        </div>
                      </div>
                    </div>
        </div>
 <?php include_once "include/admin_footer.php";?>
