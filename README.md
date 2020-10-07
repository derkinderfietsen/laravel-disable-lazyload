# Laravel Disable Lazy Load

<p align="center">
<a href="https://packagist.org/packages/ybaruchel/laravel-disable-lazyload"><img src="https://poser.pugx.org/ybaruchel/laravel-disable-lazyload/version.png" alt="NPM"></a>
<a href="https://packagist.org/packages/ybaruchel/laravel-disable-lazyload"><img src="https://poser.pugx.org/ybaruchel/laravel-disable-lazyload/d/total.png" alt="NPM"></a>
<a href="http://choosealicense.com/licenses/mit/"><img src="https://poser.pugx.org/ybaruchel/laravel-disable-lazyload/license.png" alt="NPM"></a>
</p>

Laravel 5.0+ trait for disabling lazy load option - for performance reasons (n+1, multiple queries, etc...)

## Installation

```php
composer require derkinderfietsen/laravel-disable-lazyload
```

## Usage
On model:
```php
namespace App;

use Illuminate\Database\Eloquent\Model;
use Derkinderfietsen\DisableLazyLoad\DisableLazyLoad;

class User extends Model 
{
    use DisableLazyLoad;
}
```

Then:
```php
$user = User::with('posts')->first();
$user->posts; // Works!!


$user = User::first();
$user->posts; // Throws exception!!

```
