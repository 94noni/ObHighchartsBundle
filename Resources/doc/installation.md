# Installation

1. Run `composer require 94noni/highcharts-bundle`

2. Register the bundle in your `config/bundles.php`:

```php
<?php

return [
    Symfony\Bundle\FrameworkBundle\FrameworkBundle::class => ['all' => true],
    Symfony\Bundle\TwigBundle\TwigBundle::class => ['all' => true],
    Ob\HighchartsBundle\ObHighchartsBundle::class  => ['all' => true],
    ...
];

```
