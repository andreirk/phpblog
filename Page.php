<!DOCTYPE HTML>

<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Your Website</title>
    <script>

    </script>
</head>

<body>

<header>
    <nav>
        <ul>
            <li>Your menu</li>
        </ul>
    </nav>
</header>

<section>

    <article>
        <header>
            <h2>Article title</h2>
            <p>
                <?php
                /**
                 * Created by PhpStorm.
                 * User: andrey
                 * Date: 08.01.2016
                 * Time: 17:32
                 */

              //  namespace phpOPP;


                class Page
                {
                    public $header = 'HEADER';
                    public $content;
                    public $footer;

                    function view_header(){

                    }
                }

                $index = new Page();
                $index->header = 'Index';
                echo $index->header;

                $admin = new Page();
                $admin->header = 'Admin';
                echo '<br>'.$admin->header;
                $view = new Page();
                @$view->header .= 'View';
                echo '<br>'.$view->header;
                echo '<br>';
                ?>

            </p>
        </header>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.;</p>
    </article>

    <article>
        <header>
            <h2>Article title</h2>
            <p>Posted on <time datetime=<?= date('l jS \of F Y h:i:s A');?>>September 4th 2009;</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
        </header>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
    </article>

</section>

<aside>
    <h2>About section</h2>
    <p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>
</aside>

<footer>
    <p>Copyright 2009 Your name</p>
</footer>

</body>

</html>


