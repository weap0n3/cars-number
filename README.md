# CarsNumber

## Allgemeines

Mit dieser Bibliothek wird Ort aus Autokennzeichen gelesen.

## Verwendung

Composer-Package einbinden mittels:

```php
require 'vendor/autoload.php';
```

Namespace angeben:

```php
use Weap0n3\CarsNumber\CarsNumber;
```

Autokennzeichen in Ort konvertieren:

```php
$carsNumber = new CarsNumber();

echo $carsNumber->getCity("ZE123AB");
```
