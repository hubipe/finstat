<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Request\Detail;

use Consistence\ObjectPrototype;
use Hubipe\FinStat\Enum\HttpMethod;
use Hubipe\FinStat\Enum\ResponseFormat;
use Hubipe\FinStat\Enum\ServiceUrl;
use Hubipe\FinStat\Exception\InvalidArgumentException;
use Hubipe\FinStat\Parser\Detail\DetailParser;
use Hubipe\FinStat\Parser\IParser;
use Hubipe\FinStat\Request\IRequest;
use Hubipe\FinStat\Utils\HashCalculator;

class DetailRequest extends ObjectPrototype implements IRequest
{

	/** @var string */
	private $ico;

	/** @var string */
	private $apiKey;

	/** @var string */
	private $hash;

	/** @var string|NULL */
	private $stationId;

	/** @var string|NULL */
	private $stationName;

	public function __construct(
		string $ico,
		string $apiKey,
		string $privateKey,
		string $stationId = NULL,
		string $stationName = NULL)
	{
		$numericIco = preg_replace('/\D+/', '', $ico);
		if ($numericIco === '') {
			throw new InvalidArgumentException(sprintf('ICO "%s" is not valid.', $ico));
		}

		$this->ico = $numericIco;
		$this->apiKey = $apiKey;
		$this->hash = HashCalculator::getHash($apiKey, $privateKey, $numericIco);
		$this->stationId = $stationId;
		$this->stationName = $stationName;
	}


	public function getMethod(): HttpMethod
	{
		$method = HttpMethod::get(HttpMethod::POST);
		return $method;
	}

	public function getServiceUrl(): ServiceUrl
	{
		$serviceUrl = ServiceUrl::get(ServiceUrl::DETAIL);
		return $serviceUrl;
	}

	public function getData(): array
	{
		$data = [
			'Ico' => $this->ico,
			'apiKey' => $this->apiKey,
			'Hash' => $this->hash,
		];
		if ($this->stationId !== NULL) {
			$data['StationId'] = $this->stationId;
		}
		if ($this->stationName !== NULL) {
			$data['StationName'] = $this->stationName;
		}

		return $data;
	}

	public function getFormat(): ResponseFormat
	{
		$format = ResponseFormat::get(ResponseFormat::JSON);
		return $format;
	}

	public function getParser(): IParser
	{
		$parser = new DetailParser();
		return $parser;
	}


}
