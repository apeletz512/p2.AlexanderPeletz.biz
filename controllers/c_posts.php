<?php

class posts_controller extends base_controller {

	public function __construct() {
        parent::__construct();

     }
	
    public function add() {

        # Setup view
            $this->template->content = View::instance('v_posts_add');
            $this->template->title   = "Make A Post";

        # Render template
            echo $this->template;



	function p_add() {

		var_dump($_POST);

	}


	public function index() {

		$q = 'SELECT *
				FROM posts';

		$post = DB::instance(DB_NAME)->select_rows($q);

		echo $this->template;
	}



}