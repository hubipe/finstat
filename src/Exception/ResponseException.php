<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Exception;

use Throwable;

class ResponseException extends \RuntimeException implements FinStatException
{

	/** @var int */
	private $responseHttpCode;

	public function __construct(int $responseHttpCode, string $message = NULL, Throwable $previous = NULL)
	{
		if ($message === NULL) {
			if ($responseHttpCode === 402) {
				$message = 'API calls limit exceeded.';
			}
			elseif ($responseHttpCode === 403) {
				$message = 'API authentication error.';
			}
			else {
				$message = sprintf('Unexpected HTTP response code %d.', $responseHttpCode);
			}
		}

		parent::__construct($message, $responseHttpCode, $previous);
	}

	public function getResponseHttpCode(): int
	{
		return $this->responseHttpCode;
	}

}
