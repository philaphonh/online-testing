<?php

    class Index extends Controller {
        private $testModel;

        public function __construct() {
            $this->testModel = $this->model('Tests');
        }

        public function index() {
            $tests = $this->testModel->getTests();
            $data = [
                'title' => 'ໜ້າຫຼັກ',
                'tests' => $tests
            ];
            $this->view("index", $data);
        }
    }