<?php 
include_once('header.php');
 ?>
 

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">News
                            <small>Add</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="?action=doNewsAdd" method="POST" enctype="multipart/form-data">

                             <?php 
                            //foreach ($cModel as $key) :
                             ?> 


                            <div class="form-group">
                                <label>Title</label>
                                <input class="form-control" name="title" placeholder="Please Enter title" />
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select name="cat_id" class="form-control">
                                    <?php 
                            foreach ($cModel as $key) :
                             ?>
                                    <option value="<?php echo $key['cat_id']; ?>" ><?php echo $key['name'];?></option>
                                    
                                    <?php endforeach ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image">
                            </div>                            

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" rows="3" id="description"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control ckeditor" rows="5" id="demo"></textarea>
                                
                            </div>

                            <div class="form-group">
                                <!-- <label>Checkboxes</label> -->
                                <div class="checkbox">
                                    <label>
                                        <input name="feature" type="checkbox" value="1">featured news
                                    </label>
                                </div>
                            </div>
                            
                            <input type="hidden" name="author" value="<?php echo $id; ?>">
                            
                            <button type="submit" class="btn btn-default">News Add</button>
                            <button type="reset" class="btn btn-default">Reset</button>

                        <?php// endforeach ?>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
        <!-- /#page-wrapper -->

<?php include_once('footer.php')  ?>

 <script type="text/javascript" language="javascript" src="templates/admin/ckeditor/ckeditor.js" ></script>

<script type="text/javascript" src="templates/admin/js/ckeditor_config.js"></script>