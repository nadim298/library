<!doctype html>
<html class="no-js" lang="zxx">


 
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Place favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    <link rel="shortcut icon" type="image/ico" href="images/favicon.ico" />

    <!-- Plugin-CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/icofont.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/cardslider.css">
    <link rel="stylesheet" href="css/responsiveslides.css">

    <!-- Main-Stylesheets -->
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/overright.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body data-spy="scroll" data-target="#mainmenu" data-offset="50">
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->



    <?php include 'includes/header.php';?>
    <section>
        <div class="space-80"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-10 pull-right">
                    <h4>Search Box</h4>
                    <div class="space-5"></div>
                    <form action="#">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Enter book name" name="search_text">
                            <div class="input-group-btn">
                                <a href="books.php?search_text=search_text"><button type="submit" class="btn btn-primary"><i class="icofont icofont-search-alt-2"></i></button><a>
                            </div>
                        </div>
                    </form>
                    <div class="space-30"></div>
                    <div class="row">
                        <div class="pull-left col-xs-12 col-sm-5 col-md-6">
                            <p>Result For <a href="#" class="text-primary">"How To Be a Designer"</a></p>
                            <p><strong>6</strong> of <strong>76</strong> Book Found</p>
                        </div>
                        <div class="pull-right col-xs-12 col-sm-7 col-md-6">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <label class="control-label col-xs-4" for="sort">Sont By : </label>
                                    <div class="col-xs-8">
                                        <div class="form-group">
                                            <select name="sort" id="sort" class="form-control">
                                                <option value="">Best Match</option>
                                                <option value="">Best Book</option>
                                                <option value="">Latest Book</option>
                                                <option value="">Old Book</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="space-20"></div>
                    <div class="row">
					<?php
					include 'includes/db.php';
                        if(isset($_GET['category']))
						{
							$category_id=$_GET['category'];
							$query="SELECT * FROM books WHERE category_id=$category_id";
						}
                        if(isset($_GET['search_text']))
						{
							$search_text=$_GET['search_text'];
							$query="SELECT * FROM books WHERE name like '%$search_text%'";
						}
						
                        else
                            $query="SELECT * FROM books";
						$run=mysqli_query($conn,$query);
						if(mysqli_num_rows($run)>0){
							while($row=mysqli_fetch_array($run)){
								$db_id=$row['id'];
								$db_name=$row['name'];
								$db_description=$row['description'];
								$db_author=$row['author'];
								$db_photo=$row['photo'];
							
					?>
                        <div class="col-xs-12 col-md-6">
                            <div class="category-item well yellow">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="<?php echo $db_photo?>" class="media-object book-img" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h5><?php echo $db_name?></h5>
                                        <h6><?php echo $db_author?></h6>
                                        <div class="space-10"></div>
                                        <ul class="list-inline list-unstyled rating-star">
                                            <li class="active"><i class="icofont icofont-star"></i></li>
                                            <li class="active"><i class="icofont icofont-star"></i></li>
                                            <li class="active"><i class="icofont icofont-star"></i></li>
                                            <li class="active"><i class="icofont icofont-star"></i></li>
                                            <li><i class="icofont icofont-star"></i></li>
                                        </ul>
                                        <div class="space-10"></div>
                                        <p> </p>
                                        <a href="books.html" class="text-primary">See the Book</a>
                                    </div>
                                </div>
                            </div>
                        </div>
						<?php
							}
						}
						?>
                      
                        
                    </div>
                    <div class="space-60"></div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="shop-pagination pull-right">
                                <ul id="pagination-demo" class="pagination-sm pagination">
                                    <li class="page-item first"><a href="#" class="page-link">First</a></li>
                                    <li class="page-item prev"><a href="#" class="page-link">Previous</a></li>
                                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                                    <li class="page-item"><a href="books_2.html" class="page-link">2</a></li>
                                    <li class="page-item active"><a href="books_3.html" class="page-link">3</a></li>
                                    <li class="page-item"><a href="books_4.html" class="page-link">4</a></li>
                                    <li class="page-item"><a href="books_5.html" class="page-link">5</a></li>
                                    <li class="page-item"><a href="books_6.html" class="page-link">6</a></li>
                                    <li class="page-item"><a href="books_7.html" class="page-link">7</a></li>
                                    <li class="page-item next"><a href="#" class="page-link">Next</a></li>
                                    <li class="page-item last"><a href="#" class="page-link">Last</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar-Start -->
                <div class="col-xs-12 col-md-2">
                    <aside>
                        <h3><i class="icofont icofont-filter"></i> Filter By</h3>
                        <div class="space-30"></div>
                        <div class="sigle-sidebar">
                            <h4>Category</h4>
                            <hr>
                            <ul class="list-unstyled menu-tip">
							<?php
								include 'includes/db.php';
						$query="SELECT * FROM category";
						$run=mysqli_query($conn,$query);
						if(mysqli_num_rows($run)>0){
							while($row=mysqli_fetch_array($run)){
								$db_id=$row['category_id'];
								$db_name=$row['category_name'];
							?>
                                <li><a href="books.php?category=<?php echo $db_id;?>"><?php echo "$db_name"?></a></li>
                                <?php
									}
								}
								?>
                            </ul>
                            <a href="books.php" class="btn btn-primary btn-xs">See All</a>
                        </div>
                        <div class="space-20"></div>
                        <div class="sigle-sidebar">
                            <h4>Rating</h4>
                            <hr>
                            <ul class="list-inline list-unstyled rating-star">
                                <li class="active"><i class="icofont icofont-star"></i></li>
                                <li class="active"><i class="icofont icofont-star"></i></li>
                                <li class="active"><i class="icofont icofont-star"></i></li>
                                <li class="active"><i class="icofont icofont-star"></i></li>
                                <li class="active"><i class="icofont icofont-star"></i></li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <!-- Sidebar-End -->
            </div>
        </div>
        <div class="space-80"></div>
    </section>
    <!-- Footer-Area -->
    <footer class="black-bg text-white">
        <div class="space-60"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-4">
                    <a href="#"><img src="images/logo.png" alt=""></a>
                    <div class="space-20"></div>
                    <p> </p>
                    <div class="space-10"></div>
                    <ul class="list-inline list-unstyled social-list">
                        <li><a href="#"><i class="icofont icofont-social-facebook"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-social-twitter"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-social-behance"></i></a></li>
                        <li><a href="#"><i class="icofont icofont-brand-linkedin"></i></a></li>
                    </ul>
                    <div class="space-10"></div>
                    <ul class="list-unstyled list-inline tip yellow">
                        <li><i class="icofont icofont-square"></i></li>
                        <li><i class="icofont icofont-square"></i></li>
                        <li><i class="icofont icofont-square"></i></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-md-offset-1">
                    <h4 class="text-white">Contact Us</h4>
                    <div class="space-20"></div>
                    <table class="table border-none addr-dt">
                        <tr>
                            <td><i class="icofont icofont-social-google-map"></i></td>
                            <td><address>3050 Universal Blvd #190 Fort Lauderdale, block-c </address></td>
                        </tr>
                        <tr>
                            <td><i class="icofont icofont-email"></i></td>
                            <td>library@domain.com</td>
                        </tr>
                        <tr>
                            <td><i class="icofont icofont-phone"></i></td>
                            <td>+008 018 528 527 21</td>
                        </tr>
                        <tr>
                            <td><i class="icofont icofont-globe-alt"></i></td>
                            <td><a href="www.susislibrary.html" target="_blank">www.library.com</a></td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3 col-md-offset-1">
                    <h4 class="text-white">Useful Link</h4>
                    <div class="space-20"></div>
                    <ul class="list-unstyled menu-tip">
                        <li><a href="#">Costumer Service</a></li>
                        <li><a href="#">Help Desk</a></li>
                        <li><a href="#">Forum</a></li>
                        <li><a href="#">Staff Profile</a></li>
                        <li><a href="#">Live Chat</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="space-60"></div>
    </footer>
    <!-- Footer-Area-End -->

    <!-- Vandor-JS -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <!-- Plugin-JS -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/responsiveslides.min.js"></script>
    <script src="js/jquery.cardslider.min.js"></script>
    <script src="js/pagination.js"></script>
    <script src="js/scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/plugins.js"></script>
    <!-- Active-JS -->
    <script src="js/main.js"></script>

</body>


 
</html>