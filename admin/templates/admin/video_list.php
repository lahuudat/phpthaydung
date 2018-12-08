<?php 
include_once('header.php');
 ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Video
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Title</th>
                                <th>Link</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                             <?php 
                                foreach ($vModel as $key) :
                                ?>

                            <tr class="even gradeC" align="center">
                                <td><?php echo $key["id"]; ?></td>
                                <td><?php echo $key["title"]; ?></td>
                                <td><?php echo $key["link"]; ?></td>
                               
                                
                                <td class="center"><i class="fas fa-pencil-alt"></i> <a href="?action=videoEdit&id=<?php echo $key["id"]; ?>">Edit</a></td>
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