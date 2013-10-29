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

    }

    public function p_add() {

        # Associate this post with this user
        $_POST['user_id']  = $this->user->user_id;

        # Unix timestamp of when this post was created / modified
        $_POST['created']  = Time::now();
        $_POST['modified'] = Time::now();

        # Insert
        # Note we didn't have to sanitize any of the $_POST data because we're using the insert method which does it for us
        DB::instance(DB_NAME)->insert('posts', $_POST);

        # Quick and dirty feedback
        echo "Your post has been added. <a href='/posts/add'>Add another</a>";

    }


	public function index() {

    # Set up the View
    $this->template->content = View::instance('v_posts_index');
    $this->template->title   = "Posts";

    # Build the query
    $q = "SELECT 
            posts .* , 
            users.first_name, 
            users.last_name
        FROM posts
        INNER JOIN users 
            ON posts.user_id = users.user_id
        WHERE posts.user_id = '".$this->user->user_id."'";


    # Run the query
    $posts = DB::instance(DB_NAME)->select_rows($q);

    # Pass data to the View
    $this->template->content->posts = $posts;

    # Render the View
    echo $this->template;

	}



}