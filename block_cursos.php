<?php 

class block_cursos extends block_base {

    public function init(){
        $this->title = 'bloco que conta cursos';
    }

    public function get_content() {
        global $DB;

        $query = 'select count(shortname) AS total from mdl_course';
        $resultados = $DB->get_record_sql($query);

        $this->content =  new stdClass;
        $this->content->text = 'Esse moodle tem ' . $resultados->total . ' cursos cadastrados';
        return $this->content;
    }
}