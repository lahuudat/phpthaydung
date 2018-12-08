<?php
include "libraries/db_news.php";
if (isset($_GET['id'])) {
  $id=$_GET['id'];
}else{
  $id = 0;
}

$news_arr= get_news_by_cate($id);
?>


 <!-- ##### Blog Area Start ##### -->
    <div style="margin-top: 50px;" class="blog-area section-padding-0-80">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="blog-posts-area">
<?php 
      foreach ( $news_arr as $news) :
    ?>
                        <!-- Single Featured Post -->
                        <div class="single-blog-post featured-post mb-30">
                            <div class="post-thumb">
                                <a href="#"><img src="uploads/news/<?php echo $news['img']; ?>" alt=""></a>
                            </div>
                            <div class="post-data">
                                <a href="#" class="post-catagory"><?php echo $news['name']; ?></a>
                                <a href="index.php?c=xemtin&id=<?php echo $news['news_id'];?>" class="post-title">
                                    <h6><?php echo $news['title']; ?></h6>
                                </a>
                                <div class="post-meta">
                                    <p class="post-author">By <a href="#"><?php echo $news['username']; ?> </a></p>
                                    <p class="post-excerp"><?php echo $news['description']; ?></p>
                                    <!-- Post Like & Post Comment -->
                                    <div class="d-flex align-items-center">
                                        <p><?php echo $news['created_on']; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
<?php endforeach; ?>
                        

                    </div>

                    <nav aria-label="Page navigation example">
                        <ul class="pagination mt-50">
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">...</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                        </ul>
                    </nav>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="blog-sidebar-area">

                        <!-- Latest Posts Widget -->
                        <div class="latest-posts-widget mb-50">
                             <?php $featured = get_all_news_featured();
                        $i=0; ?>
                            <?php foreach ($featured as $key) {
                            $i++;
                            if($i==8) break;
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
                                        <p class="post-date"><span>7:00 AM</span> | <span>April 14</span></p>
                                    </div>
                                </div>
                            </div>
                           <?php } ?> 
                        </div>

                        

                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Blog Area End ##### -->