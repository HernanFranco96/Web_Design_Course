<?php

    class Foo
    {
        private function __construct()
        {
            echo 'Constructor';
        }

        public function publico()
        {
            echo 'Metodo publico';
        }
        private function privado()
        {
            echo 'Metodo privado';
        }
        static function estatico()
        {
            echo 'Metodo estatico';
        }
    }

    //$Foo = new Foo();
    //$Foo->publico();
    //$Foo->privado();
    
    Foo::estatico();
?>