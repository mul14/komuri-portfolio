<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Komuri Projects</title>

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css"
          rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet" />
</head>
<body>

<header>
    <div class="container">
        <div class="title pull-left">
            <span class="orange-text bold-text">&lsaquo;</span>/
            <strong>KOMURI</strong> <span>PROJECTS</span>
            <span class="orange-text bold-text">&rsaquo;</span>
        </div>

        <nav class="menu pull-right">
            <div>
                <a href="http://komuri.co.id">Komuri Home Page</a>
            </div>
        </nav>
    </div>
</header>

<section class="main" role="main">
    <div class="container">
        <div class="row">
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <!-- BOX -->
                <div class="span4 box">
                    <div class="box-inner">
                        <div class="image">
                            <img src="http://placehold.it/480x320"/>
                        </div>
                        <div class="title">
                            Title
                        </div>
                        <div class="description">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad autem consequatur eos fuga
                            possimus
                            reiciendis similique tempore veniam! Ad aliquam animi blanditiis hic, obcaecati perferendis
                            quis
                            rem ut? Blanditiis, nisi?
                        </div>
                        <div class="actions">

                            <div class="btn-group">
                                <a href="#" class="btn btn-small">
                                    <i class="icon-eye-open"></i> Demo
                                </a>
                                <button class="btn btn-small dropdown-toggle" data-toggle="dropdown" data-target="#">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Home page</a></li>
                                    <li><a href="#">Administrator</a></li>
                                </ul>
                            </div>

                            <div class="btn-group">
                                <a href="#" class="btn btn-small">
                                    <i class="icon-book"></i> Manual
                                </a>
                                <button class="btn btn-small dropdown-toggle" data-toggle="dropdown" data-target="#">
                                    <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Manual Book</a></li>
                                </ul>
                            </div>

                            <a href="#" class="btn btn-small"><i class="icon-camera"></i> Screenshots</a>
                        </div>
                    </div>
                </div>
                <!--/ BOX -->
            <?php endfor ?>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        &copy; Komuri 2013
    </div>
</footer>

<script src="//code.jquery.com/jquery-2.0.0.min.js"></script>
<script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
<script src="//masonry.desandro.com/jquery.masonry.min.js"></script>
<script>
    $(function () {
        $('.main .container').masonry({
            itemSelector: '.box',
            isFitWidth: true
        });
    })
</script>
</body>
</html>
