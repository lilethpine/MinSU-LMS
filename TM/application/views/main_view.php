<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
?>

<?php require_once(APP_DIR . 'views/includes/header.php'); ?>
<?php require_once(APP_DIR . 'views/includes/topbar.php'); ?>


<main>
    <div class="main-section"><!-- main section -->
        <div class="container"><!-- container -->
            <div class="main-section-data"><!-- main-section-data -->
                <div class="row"><!-- row-->



                    <!-- Left Side -->
                    <div class="col-lg-3 col-md-4 pd-left-none no-pd">
                        <div class="main-left-sidebar no-margin">
                            <div class="user-data full-width">
                                <div class="user-profile">
                                    <div class="username-dt">
                                        <div class="usr-pic">
                                            <img src="<?php echo BASE_URL; ?>public/images/resources/user-pic.png" alt="">
                                        </div>
                                    </div>
                                    <!--username-dt end-->
                                    <div class="user-specs">
                                        <h3>John Doe</h3>
                                        <span>Graphic Designer at Self Employed</span>
                                    </div>
                                </div>
                                <!--user-profile end-->
                                <ul class="user-fw-status">
                                    <li>
                                        <h4>Following</h4>
                                        <span>34</span>
                                    </li>
                                    <li>
                                        <h4>Followers</h4>
                                        <span>155</span>
                                    </li>
                                    <li>
                                        <a href="my-profile.html" title="">View Profile</a>
                                    </li>
                                </ul>
                            </div>
                            <!--user-data end-->
                            <div class="suggestions full-width">
                                <div class="sd-title">
                                    <h3>Suggestions</h3>
                                    <i class="fa fa-ellipsis-v"></i>
                                </div>
                                <!--sd-title end-->
                                <div class="suggestions-list">
                                    <div class="suggestion-usd">
                                        <img src="<?php echo BASE_URL; ?>public/images/resources/s1.png" alt="">
                                        <div class="sgt-text">
                                            <h4>Jessica William</h4>
                                            <span>Graphic Designer</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="<?php echo BASE_URL; ?>public/images/resources/s2.png" alt="">
                                        <div class="sgt-text">
                                            <h4>John Doe</h4>
                                            <span>PHP Developer</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="<?php echo BASE_URL; ?>public/images/resources/s3.png" alt="">
                                        <div class="sgt-text">
                                            <h4>Poonam</h4>
                                            <span>Wordpress Developer</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="<?php echo BASE_URL; ?>public/images/resources/s4.png" alt="">
                                        <div class="sgt-text">
                                            <h4>Bill Gates</h4>
                                            <span>C & C++ Developer</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="<?php echo BASE_URL; ?>public/images/resources/s5.png" alt="">
                                        <div class="sgt-text">
                                            <h4>Jessica William</h4>
                                            <span>Graphic Designer</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="<?php echo BASE_URL; ?>public/images/resources/s6.png" alt="">
                                        <div class="sgt-text">
                                            <h4>John Doe</h4>
                                            <span>PHP Developer</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="view-more">
                                        <a href="#" title="">View More</a>
                                    </div>
                                </div>
                                <!--suggestions-list end-->
                            </div>
                            <!--suggestions end-->
                            <div class="tags-sec full-width">
                                <ul>
                                    <li><a href="#" title="">Help Center</a></li>
                                    <li><a href="#" title="">About</a></li>
                                    <li><a href="#" title="">Privacy Policy</a></li>
                                    <li><a href="#" title="">Community Guidelines</a></li>
                                    <li><a href="#" title="">Cookies Policy</a></li>
                                    <li><a href="#" title="">Career</a></li>
                                    <li><a href="#" title="">Language</a></li>
                                    <li><a href="#" title="">Copyright Policy</a></li>
                                </ul>
                                <div class="cp-sec">
                                    <img src="<?php echo BASE_URL; ?>public/images/logo2.png" alt="">
                                    <p><img src="<?php echo BASE_URL; ?>public/images/cp.png" alt="">Copyright 2019</p>
                                </div>
                            </div>
                            <!--tags-sec end-->
                        </div>
                        <!--main-left-sidebar end-->
                    </div>
                    <!-- Left Side END -->


                    <!-- Center -->
                    <div class="col-lg-6 col-md-8 no-pd">
                        <div class="main-ws-sec">


                            <!-- post-topbar start -->
                            <div class="post-topbar">
                                <div class="user-picy">
                                    <img src="<?php echo BASE_URL; ?>public/images/resources/user-pic.png" alt="">
                                </div>
                                <div class="post-st">
                                    <ul>
                                        <li><a class="post_project" href="#" title="">Post Announcement</a></li>
                                        <li><a class="post-jb active" href="#" title="">Post Activity</a></li>
                                    </ul>
                                </div>
                                <!--post-st end-->
                            </div>
                            <!--post-topbar end-->



                            <!-- NEWS FEED -->
                            <!--posts-section start-->
                            <div class="posts-section">


                                <!--post-bar start-->
                                <div class="post-bar">
                                    <div class="post_topbar">
                                        <div class="usy-dt">
                                            <img src="<?php echo BASE_URL; ?>public/images/resources/us-pic.png" alt="">
                                            <div class="usy-name">
                                                <h3>John Doe</h3>
                                                <span><img src="<?php echo BASE_URL; ?>public/images/clock.png" alt="">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class="ed-opts">
                                            <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                            <ul class="ed-options">
                                                <li><a href="#" title="">Edit Post</a></li>
                                                <li><a href="#" title="">Unsaved</a></li>
                                                <li><a href="#" title="">Unbid</a></li>
                                                <li><a href="#" title="">Close</a></li>
                                                <li><a href="#" title="">Hide</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="epi-sec">
                                        <ul class="descp">
                                            <li><img src="<?php echo BASE_URL; ?>public/images/icon8.png" alt=""><span>Epic Coder</span></li>
                                            <li><img src="<?php echo BASE_URL; ?>public/images/icon9.png" alt=""><span>India</span></li>
                                        </ul>
                                        <ul class="bk-links">
                                            <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                            <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="job_descp">
                                        <h3>Senior Wordpress Developer</h3>
                                        <ul class="job-dt">
                                            <li><a href="#" title="">Full Time</a></li>
                                            <li><span>$30 / hr</span></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                        <ul class="skill-tags">
                                            <li><a href="#" title="">HTML</a></li>
                                            <li><a href="#" title="">PHP</a></li>
                                            <li><a href="#" title="">CSS</a></li>
                                            <li><a href="#" title="">Javascript</a></li>
                                            <li><a href="#" title="">Wordpress</a></li>
                                        </ul>
                                    </div>
                                    <div class="job-status-bar">
                                        <ul class="like-com">
                                            <li>
                                                <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                <img src="<?php echo BASE_URL; ?>public/images/liked-img.png" alt="">
                                                <span>25</span>
                                            </li>
                                            <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                        </ul>
                                        <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                    </div>
                                </div>
                                <!--post-bar end-->


                                <!--top-profiles start-->
                                <div class="top-profiles">
                                    <div class="pf-hd">
                                        <h3>Top Profiles</h3>
                                        <i class="la la-ellipsis-v"></i>
                                    </div>
                                    <div class="profiles-slider">
                                        <div class="user-profy">
                                            <img src="<?php echo BASE_URL; ?>public/images/resources/user1.png" alt="">
                                            <h3>John Doe</h3>
                                            <span>Graphic Designer</span>
                                            <ul>
                                                <li><a href="#" title="" class="followw">Follow</a></li>
                                                <li>
                                                    <a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a>
                                                </li>
                                                <li><a href="#" title="" class="hire">hire</a></li>
                                            </ul>
                                            <a href="#" title="">View Profile</a>
                                        </div>
                                        <!--user-profy end-->
                                        <div class="user-profy">
                                            <img src="<?php echo BASE_URL; ?>public/images/resources/user2.png" alt="">
                                            <h3>John Doe</h3>
                                            <span>Graphic Designer</span>
                                            <ul>
                                                <li><a href="#" title="" class="followw">Follow</a></li>
                                                <li>
                                                    <a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a>
                                                </li>
                                                <li><a href="#" title="" class="hire">hire</a></li>
                                            </ul>
                                            <a href="#" title="">View Profile</a>
                                        </div>
                                        <!--user-profy end-->
                                        <div class="user-profy">
                                            <img src="<?php echo BASE_URL; ?>public/images/resources/user3.png" alt="">
                                            <h3>John Doe</h3>
                                            <span>Graphic Designer</span>
                                            <ul>
                                                <li><a href="#" title="" class="followw">Follow</a></li>
                                                <li>
                                                    <a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a>
                                                </li>
                                                <li><a href="#" title="" class="hire">hire</a></li>
                                            </ul>
                                            <a href="#" title="">View Profile</a>
                                        </div>
                                        <!--user-profy end-->
                                        <div class="user-profy">
                                            <img src="<?php echo BASE_URL; ?>public/images/resources/user1.png" alt="">
                                            <h3>John Doe</h3>
                                            <span>Graphic Designer</span>
                                            <ul>
                                                <li><a href="#" title="" class="followw">Follow</a></li>
                                                <li>
                                                    <a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a>
                                                </li>
                                                <li><a href="#" title="" class="hire">hire</a></li>
                                            </ul>
                                            <a href="#" title="">View Profile</a>
                                        </div>
                                        <!--user-profy end-->
                                        <div class="user-profy">
                                            <img src="<?php echo BASE_URL; ?>public/images/resources/user2.png" alt="">
                                            <h3>John Doe</h3>
                                            <span>Graphic Designer</span>
                                            <ul>
                                                <li><a href="#" title="" class="followw">Follow</a></li>
                                                <li>
                                                    <a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a>
                                                </li>
                                                <li><a href="#" title="" class="hire">hire</a></li>
                                            </ul>
                                            <a href="#" title="">View Profile</a>
                                        </div>
                                        <!--user-profy end-->
                                        <div class="user-profy">
                                            <img src="<?php echo BASE_URL; ?>public/images/resources/user3.png" alt="">
                                            <h3>John Doe</h3>
                                            <span>Graphic Designer</span>
                                            <ul>
                                                <li><a href="#" title="" class="followw">Follow</a></li>
                                                <li>
                                                    <a href="#" title="" class="envlp"><img src="images/envelop.png" alt=""></a>
                                                </li>
                                                <li><a href="#" title="" class="hire">hire</a></li>
                                            </ul>
                                            <a href="#" title="">View Profile</a>
                                        </div>
                                        <!--user-profy end-->
                                    </div>
                                    <!--profiles-slider end-->
                                </div>
                                <!--top-profiles end-->
                                


                                <!--post-bar start-->
                                <div class="post-bar">
                                    <div class="post_topbar">
                                        <div class="usy-dt">
                                            <img src="images/resources/us-pic.png" alt="">
                                            <div class="usy-name">
                                                <h3>John Doe</h3>
                                                <span><img src="images/clock.png" alt="">3 min ago</span>
                                            </div>
                                        </div>
                                        <div class="ed-opts">
                                            <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                            <ul class="ed-options">
                                                <li><a href="#" title="">Edit Post</a></li>
                                                <li><a href="#" title="">Unsaved</a></li>
                                                <li><a href="#" title="">Unbid</a></li>
                                                <li><a href="#" title="">Close</a></li>
                                                <li><a href="#" title="">Hide</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="epi-sec">
                                        <ul class="descp">
                                            <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                            <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                        </ul>
                                        <ul class="bk-links">
                                            <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                            <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                            <li><a href="#" title="" class="bid_now">Bid Now</a></li>
                                        </ul>
                                    </div>
                                    <div class="job_descp">
                                        <h3>Senior Wordpress Developer</h3>
                                        <ul class="job-dt">
                                            <li><a href="#" title="">Full Time</a></li>
                                            <li><span>$30 / hr</span></li>
                                        </ul>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                        <ul class="skill-tags">
                                            <li><a href="#" title="">HTML</a></li>
                                            <li><a href="#" title="">PHP</a></li>
                                            <li><a href="#" title="">CSS</a></li>
                                            <li><a href="#" title="">Javascript</a></li>
                                            <li><a href="#" title="">Wordpress</a></li>
                                        </ul>
                                    </div>
                                    <div class="job-status-bar">
                                        <ul class="like-com">
                                            <li>
                                                <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                <img src="images/liked-img.png" alt="">
                                                <span>25</span>
                                            </li>
                                            <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                        </ul>
                                        <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                    </div>
                                </div>
                                <!--post-bar end-->


                                <!-- COMMENT -->
                                <!--posty start-->
                                <div class="posty">
                                    <div class="post-bar no-margin">
                                        <div class="post_topbar">
                                            <div class="usy-dt">
                                                <img src="images/resources/us-pc2.png" alt="">
                                                <div class="usy-name">
                                                    <h3>John Doe</h3>
                                                    <span><img src="images/clock.png" alt="">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="ed-opts">
                                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                                <ul class="ed-options">
                                                    <li><a href="#" title="">Edit Post</a></li>
                                                    <li><a href="#" title="">Unsaved</a></li>
                                                    <li><a href="#" title="">Unbid</a></li>
                                                    <li><a href="#" title="">Close</a></li>
                                                    <li><a href="#" title="">Hide</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="epi-sec">
                                            <ul class="descp">
                                                <li><img src="images/icon8.png" alt=""><span>Epic Coder</span></li>
                                                <li><img src="images/icon9.png" alt=""><span>India</span></li>
                                            </ul>
                                            <ul class="bk-links">
                                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="job_descp">
                                            <h3>Senior Wordpress Developer</h3>
                                            <ul class="job-dt">
                                                <li><a href="#" title="">Full Time</a></li>
                                                <li><span>$30 / hr</span></li>
                                            </ul>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                            <ul class="skill-tags">
                                                <li><a href="#" title="">HTML</a></li>
                                                <li><a href="#" title="">PHP</a></li>
                                                <li><a href="#" title="">CSS</a></li>
                                                <li><a href="#" title="">Javascript</a></li>
                                                <li><a href="#" title="">Wordpress</a></li>
                                            </ul>
                                        </div>
                                        <div class="job-status-bar">
                                            <ul class="like-com">
                                                <li>
                                                    <a href="#"><i class="fas fa-heart"></i> Like</a>
                                                    <img src="images/liked-img.png" alt="">
                                                    <span>25</span>
                                                </li>
                                                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                            </ul>
                                            <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                                        </div>
                                    </div>
                                    <!--post-bar end-->
                                    <div class="comment-section">
                                        <a href="#" class="plus-ic">
                                            <i class="la la-plus"></i>
                                        </a>
                                        <div class="comment-sec">
                                            <ul>
                                                <li>
                                                    <div class="comment-list">
                                                        <div class="bg-img">
                                                            <img src="images/resources/bg-img1.png" alt="">
                                                        </div>
                                                        <div class="comment">
                                                            <h3>John Doe</h3>
                                                            <span><img src="images/clock.png" alt=""> 3 min ago</span>
                                                            <p>Lorem ipsum dolor sit amet, </p>
                                                            <a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
                                                        </div>
                                                    </div>
                                                    <!--comment-list end-->
                                                    <ul>
                                                        <li>
                                                            <div class="comment-list">
                                                                <div class="bg-img">
                                                                    <img src="images/resources/bg-img2.png" alt="">
                                                                </div>
                                                                <div class="comment">
                                                                    <h3>John Doe</h3>
                                                                    <span><img src="images/clock.png" alt=""> 3 min ago</span>
                                                                    <p>Hi John </p>
                                                                    <a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
                                                                </div>
                                                            </div>
                                                            <!--comment-list end-->
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <div class="comment-list">
                                                        <div class="bg-img">
                                                            <img src="images/resources/bg-img3.png" alt="">
                                                        </div>
                                                        <div class="comment">
                                                            <h3>John Doe</h3>
                                                            <span><img src="images/clock.png" alt=""> 3 min ago</span>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
                                                            <a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
                                                        </div>
                                                    </div>
                                                    <!--comment-list end-->
                                                </li>
                                            </ul>
                                        </div>
                                        <!--comment-sec end-->
                                        <div class="post-comment">
                                            <div class="cm_img">
                                                <img src="images/resources/bg-img4.png" alt="">
                                            </div>
                                            <div class="comment_box">
                                                <form>
                                                    <input type="text" placeholder="Post a comment">
                                                    <button type="submit">Send</button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--post-comment end-->
                                    </div>
                                    <!--comment-section end-->
                                </div>
                                <!--posty end-->



                                <!-- loading -->
                                <div class="process-comm">
                                    <div class="spinner">
                                        <div class="bounce1"></div>
                                        <div class="bounce2"></div>
                                        <div class="bounce3"></div>
                                    </div>
                                </div>
                                <!--loading end-->



                            </div>
                            <!--posts-section end-->


                        </div>
                        <!--main-ws-sec end-->
                    </div>
                    <!-- Center END -->


                    <!-- Right Side -->
                    <div class="col-lg-3 pd-right-none no-pd">
                        <div class="right-sidebar">
                            <div class="widget widget-about">
                                <img src="<?php echo BASE_URL; ?>public/images/wd-logo.png" alt="">
                                <h3>Join to our Community</h3>
                                <span>Pay only for the Hours worked</span>
                                <div class="sign_link">
                                    <h3><a href="sign-in.html" title="">Sign up</a></h3>
                                    <a href="#" title="">Learn More</a>
                                </div>
                            </div>
                            <!--widget-about end-->
                            <div class="widget widget-jobs">
                                <div class="sd-title">
                                    <h3>Top Jobs</h3>
                                    <i class="la la-ellipsis-v"></i>
                                </div>
                                <div class="jobs-list">
                                    <div class="job-info">
                                        <div class="job-details">
                                            <h3>Senior Product Designer</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                        </div>
                                        <div class="hr-rate">
                                            <span>$25/hr</span>
                                        </div>
                                    </div>
                                    <!--job-info end-->
                                    <div class="job-info">
                                        <div class="job-details">
                                            <h3>Senior UI / UX Designer</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                        </div>
                                        <div class="hr-rate">
                                            <span>$25/hr</span>
                                        </div>
                                    </div>
                                    <!--job-info end-->
                                    <div class="job-info">
                                        <div class="job-details">
                                            <h3>Junior Seo Designer</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                        </div>
                                        <div class="hr-rate">
                                            <span>$25/hr</span>
                                        </div>
                                    </div>
                                    <!--job-info end-->
                                    <div class="job-info">
                                        <div class="job-details">
                                            <h3>Senior PHP Designer</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                        </div>
                                        <div class="hr-rate">
                                            <span>$25/hr</span>
                                        </div>
                                    </div>
                                    <!--job-info end-->
                                    <div class="job-info">
                                        <div class="job-details">
                                            <h3>Senior Developer Designer</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                        </div>
                                        <div class="hr-rate">
                                            <span>$25/hr</span>
                                        </div>
                                    </div>
                                    <!--job-info end-->
                                </div>
                                <!--jobs-list end-->
                            </div>
                            <!--widget-jobs end-->
                            <div class="widget widget-jobs">
                                <div class="sd-title">
                                    <h3>Most Viewed This Week</h3>
                                    <i class="la la-ellipsis-v"></i>
                                </div>
                                <div class="jobs-list">
                                    <div class="job-info">
                                        <div class="job-details">
                                            <h3>Senior Product Designer</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                        </div>
                                        <div class="hr-rate">
                                            <span>$25/hr</span>
                                        </div>
                                    </div>
                                    <!--job-info end-->
                                    <div class="job-info">
                                        <div class="job-details">
                                            <h3>Senior UI / UX Designer</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                        </div>
                                        <div class="hr-rate">
                                            <span>$25/hr</span>
                                        </div>
                                    </div>
                                    <!--job-info end-->
                                    <div class="job-info">
                                        <div class="job-details">
                                            <h3>Junior Seo Designer</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit..</p>
                                        </div>
                                        <div class="hr-rate">
                                            <span>$25/hr</span>
                                        </div>
                                    </div>
                                    <!--job-info end-->
                                </div>
                                <!--jobs-list end-->
                            </div>
                            <!--widget-jobs end-->
                            <div class="widget suggestions full-width">
                                <div class="sd-title">
                                    <h3>Most Viewed People</h3>
                                    <i class="la la-ellipsis-v"></i>
                                </div>
                                <!--sd-title end-->
                                <div class="suggestions-list">
                                    <div class="suggestion-usd">
                                        <img src="<?php echo BASE_URL; ?>public/images/resources/s1.png" alt="">
                                        <div class="sgt-text">
                                            <h4>Jessica William</h4>
                                            <span>Graphic Designer</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="<?php echo BASE_URL; ?>public/images/resources/s2.png" alt="">
                                        <div class="sgt-text">
                                            <h4>John Doe</h4>
                                            <span>PHP Developer</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="<?php echo BASE_URL; ?>public/images/resources/s3.png" alt="">
                                        <div class="sgt-text">
                                            <h4>Poonam</h4>
                                            <span>Wordpress Developer</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="<?php echo BASE_URL; ?>public/images/resources/s4.png" alt="">
                                        <div class="sgt-text">
                                            <h4>Bill Gates</h4>
                                            <span>C &amp; C++ Developer</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="<?php echo BASE_URL; ?>public/images/resources/s5.png" alt="">
                                        <div class="sgt-text">
                                            <h4>Jessica William</h4>
                                            <span>Graphic Designer</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="suggestion-usd">
                                        <img src="<?php echo BASE_URL; ?>public/images/resources/s6.png" alt="">
                                        <div class="sgt-text">
                                            <h4>John Doe</h4>
                                            <span>PHP Developer</span>
                                        </div>
                                        <span><i class="la la-plus"></i></span>
                                    </div>
                                    <div class="view-more">
                                        <a href="#" title="">View More</a>
                                    </div>
                                </div>
                                <!--suggestions-list end-->
                            </div>
                        </div>
                        <!--right-sidebar end-->
                    </div>
                    <!-- Right Side END -->




                </div><!-- end row -->
            </div><!-- main-section-data end -->
        </div><!-- end container -->
    </div><!-- end main section -->
