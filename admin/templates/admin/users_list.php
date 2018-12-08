<?php 
include_once('header.php');
 ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Users
                            <small>List</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Username</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Delete</th>
                                <th>Edit</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php 
                                foreach ($uModel as $key) :
                                ?>

                            <tr class="odd gradeX" align="center">
                                <td><?php echo $key["id"]; ?></td>
                                <td><?php echo $key["name"]; ?></td>
                                <td><?php echo $key["username"]; ?></td>
                                <td>
                                    <?php echo $key["email"]; ?>
                                    </td>
                                 <td><?php if($key["level"]==1){
                                echo "admin"; }else{
                                    echo "member";
                                } ?></td>
                                <td class="center"><i class="far fa-trash-alt"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fas fa-pencil-alt"></i> <a href="?action=usersEdit&id=<?php echo $key["id"]; ?>">Edit</a></td>
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