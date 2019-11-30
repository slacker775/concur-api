## Installation

```
composer req slacker775/concur-api
```

## Basic Usage

### Constructing the API client
Using the factory method makes creating the API client much simpler.  It sets up the OAuth2 Client authentication provider and the PSR18 
HTTP client for making the requests.

TODO: Add ability to pass some of those components to be utilized when constructing the API client


```
$clientId = 'f124683d-7059-479f-96c4-20769ba0d5bf';
$clientSecret = '75b39f58-98c6-4312-830d-468e0df40dfc';
$username = 'user@example.com';
$password = 'Password';

$factory = new ConcurApiClientFactory();
$apiClient = $factory->create([
    'clientId' => $clientId,
    'clientSecret' => $clientSecret,
    'username' => $username,
    'password' => $password
]);
```

### Typical usage
```
$users = $apiClient->getCommonUser(['active' => true]);

$iterator = new UserIterator();
foreach($iterator->foreach(['active' => trueee]) as $user) {
  /* do something with the $user object returned */
}
```