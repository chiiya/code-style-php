<br />
<div align="center">
  <p align="center">
    <a href="https://php.net/" target="_blank"><img src="https://img.shields.io/badge/php-%3E%3D%208.1-8892BF.svg"></a>
  </p>

  <strong>
    <h2 align="center">Code Style PHP</h2>
  </strong>

  <p align="center">
    Code style configurations for PHP projects using a combination of PHP-CS-Fixer, ECS and Rector.
  </p>

  <p align="center">
    <strong>
    <a href="#index">index</a>
    &nbsp; &middot; &nbsp;
    <a href="#installation">installation</a>
    &nbsp; &middot; &nbsp;
    <a href="#usage">usage</a>
    </strong>
  </p>

  <br>
</div>
<br />

## Index

<pre>
<a href="#installation"
>> Installation ..................................................................... </a>
<a href="#usage"
>> Usage ............................................................................ </a>
</pre>

## Installation

Looking for an integration with Laravel? Check out [laravel-code-style](https://github.com/chiiya/laravel-code-style).

Install the package using composer:

```bash
composer require chiiya/code-style-php --dev
```

## Usage
Simply import the rules in your PHP-CS-Fixer, ECS and Rector config files. Have a look at the 
`.php-cs-fixer.dist.php`, `ecs.php` and `rector.php` in this repository for an example.
