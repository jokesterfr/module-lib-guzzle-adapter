<?php

declare(strict_types=1);

namespace Prestashop\ModuleLibGuzzleAdapter\Interfaces;

use Psr\Http\Message\RequestInterface;

/**
 * HTTP Client Interface
 *
 * @author Tobias Nyholm <tobias.nyholm@gmail.com>
 * @author Victor Bocharsky <victor@symfonycasts.com>
 *
 * @see https://github.com/php-fig/http-client/blob/master/src/ClientInterface.php
 */
interface GuzzleClientInterface
{
    /**
     * Sends a PSR-7 request and returns a PSR-7 response.
     *
     * @param \Psr\Http\Message\RequestInterface $request
     *
     * @return \Psr\Http\Message\ResponseInterface
     *
     * @throws \Psr\Http\Client\ClientExceptionInterface If an error happens while processing the request.
     */
    public function sendRequest(RequestInterface $request);

    /**
     * Send an HTTP request.
     *
     * @param \Psr\Http\Message\RequestInterface $request
     * @param array $options Request options to apply to the given
     *                       request and to the transfer. See \GuzzleHttp\RequestOptions.
     *
     * @return \Psr\Http\Message\ResponseInterface
     *
     * @throws GuzzleException
     */
    public function send(RequestInterface $request, array $options = []);
}
