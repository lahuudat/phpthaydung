<?php 
include_once('header.php');
 ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Video
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="?action=doVideoEdit" method="POST" enctype="multipart/form-data">

                            <?php 
                            foreach ($vModel as $key) :
                             ?>

                             <input type="hidden" name="id" value="<?php echo $key['id'] ?>">
                             <img src="/phpthaydung/uploads/video/<?php echo $key['img']; ?>">
                             <div class="form-group">
                                <label>Image: </label>
                                <input type="file" name="image">
                            </div>
                            <div class="form-group">
                                <label>Video Title</label>
                                <input value="<?php echo $key['title'] ?>" class="form-control" name="title" placeholder="Please Enter Title" />
                            </div>
                            <div class="form-group">
                                <label>Link</label>
                                <input value="<?php echo $key['link'] ?>" class="form-control" name="link" placeholder="Please Enter Link" />
                            </div>
                            
                            
                            
                            <button type="submit" class="btn btn-default">Video Edit</button>
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