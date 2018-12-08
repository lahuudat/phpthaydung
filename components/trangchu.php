<?php include "libraries/db_news.php"; ?>

<!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Featured Post Area Start ##### -->
    <div style="margin-top: 50px" class="featured-post-area">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 col-lg-8">
                    <div class="row">
                        <?php $all_video = get_all_news();  ?>
                        <?php $i1=0; ?>
                        
                        <?php foreach ($all_video as $key) {
                            $i1++;
                            if($i1==4) break;

                            if($i1==1){
                         ?>
                    
                        <!-- Single Featured Post -->
                        <div class="col-12 col-lg-7">
                            <div class="single-blog-post featured-post">
                                <div class="post-thumb">
                                    <a href="#"><img  src="uploads/news/<?php echo $key['img']; ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory"><?php echo $key['name']; ?></a>
                                    <a href="index.php?c=xemtin&id=<?php echo $key['news_id'];?>" class="post-title">
                                        <h6><?php echo $key['title']; ?></h6>
                                    </a>
                                    <div class="post-meta">
                                        <p class="post-author">By <a href="#"><?php echo $key['username']; ?></a></p>
                                        <p style="margin-bottom: 20px;" class="post-excerp"><?php echo $key['description']; ?> </p>
                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center">
                                          <p><?php echo $key['created_on']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-lg-5">

                            <?php }else if( $i1>1 && $i1<4){ ?>
                            <!-- Single Featured Post -->
                            <div class="single-blog-post featured-post-2">
                                <div class="post-thumb">
                                    <a href="#"><img src="uploads/news/<?php echo $key['img']; ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <a href="#" class="post-catagory"><?php echo $key['name']; ?></a>
                                    <div class="post-meta">
                                        <a href="index.php?c=xemtin&id=<?php echo $key['news_id'];?>" class="post-title">
                                            <h6><?php echo $key['title']; ?></h6>
                                        </a>
                                        <!-- Post Like & Post Comment -->
                                        <div class="d-flex align-items-center">
                                            <p><?php echo $key['created_on']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                            
                       
                            
                        <?php } ?>
                        </div>

                    </div>
                </div>

                <div class="col-12 col-md-6 col-lg-4">

                    <?php $featured = get_all_news_featured();
                        $i=0; ?>
                        
                        <?php foreach ($featured as $key) {
                            $i++;
                            if($i==6) break;
                         ?>

                    <!-- Single Featured Post -->
                    <div class="single-blog-post small-featured-post d-flex">
                        <div class="post-thumb">
                            <a href="#"><img style="width: 90px; height: 90px;" src="uploads/news/<?php echo $key['img'] ?>" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="#" class="post-catagory"><?php echo $key['name']; ?></a>
                            <div class="post-meta">
                                <a href="index.php?c=xemtin&id=<?php echo $key['news_id'];?>" class="post-title">
                                    <h6><?php echo $key['title']; ?></h6>
                                </a>
                                <p class="post-date"><?php echo $key['created_on']; ?></p>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                    <!-- Single Featured Post -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Featured Post Area End ##### -->

    <!-- ##### Popular News Area Start ##### -->
    <div class="popular-news-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="section-heading">
                        <h6>Du Lịch</h6>
                    </div>

                    <div class="row">
                    	<?php $dulich = get_by_category(2);
                    	$i=0; ?>
                    	
                    	<?php foreach ($dulich as $key) {
                    		$i++;
                    		if($i==5) break;
                    	 ?>
                    		<!-- Single Post -->
                        <div class="col-12 col-md-6">
                            <div class="single-blog-post style-3">
                                <div class="post-thumb">
                                    <a href="#"><img style="width: 350px; height: 307px;" src="uploads/news/<?php echo $key['img'] ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    <!-- <a href="#" class="post-catagory">Star</a> -->
                                    <a href="index.php?c=xemtin&id=<?php echo $key['news_id'];?>" class="post-title">
                                        <h6 style="margin-bottom: 0;"><?php echo $key['title'] ?></h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <p><?php echo $key['ngay_dang']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    	<?php } ?>

                        

                        
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="section-heading">
                        <h6>Ăn uống</h6>
                    </div>
                    <!-- Popular News Widget -->
                    <div class="popular-news-widget mb-30">
                       
                        <?php $anuong = get_by_category(5);
                        $i=0; ?>
                        
                        <?php foreach ($anuong as $key) {
                            $i++;
                            if($i==6) break;
                         ?>
                        <!-- Single Popular Blog -->
                        <div class="single-popular-post">
                            <a href="index.php?c=xemtin&id=<?php echo $key['news_id'];?>">
                                <h6><span><?php echo $i; ?>.</span><?php echo $key['title']; ?></h6>
                            </a>
                            <p><?php echo $key['ngay_dang']; ?></p>
                        </div>
                        <?php } ?>
                      
                    </div>

                    <!-- Newsletter Widget -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Popular News Area End ##### -->

    <!-- ##### Video Post Area Start ##### -->
    <div class="video-post-area bg-img bg-overlay" style="background-image: url(img/bg-img/bg1.jpg);">
        <div class="container">
            <div class="row justify-content-center">

<?php $arr_video=get_video();

// var_dump($arr_video); 

?>
<?php foreach ($arr_video as $key ) { ?>
	 <!-- Single Video Post -->

                <div class="col-12 col-sm-6 col-md-4">
                    <div class="single-video-post">
                        <img style="width:350px; height: 249px; " src="uploads/video/<?php echo $key['img']; ?>" alt="">
                        <!-- Video Button -->
                        <div class="videobtn">
                            <a href="<?php echo $key['link']; ?>" class="videoPlayer"><i style="margin-top: 10px;" class="fa fa-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    <h5 style="color: white;"> <i><?php echo $key['title']; ?></i></h5>
                </div>

                

                <!-- Single Video Post -->
<?php } ?>

               
                
            </div>
        </div>
    </div>
    <!-- ##### Video Post Area End ##### -->

    <!-- ##### Editorial Post Area Start ##### -->
    <div class="editors-pick-post-area section-padding-80-50">
        <div class="container">
            <div class="row">
                <!-- Editors Pick -->
                <div class="col-12 col-md-7 col-lg-9">
                    <div class="section-heading">
                        <h6>Thế Giới</h6>
                    </div>

                    <div class="row">
                        <?php $thegioi = get_by_category(7);
                        $i=0; ?>
                        
                        <?php foreach ($thegioi as $key) {
                            $i++;
                            if($i==7) break;
                         ?>
                        <!-- Single Post -->
                        <div class="col-12 col-lg-4">
                            <div class="single-blog-post">
                                <div class="post-thumb">
                                    <a href="#"><img style="width: 350px; height: 307px;" src="uploads/news/<?php echo $key['img'] ?>" alt=""></a>
                                </div>
                                <div class="post-data">
                                    
                                    <a href="index.php?c=xemtin&id=<?php echo $key['news_id'];?>" class="post-title">
                                        <h6 style="margin-bottom: 0;"><?php echo $key['title'] ?></h6>
                                    </a>
                                    <div class="post-meta d-flex align-items-center">
                                        <p><?php echo $key['ngay_dang']; ?></p>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                       
                    </div>
                </div>

                <!-- World News -->
                <div class="col-12 col-md-5 col-lg-3">
                    <div class="section-heading">
                        <h6>Thể Thao</h6>
                    </div>
                    
                    <?php $thethao = get_by_category(8);
                        $i=0; ?>
                        
                        <?php foreach ($thethao as $key) {
                            $i++;
                            if($i==5) break;
                         ?>

                    <!-- Single Post -->
                    <div class="single-blog-post style-2">
                        <div class="post-thumb">
                            <a href="#"><img style="width: 350px; height: 108px;" src="uploads/news/<?php echo $key['img'] ?>" alt=""></a>
                        </div>
                        <div class="post-data">
                            <a href="index.php?c=xemtin&id=<?php echo $key['news_id'];?>" class="post-title">
                                <h6 style="margin-bottom: 0;"><?php echo $key['title'] ?></h6>
                            </a>
                            <div class="post-meta">
                                <div class="post-date"><p><?php echo $key['ngay_dang']; ?></p></div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                    

                </div>
            </div>
        </div>
    </div>

    <!-- ##### Editorial Post Area End ##### -->

    <!-- ##### Footer Add Area Start ##### -->