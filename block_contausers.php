<?php 

class block_contausers extends block_base {

    public function init(){}

    public function get_content() {

        $this->content =  new stdClass;
        $this->content->text = 'Plugin de exmeplo';
        return $this->content;
    }
}