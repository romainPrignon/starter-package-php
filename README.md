# starter-package-php [![Build Status](https://travis-ci.org/romainPrignon/starter-package-php.svg?branch=master)](https://travis-ci.org/romainPrignon/starter-package-php)

starter for php librarie

## Using this repository as a starting point

```sh
git clone https://github.com/romainprignon/starter-package-php.git
cd starter-package-php
rm -rf .git
git init
git remote add origin <repo_url>
composer run installhooks
composer install
```
time for coffee... :)

## Installation

add in composer.json (optionally use ssh)
```json
"repositories": [
    {
        "type": "vcs",
        "url":  "https://github.com/romainPrignon/starter-package-php.git"
    }
]
```

```sh
composer require --prefer-source starter-package-php
```

## Usage

### Test

```sh
make test
```

### Debug

* phpstorm > PHP remote debug

```sh
make test
```

### Release

```sh
make release
```

### Documentation

Take a look at the [documentation table of contents](doc/TOC.md).

### License

The code is available under the [MIT license](LICENSE.md).

## Todo
* [ ] watching
* [ ] release (changelog, ...)
* [ ] github release (optionnal)
