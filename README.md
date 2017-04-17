# Magento 2 Module Skeleton

<h1 align="center">
	<br>
	<a href="https://www.aoe.com/en/home.html" title="AOE GmbH Logo - the open web company"><img src="https://www.aoe.com/typo3conf/ext/aoe7lts_base/Resources/Public/Images/styling/AOE-Logo.svg" width="300" title="AOE GmbH - the open web company"/></a>
	<br>
	<br>
</h1>

## Introduction

This module provides a skeleton for a new Magento 2 Module. It comes with examples, best practice advices and useful 
templates for documentation, specification or testing. 

If you think, you have alternative methods or another way of thinking, please feel free to contribute to this skeleton.

This Skeleton tries to cover several aspects:

* [Quality of Code](#quality-of-code)
* [Legal Advices and Licenses](#legal-advices-and-licenses)
* [Templates for Specification and Documentation](#templates-for-specification-and-documentation)
* [Basic Setup for Tests](#basic-setup-for-tests)
* [Tools to get up and running](#tools-to-get-up-and-running)

## About this README

The README is the first step to a good documentation. This file will be used by Github / Gitlab as a homepage and every
developer will know, that there might be some useful information about the code and the structure.

The README File can contain the whole documentation, but if a module is getting bigger and bigger, it might be handy to 
use a new directory. We call it ```doc```. Due to that, we will continue this documentation in the given directory.

## Quality of Code

### Magento 2 PHP Mess Detector

Magento 2 uses a custom Mess Detector Ruleset. You will find it under:

```
/dev/tests/static/testsuite/Magento/Test/Php/_files/phpmd/ruleset.xml
```

To run the Mess Detector via console, you can run: 

``` bash
# Run in Magento 2 root
php vendor/bin/phpmd app/code/ text dev/tests/static/testsuite/Magento/Test/Php/_files/phpmd/ruleset.xml
```

or 

``` bash
# Run in Magento 2 root
php bin/magento dev/test/run static
```

### Magento 2 PHP Code Style

Magento 2 also comes with a custom Code Style Ruleset. You can run the Codesniffer via console with the following commands:

``` bash
# Run in Magento 2 root
php vendor/bin/phpcs .
```

### Security Advisories

Make sure, your composer Packages do not contain any security issues. Validate your composer files by:

- [Security Advisories by Friends of PHP](https://github.com/FriendsOfPHP/security-advisories)
- [Roave Security Advisories](https://github.com/Roave/SecurityAdvisories)

### Magento 2 Coding Standards

* [Magento 2 Code demarcation standard](http://devdocs.magento.com/guides/v2.0/coding-standards/code-standard-demarcation.html)
* [Magento 2 PHP coding standard](http://devdocs.magento.com/guides/v2.0/coding-standards/code-standard-php.html)
* [Magento 2 Code sniffers](http://devdocs.magento.com/guides/v2.0/coding-standards/code-standard-sniffers.html)
* [Magento 2 JavaScript coding standard](http://devdocs.magento.com/guides/v2.0/coding-standards/code-standard-javascript.html)
* [Magento 2 jQuery widget coding standard](http://devdocs.magento.com/guides/v2.0/coding-standards/code-standard-jquery-widgets.html)
* [Magento 2 DocBlock standard](http://devdocs.magento.com/guides/v2.0/coding-standards/docblock-standard-general.html)
* [Magento 2 JavaScript DocBlock standard](http://devdocs.magento.com/guides/v2.0/coding-standards/docblock-standard-javascript.html)
* [Magento 2 LESS coding standard](http://devdocs.magento.com/guides/v2.0/coding-standards/code-standard-less.html)
* [Magento 2 HTML style guide](http://devdocs.magento.com/guides/v2.0/coding-standards/code-standard-html.html)

## Legal Advices and Licenses

## Templates for Specification and Documentation

* [Module README Template](https://github.com/AOEpeople/Magento-2-Module-Skeleton/blob/master/src/doc/README.template.md)
* [README Specification Template](https://github.com/AOEpeople/Magento-2-Module-Skeleton/blob/master/src/doc/README_SPECIFICATION.md)
* [Contribution Guide Template](https://github.com/AOEpeople/Magento-2-Module-Skeleton/blob/master/src/doc/CONTRIBUTITION.template.md)

### API Documentation 

* [RAML](http://raml.org/)
* [Swagger](http://swagger.io/)

## Basic Setup for Tests


## Tools to get up and running
