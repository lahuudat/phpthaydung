<?php 
include_once('header.php');
 ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">News
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Category</th>
                                <th>Featured News</th>
                                <th>Author</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                foreach ($nModel as $key) :
                                ?>

                            <tr class="odd gradeX" align="center">
                                <td><?php echo $key["news_id"]; ?></td>
                                <td><?php echo $key["title"]; ?></td>
                                <td><?php echo $key["name"]; ?></td>
                                <td><?php if($key["feature"]==1){ echo "Yes";}else{echo "No";} ?></td>
                                <td><?php echo $key["username"]; ?></td>
                                <td class="center"><i class="far fa-trash-alt"></i><a href="?action=newsDelete&id=<?php echo $key["news_id"]; ?>"> Delete</a></td>
                                <td class="center"><i class="fas fa-pencil-alt"></i> <a href="?action=newsEdit&id=<?php echo $key["news_id"]; ?>">Edit</a></td>
                            </tr>

                             <?php endforeach; ?>
                            
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
       </div>
<?php include_once('footer.php')  ?>