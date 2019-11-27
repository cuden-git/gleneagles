# Requirements

- [Homebrew](#install-homebrew)
- [Composer](#install-composer)
- [NVM Manager](#install-nvm-manager)
- [Node **(11.15.0)**](#install-node-via-nvm)
- [Yarn](#install-yarn)
- [PHPCS](#install-phpcs)
- [WordPress VIP Coding Standards](#wordpress-vip-coding-standards)

## Install Homebrew

[Homebrew](https://brew.sh/#install) is a package manager for mac

```
/usr/bin/ruby -e "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/master/install)"
```

**Check installation**
```
brew -v
```

Problems? Consult the [common problems section on Homebrew](https://www.google.com)

## Install Composer

```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'a5c698ffe4b8e849a443b120cd5ba38043260d5c4023dbf93e1558871f1f07f58274fc6f4c93bcfd858c6bd0775cd8d1') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

**Make install global**
```
sudo mv composer.phar /usr/local/bin/composer
```

**Check Installation**
```
composer --version
```

**Still no Composer?**
Add the following to `~/.bash_profile`

```
alias composer="php /usr/local/bin/composer.phar"
export PATH="$PATH:$HOME/.composer/vendor/bin"
```

**Remember making changes to your .bash_profile requires a restart of terminal**

## Install NVM Manager

[NVM Manager](https://github.com/nvm-sh/nvm) is a version manager for Node.js which allows you to easily alternate between node versions. If you already have Node.JS installed remove it before using NVM


```
curl -o- https://raw.githubusercontent.com/nvm-sh/nvm/v0.34.0/install.sh | bash
```

Restart your terminal/iterm - This is because NVM requires usage of your `.bash_profile`


**Check installation**

```
nvm --version
```

Which should return the installed version of nvm. Problems? Consult the [github repository](https://github.com/nvm-sh/nvm)

## Install Node via NVM

```
nvm install 11.15.0
```

**Set Default Node version (optional)**

This project requires the specific version of Node 11.15.0. To prevent any later versions overwriting this default it's recommended you configure this as your environment default.

```
nvm alias default 11.15.0
```

If you primarily work on other projects requiring a different version of node you can skip this step. However be mindful that in order to work on this project you will need to switch your nvm after each system restart, for example:

```
nvm use 11.15.0
```

**Check installation**

```
node -v
```

Which should return `v11.15.0`. Problems? Consult the [github repository](https://github.com/nvm-sh/nvm)

## Install Yarn

```
brew install yarn
```

**Check installation**
```
yarn -v
```

Which should return the installed version number of Yarn. Problems? Check out the [yarn website](https://yarnpkg.com/lang/en/docs/install/#mac-stable)

## Install PHPCS

It's strongly recommend installing PHPCS via composer. This is because we will be using PHPCS in our IDE and on a pre-commit hook to catch any errors before PR.

```
composer global require "squizlabs/php_codesniffer=*"
```

**Add to $path**
In order for phpcs to be available on your command line you will need to add `~/.composer/vendor/bin/` to your PATH. You can do this by modifying your `~/.bash_profile` and adding:

```
export PATH="$PATH:$HOME/.composer/vendor/bin"
```

You must restart terminal / iterm for this to take effect.

**Test installation**
```
which phpcs
```

Which should return the path where PHPCS is installed. Problems? Consult the [WordPress VIP Docs](https://wpvip.com/documentation/how-to-install-php-code-sniffer-for-wordpress-com-vip/)

## WordPress VIP Coding Standards

WordPress VIP Go has it's very own coding standards. It's recommended you install these globally

```
composer g require --dev automattic/vipwpcs dealerdirect/phpcodesniffer-composer-installer
```

**Test installation**
```
phpcs -i
```

Which should return the installed standards including `WordPress-VIP-Go`. Problems? Consult the [WordPress VIP Docs](https://wpvip.com/documentation/how-to-install-php-code-sniffer-for-wordpress-com-vip/)
