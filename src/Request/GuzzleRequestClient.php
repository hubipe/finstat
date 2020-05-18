<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Request;

use Consistence\ObjectPrototype;
use Hubipe\FinStat\Enum\HttpMethod;
use Hubipe\FinStat\Enum\ResponseFormat;
use Hubipe\FinStat\Exception\RequestException;
use Hubipe\FinStat\Exception\UnsatisfiedDependencyException;
use Hubipe\FinStat\Response\IResponse;
use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class GuzzleRequestClient extends ObjectPrototype implements IRequestClient
{

	/** @var Client */
	private $client;

	/** @var array */
	private $options;

	public function call(IRequest $request): IResponse
	{
		$serviceUrl = $request->getServiceUrl()->getValue();
		if ($request->getFormat() === ResponseFormat::get(ResponseFormat::JSON)) {
			$serviceUrl .= '.json';
		}

		$options = $this->options;
		if ($request->getData() !== []
			&& $request->getMethod() === HttpMethod::get(HttpMethod::POST)) {
			$options[RequestOptions::FORM_PARAMS] = $request->getData();
		}


		try {
			$response = $this->getClient()->request(
				$request->getMethod()->getValue(),
				$serviceUrl,
				$options
			);
		} catch (\GuzzleHttp\Exception\RequestException $e) {
			throw new RequestException('FinStat request error: ' . $e->getMessage(), 0, $e);
		}

		$statusCode = $response->getStatusCode();
		$headers = $response->getHeaders();
		$rawData = (string) $response->getBody();
		$parsedResponse = $request->getParser()->parse($request, $statusCode, $headers, $rawData);

		return $parsedResponse;
	}

	private function getClient(): Client
	{
		if ($this->client === NULL) {
			if (!class_exists(Client::class)) {
				throw new UnsatisfiedDependencyException('Guzzle HTTP client is missing. Require it in composer or use different request client.');
			}

			$this->client = new Client([
				RequestOptions::HTTP_ERRORS => FALSE,
			]);
		}
		return $this->client;
	}

	/**
	 * @param array $options
	 *
	 * Set extra options for HTTP Client
	 */
	public function setOptions(array $options)
	{
		$this->options = $options;
	}

}
