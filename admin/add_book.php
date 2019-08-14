<?php include_once "include/admin_header.php";?>
   
    <body>

        <?php include_once "include/admin_nav.php"; ?>

             <div class="content-wrap">
                <div class="main">
                    <div class="container-fluid">        
                        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main"> 
                            <div class="col-lg-12">
                                        <h1 class="page-header">
                                            <b>Welcome Admin</b>
                                        </h1>
                            </div><br>




                            <?php 
                                if(isset($_POST['create'])){
                       
                                    $b_name=$_POST['name'];
                                    $b_description=$_POST['description'];
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
                                     $query="INSERT INTO book (b_name, b_description, b_release_year, b_image, b_price, b_catagory, b_author, b_language, book_number,download,b_pdf) VALUES ('$b_name','$b_description',$b_release_year,'$b_image','$b_price','$b_category','$b_author','$b_language','$b_number',download,'$b_pdf')";
                                    $result=mysqli_query($con,$query);

                                if($result){
                                    header('Location:view_all_book.php');
                                }else{
                                     die("Query Failed".mysqli_error($con));
                                }
                           }
                         ?>


                            <form action="" enctype="multipart/form-data" method="post"  style="margin-left:15%;">
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="name" style="font-family: Comic Sans MS; font-size: 17px;">Name</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="name" name="name" style="border-radius: 25px;">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="description" style="font-family: Comic Sans MS; font-size: 17px;">Description</label>
                                        <div class="col-lg-8">
                                            <textarea class="form-control" name="description" id="description" cols="30" rows="10" style="border-radius: 25px;"></textarea>
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="val-email" style="font-family: Comic Sans MS; font-size: 17px;">Release_Year</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="year" name="year" style="border-radius: 25px;" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="image" style="font-family: Comic Sans MS; font-size: 17px;"> Image</label>
                                        <div class="col-lg-8">
                                            <input type="file" name="image">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="price" style="font-family: Comic Sans MS; font-size: 17px;">Price</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="price" name="price" style="border-radius: 25px;">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="category" style="font-family: Comic Sans MS; font-size: 17px;">Category</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="category" name="category" style="border-radius: 25px;">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="author" style="font-family: Comic Sans MS; font-size: 17px;">Author</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="author" name="author" style="border-radius: 25px;" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="language" style="font-family: Comic Sans MS; font-size: 17px;">Language</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="language" name="language" style="border-radius: 25px;">
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="number" style="font-family: Comic Sans MS; font-size: 17px;">Book_Number</label>
                                        <div class="col-lg-8">
                                            <input type="text" class="form-control" id="number" name="number" style="border-radius: 25px;" >
                                        </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-lg-4 col-form-label" for="pdf" style="font-family: Comic Sans MS; font-size: 17px;">Upload PDF</label>
                                        <div class="col-lg-8">
                                            <input type="file" name="pdf">
                                        </div>
                                </div>
                                <div class="form-group row" style="margin-left: 100%"> 
                                        <input type="submit" class="btn btn-primary" name="create" value="Add_Books" style="font-family: Comic Sans MS; font-size: 17px;">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
        </div>
<?php include_once"include/admin_footer.php";?>