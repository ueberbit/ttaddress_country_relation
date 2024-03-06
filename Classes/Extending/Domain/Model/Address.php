<?php

declare(strict_types=1);

namespace StudioMitte\TtaddressCountryRelation\Extending\Domain\Model;

use SJBR\StaticInfoTables\Domain\Model\Country;
use SJBR\StaticInfoTables\Domain\Model\CountryZone;
class Address extends \FriendsOfTYPO3\TtAddress\Domain\Model\Address
{

    /**
     * @var Country
     */
    protected $countryRelation;

    /**
     * @var CountryZone
     */
    protected $regionRelation;

    /**
     * @return Country
     */
    public function getCountryRelation(): ?Country
    {
        return $this->countryRelation;
    }

    /**
     * @param Country $countryRelation
     */
    public function setCountryRelation(Country $countryRelation): void
    {
        $this->countryRelation = $countryRelation;
    }

    /**
     * @return CountryZone
     */
    public function getRegionRelation(): ?CountryZone
    {
        return $this->regionRelation;
    }

    /**
     * @param CountryZone $regionRelation
     */
    public function setRegionRelation(CountryZone $regionRelation): void
    {
        $this->regionRelation = $regionRelation;
    }
}
