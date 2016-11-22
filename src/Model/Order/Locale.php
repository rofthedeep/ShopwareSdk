<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Locale implements LocaleInterface
{

    /**
     * @var
     */
    private $id;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $locale;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $language;

    /**
     * @var string
     * @SerializerType("string")
     */
    private $territory;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return LocaleInterface
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return string
     */
    public function getLocale(): string
    {
        return $this->locale;
    }

    /**
     * @param string $locale
     *
     * @return LocaleInterface
     */
    public function setLocale(string $locale): LocaleInterface
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     *
     * @return LocaleInterface
     */
    public function setLanguage(string $language): LocaleInterface
    {
        $this->language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getTerritory(): string
    {
        return $this->territory;
    }

    /**
     * @param string $territory
     *
     * @return LocaleInterface
     */
    public function setTerritory(string $territory): LocaleInterface
    {
        $this->territory = $territory;

        return $this;
    }
}
