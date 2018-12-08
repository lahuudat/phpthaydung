<?php 

if(isset($_SESSION['username']) && isset($_SESSION['id_user'])){
    
    $id = $_SESSION['id_user'];

    $username = $_SESSION['username'];

    
}

 ?>

<?php 
include_once('header.php');
 ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Parent Name</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                             <?php 
                                foreach ($cModel as $key) :
                                ?>

                            <tr class="even gradeC" align="center">
                                <td><?php echo $key["cat_id"]; ?></td>
                                <td><?php echo $key["name"]; ?></td>
                                <td><?php echo $key["parent_name"]; ?></td>
                               
                                <td class="center"><i class="far fa-trash-alt"></i><a href="?action=categoryDelete&id=<?php echo $key["cat_id"]; ?>"> Delete</a></td>
                                <td class="center"><i class="fas fa-pencil-alt"></i> <a href="?action=categoryEdit&id=<?php echo $key["cat_id"]; ?>">Edit</a></td>
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