<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Article;

use JMS\Serializer\Annotation as Serializer;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class ConfiguratorSet implements ConfiguratorSetInterface
{

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $id;

    /**
     * @var string
     * @Serializer\Type("string")
     */
    private $name;

    /**
     * @var bool
     * @Serializer\Type("boolean")
     */
    private $public;

    /**
     * @var int
     * @Serializer\Type("integer")
     */
    private $type;

    /**
     * @var GroupInterface[]
     * @Serializer\Type("array<Enm\ShopwareSdk\Model\Article\Group>")
     */
    private $groups;

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
     * @return ConfiguratorSetInterface
     */
    public function setId(int $id): ConfiguratorSetInterface
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
     * @return ConfiguratorSetInterface
     */
    public function setName(string $name): ConfiguratorSetInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isPublic(): bool
    {
        return $this->public;
    }

    /**
     * @param boolean $public
     *
     * @return ConfiguratorSetInterface
     */
    public function setPublic(bool $public): ConfiguratorSetInterface
    {
        $this->public = $public;

        return $this;
    }

    /**
     * @return int
     */
    public function getType(): int
    {
        return $this->type;
    }

    /**
     * @param int $type
     *
     * @return ConfiguratorSetInterface
     */
    public function setType(int $type): ConfiguratorSetInterface
    {
        $this->type = $type;

        return $this;
    }

    /**
     * @return GroupInterface[]
     */
    public function getGroups(): array
    {
        return $this->groups;
    }

    /**
     * @param GroupInterface[] $groups
     *
     * @return ConfiguratorSetInterface
     */
    public function setGroups(array $groups): ConfiguratorSetInterface
    {
        $this->groups = $groups;

        return $this;
    }
}
