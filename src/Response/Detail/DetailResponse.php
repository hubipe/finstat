<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Response\Detail;

use Hubipe\FinStat\Enum\JudgementIndicator;
use Hubipe\FinStat\Enum\Profit;
use Hubipe\FinStat\Enum\Revenue;
use Hubipe\FinStat\Response\BaseResponse;

class DetailResponse extends BaseResponse
{


	/** @var string */
	private $ico;

	/** @var string|NULL */
	private $registerNumberText;

	/** @var string|NULL */
	private $dic;

	/** @var string|NULL */
	private $icDph;

	/** @var string|NULL */
	private $icDphParagraph;

	/** @var \DateTimeImmutable|NULL */
	private $icDphCancelListDetectedDate;

	/** @var \DateTimeImmutable|NULL */
	private $icDphRemoveListDetectedDate;

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

	/** @var bool */
	private $suspendedAsPerson;

	/** @var string */
	private $url;

	/** @var bool */
	private $warning;

	/** @var string|NULL */
	private $warningUrl;

	/** @var bool */
	private $paymentOrderWarning;

	/** @var string|NULL */
	private $paymentOrderUrl;

	/** @var bool */
	private $orChange;

	/** @var string|NULL */
	private $orChangeUrl;

	/** @var Revenue */
	private $revenue;

	/** @var Profit */
	private $profit;

	/** @var string|NULL */
	private $skNaceCode;

	/** @var string|NULL */
	private $skNaceText;

	/** @var string|NULL */
	private $skNaceDivision;

	/** @var string|NULL */
	private $skNaceGroup;

	/** @var string|NULL */
	private $legalFormCode;

	/** @var string|NULL */
	private $legalFormText;

	/** @var string|NULL */
	private $rpvsInsert;

	/** @var string|NULL */
	private $rpvsUrl;

	/** @var float|NULL */
	private $profitActual;

	/** @var float|NULL */
	private $revenueActual;

	/** @var JudgementIndicator */
	private $judgementIndicators;

	/** @var string|NULL */
	private $judgementFinstatLink;

	/** @var string|NULL */
	private $salesCategory;

	public function getIco(): string
	{
		return $this->ico;
	}

