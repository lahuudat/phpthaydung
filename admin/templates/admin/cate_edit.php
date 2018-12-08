<?php 
include_once('header.php');
 ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Category
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="?action=doCategoryEdit" method="POST">

                            <?php 
                            foreach ($cModel as $key) :
                             ?>

                             <input type="hidden" name="cat_id" value="<?php echo $key['cat_id'] ?>">


                            <div class="form-group">
                                <label>Category Name</label>
                                <input value="<?php echo $key['name'] ?>" class="form-control" name="cat_name" placeholder="Please Enter Category Name" />
                            </div>
                            <div class="form-group">
                                <label>Category Parent</label>
                                <select name="parent_id" class="form-control">

                                <?php if($key['parent_id']==NULL){  ?>

                                 <option value="">None</option>
                                     <?php 
                                foreach ($cModel2 as $key2) :
                                ?>

                                <option value="<?php echo $key2['cat_id'] ?>"

                                     <?php
                                    if($key2['cat_id']==$key['cat_id']) echo "disabled";
                                        ?>

                                    ><?php echo $key2['name'] ?></option>

                                <?php endforeach; ?>

                                <?php }else{  ?>

                                <option value="">None</option>
                                     <?php 
                                foreach ($cModel2 as $key2) :
                                ?>
                                
                                <option value="<?php echo $key2['cat_id'] ?>" 
                                    <?php
                                    if($key2['cat_id']==$key['parent_id']) echo "selected";
                                        ?>

                                         <?php
                                    if($key2['cat_id']==$key['cat_id']) echo "disabled";
                                        ?>

                                    ><?php echo $key2['name'] ?></option>

                                <?php endforeach; ?>

                                <?php } ?>


                                   
                                </select>
                            </div>
                            
                            
                            <button type="submit" class="btn btn-default">Category Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>

                        <?php endforeach ?>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include_once('footer.php')  ?>