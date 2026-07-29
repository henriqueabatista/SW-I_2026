<?php
    class texto
     {
        public function maiusculo($texto)
        {  
        return strtoupper($texto);
        }

        public function caracteres($texto)
        {
        return strlen($texto);
        }

        public function remove($texto)
        {
        return preg_replace('/[^0-9]/', '', $texto);
        }
     }