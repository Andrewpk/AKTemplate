# AKTemplate

A simple html view templating engine for PHP with zero dependencies.
This all started quite a few years ago as a gist, as I used similar styles of templating based off my work with smarty 
and jinja templates in the past.

I realized how my gist was quite outdated and had no documentation, so I decided to publish this as an actual library.

## Usage

`composer require andrewpk/aktemplate`

And then you can either import the class:

```php
use AKTemplate\Template;
```

Or you can just reference the fully qualified namespace when creating a template:

```php
$template = new AKTemplate\Template();
```

Inside your templates you can set and get variables using the `$t` shortcut:
```php
<?= $t->rando ?>
```

If you name your templates with the `.tpl` suffix, most editors won't complain about the undefined `$t` variable.
If you'd prefer, you can name your templates with a .php suffix and then an annotation in a php block at the top instead:
```php
<?php /** @noinspection PhpUndefinedVariableInspection */
?>
```

## Example
Check out the `Example` directory for a working example.

## License
MIT