</main>






<!-- MODAL -->

<!--post-project-popup start-->
<div class="post-popup pst-pj">
    <div class="post-project">
        <h3>Post Announcement</h3>
        <div class="post-project-fields">
            <form>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="title" placeholder="Title">
                    </div>
                    <div class="col-lg-12">
                        <div class="inp-field">
                            <select>
                                <option>Category</option>
                                <option>Category 1</option>
                                <option>Category 2</option>
                                <option>Category 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <input type="text" name="skills" placeholder="Skills">
                    </div>
                    <div class="col-lg-12">
                        <div class="price-sec">
                            <div class="price-br">
                                <input type="text" name="price1" placeholder="Price">
                                <i class="la la-dollar"></i>
                            </div>
                            <span>To</span>
                            <div class="price-br">
                                <input type="text" name="price1" placeholder="Price">
                                <i class="la la-dollar"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <textarea name="description" placeholder="Description"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <ul>
                            <li><button class="active" type="submit" value="post">Post</button></li>
                            <li><a href="#" title="">Cancel</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
        <!--post-project-fields end-->
        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
    </div>
    <!--post-project end-->
</div>
<!--post-project-popup end-->

<!--post-job-popup start-->
<div class="post-popup job_post">
    <div class="post-project">
        <h3>Post Activity</h3>
        <div class="post-project-fields">
            <form>
                <div class="row">
                    <div class="col-lg-12">
                        <input type="text" name="title" placeholder="Title">
                    </div>
                    <div class="col-lg-12">
                        <div class="inp-field">
                            <select>
                                <option>Category</option>
                                <option>Category 1</option>
                                <option>Category 2</option>
                                <option>Category 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <input type="text" name="skills" placeholder="Skills">
                    </div>
                    <div class="col-lg-6">
                        <div class="price-br">
                            <input type="text" name="price1" placeholder="Price">
                            <i class="la la-dollar"></i>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="inp-field">
                            <select>
                                <option>Full Time</option>
                                <option>Half time</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <textarea name="description" placeholder="Description"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <ul>
                            <li><button class="active" type="submit" value="post">Post</button></li>
                            <li><a href="#" title="">Cancel</a></li>
                        </ul>
                    </div>
                </div>
            </form>
        </div>
        <!--post-project-fields end-->
        <a href="#" title=""><i class="la la-times-circle-o"></i></a>
    </div>
    <!--post-project end-->
</div>
<!--post-job-popup end-->

<!-- MODAL END -->

<?php require_once(APP_DIR . 'views/includes/footbar.php'); ?>
<?php require_once(APP_DIR . 'views/includes/footer.php'); ?>