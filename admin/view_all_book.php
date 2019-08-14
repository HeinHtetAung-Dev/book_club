<?php include_once "include/admin_header.php";?>

    <body>

<?php include_once "include/admin_nav.php";?>

    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
           
        
                <div id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="jsgrid-table-panel">
                                    <table class="table table-striped table-hover">
                                       <thead style="text-align: center;">
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Description</th>
                                                <th>Release Year</th>
                                                <th>Image</th>
                                                <th>Price</th>
                                                <th>Category</th>
                                                <th>Author</th>
                                                <th>Language</th>
                                                <th>Book_number</th>
                        
                                                <th>Download</th>
                                                 <th>PDF</th>
                                                 <th></th>
                                                <th></th>
                                                <th></th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                                    $query="SELECT * FROM book";
                                                    $result=mysqli_query($con,$query);
                                                    if(!$result){
                                                     die("Query Failed".mysqli_error($result));
                                                                }
                                            while($row=mysqli_fetch_assoc($result)):?>
                                                <tr>
                                                    <td><?php echo $b_id=$row['b_id'];?></td>
                                                    <td><?php $name=substr($row['b_name'],0,20); echo $name; ?></td>
                                                    <td><?php $description=substr($row['b_description'],0,50);echo $description;  ?></td>
                                                    <td><?php echo $row['b_release_year']; ?></td>
                                                    <td><img src="../images/category/<?php echo $row['b_image']; ?> " class="img-responsive" style="width:70px; height:100px;"></td>
                                                    <td><?php echo $row['b_price']; ?></td>
                                                    <td><?php echo $row['b_catagory']; ?></td>
                                                    <td><?php echo $row['b_author']; ?></td>
                                                    <td><?php echo $row['b_language']; ?></td>
                                                    <td><?php echo $row['book_number']; ?></td>
                                                     <td><?php echo $row['download']; ?></td>
                                                     <td><?php echo $row['b_pdf']; ?></td>
                                                    <!-- <td><img src="../upload/<?php echo $row['b_pdf']; ?> "></td>  -->

                                                    <td class="text-center"><a href="delete.php?delete=<?php echo $b_id;?>" class=" fa fa-trash" style="font-size: 20px;" name="delete"></a></td>

                                                    <td class="text-center"><a href="update_book.php?source=<?php echo 'update_book';?>&update=<?php echo $b_id; ?>" class="fa fa-edit" style="font-size: 20px;" name="update"></a></td>

                                            <!-- <td class="text-center" ><a href="posts.php?source=<?php //echo "update_post"?>&update=<?php //echo $post_id?>" class="  fa fa-edit" style="font-size: 20px;"></a></td> -->
                                                </tr>
                                            <?php endwhile;?> 
                                            </tbody>
                                    </table>
                                    <!-- <div id="jsGrid"></div> -->
                                </div>
                            </div>
                            <!-- /# card -->
                        </div>
                        <!-- /# column -->
                    </div>
                    <!-- /# row -->

                </div>
            </div>
        </div>
    </div>
<?php include_once "include/admin_footer.php";?>