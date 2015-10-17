<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html";
          charset="UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/img/favicon.ico">
    <title>Blog Post | Bootstrap to WordPress</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome Icons -->
    <link href="assets/css/font-awesome/css/font-awesome.min.css"
          rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'>


    <!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="blog">

<!-- Header -->
<header class="site-header" role="banner">

    <!-- NAVBAR -->
    <div class="navbar-wrapper">

        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="assets/img/logo.png" alt="Bootstrap to Wordpress"></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Home</a></li>
                        <li class="active"><a href="blog.php">Blog</a></li>
                        <li><a href="resources.html">Resources</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

</header>

    <!-- Main Content -->
    <div class="container">
        <div class="row" id="primary">

            <div id="content" class="col-sm-8">

                <article class="post">
                    <header>
                        <h1>Blog title here</h1>
                        <div class="post-details">
                            <i class="fa fa-user"></i> Brad Hussey
                            <i class="fa fa-clock-o"></i> <time>August 7, 2014</time>
                            <i class="fa fa-folder"></i> <a href="">Tutorials</a>, <a href="">Coding</a>
                            <i class="fa fa-tags"></i> Tagged <a href="">wordpress</a>, <a href="">premium</a>, <a href="">another tag</a>, <a href="">yadda yadaa</a>

                            <div class="post-comments-badge">
                                <a href=""><i class="fa fa-comments"></i> 168</a>
                            </div><!-- post-comments-badge -->
                        </div><!-- post-details -->
                    </header>
                    <div class="post-image">
                        <img src="assets/img/hero-bg.jpg">
                    </div><!-- post-image -->
                    <div class="post-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        <h3>Subtitle</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                        <h4>Another Subtitle</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                    </div><!-- post body -->
                </article><!-- post -->

                <div id="comments">
                    <div class="comments-wrap">
                        <h3>4 comments</h3>

                        <!-- These comments will have an image and more information when we use WordPress -->

                        <ol class="comments-list">
                            <li class="comment">
                                <h4>John Smith <small>&bull; Aug 12, 2014</small></h4>
                                <div class="comment-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis.</p>

                                    <p>Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                                </div><!-- comment-body -->

                                <ol class="children">
                                    <li class="comment">
                                        <h4>Chris McCooper <small>&bull; Aug 12, 2014</small></h4>
                                        <div class="comment-body">
                                            <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis.</p>
                                        </div><!-- comment-body -->

                                        <ol class="children">
                                            <li class="comment">
                                                <h4>Johnny Dee <small>&bull; Aug 12, 2014</small></h4>
                                                <div class="comment-body">
                                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis.</p>
                                                </div><!-- comment-body -->
                                            </li>
                                        </ol>

                                    </li>
                                </ol>
                            </li>

                            <li class="comment">
                                <h4>Jane Smith <small>&bull; Aug 9, 2014</small></h4>
                                <div class="comment-body">
                                    <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cras mattis consectetur purus sit amet fermentum. Donec ullamcorper nulla non metus auctor fringilla. Sed posuere consectetur est at lobortis.</p>
                                </div><!-- comment-body -->
                            </li>
                        </ol><!-- comments-list -->

                        <div id="leave-comment">
                            <h3>Leave a comment</h3>

                            <form>
                                <p>Your email address will not be published. Required fields are marked <span class="required">*</span></p>
                                <p class="comment-form-author">
                                    <label>Name *</label>
                                    <input id="author" type="text">
                                </p>
                                <p class="comment-form-email">
                                    <label for="email">Email *</label>
                                    <input id="email"  type="email">
                                </p>
                                <p class="comment-form-url">
                                    <label for="url">Website</label>
                                    <input id="url"  type="url">
                                </p>
                                <p class="comment-form-comment">
                                    <label for="comment">Comment</label>
                                    <textarea id="comment" cols="45" rows="8"></textarea>
                                </p>
                                <p class="form-submit">
                                    <input name="submit" type="submit" id="submit" value="Post Comment">
                                </p>
                            </form>

                        </div><!-- leave-comment -->

                    </div><!-- comments -->
                </div><!-- comments-wrap -->
            </div><!-- content -->

            </div><!-- col-->

        <!-- SIDEBAR
			================================================== -->
        <aside class="col-sm-4">

            <div class="widget">
                <h4>Join our Mailing List</h4>
                <p>Keep up-to-date with the latest news, and we'll <strong>send you something special as a thank you!</strong></p>
                <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                    Click here to subscribe
                </button>
            </div><!-- widget -->

            <div class="widget">
                <form role="form" class="search-form">
                    <label for="sidebar-search" class="sr-only">Search the blog</label>
                    <input type="text" placeholder="Search the blog..." id="sidebar-search">
                </form>
            </div><!-- widget -->

            <div class="widget">
                <h4>About Bootstrap to Wordpress</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div><!-- widget -->

            <div class="widget">
                <h4>Recent Posts</h4>
                <ul>
                    <li><a href="">Blog post #1</a></li>
                    <li><a href="">Blog post #2</a></li>
                    <li><a href="">Blog post #3</a></li>
                    <li><a href="">Blog post #4</a></li>
                    <li><a href="">Blog post #5</a></li>
                </ul>
            </div><!-- widget -->

            <div class="widget">
                <h4>Categories</h4>
                <ul>
                    <li><a href="">Category #1</a></li>
                    <li><a href="">Category #2</a></li>
                    <li><a href="">Category #3</a></li>
                    <li><a href="">Category #4</a></li>
                    <li><a href="">Category #5</a></li>
                    <li><a href="">Category #6</a></li>
                </ul>
            </div><!-- widget -->

        </aside>

    </div><!-- primary -->
