<?php 
include_once('header.php');
 ?>
 

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">News
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="?action=doNewsEdit" method="POST" enctype="multipart/form-data">

                             <?php 
                            foreach ($nModel as $key) :
                             ?> 


                            <div class="form-group">
                                <label>Title</label>
                                <input value="<?php echo $key['title']; ?>" class="form-control" name="title" placeholder="Please Enter title" />
                            </div>

                            <div class="form-group">
                                <label>Category</label>
                                <select name="cat_id" class="form-control">
                                    <?php 
                            foreach ($cModel2 as $key1) :
                             ?>
                                    <option <?php if($key['cat_id']==$key1['cat_id']) echo "selected"; ?> value="<?php echo $key1['cat_id']; ?>" ><?php echo $key1['name'];?></option>
                                    
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <?php if($key['img'] != NULL){ ?>
                                <img style="width: 200px;" src="../uploads/news/<?php echo $key['img']; ?>">
                                <?php } ?>

                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image">
                            </div>                            

                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" class="form-control" rows="3" id="description"><?php echo $key['description']; ?></textarea>
                            </div>

                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea name="content" class="form-control ckeditor" rows="5" id="demo"><?php echo $key['content']; ?></textarea>
                                
                            </div>

                            <div class="form-group">
                                <!-- <label>Checkboxes</label> -->
                                <div class="checkbox">
                                    <label>
                                        <input <?php if($key['feature']==1) echo "checked"; ?> name="feature" type="checkbox" value="1">featured news
                                    </label>
                                </div>
                            </div>

                            <input type="hidden" name="news_id" value="<?php echo $key['news_id']; ?>">

                             <input type="hidden" name="img" value="<?php echo $key['img']; ?>">
                            
                            <button type="submit" class="btn btn-default">News Edit</button>
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

 <script type="text/javascript" language="javascript" src="templates/admin/ckeditor/ckeditor.js" ></script>

<script type="text/javascript" src="templates/admin/js/ckeditor_config.js"></script>