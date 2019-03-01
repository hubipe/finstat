<?php

declare(strict_types=1);

namespace Hubipe\FinStat\Request;

use Hubipe\FinStat\Enum\HttpMethod;
use Hubipe\FinStat\Enum\ServiceUrl;
use Hubipe\FinStat\Parser\IParser;
use Hubipe\FinStat\Enum\ResponseFormat;

interface IRequest
{

	public function getMethod(): HttpMethod;

	public function getServiceUrl(): ServiceUrl;

	public function getData(): array;

	public function getFormat(): ResponseFormat;

	public function getParser(): IParser;

}
