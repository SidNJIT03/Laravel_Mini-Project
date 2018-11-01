@extends('layouts.app')

@section('content')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide"
                     src="http://sf.co.ua/13/01/wallpaper-2543834.jpg"
                     alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-center">
                        <h1>Learn Laravel</h1>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide"
                     src="http://blog.addthiscdn.com/wp-content/uploads/2015/08/code-cleanup.png"
                     alt="Second slide">
                <div class="container">
                    <div class="carousel-caption" text-center>
                        <h1>Explore</h1>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide"
                     src="https://patrickcoombe.com/wp-content/uploads/2015/09/view-HTML-source-code-android.png"
                     alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-center">
                        <h1>Excel</h1>
                        <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle" src="https://www.wpclipart.com/blanks/buttons/round/button_round_blue.png"
                     alt="Generic placeholder image" width="140" height="140">
                <h2>Laravel Horizon</h2>
                <p>Laravel Horizon provides a beautiful dashboard and code-driven configuration for your Redis
                    queues.</p>
                <p><a class="btn btn-secondary" href="https://laravel.com/docs/5.7/horizon" role="button">View details
                        &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle"
                     src="http://www.clker.com/cliparts/9/4/e/7/1194985745696087979redroundbutton_01.svg.med.png"
                     alt="Generic placeholder image" width="140" height="140">
                <h2>Laravel Nova</h2>
                <p>Laravel Nova is a beautiful administration panel designed by the creator or Laravel.</p>
                <p><a class="btn btn-secondary" href="https://nova.laravel.com/" role="button">View details &raquo;</a>
                </p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" src="https://www.wpclipart.com/blanks/buttons/round/button_round_purple.png"
                     alt="Generic placeholder image" width="140" height="140">
                <h2>Laravel Echo</h2>
                <p>Event broadcasting, evolved. Bring the power of WebSockets to your application without the
                    complexity.</p>
                <p><a class="btn btn-secondary" href="https://laravel.com/docs/5.7/broadcasting" role="button">View
                        details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Database: Getting Started <span
                            class="text-muted">- It'll blow your mind.</span></h2>
                <p class="lead">Laravel makes interacting with databases extremely simple across a variety of database
                    backends using either raw SQL, the fluent query builder, and the Eloquent ORM. Currently, Laravel
                    supports four databases:
                <ul>
                    <li>MySQL</li>
                    <li>PostgreSQL</li>
                    <li>SQLite</li>
                    <li>SQL Server</li>
                </ul>
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="https://www.supraits.com/wp-content/uploads/2018/01/Databases.png"
                                            alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Eloquent ORM <span
                            class="text-muted">- See for yourself.</span></h2>
                <p class="lead">The Eloquent ORM included with Laravel provides a beautiful, simple ActiveRecord
                    implementation for working with your database. Each database table has a corresponding "Model" which
                    is used to interact with that table. Models allow you to query for data in your tables, as well as
                    insert new records into the table.<br><br>

                    Before getting started, be sure to configure a database connection in config/database.php. For more
                    information on configuring your database, check out the documentation..</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" src="https://achievement-images.teamtreehouse.com/badges-python-djangoorm-stage1.png"
                     alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Testing <span class="text-muted">- Checkmate!</span></h2>
                <p class="lead">Laravel is built with testing in mind. In fact, support for testing with PHPUnit is
                    included out of the box and a phpunit.xml file is already set up for your application. The framework
                    also ships with convenient helper methods that allow you to expressively test your applications.<br><br>

                    By default, your application's tests directory contains two directories: Feature and Unit. Unit
                    tests are tests that focus on a very small, isolated portion of your code. In fact, most unit tests
                    probably focus on a single method. Feature tests may test a larger portion of your code, including
                    how several objects interact with each other or even a full HTTP request to a JSON endpoint.<br><br>

                    An ExampleTest.php file is provided in both the Feature and Unit test directories. After installing
                    a new Laravel application, run phpunit on the command line to run your tests.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="https://appdevelopermagazine.com/images/news_images/Making-Application-Testing-a-First-Class-Citizen-App-Developer-Magazine_gd5jd6gn.jpg"
                     alt="Generic placeholder image">
            </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->
@endsection
