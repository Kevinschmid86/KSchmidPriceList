<?php
/**
 * Created by PhpStorm.
 * User: kevin.schmid
 * Date: 21.09.2017
 * Time: 19:25
 */

namespace KSchmidPriceList;

use Shopware\Components\Model\ModelManager;
use Shopware\Components\Plugin;
use Shopware\Components\Plugin\Context\InstallContext;
use Doctrine\ORM\Tools\SchemaTool;
use KSchmidPriceList\Models\PriceList;
use Shopware\Components\Plugin\Context\UninstallContext;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class KSchmidPriceList extends Plugin
{

    /*
    public static function getSubscribedEvents()
    {
        return [
            'Enlight_Controller_Dispatcher_ControllerPath_Backend_KSchmidPriceList' => 'getBackendController'
        ];
    }

    public function getBackendController()
    {
        $this->container->get('Template')->addTemplateDir(
            $this->getPath() . '/Resources/Views/'
        );
        return $this->getPath() . '/Controllers/Frontend/KSchmidPriceList.php';
    }
    */

    public function install(InstallContext $context)
    {
        $this->updateSchema();
        parent::install($context); // TODO: Change the autogenerated stub
    }

    public function uninstall(UninstallContext $context)
    {
        /** @var ModelManager $entityManager */
        $entityManager = $this->container->get('models');

        $tool = new SchemaTool($entityManager);

        $classMetaData = [
            $entityManager->getClassMetadata(PriceList::class)
        ];

        $tool->dropSchema($classMetaData);

        parent::uninstall($context); // TODO: Change the autogenerated stub
    }

    private function updateSchema()
    {
        /** @var ModelManager $entityManager */
        $entityManager = $this->container->get('models');

        $tool = new SchemaTool($entityManager);

        $classMetaData = [
            $entityManager->getClassMetadata(PriceList::class),
        ];

        $tool->createSchema($classMetaData);
    }

}