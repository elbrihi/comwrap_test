<?php

class Path
{
    private $script_name ;

    private $_cd ;

    public $currentPath;

    public function __construct($script_name)
    {
        $this->script_name = $script_name ;

    }

   
    public function cd($_cd)
    {
       
       

       $path = explode('/',$this->script_name);
       
       array_splice($path, -1);

       $path = implode('/',$path); 

       $_cd = str_replace("..", "", $_cd);


        $this->currentPath = $path.$_cd;;

    }
    
}




?>