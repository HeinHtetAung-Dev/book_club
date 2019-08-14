<?php include_once "include/admin_header.php"; ?>
    
    <body>
   <?php include_once "include/function.php";?>
        <?php include_once "include/admin_nav.php";?>
     
        <div class="content-wrap">

            <div class="main">
                <div class="container-fluid">

                    <section id="main-content">
                                      <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome To 
                            <b style="font-family:Hobo Std;"><?php echo $_SESSION['username']; ?></b>
                        </h1>
                        
                    </div>
                 
                    <?php 
                    if(isset($_GET['source'])){
                      $source=$_GET['source'];
                    }else{
                      $source='';
                    }
                    switch($source) {
                      case 'add_user';
                      include_once "add_user.php";
                        break;

                        case '30';
                      echo 'value 30';
                        break;
                        
                      
                      default;
                        include_once "view_all_user.php";
                        break;
                    }

                    ?>
                </div>

                    </section>
                </div>
            </div>
        </div>
        
<?php include_once"include/admin_footer.php";?>