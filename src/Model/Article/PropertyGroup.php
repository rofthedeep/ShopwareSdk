<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class PropertyGroup implements PropertyGroupInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $position;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $comparable;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $sortMode;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return PropertyGroupInterface
     */
    public function setId(int $id): PropertyGroupInterface
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return PropertyGroupInterface
     */
    public function setName(string $name): PropertyGroupInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return int
     */
    public function getPosition(): int
    {
        return $this->position;
    }

    /**
     * @param int $position
     *
     * @return PropertyGroupInterface
     */
    public function setPosition(int $position): PropertyGroupInterface
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isComparable(): bool
    {
        return $this->comparable;
    }

    /**
     * @param boolean $comparable
     *
     * @return PropertyGroupInterface
     */
    public function setComparable(bool $comparable): PropertyGroupInterface
    {
        $this->comparable = $comparable;

        return $this;
    }

    /**
     * @return int
     */
    public function getSortMode(): int
    {
        return $this->sortMode;
    }

    /**
     * @param int $sortMode
     *
     * @return PropertyGroupInterface
     */
    public function setSortMode(int $sortMode): PropertyGroupInterface
    {
        $this->sortMode = $sortMode;

        return $this;
    }
}
