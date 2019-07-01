<?php
    class Core {
        protected $curCtrl = 'Index';
        protected $curMethod = 'index';
        protected $params = [];

        public function __construct() {
            $url = $this->getUrl();

            if (file_exists('../app/controllers/'. ucwords($url[0]) . '.php')) {
                $this->curCtrl = $url[0];
                unset($url[0]);
            } elseif (ucwords($url[0]) == '') {
                $this->curCtrl = ucwords('Index');
                unset($url[0]);
            } else {
                $this->curCtrl = ucwords('Error404');
                unset($url[0]);
            }

            require_once '../app/controllers/'. $this->curCtrl . '.php';

            $this->curCtrl = new $this->curCtrl;

            if (isset($url[1])) {
                if (method_exists($this->curCtrl, $url[1])) {
                    $this->curMethod = $url[1];
                    unset($url[0]);
                }
            }

            $this->params = $url ? array_values($url) : [];

            call_user_func_array([$this->curCtrl, $this->curMethod], $this->params);
        }

        public function getUrl() {
            if (isset($_GET['url'])) {
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/', $url);
                return $url;
            }
            return null;
        }
    }