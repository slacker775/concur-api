<?php
declare(strict_types = 1);

namespace Concur\Factory;

use Concur\Provider\Concur;
use GuzzleHttp\Client;

class ConcurProviderFactory
{

    /**
     *
     * @var string
     */
    private $clientId;

    /**
     *
     * @var string
     */
    private $clientSecret;

    /**
     *
     * @var Client
     */
    private $httpClient;

    public function __construct(string $clientId, string $clientSecret, Client $httpClient = null)
    {
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        if ($httpClient === null) {
            $this->httpClient = new Client();
        } else {
            $this->httpClient = $httpClient;
        }
    }

    public function create() : Concur
    {
        return new Concur([
            'clientId' => $this->clientId,
            'clientSecret' => $this->clientSecret
        ], [
            'httpClient' => $this->httpClient
        ]);
    }
}