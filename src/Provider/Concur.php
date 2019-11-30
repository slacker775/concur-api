<?php

namespace Concur\Provider;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Tool\BearerAuthorizationTrait;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;

class Concur extends AbstractProvider
{
    use BearerAuthorizationTrait;
    const ACCESS_TOKEN_RESOURCE_OWNER_ID = 'resource_owner_id';
    
    /**
     * 
     * @var string
     */
    private $responseError = 'error_description';
    
    /**
     * 
     * @var string
     */
    private $responseCode = 'code';

    /**
     *
     * {@inheritdoc}
     * @see \League\OAuth2\Client\Provider\AbstractProvider::checkResponse()
     */
    protected function checkResponse(\Psr\Http\Message\ResponseInterface $response, $data)
    {
        if (! empty($data[$this->responseError])) {
            $error = $data[$this->responseError];
            if (! is_string($error)) {
                $error = var_export($error, true);
            }
            $code = $this->responseCode && ! empty($data[$this->responseCode]) ? $data[$this->responseCode] : 0;
            if (! is_int($code)) {
                $code = intval($code);
            }
            throw new IdentityProviderException($error, $code, $data);
        }
    }

    /**
     *
     * {@inheritdoc}
     * @see \League\OAuth2\Client\Provider\AbstractProvider::createResourceOwner()
     */
    protected function createResourceOwner(array $response, \League\OAuth2\Client\Token\AccessToken $token)
    {
        return null;
    }

    /**
     *
     * {@inheritdoc}
     * @see \League\OAuth2\Client\Provider\AbstractProvider::getBaseAccessTokenUrl()
     */
    public function getBaseAccessTokenUrl(array $params)
    {
        return 'https://us.api.concursolutions.com/oauth2/v0/token';
    }

    /**
     *
     * {@inheritdoc}
     * @see \League\OAuth2\Client\Provider\AbstractProvider::getBaseAuthorizationUrl()
     */
    public function getBaseAuthorizationUrl()
    {
        return 'https://www.concursolutions.com';
    }

    /**
     *
     * {@inheritdoc}
     * @see \League\OAuth2\Client\Provider\AbstractProvider::getDefaultScopes()
     */
    protected function getDefaultScopes()
    {
        return [
            '*'
        ];
    }

    /**
     *
     * {@inheritdoc}
     * @see \League\OAuth2\Client\Provider\AbstractProvider::getResourceOwnerDetailsUrl()
     */
    public function getResourceOwnerDetailsUrl(\League\OAuth2\Client\Token\AccessToken $token)
    {
        return '';
    }
}