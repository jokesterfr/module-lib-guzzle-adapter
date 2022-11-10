<?php

declare(strict_types=1);

namespace Prestashop\ModuleLibGuzzleAdapter;

use GuzzleHttp\Psr7\Request;
use Prestashop\ModuleLibGuzzleAdapter\Interfaces\HttpClientInterface;

class HttpClient implements HttpClientInterface
{
    /**
     * Http client
     * 
     * @var \Prestashop\ModuleLibGuzzleAdapter\Interfaces\GuzzleClientInterface
     */
    public $client;

    /**
     * @param array $httpOptions
     */
    public function __construct(array $httpOptions = [])
    {
        $httpClientFactory = new ClientFactory();
        $this->client = $httpClientFactory->getClient($httpOptions);
    }

    /**
     * Send HTTP call
     * 
     * @param string $method HTTP method
     * @param string $url
     * @param array $options Optional
     * 
     * @return \Psr\Http\Message\StreamInterface
     */
    public function call($method, $url, array $options = [])
    {
        $request = new Request($method, $url);

        return $this->client->send($request, $options)->getBody() . PHP_EOL . PHP_EOL;
    }
}
