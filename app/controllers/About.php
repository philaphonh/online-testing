<?php
    class About extends Controller {
        public function index() {
            $this->view("about", ['title' => 'ກ່ຽວກັບພວກເຮົາ']);
        }
    }
