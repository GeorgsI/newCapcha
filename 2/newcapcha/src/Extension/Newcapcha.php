<?php

/**
 * @package     Joomla.Plugin
 * @subpackage  System.sef
 *
 * @copyright   (C) 2007 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\Plugin\System\Newcapcha\Extension;
use Joomla\Plugin\System\Highlight\Extension\Helper;
use Joomla\CMS\Plugin\CMSPlugin;
use Joomla\CMS\Factory;

\defined('_JEXEC') or die;


/**
 * Joomla! SEF Plugin.
 *
 * @since  1.5
 */
final class Newcapcha extends CMSPlugin 
{


    public function setSiteRouter(){

    }

    public function onAfterInitialise()
    {
       

        $session = Factory::getSession();
       // $session->set('myvalue', '123');
       // $temp= $session->get('myvalue');
       // var_dump($temp);

        $value = Factory::getApplication()->input->post->get('capcha', '');


/// $session->clear();
        if($session->get('myVa') == null || $session->get('myVa') != $value){

        



            require_once dirname(__FILE__).'/helper.php';


             $str =   helper::getCapcha();

            require_once dirname(__FILE__).'/tmpl.php';
           // $cap = capcha::getCapcha();
            //echo $session->get('myVa');
           /* $str = modCapchaHelper::getCapcha($params);*
            require JModuleHelper::getLayoutPath('mod_capcha');*/
          
            exit();

        }


    
    }

}
