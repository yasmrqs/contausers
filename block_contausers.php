<?php 

class block_contausers extends block_base {

    public function init(){
        $this->title = 'bloco que conta users';
    }

    public function get_content() {
        global $DB;

        $query = 'select count(id) AS total from mdl_user';
        $resultados = $DB->get_record_sql($query);

        $this->content =  new stdClass;
        $this->content->text = 'Esse moodle tem ' . $resultados->total . ' usuários cadastrados';
        return $this->content;
    }
}