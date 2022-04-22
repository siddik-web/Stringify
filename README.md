# Stringify
Stringify is a String Manipulation Class like Vocajs. Stringify is a PHP library for manipulating strings.

# How to install
```
composer require siddik-web/stringify
```
# How to use
```php
<?php
include 'vendor/autoload.php';

use SiddikWeb\Stringify\Stringify;

echo Stringify::of(" Hello ")->lower()->trim()->getText();

```
# Available Functions
**Get Text:**
```php
getText()
```
**Uppercase:**
```php
upper()

```
**Lowercase:**
```php
lower()
```
**Trim:**
```php
trim()
```
**Left Trim:**
```php
ltrim()
```
**Right Trim:**
```php
rtrim()
```
**Capitalize:**
```php
capitalize()
```
**slugify:**
```php
slugify()
```
