<?php



function autoload($class){
    $directory=array('', './app/models/', MODELS, 'models/', '../app/models/', '../models/','http://localhost/dashboard/phpProject/projectMvc/app/models/');
    $nameFormat=array('%s.php.inc', '%s.php', '%s.class.php', 'class.%s.php');
    foreach ($directory as $dir){
        foreach ($nameFormat as $format) {
            $path= $dir.sprintf($format,$class);
            if(file_exists($path)){
                include $path;
                return;
            }
        }        
    }
}
spl_autoload_register('autoload');