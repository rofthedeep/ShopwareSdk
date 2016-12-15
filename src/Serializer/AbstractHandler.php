<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Serializer;

use Enm\ShopwareSdk\Model\Wrapper\CollectionWrapperInterface;
use Enm\ShopwareSdk\Model\Wrapper\WrapperInterface;
use JMS\Serializer\SerializerInterface;

/**
 * @author Philipp Marien <marien@eosnewmedia.de>
 */
abstract class AbstractHandler implements JsonSerializerInterface, JsonDeserializerInterface
{
    /**
     * @var SerializerInterface
     */
    private $jmsSerializer;

    /**
     * @param SerializerInterface $serializer
     */
    public function __construct(SerializerInterface $serializer)
    {
        $this->jmsSerializer = $serializer;
    }

    /**
     * @return SerializerInterface
     */
    protected function jms(): SerializerInterface
    {
        return $this->jmsSerializer;
    }

    /**
     * @param string $json
     *
     * @return WrapperInterface
     */
    public function deserialize(string $json): WrapperInterface
    {
        /** @var WrapperInterface $wrapper */
        $wrapper = $this->jms()->deserialize(
            $json,
            $this->wrapperClass(),
            'json'
        );

        return $wrapper;
    }

    /**
     * @param string $json
     *
     * @return CollectionWrapperInterface
     */
    public function deserializeCollection(string $json): CollectionWrapperInterface
    {
        /** @var CollectionWrapperInterface $collectionWrapper */
        $collectionWrapper = $this->jms()->deserialize(
            $json,
            $this->collectionWrapperClass(),
            'json'
        );

        return $collectionWrapper;
    }

    /**
     * @param mixed $data
     *
     * @return array
     */
    public function serialize($data): array
    {
        return json_decode($this->jms()->serialize($data, 'json'), true);
    }

    /**
     * @return string
     */
    abstract protected function wrapperClass(): string;

    /**
     * @return string
     */
    abstract protected function collectionWrapperClass(): string;
}