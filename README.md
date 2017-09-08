# :AliExpress Api PHP package

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practises by being named the following.

``` 
src/
tests/
```

## Install

Via Composer

``` bash
$ composer require jansagat/aliexpressapi
```

## Usage

``` php
$obj = new \AliExpressApi\AliExpress();
$obj->setFields('productUrl,imageUrl,localPrice,productId');
$obj->setAppKey(#####);
$result = $obj->getListPromotionProduct('car');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email erzhan.sagyt@gmail.com instead of using the issue tracker.

## Credits

- [Yerzhan Sagyt][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/jansagat/aliexpressapi.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/jansagat/aliexpressapi/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/jansagat/aliexpressapi.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/jansagat/aliexpressapi.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/jansagat/aliexpressapi.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/jansagat/aliexpressapi
[link-travis]: https://travis-ci.org/jansagat/aliexpressapi
[link-scrutinizer]: https://scrutinizer-ci.com/g/jansagat/aliexpressapi/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/jansagat/aliexpressapi
[link-downloads]: https://packagist.org/packages/jansagat/aliexpressapi
[link-author]: https://github.com/jansagat
[link-contributors]: ../../contributors
