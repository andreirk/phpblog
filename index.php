<?php
    namespace phpblog;
    require_once 'config.php';
    require_once 'classes/Page.php';
    require_once 'classes/Database.php';

?>
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
                $page = new Page();

                if(isset($_GET['id']))
                {

                } else {
                    $text = $page->get_all();
                }

                $index = new Page('Header for Index', 'Content for Index', 'Footer for Index');
                $index->header = 'Index';
                echo $index->header;
                $index->view_header();
                $index->view_the_Page();

                $admin = new Page('Header for Admin', 'Content for Admin', 'Footer for Admin');

                echo '<br>'.$admin->header;
                $admin->foo();
                $view = new Page('Header for Content', 'Content for Content', 'Footer for Content');
                echo '<br>'.$view->view_the_Page();
                echo '<br>';
                $about = new Page('Header for About', 'Content for About', 'Footer for About');
                echo '<br> page about is '. $about->view_the_Page();
                ?>

            </p>
        </header>
        <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.;</p>
    </article>

    <article>
        <header>
            <h2>Article title</h2>
            <p>Posted on <time datetime=<?= date('l');?>>September 4th 2009;</time> by <a href="#">Writer</a> - <a href="#comments">6 comments</a></p>
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


