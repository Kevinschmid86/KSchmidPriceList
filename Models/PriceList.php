<?php
/**
 * Created by PhpStorm.
 * User: kevin.schmid
 * Date: 21.09.2017
 * Time: 19:34
 */

namespace KSchmidPriceList\Models;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Shopware\Components\Model\ModelEntity;

/**
 * @ORM\Entity
 * @ORM\Table(name="s_plugin_kschmid_pricelists")
 */

class PriceList extends ModelEntity
{
    /**
     * @var int $id
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */

    private $id;

    /**
     * @var string $name
     *
     * @ORM\column(name="name", type="string", nullable=false)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="Shopware\Models\Article\Article")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */
    protected $article;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function getArticle()
    {
        return $this->article;
    }

    public function setArticle($article)
    {
        $this->article = $article;
        return $this;
    }
}