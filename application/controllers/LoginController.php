<?php

class LoginController extends Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $this->View->render('login/index');

        } else {
            // error
        }
    }

    public function action() {

    }
}