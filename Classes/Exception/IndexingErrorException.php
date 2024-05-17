<?php

namespace ApacheSolrForTypo3\Solr\Exception;

use ApacheSolrForTypo3\Solr\Exception;

class IndexingErrorException extends Exception
{

    protected string $responseUrl = '';

    protected int $responseCode = 0;

    protected array $responseHeaders = [];

    public function __construct(string $message, int $errorCode, ?\Throwable $previous = null, string $responseUrl = '', int $responseCode = 0, array $responseHeaders = [])
    {
        parent::__construct($message, $errorCode, $previous);
        $this->setResponseUrl($responseUrl);
        $this->setResponseCode($responseCode);
        $this->setResponseHeaders($responseHeaders);
    }

    public function getResponseUrl(): string
    {
        return $this->responseUrl;
    }

    public function setResponseUrl(string $responseUrl): void
    {
        $this->responseUrl = $responseUrl;
    }

    public function getResponseCode(): int
    {
        return $this->responseCode;
    }

    public function setResponseCode(int $responseCode): void
    {
        $this->responseCode = $responseCode;
    }

    public function getResponseHeaders(): array
    {
        return $this->responseHeaders;
    }

    public function setResponseHeaders(array $responseHeaders): void
    {
        $this->responseHeaders = $responseHeaders;
    }
}
