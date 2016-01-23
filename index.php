<?php
    namespace phpblog;
    require_once 'config.php';
    require_once 'classes/Page.php';
    require_once 'classes/Database.php';

?>

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
        var_dump($text);
        echo $page->get_body($text,'main_tmp');
    }


    ?>



