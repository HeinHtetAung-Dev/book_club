<?php include_once "include/admin_header.php";?>
    <body>

        <?php
            include_once "include/admin_nav.php";
        ?>

       <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
           <form method="get" action="">
        
                <div id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="jsgrid-table-panel">
                                    <table class="table table-borderless table-hover">
                                        <thead>
                                            <tr>
                                                <th>user_id</th>
                                                <th>Name</th>
                                                <th>Password</th>
                                                <th>Status</th>
                                                <th>Email</th>
                                                <th>Role</th>
                                                <th>Approve</th>
                                                <th>Unapprove</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                              <tbody>
                                        
                                            <?php 
                                            $query="SELECT * FROM users ";
                                            $result=mysqli_query($con,$query);
                                            while ($row=mysqli_fetch_assoc($result)) {
                                                $user_id=$row['user_id'];
                                                $username=$row['name'];
                                                $password=$row['password'];                                                
                                                $status=$row['status'];
                                                $email=$row['email'];
                                                $role=$row['role'];
                                                
                                                
                                               

                                                echo "<tr>";
                                                echo "<td>$user_id</td>";
                                                echo "<td>$username</td>";
                                                echo "<td>$password</td>";   
                                                echo "<td>$status</td>";   
                                                echo "<td>$email</td>";
                                                echo "<td>$role</td>";
                                                echo "<td> <a href='user.php?admin=$user_id'>Admin</a></td>";
                                                echo "<td> <a href='user.php?subscriber=$user_id'>Subscriber</a></td>";
                                                echo"<td><a href='delete_user.php?delete=$user_id'>Delete</a></td>";
                                                echo "</tr>";

                                                
                                            }
                                             ?>
                                        </tbody>
                                    </table>
                                </form>
                                    <!-- <div id="jsGrid"></div> -->
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                         <?php 
                            if(isset($_GET['admin']))
                            {
                              $user_id=mysqli_real_escape_string($con,$_GET['admin']);
                              $query="UPDATE users SET role='admin'WHERE user_id=$user_id";
                              $result=mysqli_query($con,$query);
                              header('Location:user.php');
                            }
                             ?>
                             
                              <?php 
                            if(isset($_GET['subscriber']))
                            {
                              $user_id=mysqli_real_escape_string($con,$_GET['subscriber']);
                              $query="UPDATE users SET role='subscriber'WHERE user_id=$user_id";
                              $result=mysqli_query($con,$query);
                              header('Location:user.php');
                            }
                        ?>

                    <!-- /# row -->
                </div>
            </div>
        </div>
    </div>

        
<?php include_once "include/admin_footer.php";?>