<?php 
    class Usuario {
        public $full_name;
        public $username;
        public $passwd;
        public $passwd_confirmation;
        public $email;
        public $whats;
        public $chave_seguranca;

        public function __get($var) {
            throw new Exception("Invalid property $var");
        }

        public function __set($var, $value) {
            $this->__get($var);
        }

    }
?>