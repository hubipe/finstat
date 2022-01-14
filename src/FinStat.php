<?php

declare(strict_types=1);

namespace Hubipe\FinStat;

use Consistence\ObjectPrototype;
use Hubipe\FinStat\Exception\InvalidArgumentException;
use Hubipe\FinStat\Exception\ParserException;
use Hubipe\FinStat\Exception\ResponseException;
use Hubipe\FinStat\Request\Autocomplete\AutocompleteRequest;
use Hubipe\FinStat\Request\CzAutocomplete\CzAutocompleteRequest;
use Hubipe\FinStat\Request\Detail\DetailRequest;
use Hubipe\FinStat\Request\CzDetail\CzDetailRequest;
use Hubipe\FinStat\Request\IRequestClient;
use Hubipe\FinStat\Response\Autocomplete\AutocompleteResponse;
use Hubipe\FinStat\Response\CzAutocomplete\CzAutocompleteResponse;
use Hubipe\FinStat\Response\Detail\DetailResponse;
use Hubipe\FinStat\Response\CzDetail\CzDetailResponse;

class FinStat extends ObjectPrototype
{

	/** @var IRequestClient */
	private $requestClient;

	/**
	 * @var string
	 */
	private $apiKey;

	/**
	 * @var string
	 */
	private $privateKey;

	/**
	 * @var string|NULL
	 */
	private $stationId;

	/**
	 * @var string|NULL
	 */
	private $stationName;

	public function __construct(
		IRequestClient $requestClient,
		string $apiKey,
		string $privateKey,
		string $stationId = NULL,
		string $stationName = NULL)
	{
		$this->requestClient = $requestClient;
		$this->apiKey = $apiKey;
		$this->privateKey = $privateKey;
		$this->stationId = $stationId;
		$this->stationName = $stationName;
	}

	/**
	 * @param string $query
	 * @return AutocompleteResponse
	 * @throws InvalidArgumentException
	 */
	public function autocomplete(string $query): AutocompleteResponse
	{
		$request = new AutocompleteRequest(
			$query,
			$this->apiKey,
			$this->privateKey,
			$this->stationId,
			$this->stationName
		);

		$response = $this->requestClient->call($request);
		return $response;
	}

	/**
	 * @param string $query
	 * @return CzAutocompleteResponse
	 * @throws InvalidArgumentException
	 */
	public function czAutocomplete(string $query): CzAutocompleteResponse
	{
		$request = new CzAutocompleteRequest(
			$query,
			$this->apiKey,
			$this->privateKey,
			$this->stationId,
			$this->stationName
		);

		$response = $this->requestClient->call($request);
		return $response;
	}

	/**
	 * @param string $ico
	 * @return DetailResponse
	 * @throws InvalidArgumentException
	 * @throws ResponseException
	 * @throws ParserException
	 */
	public function detail(string $ico): DetailResponse
	{
		$request = new DetailRequest(
			$ico,
			$this->apiKey,
			$this->privateKey,
			$this->stationId,
			$this->stationName
		);

		$response = $this->requestClient->call($request);
		return $response;
	}

	/**
	 * @param string $ico
	 * @return CzDetailRequest
	 * @throws InvalidArgumentException
	 * @throws ResponseException
	 * @throws ParserException
	 */
	public function czDetail(string $ico): CzDetailResponse
	{
		$request = new CzDetailRequest(
			$ico,
			$this->apiKey,
			$this->privateKey,
			$this->stationId,
			$this->stationName
		);

		$response = $this->requestClient->call($request);
		return $response;
	}

}
