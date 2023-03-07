<?php
    class Paginas{
        //metodo donde se obtiene la ruta del archivo
        static public function enlacesPaginas($enlaces)
        {
            if($enlaces == 'principal')
            {
                $modulo = 'vistas/modulos/principal.php';
            }
            else
            {
                $modulo = 'vistas/modulos/principal.php';
            }
            //rregresamos la ruta del archivo dentro de una variable
            return $modulo;
        }
    }
?>