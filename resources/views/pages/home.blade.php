<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>P3</title>
    <!-- Bootstrap core CSS -->
    <link href="{{ URL::asset('css/bootstrap.css') }}" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Custom styles for this template -->
    <link href="{{ URL::asset('css/carousel.css') }}" rel="stylesheet">
</head>
<!-- NAVBAR
================================================== -->
<body>
<div class="navbar-wrapper">
    <div class="container">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">DWA-15 Project 3</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active">
                            <a href="#">Home</a>
                        </li>
                        <li>
                            <a href="#about">User Generator</a>
                        </li>
                        <li>
                            <a href="#contact">Lorem Ipsum Generator</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>
<!-- Carousel
================================================== -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img class="first-slide" src="http://pinegrow.com/placeholders/img4.jpg" alt="First slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>User Generator.</h1>
                    <p>Click the button. Generator some fake users. You know you want to.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Generate users.</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="second-slide" src="http://pinegrow.com/placeholders/img3.jpg" alt="Second slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>Apple Ipsum.</h1>
                    <p>The sweetest, crispiest ipsum on this website. Make up some boilerplate with names of Apple products. Remember the Apple II?</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Apple Ipsum.</a></p>
                </div>
            </div>
        </div>
        <div class="item">
            <img class="third-slide" src="http://pinegrow.com/placeholders/img8.jpg" alt="Third slide">
            <div class="container">
                <div class="carousel-caption">
                    <h1>More Projects.</h1>
                    <p>There's more where this came from. Not much more. Just some more.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">More Projects</a></p>
                </div>
            </div>
        </div>
    </div>
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Previous</span></a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">Next</span></a>
</div>
<!-- /.carousel -->
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing">
    <!-- Three columns of text below the carousel -->
    <div class="row">
        <div class="col-lg-4">
            <img class="img-circle" src="http://pinegrow.com/placeholders/img6.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>User Generator</h2>
            <p>Tired of making up fake users for testing your app? Too many John Does and Jane Smiths?</p>
            <p>Click the button. Make up some users. Easy.</p>
            <p><a class="btn btn-default" href="#" role="button">Generate Users »</a><br></p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="http://pinegrow.com/placeholders/img5.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>Apple Ipsum Generator</h2>
            <p>Lorem ipsum dolor sit amet? How about Apple ipsum Macbook iPhone 6? Apple products are good for everything - now they're even good for boilerplate text.</p>
            <p><a class="btn btn-default" href="#" role="button">Generate Text »</a></p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
            <img class="img-circle" src="http://pinegrow.com/placeholders/img1.jpg" alt="Generic placeholder image" width="140" height="140">
            <h2>More Projects</h2>
            <p>This is project 3 of 4 in Dynamic Web Applications, CSCIE-15, Fall 2016. Check out the rest of this semester's projects.</p>
            <p><a class="btn btn-default" href="#" role="button">More »</a><br></p>
        </div>
        <!-- /.col-lg-4 -->
    </div>
    <!-- /.row -->
    <!-- START THE FEATURETTES -->
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Fake users.&nbsp;Real results.</h2>
            <p class="lead">Don't waste time making up fake users. You focus on making your app. We'll focus on high-quality fake names. With all the time you save, maybe you should call your mom. She's worried about you.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="http://pinegrow.com/placeholders/img6.jpg" alt="Generic placeholder image">
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7 col-md-push-5">
            <h2 class="featurette-heading">Lorem ipsum. <span class="text-muted">Meet Apple.</span></h2>
            <p class="lead">If you can name the month and year each of the last six MacBook Pro updates were released, then you should find a new hobby. If you think populating boilerplate text with words like "Safari" and "iPhone" would be mildly amusing, then you've come to the right spot.</p>
        </div>
        <div class="col-md-5 col-md-pull-7">
            <img class="featurette-image img-responsive center-block" src="http://pinegrow.com/placeholders/img7.jpg" alt="Generic placeholder image">
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="row featurette">
        <div class="col-md-7">
            <h2 class="featurette-heading">Looking for more? There's more.</h2>
            <p class="lead">This is project 3 of 4. That means two things: 1) there are two projects that preceded this project, and 2) there will be one more project after this one. Mysterious? No. It's very straightforward.</p>
        </div>
        <div class="col-md-5">
            <img class="featurette-image img-responsive center-block" src="http://pinegrow.com/placeholders/img9.jpg" alt="Generic placeholder image">
        </div>
    </div>
    <hr class="featurette-divider">
    <!-- /END THE FEATURETTES -->
    <!-- FOOTER -->
    <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>© 2016 Shep Moore-Berg.</p>
    </footer>
</div>
<!-- /.container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ URL::asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ URL::asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="{{ URL::asset('assets/js/holder.min.js') }}"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{ URL::asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
</body>
</html>
