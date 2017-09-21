<?php
/**
 * (c) shopware AG <info@shopware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KSchmidPriceList\Subscriber;

use Enlight\Event\SubscriberInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class BackendController implements SubscriberInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Dispatcher_ControllerPath_Backend_KSchmidPriceList' => 'onGetBackendController',
        ];
    }

    /**
     * adds the templates and snippets dir
     *
     * @return string
     */
    public function onGetBackendController()
    {
        $this->container->get('template')->addTemplateDir($this->getPluginPath() . '/Resources/views/');
        return $this->getPluginPath() . '/Controllers/Backend/KSchmidPriceList.php';
    }

    /**
     * @return string
     */
    private function getPluginPath()
    {
        return $this->container->getParameter('k_schmid_price_list.plugin_dir');
    }
}
