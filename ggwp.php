<?php
ob_start();
 require_once "include/db.php";
 ?>
<?php require_once "include/function.php" ?>
<?php 
$g='';
$notice = '';
session_start();
?>
<?php include_once "include_once/header.php";?>
<?php include_once "include_once/top_nav.php";?><br><br>
        
        <!-- Start: Page Banner -->
        <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>Signin</h2>
                    <span class="underline center"></span>
                    <p class="lead">Please Enter your email and password.</p>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="../../index1.php">Home</a></li>
                        <li>Signin</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- End: Page Banner -->
        <!-- Start: Cart Section -->
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="signin-main">
                        <div class="container">
                            <div class="woocommerce">
                                <div class="woocommerce-login">
                                    <div class="company-info signin-register">
                                        <?php
                                        if (isset($_POST['login'])) {
                                            $email = $_POST['email'];
                                        $password = $_POST['password'];
                                        echo $email = mysqli_real_escape_string($conn,$email);
                                        echo $password = mysqli_real_escape_string($conn,$password);
                                         GLOBAL $conn;
                                          $query = "SELECT * FROM users WHERE email='$email'";
                                          $result = mysqli_query($conn,$query);
                                    while ($row = mysqli_fetch_assoc($result))
                                     {
    
                                            $db_username = $row['name'];
                                            $db_password = $row['password'];
                                             $db_email = $row['email'];
                                            $db_role = $row['role'];
                                             $a=password_verify($password,$db_password); 
                                             echo $user_id = $row['user_id'];
                                     }
                                          if($db_email != $email && !password_verify($password,$db_password))
                                          {
                                             $notice = 'Try Again';

                                             // header('location:ggwp.php');
                                          }elseif ($db_email == $email && password_verify($password,$db_password)) {
                                            $_SESSION['username'] = $db_username;
                                            $_SESSION['role'] = $db_role;
                                            $_SESSION['user'] = $user_id;
                                             if ($db_role == 'admin') 
                                             {
                                                header('location:admin/index.php');
                                              
                                             }else{
                                              header('location:index2.php');
                                           }
                                        
                                    }else{
                                        echo "Fail";
                                        $notice = 'Try Again';
                                             // header('location:ggwp.php');
                                    }
                                }
                                        
                                         ?>
                                        <div class="col-md-5 col-md-offset-1 border-dark-left">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="company-detail bg-dark margin-left">
                                                        <div class="signin-head">
                                                            <h2 color ='white'><?php echo $notice;?></h2>
                                                            <h2>Sign in</h2>
                                        
                                                            <span class="underline left"></span>
                                                        </div>
                                                        <br>
                                                        <form class="login" method="post">
                                                            <p class="form-row form-row-first input-required">
                                                                <label>
                                                                    <span class="first-letter">Email</span>  
                                                                    <!-- <span class="second-letter"></span> -->
                                                                </label>
                                                                <input type="email"  name="email" class="input-text">
                                                             </p>
                                                            <p class="form-row form-row-last input-required">
                                                                <label>
                                                                    <span class="first-letter">Password</span>  
                                                                   <!--  <span class="second-letter">*</span> -->
                                                                </label>
                                                                <input type="password" name="password" class="input-text">
                                                            </p>
                                                            <div class="clear"></div>
                                                            <div class="password-form-row">
                                                                <p class="form-row input-checkbox">
                                                                    <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                                                                    <label class="inline" for="rememberme">Remember me</label>
                                                                </p>
                                                                <p class="lost_password">
                                                                    <a href="#">Forget your password?</a>
                                                                </p>
                                                            </div>
                                                            <input type="submit" value="Login" name="login" class="button btn btn-default">
                                                            <div class="clear"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        if (isset($_POST['register'])) {
                                            
                                        $email = mysqli_real_escape_string($conn,$_POST['email1']);
                                        $username = mysqli_real_escape_string($conn,$_POST['username1']);
                                        $password =  mysqli_real_escape_string($conn,$_POST['password1']); 
                                         $g = register($email,$password,$username);
                                         }
                                        ?>
                                        <div class="col-md-5 border-dark new-user">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    
                                                    <div class="company-detail new-account bg-light margin-right">
                                                        <div class="new-user-head">
                                                            <div><?php echo "<h2>$g</h2>";?></div>
                                                            <h2>Create New Account</h2>
                                                            <span class="underline left"></span>
                                                           <br><br>
                                                        </div>
                    
                                                        <form class="login" method="post">
                                                            <p class="form-row form-row-first input-required">
                                                                <label>
                                                                    <span class="first-letter">Name</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="text" id="username1" name="username1" class="input-text">
                                                            </p>
                                                            <p class="form-row input-required">
                                                                <label>
                                                                    <span class="first-letter">Email</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="email" name="email1" class="input-text">
                                                            </p> 
                                                            <p class="form-row input-required">
                                                                <label>
                                                                    <span class="first-letter">Password</span>  
                                                                    <span class="second-letter">*</span>
                                                                </label>
                                                                <input type="password" id="password1" name="password1" class="input-text">
                                                            </p>                                                                               
                                                            <div class="clear"></div>
                                                            <input type="submit" value="Signup" name="register" class="button btn btn-default">
                                                            <div class="clear"></div>
                                                        </form> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <!-- End: Cart Section -->
        
<?php include_once "include_once/social.php";?>
<?php include_once "include_once/footer.php";?>