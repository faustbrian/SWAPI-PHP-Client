# SWAPI PHP Client

## Installation

Require this package, with [Composer](https://getcomposer.org/), in the root directory of your project.

```
$ composer require faustbrian/swapi-php-client
```

## Usage

```php
$client = new BrianFaust\Swapi\Client();
$client->setConfig(['apiKey' => 'YOUR_API_KEY']);

$response = $client->api('File')->scan('infected.rar');

dump($response);
```

## Testing

``` bash
$ phpunit
```

## Security

If you discover a security vulnerability within this package, please send an e-mail to Brian Faust at hello@brianfaust.me. All security vulnerabilities will be promptly addressed.

## Credits

- [Brian Faust](https://github.com/faustbrian)
- [All Contributors](../../contributors)

## License

[MIT](LICENSE) © [Brian Faust](https://brianfaust.me)
