# Stringify
String Manipulation Class 

# How to install
```
composer require siddik-web/stringify
```
# How to use
```
<?php
include 'vendor/autoload.php';

use SiddikWeb\Stringify\Stringify;

echo Stringify::of(" Hello ")->lower()->trim()->getText();
```
