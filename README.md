  
<!-- PROJECT LOGO -->    
<br />    
<p align="center">    
  <a href="https://github.com/ehsan-coder/neshan-laravel">  
    <img src="neshan.png" alt="Logo" height="200" alt="Neshan for Laravel">    
  </a>    
    
  <h3 align="center">Neshan Laravel SDK</h3>    
    
  <p align="center">    
    Easy-to-use SDK for implementing Neshan APIs in your Laravel projects.
  </p>
    
<br>
    
## Install    
> The easiest way to install is by using Composer:
  
```shell script
composer require ehsan_coder/neshan-laravel
```    
***
> Composer is a dependency manager for PHP which allows you to declare the libraries your project depends on, and it will manage (install/update) them for you.  If you are not familiar with Composer, you can read its documentations and download it via [getcomposer.org](https://getcomposer.org/).

## configuration `.env` file    
> add account information into `.env` file

```shell script
NESHAN_API_KEY=your neshan api key
```
***
 ## usage    
To use the package, you need an API key. To get that you should have a [Neshan](https://neshan.org/) account. Register and get your API key.
<br>
Use `NeshanFacade` on top of your controller or wherever you want:
```php
use EhsanCoder\NeshanLaravel\NeshanFacade;
```
> all APIs of Neshan exist in this Facade! for example to use `distanceMatrix` API we can use:
```php
$response = EhsanCoder\NeshanLaravel\NeshanFacade::distanceMatrix($origins, $destinations, $type, $timeout = 10);
```    

### for Example

```php
$response = EhsanCoder\NeshanLaravel\NeshanFacade::distanceMatrix('36.279589071020425,50.00901454609652','38.279589071020425,51.00901454609652', EhsanCoder\NeshanLaravel\NeshanAPI::DISTANCE_MATRIX_CAR_TYPE);
```  
 ## Parameters
 | Parameter | Required | Description | Type | Example |
 | --- | --- | --- | --- | --- |
 | $origins | Yes | all origins! every origin must separated by pipe character | string | 36.279589071020425,50.00901454609652 |
 | $destinations |  Yes | same of origins parameter| string | 38.279589071020425,51.00901454609652 |
 | $type | No | default value is car | string | car |
 | $timeout | No | default value of timeout is 5 sec | int | 10 |
