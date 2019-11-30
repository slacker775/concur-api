<?php
declare(strict_types = 1);

namespace Concur\Factory;

use Concur\Provider\Concur as Provider;
use Http\Message\Authentication;
use League\OAuth2\Client\Token\AccessTokenInterface;
use Psr\Http\Message\RequestInterface;

class AuthenticationProvider implements Authentication
{

    /**
     *
     * @var Provider
     */
    private $provider;

    /**
     *
     * @var AccessTokenInterface
     */
    private $accessToken;

    /**
     *
     * @var string
     */
    private $username;

    /**
     *
     * @var string
     */
    private $password;

    public function __construct(Provider $provider, string $username, string $password)
    {
        $this->provider = $provider;
        $this->username = $username;
        $this->password = $password;
    }

    private function getAccessToken(): AccessTokenInterface
    {
        if ($this->accessToken === null) {
            $this->accessToken = $this->provider->getAccessToken('password', [
                'username' => $this->username,
                'password' => $this->password
            ]);
        }
        if ($this->accessToken->hasExpired() == true) {
            $this->accessToken = $this->provider->getAccessToken('refresh_token', [
                'refresh_token' => $this->accessToken->getRefreshToken()
            ]);
        }

        return $this->accessToken;
    }

    public function authenticate(RequestInterface $request): RequestInterface
    {
        $accessToken = $this->getAccessToken();

        $header = sprintf('Bearer %s', $accessToken->getToken());

        return $request->withHeader('Authorization', $header);
    }

    public function getBaseUrl(): string
    {
        $accessToken = $this->getAccessToken();
        return ($accessToken->getValues())['geolocation'];
    }
}