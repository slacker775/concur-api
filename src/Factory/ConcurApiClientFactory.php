<?php
declare(strict_types = 1);

namespace Concur\Factory;

use Concur\Api\Client;
use Http\Client\Common\PluginClient;
use Http\Client\Common\Plugin\AuthenticationPlugin;
use Http\Client\Common\Plugin\BaseUriPlugin;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;

class ConcurApiClientFactory
{

    public function create(array $options = []): Client
    {
        $providerFactory = new ConcurProviderFactory($options['clientId'], $options['clientSecret']);
        $provider = $providerFactory->create();

        $bearerPlugin = new AuthenticationProvider($provider, $options['username'], $options['password']);
        $authPlugin = new AuthenticationPlugin($bearerPlugin);
        if (isset($options['baseUr']) === false) {
            $baseUrl = $bearerPlugin->getBaseUrl();
        }

        $psr18Client = Psr18ClientDiscovery::find();
        $hostPlugin = new BaseUriPlugin(Psr17FactoryDiscovery::findUrlFactory()->createUri($baseUrl . '/api/v3.0'));

        $pluginClient = new PluginClient($psr18Client, [
            $hostPlugin,
            $authPlugin
        ]);

        return Client::create($pluginClient);
    }
}