	public function setIco(string $ico): self
	{
		$this->ico = $ico;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getRegisterNumberText()
	{
		return $this->registerNumberText;
	}

	public function setRegisterNumberText(string $registerNumberText = NULL): self
	{
		$this->registerNumberText = $registerNumberText;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getDic()
	{
		return $this->dic;
	}

	public function setDic(string $dic = NULL): self
	{
		$this->dic = $dic;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getIcDph()
	{
		return $this->icDph;
	}

	public function setIcDph(string $icDph = NULL): self
	{
		$this->icDph = $icDph;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getIcDphParagraph()
	{
		return $this->icDphParagraph;
	}

	public function setIcDphParagraph(string $icDphParagraph = NULL): self
	{
		$this->icDphParagraph = $icDphParagraph;
		return $this;
	}

	/**
	 * @return \DateTimeImmutable|NULL
	 */
	public function getIcDphCancelListDetectedDate()
	{
		return $this->icDphCancelListDetectedDate;
	}

	public function setIcDphCancelListDetectedDate(\DateTimeImmutable $icDphCancelListDetectedDate = NULL): self
	{
		$this->icDphCancelListDetectedDate = $icDphCancelListDetectedDate;
		return $this;
	}

	/**
	 * @return \DateTimeImmutable|NULL
	 */
	public function getIcDphRemoveListDetectedDate()
	{
		return $this->icDphRemoveListDetectedDate;
	}

	public function setIcDphRemoveListDetectedDate(\DateTimeImmutable $icDphRemoveListDetectedDate = NULL): self
	{
		$this->icDphRemoveListDetectedDate = $icDphRemoveListDetectedDate;
		return $this;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function setName(string $name): self
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getStreet()
	{
		return $this->street;
	}

	public function setStreet(string $street = NULL): self
	{
		$this->street = $street;
		return $this;
	}

	/**
	 * @return string|null
	 */
	public function getStreetNumber()
	{
		return $this->streetNumber;
	}

	public function setStreetNumber(string $streetNumber = NULL): self
	{
		$this->streetNumber = $streetNumber;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getZipCode()
	{
		return $this->zipCode;
	}

	public function setZipCode(string $zipCode = NULL): self
	{
		$this->zipCode = $zipCode;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getCity()
	{
		return $this->city;
	}

	public function setCity(string $city = NULL): self
	{
		$this->city = $city;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getDistrict()
	{
		return $this->district;
	}

	public function setDistrict(string $district = NULL): self
	{
		$this->district = $district;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getRegion()
	{
		return $this->region;
	}

	public function setRegion(string $region = NULL): self
	{
		$this->region = $region;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getCountry()
	{
		return $this->country;
	}

	public function setCountry(string $country = NULL): self
	{
		$this->country = $country;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getActivity()
	{
		return $this->activity;
	}

	public function setActivity(string $activity = NULL): self
	{
		$this->activity = $activity;
		return $this;
	}

	/**
	 * @return \DateTimeImmutable|NULL
	 */
	public function getCreated()
	{
		return $this->created;
	}

	public function setCreated(\DateTimeImmutable $created = NULL): self
	{
		$this->created = $created;
		return $this;
	}

	/**
	 * @return \DateTimeImmutable|NULL
	 */
	public function getCancelled()
	{
		return $this->cancelled;
	}

	public function setCancelled(\DateTimeImmutable $cancelled = NULL): self
	{
		$this->cancelled = $cancelled;
		return $this;
	}

	public function isSuspendedAsPerson(): bool
	{
		return $this->suspendedAsPerson;
	}

	public function setSuspendedAsPerson(bool $suspendedAsPerson): self
	{
		$this->suspendedAsPerson = $suspendedAsPerson;
		return $this;
	}

	public function getUrl(): string
	{
		return $this->url;
	}

	public function setUrl(string $url): self
	{
		$this->url = $url;
		return $this;
	}

	public function isWarning(): bool
	{
		return $this->warning;
	}

	public function setWarning(bool $warning): self
	{
		$this->warning = $warning;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getWarningUrl()
	{
		return $this->warningUrl;
	}

	public function setWarningUrl(string $warningUrl = NULL): self
	{
		$this->warningUrl = $warningUrl;
		return $this;
	}

	public function isPaymentOrderWarning(): bool
	{
		return $this->paymentOrderWarning;
	}

	public function setPaymentOrderWarning(bool $paymentOrderWarning): self
	{
		$this->paymentOrderWarning = $paymentOrderWarning;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getPaymentOrderUrl()
	{
		return $this->paymentOrderUrl;
	}

	public function setPaymentOrderUrl(string $paymentOrderUrl = NULL): self
	{
		$this->paymentOrderUrl = $paymentOrderUrl;
		return $this;
	}

	public function isOrChange(): bool
	{
		return $this->orChange;
	}

	public function setOrChange(bool $orChange): self
	{
		$this->orChange = $orChange;
		return $this;
	}

	/** @return string|NULL */
	public function getOrChangeUrl()
	{
		return $this->orChangeUrl;
	}

	public function setOrChangeUrl(string $orChangeUrl = NULL): self
	{
		$this->orChangeUrl = $orChangeUrl;
		return $this;
	}

	public function getRevenue(): Revenue
	{
		return $this->revenue;
	}

	public function setRevenue(Revenue $revenue): self
	{
		$this->revenue = $revenue;
		return $this;
	}

	public function getProfit(): Profit
	{
		return $this->profit;
	}

	public function setProfit(Profit $profit): self
	{
		$this->profit = $profit;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getSkNaceCode()
	{
		return $this->skNaceCode;
	}

	public function setSkNaceCode(string $skNaceCode = NULL): self
	{
		$this->skNaceCode = $skNaceCode;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getSkNaceText()
	{
		return $this->skNaceText;
	}

	public function setSkNaceText(string $skNaceText = NULL): self
	{
		$this->skNaceText = $skNaceText;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getSkNaceDivision()
	{
		return $this->skNaceDivision;
	}

	public function setSkNaceDivision(string $skNaceDivision = NULL): self
	{
		$this->skNaceDivision = $skNaceDivision;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getSkNaceGroup()
	{
		return $this->skNaceGroup;
	}

	public function setSkNaceGroup(string $skNaceGroup = NULL): self
	{
		$this->skNaceGroup = $skNaceGroup;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getLegalFormCode()
	{
		return $this->legalFormCode;
	}

	public function setLegalFormCode(string $legalFormCode = NULL): self
	{
		$this->legalFormCode = $legalFormCode;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getLegalFormText()
	{
		return $this->legalFormText;
	}

	public function setLegalFormText(string $legalFormText = NULL): self
	{
		$this->legalFormText = $legalFormText;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getRpvsInsert()
	{
		return $this->rpvsInsert;
	}

	public function setRpvsInsert(string $rpvsInsert = NULL): self
	{
		$this->rpvsInsert = $rpvsInsert;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getRpvsUrl()
	{
		return $this->rpvsUrl;
	}

	public function setRpvsUrl(string $rpvsUrl = NULL): self
	{
		$this->rpvsUrl = $rpvsUrl;
		return $this;
	}

	/**
	 * @return float|NULL
	 */
	public function getProfitActual()
	{
		return $this->profitActual;
	}

	public function setProfitActual(float $profitActual = NULL): self
	{
		$this->profitActual = $profitActual;
		return $this;
	}

	/**
	 * @return float|NULL
	 */
	public function getRevenueActual()
	{
		return $this->revenueActual;
	}

	public function setRevenueActual(float $revenueActual = NULL): self
	{
		$this->revenueActual = $revenueActual;
		return $this;
	}

	public function getJudgementIndicators(): JudgementIndicator
	{
		return $this->judgementIndicators;
	}

	public function setJudgementIndicators(JudgementIndicator $judgementIndicators): self
	{
		$this->judgementIndicators = $judgementIndicators;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getJudgementFinstatLink()
	{
		return $this->judgementFinstatLink;
	}

	public function setJudgementFinstatLink(string $judgementFinstatLink = NULL): self
	{
		$this->judgementFinstatLink = $judgementFinstatLink;
		return $this;
	}

	/**
	 * @return string|NULL
	 */
	public function getSalesCategory()
	{
		return $this->salesCategory;
	}

	public function setSalesCategory(string $salesCategory = NULL): self
	{
		$this->salesCategory = $salesCategory;
		return $this;
	}



}
