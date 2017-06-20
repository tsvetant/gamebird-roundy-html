<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Narrow Jumbotron Template for Bootstrap</title>

    <!-- Fonts -->
    <link href='//fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Khand:300,400,500,600,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Courgette' rel='stylesheet' type='text/css'>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="js/mmenu/dist/css/jquery.mmenu.all.css" type="text/css" rel="stylesheet" />
    <link href="js/carousel/assets/owl.carousel.css" type="text/css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">



    <!-- Custom styles for this template -->

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="container">

    <div id="opentab"> <i class="fa fa-database"></i> Products </div>

    <div class="wrap">
      <div class="row-offcanvas row-offcanvas-left">

        <div id="sidebar" class="sidebar-offcanvas">
            <div class="col-md-12">
              <h3>
                GAMEBIRD STUDIOS
                <small>Featured project</small>
              </h3>
              <aside>
                <div class="latestproject wpone"><span>21</span></div>
                <h4>WP .ONE</h4>

                <ul id="double"> <span class="code-comment"><!-- Alter ID accordingly --></span>
                  <li><a href=""><i class="fa fa-info-circle"></i> Information</a></li>
                  <li><a href=""><i class="fa fa-leanpub"></i> Case Study</a></li>
                  <li><a href=""><i class="fa fa-bug"></i> Bugs</a></li>
                  <li><a href=""><i class="fa fa-check-square-o"></i> ToDo</a></li>
                  <li><a href=""><i class="fa fa-connectdevelop"></i> Compatibility</a></li>
                  <li><a href=""><i class="fa fa-bars"></i> Features</a></li>
                </ul>

                <!--div id="utility">
                  <ul>
                    <li><a class="wordpress" href=""></a></li>
                    <li><a class="bbpress" href=""></a></li>
                    <li><a class="html5" href=""></a></li>
                    <li><a class="css3" href=""></a></li>
                  </ul>
                </div-->


                <div id="bar">
                  <span style="width: 70%">
                    <i data-toggle="tooltip" data-placement="top" title="Stage: Development">70%</i>
                  </span>
                </div>
              </aside> <!-- aside -->
  
            </div> <!-- .col-md-12 -->

              <nav id="menu">
                <ul>
                <li class="active"><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#"><i class="fa fa-database"></i> Products</a>
                  <ul>
                    <li><a href="#"><i class="fa fa-paint-brush"></i> Themes</a>
                      <ul>
                        <li><a href="#"><i class="fa fa-html5"></i> HTML</a></li>
                        <li><a href="#"><i class="fa fa-wordpress"></i> WordPress</a></li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-android"></i> Mobile</a>
                      <ul>
                        <li><a href="#"><i class="fa fa-th-large"></i> Apps</a></li>
                        <li><a href="#"><i class="fa fa-gamepad"></i> Games</a></li>
                      </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-desktop"></i> Web</a></li>
                  </ul>
                </li>
                <li><a href="#"><i class="fa fa-desktop"></i> Projects</a></li>
                <li><a href="#"><i class="fa fa-flask"></i> Portfolio</a></li>
                <li><a href="#"><i class="fa fa-briefcase"></i> Clients</a></li>
                <li><a href="#"><i class="fa fa-leaf"></i> Services</a></li>
                <li><a href="#"><i class="fa fa-support"></i> Support</a></li>
                <li><a href="#"><i class="fa fa-info-circle"></i> About</a></li>
                <li><a href="#"><i class="fa fa-envelope"></i> Contact</a></li>
                </ul>
              </nav>

              <div class="clearfix clear"></div>


            
        </div> <!-- #sidebar -->




        <div id="main">
            <div id="openbar">
              <nav>
                <input type="text" value="http://gamebird/" />
                <button><i class="fa fa-refresh"></i></button>
                <button data-toggle="tooltip" data-placement="left" title="" data-original-title="We created this with no particular use, but to show-off"><i class="fa fa-home"></i></button>
              </nav>
            </div>
            <?php #include "content/carousels.php"; ?>
            <?php include "content/landing.php"; ?>
        </div><!-- #main -->

      </div>
    </div>


    </div> <!-- /container -->




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/mmenu/dist/js/jquery.mmenu.min.all.js"></script>
    <script type="text/javascript" src="js/carousel/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
  </body>
</html>
