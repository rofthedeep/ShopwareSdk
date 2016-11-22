<?php
declare(strict_types = 1);

namespace Enm\ShopwareSdk\Model\Order;

/**
 * @author Dirk Heyka <heyka@eosnewmedia.de>
 */
class Country implements CountryInterface
{

    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $iso;

    /**
     * @var string
     */
    private $isoName;

    /**
     * @var int
     */
    private $position;

    /**
     * @var string
     */
    private $description;

    /**
     * @var bool
     */
    private $shippingFree;

    /**
     * @var int
     */
    private $taxFree;

    /**
     * @var int
     */
    private $taxFreeUstId;

    /**
     * @var int
     */
    private $taxFreeUstIdChecked;

    /**
     * @var bool
     */
    private $active;

    /**
     * @var string
     */
    private $iso3;

    /**
     * @var bool
     */
    private $displayStateInRegistration;

    /**
     * @var bool
     */
    private $forceStateInRegistration;

    /**
     * @var int
     */
    private $areaId;

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
     * @return CountryInterface
     */
    public function setId(int $id): CountryInterface
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
     * @return CountryInterface
     */
    public function setName(string $name): CountryInterface
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string
     */
    public function getIso(): string
    {
        return $this->iso;
    }

    /**
     * @param string $iso
     *
     * @return CountryInterface
     */
    public function setIso(string $iso): CountryInterface
    {
        $this->iso = $iso;

        return $this;
    }

    /**
     * @return string
     */
    public function getIsoName(): string
    {
        return $this->isoName;
    }

    /**
     * @param string $isoName
     *
     * @return CountryInterface
     */
    public function setIsoName(string $isoName): CountryInterface
    {
        $this->isoName = $isoName;

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
     * @return CountryInterface
     */
    public function setPosition(int $position): CountryInterface
    {
        $this->position = $position;

        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return CountryInterface
     */
    public function setDescription(string $description): CountryInterface
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isShippingFree(): bool
    {
        return $this->shippingFree;
    }

    /**
     * @param boolean $shippingFree
     *
     * @return CountryInterface
     */
    public function setShippingFree(bool $shippingFree): CountryInterface
    {
        $this->shippingFree = $shippingFree;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxFree(): int
    {
        return $this->taxFree;
    }

    /**
     * @param int $taxFree
     *
     * @return CountryInterface
     */
    public function setTaxFree(int $taxFree): CountryInterface
    {
        $this->taxFree = $taxFree;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxFreeUstId(): int
    {
        return $this->taxFreeUstId;
    }

    /**
     * @param int $taxFreeUstId
     *
     * @return CountryInterface
     */
    public function setTaxFreeUstId(int $taxFreeUstId): CountryInterface
    {
        $this->taxFreeUstId = $taxFreeUstId;

        return $this;
    }

    /**
     * @return int
     */
    public function getTaxFreeUstIdChecked(): int
    {
        return $this->taxFreeUstIdChecked;
    }

    /**
     * @param int $taxFreeUstIdChecked
     *
     * @return CountryInterface
     */
    public function setTaxFreeUstIdChecked(int $taxFreeUstIdChecked): CountryInterface
    {
        $this->taxFreeUstIdChecked = $taxFreeUstIdChecked;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param boolean $active
     *
     * @return CountryInterface
     */
    public function setActive(bool $active): CountryInterface
    {
        $this->active = $active;

        return $this;
    }

    /**
     * @return string
     */
    public function getIso3(): string
    {
        return $this->iso3;
    }

    /**
     * @param string $iso3
     *
     * @return CountryInterface
     */
    public function setIso3(string $iso3): CountryInterface
    {
        $this->iso3 = $iso3;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isDisplayStateInRegistration(): bool
    {
        return $this->displayStateInRegistration;
    }

    /**
     * @param boolean $displayStateInRegistration
     *
     * @return CountryInterface
     */
    public function setDisplayStateInRegistration(bool $displayStateInRegistration): CountryInterface
    {
        $this->displayStateInRegistration = $displayStateInRegistration;

        return $this;
    }

    /**
     * @return boolean
     */
    public function isForceStateInRegistration(): bool
    {
        return $this->forceStateInRegistration;
    }

    /**
     * @param boolean $forceStateInRegistration
     *
     * @return CountryInterface
     */
    public function setForceStateInRegistration(bool $forceStateInRegistration): CountryInterface
    {
        $this->forceStateInRegistration = $forceStateInRegistration;

        return $this;
    }

    /**
     * @return int
     */
    public function getAreaId(): int
    {
        return $this->areaId;
    }

    /**
     * @param int $areaId
     *
     * @return CountryInterface
     */
    public function setAreaId(int $areaId): CountryInterface
    {
        $this->areaId = $areaId;

        return $this;
    }
}