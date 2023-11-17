 <?php
            $blogs = $obj->fetch_where_order_limit("blog", array("*"), array("status" => 1), "DESC", 3);
            if ($blogs == true) {
                foreach ($blogs as $blog) { ?>
                    <div class="col-lg-4 wow fadeInUp animated" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        <div class="blog-card">
                            <div class="blog-card__image">
                                <span><?= date('M d, Y', strtotime($blog->created)); ?></span>
                                <img src="admin/uploads/blog/<?= $blog->image ?>" alt="<?= $blog->title ?>" width="360px" height="250px">
                            </div>
                            <div class="blog-card__content">
                                <div class="blog-card__meta">
                                    <i class="far fa-user"></i>Admin
                                </div>
                                <h3><a href="blog-details.php?slug=<?= $blog->slug ?>"><?= $blog->title ?></a></h3>
                                <div class="blog-card__bottom">
                                    <div class="blog-card-bottom-readmore">
                                        <a href="blog-details.php?slug=<?= $blog->slug ?>" class="readmore-card-link"><i class="pylon-icon-right-arrow"></i>Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            } ?>
