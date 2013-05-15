# Komuri Portfolio

Simple Portfolio template for [Komuri](http://komuri.co.id "Komuri website").

[View Screenshot](https://bitbucket.org/mul14/komuri-portfolio/raw/048a383cb6278eabc86e0a918d47f6b08ad7090f/screenshot.png)

## Installation

### Install Dependencies

Run [composer](http://getcomposer.org "Composer website")

`composer install`

### Database Setup

This application use [Phinx](http://phinx.org/) as migration tool.

Edit file `phinx.yml`

Run migration

`./vendor/bin/phinx migrate`

### Compile the Assets

Run this command to compile LESS files into CSS.

`./console build`
