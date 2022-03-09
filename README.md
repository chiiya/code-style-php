<br />
<div align="center">
  <p align="center">
    <a href="https://php.net/" target="_blank"><img src="https://img.shields.io/badge/php-%3E%3D%208.1-8892BF.svg"></a>
  </p>

  <strong>
    <h2 align="center">Code Style PHP</h2>
  </strong>

  <p align="center">
    Code style configuration for PHP/Laravel projects, using ESC, Larastan and GrumPHP 
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

Install the package using composer.

```bash
composer require chiiya/code-style-php --dev
```

## Usage

```bash
# Publish config files
php artisan vendor:publish --tag="code-style-config"
```

Next, adjust the `ecs.php` and `phpstan.neon` files that have just been created in your
project folder to suit your project structure.
