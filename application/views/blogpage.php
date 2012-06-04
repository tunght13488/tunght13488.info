<?=doctype('html5')?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>PHP Developer | Ha The Tung</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ha the tung tunght tunght13488 blog">
    <meta name="author" content="tunght13488@gmail.com">

    <?=link_tag('assets/css/bootstrap/bootstrap.min.css')?>
    <!--
        <?=link_tag('assets/css/bootstrap/bootstrap-responsive.min.css')?>
     -->
    <?=link_tag('http://fonts.googleapis.com/css?family=Droid+Sans:400,700')?>
    <?=link_tag('assets/css/prettify/prettify.css')?>
    <?=link_tag('assets/css/style.less', 'stylesheet/less')?>
    <!--
        <?=link_tag('assets/css/style.css')?>
    -->

    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <link rel="shortcut icon" href="<?=base_url('assets/ico/favico.ico')?>">
    <!--
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    -->
</head>

<body>

    <div class="container">

        <header>
            <h1>@tunght13488</h1>

            <p class="lead">
                <strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. <em>Aenean ultricies mi vitae est.</em> Mauris placerat eleifend leo. Quisque sit amet est et sapien ullamcorper pharetra. Vestibulum erat wisi, condimentum sed, <code>commodo vitae</code>, ornare sit amet, wisi. Aenean fermentum, elit eget tincidunt condimentum, eros ipsum rutrum orci, sagittis tempus lacus enim ac dui. <a href="#">Donec non enim</a> in turpis pulvinar facilisis. Ut felis.
            </p>

            <p class="link">
                <a href="#">@stacoverflow</a>
                <a href="#">@github</a>
                <a href="#">@twitter</a>
                <a href="#">@facebook</a>
                <a href="#">@email</a>
                <a href="#">@contact</a>
                <a href="#">@feed</a>
            </p>
        </header>

        <div class="content">

            <?php for ($i = 1; $i <= 5; $i++): ?>

                <section>
                    <div class="page-header">
                        <h4>2012</h4>
                    </div>

                    <ul class="blog-list unstyled">
                        <li>
                            <a href="#">
                                <span class="prefix">
                                    <span class="prefix-text pull-left">Blog</span>
                                    <span class="prefix-symbol float-right">&rsaquo;</span>
                                </span>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="prefix">
                                    <span class="prefix-text pull-left">Code</span>
                                    <span class="prefix-symbol">&rsaquo;</span>
                                </span>
                                Lorem ipsum dolor <span>(sit amet, consectetuer adipiscing elit)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="prefix">
                                    <span class="prefix-text pull-left">Code</span>
                                    <span class="prefix-symbol">&rsaquo;</span>
                                </span>
                                Lorem ipsum <span>(dolor sit amet, consectetuer adipiscing elit)</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="prefix">
                                    <span class="prefix-text pull-left" style="display: inline-block;">Blog</span>
                                    <span class="prefix-symbol clearfix\">&rsaquo;</span>
                                </span>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="prefix">
                                    <span class="prefix-text pull-left">Blog</span>
                                    <span class="prefix-symbol">&rsaquo;</span>
                                </span>
                                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            </a>
                        </li>
                    </ul>
                </section>

            <?php endfor; ?>

        </div>

        <footer>
            <p class="pull-right"><a href="#top">Back to top</a></p>
            <p>Power by <a href="http://codeigniter.com/">CodeIgniter</a></p>
        </footer>

    </div> <!-- /container -->

    <?=script_tag('assets/js/less/less.min.js')?>
    <?=script_tag('assets/js/prettify/prettify.js')?>
    <?=script_tag('https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js')?>
    <script type="text/javascript">
    var base_url = '<?=base_url()?>';
    window.jQuery || document.write('<script type="text/javascript" src="'+base_url+'assets/js/jquery/jquery.min.js"><\/script>');
    </script>
    <?=script_tag('assets/js/bootstrap/bootstrap.min.js')?>
    <?=script_tag('assets/js/application.js')?>

</body>
</html>