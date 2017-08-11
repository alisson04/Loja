<?php

class Rotas {
    
    
    /**
     *
     * @var array: recebe os paramentros da URL
     */
    public static $pag;
    
    /**
     * Trata paginas e parametros da URL
     */
    
    static function get_Pagina() {
        //Verifico se existe parametro pag na URL
        if (isset($_GET['pag'])):
            
            $pagina = $_GET['pag'];
        
            //Separa a URL pela barra e gera parametros
            self::$pag = explode('/', $pagina);
        
            $barra = DIRECTORY_SEPARATOR;
        
            $pagina = 'controller'.$barra . self::$pag[0] . '.php';
            
            //Verifica se existe pagina com nome passada na URL
            if (file_exists($pagina)):
                include $pagina;
            else:
                echo 'Arquivo não encontrado: ' .$pagina;
                include 'erro.php';
            endif;
            
            //Se não existir
            else: {
                
            }
        endif;
    }
    
    static function get_SiteHOME(){
        
        return Config::SITE_URL .'/'.Config::SITE_PASTA;
        
    }
    
    /**
     * 
     * @return String : Pasta raiz do sistema
     */
    static function get_SiteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'].'/'.Config::SITE_PASTA;
    }
}
