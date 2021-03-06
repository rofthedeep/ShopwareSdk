<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Wrapper;

use Enm\ShopwareSdk\Model\Article\Article;
use Enm\ShopwareSdk\Model\RootModelInterface;
use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class ArticleWrapper implements WrapperInterface
{

    /**
     * @var Article
     * @Serializer\Type("Enm\ShopwareSdk\Model\Article\Article")
     */
    private $data;

    /**
     * @return RootModelInterface
     */
    public function getData(): RootModelInterface
    {
        return $this->data;
    }

    /**
     * @param RootModelInterface $model
     *
     * @return WrapperInterface
     */
    public function setData(RootModelInterface $model): WrapperInterface
    {
        $this->data = $model;

        return $this;
    }


}