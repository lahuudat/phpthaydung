<?php 
include_once('header.php');
 ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Edit</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="?action=doUsersEdit" method="POST">

                            <?php 
                            foreach ($uModel as $key) :
                             ?>

                             <input type="hidden" name="id" value="<?php echo $key['id'] ?>">


                            <div class="form-group">
                                <label>Full name</label>
                                <input value="<?php echo $key['name'] ?>" class="form-control" name="name" placeholder="Please Enter Full Name" />
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input value="<?php echo $key['username'] ?>" class="form-control" name="username" placeholder="Please Enter Userame" />
                            </div>

                            <div class="form-group">
                                <label>Email</label>
                                <input value="<?php echo $key['email'] ?>" class="form-control" name="email" placeholder="Please Enter Email" />
                            </div>

                            <div class="form-group">
                                <label>Role: </label>
                                <label class="radio-inline">
                                    <input type="radio" name="role" id="optionsRadiosInline1" value="1" <?php if($key['level']==1) echo "checked"; ?> >Admin
                                </label>
                                <label class="radio-inline">
                                    <input type="radio" name="role" id="optionsRadiosInline2" value="0" <?php if($key['level']==0) echo "checked"; ?> >Member
                                </label>
                            </div>

                            <button type="submit" class="btn btn-default">User Edit</button>
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