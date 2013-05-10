<!doctype html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Komuri Projects</title>

    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.no-icons.min.css"
          rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.0.2/css/font-awesome.css" rel="stylesheet">
    <style>
        html {
            font-size: 62.5%;
        }

        header {
            background: #222;
        }

        header .title {
            color: white;
            font-size: 2.6rem;
            padding: 10px 0;
        }

        header .bold-text {
            font-size: 4.0rem;
        }

        header nav {
            padding: 10px 0;
        }

        nav a:link {
            color: white;
            text-decoration: none;
        }

        nav a:before {
            content: ' « ';
        }

        nav a:hover {
            color: orange;
        }

        .orange-text {
            color: orange;
        }

        .bold-text {
            font-weight: bold;
        }

        .main {
            background: #f1f1f1;
            padding-top: 20px;
            min-height: 600px;
        }

        .main .box {
            background: #fff;
            margin-bottom: 20px;
        }

        .main .box-inner {
            border: 1px solid #ccc;
        }

        .main .box .image {
            padding: 10px;
            text-align: center;
        }

        .main .title {
            padding: 10px;
            font-size: 1.6rem;
        }

        .main .description {
            padding: 10px;
        }

        .main .actions {
            padding: 10px;
            text-align: center;
        }

        footer {
            padding: 10px 0;
            background: #111;
            color: #f1f1f1;
            text-align: right;
        }
    </style>
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
                            <a href="javascript:;" class="btn btn-small">Demo</a>
                            <a href="javascript:;" class="btn btn-small">Manual</a>
                            <a href="javascript:;" class="btn btn-small">Screenshots</a>
                        </div>
                    </div>
                </div>
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
<script>
    $(function () {

    })
</script>
</body>
</html>
