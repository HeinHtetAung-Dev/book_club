<?php include_once "include/admin_header.php";?>
<?php include_once "include/admin_nav.php";?>

        <div class="content-wrap">
                <div class="main">               
                    <div class="container-fluid">        
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 
                                <div class="col-lg-12">
                                            <h1 class="page-header">
                                               Update Book
                                            </h1>
                                </div> <br>
                                        <?php
                                            if(isset($_GET['update'])){
                                              $book_id =  $_GET['update'];
                                              $query = "SELECT * FROM book WHERE b_id = $book_id";
                                              $result = mysqli_query($con,$query);
                                              while ($row = mysqli_fetch_assoc($result)) {
                                                  $b_name=$row['b_name'];
                                                  echo $b_description=$row['b_description'];
                                                  $b_release_year=$row['b_release_year']; 
                                                  $b_image=$row['b_image'];
                                                  $b_price=$row['b_price'];
                                                  $b_category=$row['b_catagory'];
                                                  $b_author=$row['b_author'];
                                                  $b_language=$row['b_language'];
                                                  $b_number=$row['book_number'];
                                                  $b_pdf=$row['b_pdf'];
                                                
                                              }
                                        ?>

                           <form action="" enctype="multipart/form-data" method="post">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="name">Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="name" name="name" value="<?php echo $b_name;?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="b_description">Description</label>
                                        <div class="col-lg-8">
                                           <!--  <textarea class="form-control" name="b_description" id="b_description" cols="30" rows="10" value="<?php echo $b_description;?>"></textarea> -->
                                          <input type="text" class="form-control" id="b_description" name="b_description"  value="<?php echo $b_description; ?>" style="width:650px; height:80px;">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email">Release_Year</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="year" name="year" value="<?php echo $b_release_year;?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="image"> Image</label>
                                        <div class="col-lg-8">
                                            <input type="file" name="image" value="<?php echo $b_image;?>">
                                            <img src="image/<?php echo $b_image;?>" alt="" class="img-responsive" width="100px;"></img>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="price">Price</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="price" name="price" value="<?php echo $b_price;?>" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="category">Category</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="category" name="category" value="<?php echo $b_category;?>" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="author">Author</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="author" name="author" value="<?php echo $b_author;?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="language">Language</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="language" name="language" value="<?php echo $b_language;?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="number">Book_Number</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="number" name="number" value="<?php echo $b_number;?>">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="pdf">Upload PDF</label>
                                        <div class="col-lg-8">
                                            <input type="file" name="pdf" value="../upload/<?php echo $b_pdf;?>">
                                        </div>
                                </div>
                                <div class="form-group row"> 
                                        <input type="submit" class="btn btn-primary" name="update_book" value="Update_Books">
                                </div>
                            </form>
                              <?php }?>


                                <?php
                                  if(isset($_POST['update_book'])){
                                              
                                    $b_name=$_POST['name'];
                                    $b_description=$_POST['b_description'];
                                    $b_release_year=$_POST['year']; 
                                    $b_image=$_FILES['image']['name'];
                                    $post_image_tmp=$_FILES['image']['tmp_name'];
                                    $b_price=$_POST['price'];
                                    $b_category=$_POST['category'];
                                    $b_author=$_POST['author'];
                                    $b_language=$_POST['language'];
                                    $b_number=$_POST['number'];

                                    $b_pdf=$_FILES['pdf']['name'];
                                    $post_pdf_temp=$_FILES['pdf']['tmp_name'];
                                    move_uploaded_file($post_pdf_temp, "upload/$b_pdf");

                                    move_uploaded_file($post_image_tmp, "image/$b_image");

                                    if(empty($b_image)){
                                        $query="SELECT * FROM book WHERE b_id=$book_id";
                                        $select_image=mysqli_query($con,$query);
                                        while ($row=mysqli_fetch_assoc($select_image)) {
                                          $b_image=$row['b_image'];
                                          # code...
                                      }
                                    }
                                    if(empty($b_pdf)){
                                        $query="SELECT * FROM book WHERE b_id=$book_id";
                                        $select_pdf=mysqli_query($con,$query);
                                        while ($row=mysqli_fetch_assoc($select_pdf)) {
                                          $b_pdf=$row['b_pdf'];
                                          # code...
                                      }
                                    }

                                     $query="UPDATE  book SET  b_name ='$b_name', b_description ='$b_description', b_release_year =$b_release_year,b_image ='$b_image', b_price =$b_price, b_catagory ='$b_category', b_author ='$b_author',b_language ='$b_language',book_number='$book_number',b_pdf='$b_pdf'WHERE b_id=$book_id";
                                   
                                    $result=mysqli_query($con,$query);

                                              echo $result = mysqli_query($con,$query);
                                              if($result){
                                                          header('Location:view_all_book.php');
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
