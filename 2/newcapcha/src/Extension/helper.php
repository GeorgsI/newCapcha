<?php
namespace Joomla\Plugin\System\Highlight\Extension;
use Joomla\CMS\Factory;
    defined('_JEXEC') or die; 
    

class helper
{
     
    public static function getCapcha()
    {
        $a = rand(1, 10);
        $b = rand(1, 10);
        $c = $a + $b;
        $str = $a."+".$b."= ?";

      
     
        $session = Factory::getSession();
        $session->set('myVa', $c); 
        echo $str;
        return $str;
    }
}

