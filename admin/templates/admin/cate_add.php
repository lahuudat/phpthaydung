<?php 
include_once('header.php');
 ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="?action=doCategoryAdd" method="POST">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input class="form-control" name="cat_name" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Category Parent</label>
                                <select name="parent_id" class="form-control">
                                 <option value="">None</option>
                                     <?php 
                                foreach ($cModel as $key) :
                                ?>

                                <option value="<?php echo $key['cat_id'] ?>"><?php echo $key['name'] ?></option>

                                <?php endforeach; ?>
                                   
                                </select>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include_once('footer.php')  ?>