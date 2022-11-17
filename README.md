# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/towoju5/bitpowr.svg?style=flat-square)](https://packagist.org/packages/towoju5/bitpowr)
[![Total Downloads](https://img.shields.io/packagist/dt/towoju5/bitpowr.svg?style=flat-square)](https://packagist.org/packages/towoju5/bitpowr)
![GitHub Actions](https://github.com/towoju5/bitpowr/actions/workflows/main.yml/badge.svg)


Authentication
Authentication is handled using your public/secret key token or API key included in the Authorization header of each request. Please create an account or contact bitpowr support to get your keys.

📘 All API requests must be made over HTTPS. Calls made over plain HTTP will fail. API requests without authentication will also fail. The Authorization header must be sent for every request unless stated otherwise. Not doing so will result in an unauthorized response.

Using Public and Secret Key
This uses the public and secret keys of your account to gain access to your account using the API. To use this, you would need to concat them in this format {public_key:secret_key} and encode it to base64 encoding before passing it to the header. This method gives you admin access to your account and won't be able to restrict keys

Authorization: Bearer <ENCODED_TOKEN>

Mode/Network
The mode and network of the account basically depend on the keys you are using to authorize. To connect to the mainnet environment, ensure your keys are for LIVE mode and if you want to test use the TEST keys. In Production, ensure you are using the LIVE keys which make your account interact with the mainnet Network.

Rate Limiting
If too many requests are received using the same access token, that access token will be throttled. Throttled requests will receive a response with a status code of 429 and will contain a Retry-After header that indicates how many seconds the user should wait before making additional requests. Please design your client to adhere to the Retry-After header, and not the current rate limit.

Supported Blockchains
We currently support 11 public blockchains to be used right from your API and dashboard. We are continuously adding new blockchains every day.

```
Supported Chains

Bitcoin	BITCOIN (BTC)	BTC	MAINNET, TESTNET	Available
Litecoin	            LITECOIN (LTC)	LTC	MAINNET, TESTNET	Available
Bitcoin Cash	        BITCOINCASH (BCH)	BCH	MAINNET, TESTNET	Available
Dogecoin	            DOGECOIN (DOGE)	DOGE	MAINNET, TESTNET	In Progress
Ethereum	            ETHEREUM (ETH)	ETH, ERC20 (USDC, BUSD, USDT, DAI, LINK)	MAINNET, TESTNET (ETH only)	Available
Polygon	                POLYGON (MATIC)	MATIC, ERC20 (USDC_MATIC, USDT_MATIC)	MAINNET, TESTNET (MATIC only)	Available
Binance                 Smart Chain	BSC (BNB)	BNB, ERC20 (USDC_BSC, BUSD_BSC)	MAINNET, TESTNET (BNB only)	Available
Tron	                TRON (TRX)	TRX, ERC20 (USDT_TRON)	MAINNET, TESTNET (TRX only)	Available
Solana	                SOLANA (SOL)	SOL, SPL tokens	MAINNET, TESTNET (SOL only)	Available
Terra	                TERRA (LUNA)	LUNA, UST	MAINNET, TESTNET (LUNA only)	Under Maintainance
Ripple	                RIPPLE (XRP)	XRP	MAINNET	Comming Soon
Stellar	                STELLAR (XLM)	XLM	MAINNET	Available
Fantom	                FANTOM (FTM)	FTM	MAINNET, TESTNET	Comming Soon
Ronin	                RONIN (RON)	RON, SLP	MAINNET, TESTNET (RON only)	Comming Soon
Celo	                CELO (CELO)	CELO, cUSD, cEUR	MAINNET, TESTNET (CELO only)	In Progress
Bantu	                BANTU (XBN)	XBN	MAINNET, TESTNET	Available
```
```
Supported Assets

BTC	            BITCOIN	MAINNET, TESTNET Available
LTC	            LITECOIN MAINNET, TESTNET Available
BCH	            BITCOINCASH	MAINNET, TESTNET Available
ETH	            ETHEREUM MAINNET, TESTNET	Available
USDC	        ETHEREUM MAINNET Available
USDT	        ETHEREUM AINNET	Available
BUSD	        ETHEREUM MAINNET Available
LINK	        ETHEREUM MAINNET Available
MATIC	        POLYGON	MAINNET, TESTNET	Available
USDC_MATIC	    POLYGON	MAINNET	Available
USDT_MATIC	    POLYGON	MAINNET	Available
BSC (BNB)	    BSC	MAINNET, TESTNET Available
USDC_BSC	    BSC	MAINNET	Available
BUSD_BSC	    BSC	MAINNET	Available
TRON (TRX)	    TRON MAINNET, TESTNET Available
USDT_TRON	    TRON AINNET	Available
SOL	SOLANA	    MAINNET, TESTNET Available
LUNA	        TERRA MAINNET
XBN	BANTU	    MAINNET, TESTNET Available
```

## Installation

You can install the package via composer:

```bash
composer require towoju5/bitpowr
```

## Usage
Using via Facede: 
```php
    app('bitpowr');
```
Via namespace
```php
    use Towoju5\Bitpowr\Bitpowr;
    $bearerToken = <API_KEY>
    $bitpowr = new Bitpowr($bearerToken);
```

### Testing

```bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email github@towoju.com.ng instead of using the issue tracker.

## Credits

-   [EMMANUEL TOWOJU](https://github.com/towoju5)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

## Laravel Package Boilerplate

This package was generated using the [Laravel Package Boilerplate](https://laravelpackageboilerplate.com).
