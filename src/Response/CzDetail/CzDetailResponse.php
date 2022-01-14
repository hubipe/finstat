<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Response\CzDetail;

use Hubipe\FinStat\Response\BaseResponse;

class CzDetailResponse extends BaseResponse
{


	/** @var string */
	private $ico;

	/** @var string */
	private $name;

	/** @var string|NULL */
	private $street;

	/** @var string|NULL */
	private $streetNumber;

	/** @var string|NULL */
	private $zipCode;

	/** @var string|NULL */
	private $city;

	/** @var string|NULL */
	private $district;

	/** @var string|NULL */
	private $region;

	/** @var string|NULL */
	private $country;

	/** @var string|NULL */
	private $activity;

	/** @var \DateTimeImmutable|NULL */
	private $created;

	/** @var \DateTimeImmutable|NULL */
	private $cancelled;

	/** @var string */
	private $url;

	/** @var bool */
	private $warning;

	/** @var string|NULL */
	private $warningUrl;

	/** @var string|NULL */
	private $czNaceCode;

	/** @var string|NULL */
	private $czNaceText;

	/** @var string|NULL */
	private $czNaceDivision;

	/** @var string|NULL */
	private $czNaceGroup;

	/** @var string|NULL */
	private $legalForm;

	/** @var string|NULL */
	private $ownershipType;

	/** @var string|NULL */
	private $employeeCount;

    /**
     * @return string
     */
    public function getIco(): string
    {
        return $this->ico;
    }

    /**
     * @param string $ico
     *
     * @return CzDetailResponse
     */
    public function setIco(string $ico): CzDetailResponse
    {
        $this->ico = $ico;
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
     * @return CzDetailResponse
     */
    public function setName(string $name): CzDetailResponse
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getStreet(): ?string
    {
        return $this->street;
    }

    /**
     * @param string|NULL $street
     *
     * @return CzDetailResponse
     */
    public function setStreet(?string $street): CzDetailResponse
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getStreetNumber(): ?string
    {
        return $this->streetNumber;
    }

    /**
     * @param string|NULL $streetNumber
     *
     * @return CzDetailResponse
     */
    public function setStreetNumber(?string $streetNumber): CzDetailResponse
    {
        $this->streetNumber = $streetNumber;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getZipCode(): ?string
    {
        return $this->zipCode;
    }

    /**
     * @param string|NULL $zipCode
     *
     * @return CzDetailResponse
     */
    public function setZipCode(?string $zipCode): CzDetailResponse
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|NULL $city
     *
     * @return CzDetailResponse
     */
    public function setCity(?string $city): CzDetailResponse
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getDistrict(): ?string
    {
        return $this->district;
    }

    /**
     * @param string|NULL $district
     *
     * @return CzDetailResponse
     */
    public function setDistrict(?string $district): CzDetailResponse
    {
        $this->district = $district;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @param string|NULL $region
     *
     * @return CzDetailResponse
     */
    public function setRegion(?string $region): CzDetailResponse
    {
        $this->region = $region;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getCountry(): ?string
    {
        return $this->country;
    }

    /**
     * @param string|NULL $country
     *
     * @return CzDetailResponse
     */
    public function setCountry(?string $country): CzDetailResponse
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getActivity(): ?string
    {
        return $this->activity;
    }

    /**
     * @param string|NULL $activity
     *
     * @return CzDetailResponse
     */
    public function setActivity(?string $activity): CzDetailResponse
    {
        $this->activity = $activity;
        return $this;
    }

    /**
     * @return \DateTimeImmutable|NULL
     */
    public function getCreated(): ?\DateTimeImmutable
    {
        return $this->created;
    }

    /**
     * @param \DateTimeImmutable|NULL $created
     *
     * @return CzDetailResponse
     */
    public function setCreated(?\DateTimeImmutable $created): CzDetailResponse
    {
        $this->created = $created;
        return $this;
    }

    /**
     * @return \DateTimeImmutable|NULL
     */
    public function getCancelled(): ?\DateTimeImmutable
    {
        return $this->cancelled;
    }

    /**
     * @param \DateTimeImmutable|NULL $cancelled
     *
     * @return CzDetailResponse
     */
    public function setCancelled(?\DateTimeImmutable $cancelled): CzDetailResponse
    {
        $this->cancelled = $cancelled;
        return $this;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     *
     * @return CzDetailResponse
     */
    public function setUrl(string $url): CzDetailResponse
    {
        $this->url = $url;
        return $this;
    }

    /**
     * @return bool
     */
    public function isWarning(): bool
    {
        return $this->warning;
    }

    /**
     * @param bool $warning
     *
     * @return CzDetailResponse
     */
    public function setWarning(bool $warning): CzDetailResponse
    {
        $this->warning = $warning;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getWarningUrl(): ?string
    {
        return $this->warningUrl;
    }

    /**
     * @param string|NULL $warningUrl
     *
     * @return CzDetailResponse
     */
    public function setWarningUrl(?string $warningUrl): CzDetailResponse
    {
        $this->warningUrl = $warningUrl;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getCzNaceCode(): ?string
    {
        return $this->czNaceCode;
    }

    /**
     * @param string|NULL $czNaceCode
     *
     * @return CzDetailResponse
     */
    public function setCzNaceCode(?string $czNaceCode): CzDetailResponse
    {
        $this->czNaceCode = $czNaceCode;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getCzNaceText(): ?string
    {
        return $this->czNaceText;
    }

    /**
     * @param string|NULL $czNaceText
     *
     * @return CzDetailResponse
     */
    public function setCzNaceText(?string $czNaceText): CzDetailResponse
    {
        $this->czNaceText = $czNaceText;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getCzNaceDivision(): ?string
    {
        return $this->czNaceDivision;
    }

    /**
     * @param string|NULL $czNaceDivision
     *
     * @return CzDetailResponse
     */
    public function setCzNaceDivision(?string $czNaceDivision): CzDetailResponse
    {
        $this->czNaceDivision = $czNaceDivision;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getCzNaceGroup(): ?string
    {
        return $this->czNaceGroup;
    }

    /**
     * @param string|NULL $czNaceGroup
     *
     * @return CzDetailResponse
     */
    public function setCzNaceGroup(?string $czNaceGroup): CzDetailResponse
    {
        $this->czNaceGroup = $czNaceGroup;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getLegalForm(): ?string
    {
        return $this->legalForm;
    }

    /**
     * @param string|NULL $legalForm
     *
     * @return CzDetailResponse
     */
    public function setLegalForm(?string $legalForm): CzDetailResponse
    {
        $this->legalForm = $legalForm;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getOwnershipType(): ?string
    {
        return $this->ownershipType;
    }

    /**
     * @param string|NULL $ownershipType
     *
     * @return CzDetailResponse
     */
    public function setOwnershipType(?string $ownershipType): CzDetailResponse
    {
        $this->ownershipType = $ownershipType;
        return $this;
    }

    /**
     * @return string|NULL
     */
    public function getEmployeeCount(): ?string
    {
        return $this->employeeCount;
    }

    /**
     * @param string|NULL $employeeCount
     *
     * @return CzDetailResponse
     */
    public function setEmployeeCount(?string $employeeCount): CzDetailResponse
    {
        $this->employeeCount = $employeeCount;
        return $this;
    }

}
