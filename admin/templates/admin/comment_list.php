<?php 
include_once('header.php');
 ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Comment
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Content</th>
                                <th>News</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                             <?php 
                                foreach ($coModel as $key) :
                                ?>

                            <tr class="even gradeC" align="center">
                                <td><?php echo $key["id"]; ?></td>
                                <td><?php echo $key["name_comment"]; ?></td>
                                <td><?php echo $key["Content"]; ?></td>
                                <td><?php echo $key["title"]; ?></td>                               
                                <td class="center"><i class="far fa-trash-alt"></i><a href="?action=commentDelete&id=<?php echo $key["id"]; ?>"> Delete</a></td>
                                
                            </tr>

                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include_once('footer.php')  ?>