</div><!-- container -->

<!-- Sign up section -->
<section id="signup" data-type="background" data-speed="4">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
                <p><a href="" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
            </div><!-- end col -->
        </div><!-- row -->
    </div><!-- container -->
</section><!-- signup -->


<!-- Footer -->
<footer>
    <div class="container">
        <div class="col-sm-3">
            <p><a href="/"><img src="assets/img/logo.png" alt="Bootstrap to WordPress"></a></p>
        </div><!-- end col -->
        <div class="col-sm-6">
            <nav>
                <ul class="list-unstyled list-inline">
                    <li><a href="">Home</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">Resources</a></li>
                    <li><a href="">Contact</a></li>
                    <li class="signup-link"><a href="">Sign up now</a></li>
                </ul>
            </nav>
        </div><!-- end col -->
        <div class="col-sm-3">
            <p class="pull-right">&copy; 2014 Brad Hussey</p>
        </div><!-- end col -->
    </div><!-- container -->
</footer>



<!-- Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel"><i class="fa fa-envelope"></i> Subscribe to our Mailing List</h4>
            </div><!-- modal-header -->

            <div class="modal-body">
                <p>Simply enter your name and email! As a thank you for joining us, we're going to give you one of our best-selling courses, <em>for free!</em></p>

                <form class="form-inline" role="form">
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-name">Your first name</label>
                        <input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
                    </div>
                    <div class="form-group">
                        <label class="sr-only" for="subscribe-email">and your email</label>
                        <input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
                    </div>
                    <input type="submit" class="btn btn-danger" value="Subscribe!">
                </form>

                <hr>

                <p><small>By providing your email you consent to receiving occasional promotional emails &amp; newsletters. <br>No Spam. Just good stuff. We respect your privacy &amp; you may unsubscribe at any time.</small></p>
            </div><!-- modal-body -->

        </div><!-- modal-content -->
    </div><!-- modal-dialog -->
</div><!-- modal -->

<!-- Bootstrap core javascript
Placed at the end of the document so the pages load faster
-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

<script src="assets/js/jquery-2.1.4.min.js"></script>

<script src="assets/js/bootstrap.min.js"></script>

<script src="assets/js/main.js"></script>

<!-- Adobe Typekit Fonts -->
<script src="https://use.typekit.net/omd6jec.js"></script>
<script>try{Typekit.load({ async: true });}catch(e){}</script>

</body>
</html>