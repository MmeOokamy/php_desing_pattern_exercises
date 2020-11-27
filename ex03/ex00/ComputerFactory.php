<?php
include_once('Computer.php');
include_once('ComputerDell.php');

class ComputerFactory
{
    // Your code here
    public static function makeComputer($brand): Computer
    {
       return new ComputerDell($brand);
    }
}

/**
  switch ($brand){
case 'Dell':
$created = new ComputerDell($brand);
break;
default:
throw new Exception("Je ne connais pas cette marque");
}
return $created;
 */
