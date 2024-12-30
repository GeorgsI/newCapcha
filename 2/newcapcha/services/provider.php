<?php

\defined('_JEXEC') or die;


use Joomla\CMS\Extension\PluginInterface;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Event\DispatcherInterface;
use Joomla\Plugin\System\Newcapcha\Extension\Newcapcha;

return new class () implements ServiceProviderInterface {
  
public function register(Container $container): void
    {
        $container->set(
            PluginInterface::class,
            function (Container $container) {
                $plugin     = new Newcapcha(
                    $container->get(DispatcherInterface::class),
                    (array) PluginHelper::getPlugin('system', 'Newcapcha')
                );
                $plugin->setApplication(Factory::getApplication());
                $plugin->setSiteRouter($container->get(SiteRouter::class));

                return $plugin;
            }
        );
    }
};
