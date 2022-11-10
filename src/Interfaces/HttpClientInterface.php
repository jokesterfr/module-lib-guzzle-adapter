<?php

declare(strict_types=1);

namespace Prestashop\ModuleLibGuzzleAdapter\Interfaces;

interface HttpClientInterface
{
    /**
     * Send HTTP call
     * 
     * @param string $method HTTP method
     * @param string $url
     * @param array $options Optional
     * 
     * @return \Psr\Http\Message\StreamInterface
     */
    public function call($method, $url, array $options = []);
}
