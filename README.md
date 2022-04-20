# Stringify
Stringify is a String Manipulation Class like Vocajs. Stringify is a PHP library for manipulating strings.

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
# Available Functions
**Get Text:**
```
getText()
```
**Uppercase:**
```
upper()

```
**Lowercase:**
```
lower()
```
**Trim:**
```
trim()
```
**Left Trim:**
```
ltrim()
```
**Right Trim:**
```
rtrim()
```
**Capitalize:**
```
capitalize()
```
**slugify:**
```
slugify()
```
