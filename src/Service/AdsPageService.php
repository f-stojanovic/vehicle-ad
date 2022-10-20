<?php

namespace App\Service;

use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * Class AdsPageService
 */
class AdsPageService
{
    /**
     * @var HttpClientInterface
     */
    private HttpClientInterface $client;

    /**
     * AdsPageService constructor.
     */
    public function __construct(HttpClientInterface $client)
    {
        $this->client = $client;
    }

    /**
     * @throws TransportExceptionInterface
     * @throws ServerExceptionInterface
     * @throws RedirectionExceptionInterface
     * @throws ClientExceptionInterface
     */
    public function getAdsPageData(): array
    {
        $response = $this->client->request(
            'GET',
            'https://www.classic-trader.com/api/vehicle-ad/292981.json'
        );

        $adsJsonData = [];
        if ($content = $response->getContent()) {
            $adsJsonData = json_decode($content, true);
        }

        return $adsJsonData;
    }
}