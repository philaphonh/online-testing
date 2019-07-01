<?php
    class Test extends Controller {
        private $testModel;

        public function __construct() {
            $this->testModel = $this->model('Tests');
        }

        public function index() {
            $tests = $this->testModel->getTests();
            $data = [
                'title' => 'ບົດເສັງ',
                'tests' => $tests
            ];
            $this->view('tests/index', $data);
        }

        public function result() {
            $score = 0;
            $testId = $_POST['test_id'];
            for ($i = 1; $i <= 10; $i++) {
                $score += isset($_POST['q'.$i]) ? $_POST['q'.$i] : 0;
            }
            $resultStatus = $score / 10 >= 0.7 ? 'ຜ່ານ / Passed' : 'ຕົກ / Failed';
            $saved = $this->testModel->saveResult($_SESSION['user_id'], $testId, $score, $resultStatus);
            $data = [
                'title' => 'ຜົນເສັງ',
                'score' => $score,
                'result_status' => $resultStatus,
                'saved' => $saved ? true : false
            ];
            $this->view('tests/result', $data);
        }

        public function c_test() {
            if (isset($_SESSION['user_id'])) {
                $data = [
                    'title' => 'ບົດເສັງພາສາ C',
                ];
                $this->view('tests/c_test', $data);
            } else {
                redirect('user/login');
            }
        }

        public function java_test() {
            if (isset($_SESSION['user_id'])) {
                $data = [
                    'title' => 'ບົດເສັງພາສາ Java',
                ];
                $this->view('tests/java_test', $data);
            } else {
                redirect('user/login');
            }
        }

        public function javascript_test() {
            if (isset($_SESSION['user_id'])) {
                $data = [
                    'title' => 'ບົດເສັງພາສາ Javascript',
                ];
                $this->view('tests/javascript_test', $data);
            } else {
                redirect('user/login');
            }
        }

        public function php_test() {
            if (isset($_SESSION['user_id'])) {
                $data = [
                    'title' => 'ບົດເສັງພາສາ PHP',
                ];
                $this->view('tests/php_test', $data);
            } else {
                redirect('user/login');
            }
        }
    }
