
<section class="blog_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog_left_sidebar">
                    <?php include "./konfig/koneksi.php";                               
                    $blog = mysqli_query($koneksi, "select * from blog ") or die (mysqli_error($koneksi));
                    if(mysqli_num_rows($blog) > 0){
                    while($data = mysqli_fetch_array($blog)){                                       
                    ?>                           
                    <article class="row blog_item">
                        <div class="col-md-6"></div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="../admin/upload/<?php echo $data['foto'];?>" style="height: 400px;"/>
                                        <div class="blog_details">
                                            <a href="single-blog.html"><h2><?php   echo $data['nama_blog']?></h2></a>
                                            <p><?php echo $data['konten']?></p>
                                            <a href="single-blog.html" class="white_bg_btn">Lihat</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                                <?php
                                    }
                                }
                            ?>
                            <nav class="blog-pagination justify-content-center d-flex">
		                        <ul class="pagination">
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Previous">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-left"></span>
		                                    </span>
		                                </a>
		                            </li>
		                            <li class="page-item"><a href="#" class="page-link">01</a></li>
		                            <li class="page-item active"><a href="#" class="page-link">02</a></li>
		                            <li class="page-item"><a href="#" class="page-link">03</a></li>
		                            <li class="page-item"><a href="#" class="page-link">04</a></li>
		                            <li class="page-item"><a href="#" class="page-link">09</a></li>
		                            <li class="page-item">
		                                <a href="#" class="page-link" aria-label="Next">
		                                    <span aria-hidden="true">
		                                        <span class="lnr lnr-chevron-right"></span>
		                                    </span>
		                                </a>
		                            </li>
		                        </ul>
		                    </nav>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog_right_sidebar">
                            <aside class="single_sidebar_widget popular_post_widget">
                                <h3 class="widget_title">Postingan Terbaru</h3>
                        <?php include "./konfig/koneksi.php";                               
                               $blog = mysqli_query($koneksi, "select * from blog order by 'id_blog' desc") or die (mysqli_error($koneksi));
                               if(mysqli_num_rows($blog) > 0){
                                   while($data = mysqli_fetch_array($blog)){                                       
                              ?>                 
                                <div class="media post_item">
                                <img src="../admin/upload/<?php echo $data['foto'];?>" style="height: 80px;" alt="post"/>
                                    <div class="media-body">
                                        <a href="blog-details.html"><h3><?php echo $data['nama_blog']?></h3></a>
                                        <p><?php echo $data['created']?> Yang Lalu</p>
                                    </div>
                                </div>
                                <?php
                                    }
                                }
                            ?>
                                <div class="br"></div>
                            </aside>
                            <aside class="single_sidebar_widget ads_widget">
                                <a href="#"><img class="img-fluid" src="img/blog/add.jpg" alt=""></a>
                                <div class="br"></div>
                            </aside>
                            <aside class="single-sidebar-widget newsletter_widget">
                                <h4 class="widget_title">Newsletter</h4>
                                <p>
                                Here, I focus on a range of items and features that we use in life without
                                giving them a second thought.
                                </p>
                                <div class="form-group d-flex flex-row">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                                        </div>
                                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Enter email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email'">
                                    </div>
                                    <a href="#" class="bbtns">Subcribe</a>
                                </div>	
                                <p class="text-bottom">You can unsubscribe at any time</p>	
                                <div class="br"></div>							
                            </aside>
                </div>
            </div>
        </div>
    </div>
</section>
