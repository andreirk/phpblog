<?php
namespace phpblog;
/**
 * Created by PhpStorm.
 * User: andrey
 * Date: 08.01.2016
 * Time: 17:32
 */


class Page
    {
        // properties of the class
        public $text;
        public $header = 'HEADER';
        public $content = 'DEFAULT CONTENT';
        public $footer = 'FOOTER';

        function __construct($head = 'HEADER', $text = '', $bottom = '')
        {
            $this->header  = $head;
            $this->content = $text;
            $this->footer  = $bottom;
        }
        function __destruct()
        {
            // TODO: Implement __destruct() method.
        }

        public function get_all()
        {
            $db = new Database(HOST,USER,PASS,DB_NAME);
            $result = $db->get_all_from_db();

            return $result;
        }

        public function get_one($id)
        {

        }

        // method of the class
        public function view_header(){
            echo 'Вызов метода класса Page хедер = '.$this->header.'<br>';
        }

        public function view_content($text,$template_name){
            $text = $text;
            ob_start();
            include $template_name.'.php';
            return ob_get_clean();
        }

        public function view_footer(){
            echo $this->footer.'<br>';
        }

        public function get_body($text,$template_name){

            $this->view_header();
            $this->view_content($text, $template_name);
            $this->view_footer();
        }

        public function foo()
        {
            return $this->view_header();
        }
    }

?>
