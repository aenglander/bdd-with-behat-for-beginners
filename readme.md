# BDD With Behat for Beginners

This project is the starting point for the BDD with Behat for Beginners
tutorial

## Getting Started

There are two items you need to complete before you are ready for tutorial, you must install the pre-requisites
and acquire and install the project we will use for the project.

### Pre-Requisites

This course requires PHP, Laravel, and Behat to be of any use. The next section has nice to have items that will make
the tutorial better but are not absolutely required.

#### PHP

PHP 5.5.9 or greater is required. The latest version of PHP 5.6 is recommended. Installation instructions can be found
within the PHP Manual here: http://php.net/manual/en/install.php

If you are performing a Windows or custom *nix install, you will need to ensure the following extensions are installed
and enabled:

* [cURL](http://php.net/manual/en/book.curl.php)
* [Multibyte String (mbstring)](http://php.net/manual/en/book.mbstring.php)
* [OpenSSL](http://php.net/manual/en/book.openssl.php)

For Windows, the extensions are pre-installed but need to be enabled. You need to uncomment the lines in
your `php.ini` file. If you are not sure where to find your `php.ini` file execute the command `php --ini` to
determine the location(s) for you ini file(s).

Example:

```bash
C:\Users\student>php --ini
Configuration File (php.ini) Path: C:\Windows
Loaded Configuration File:         C:\Windows\php.ini
Scan for additional .ini files in: (none)
Additional .ini files parsed:      (none)
```

Open your `php.ini` file in a text editor and locate the `Dynamic Extensions` section. Once you have located the
section, make sure the following lines are not preceded by a semicolon:

* `extension=php_curl.dll`
* `extension=php_mbstringdll`
* `extension=php_openssl.dll`

By default, they will look like this:

```ini
;extension=php_openssl.dll
```

They should look like this when you remove the semicolon:

```ini
extension=php_openssl.dll
```

#### Composer

Composer is the package manager for PHP. Please see the getting started guide for Composer for installation
instructions: https://getcomposer.org/doc/00-intro.md

#### Obtain Tutorial Example Project

Download the example project from GitHub here:
https://github.com/aenglander/bdd-with-behat-for-beginners/archive/master.zip

Once downloaded, extract the contents to a project directory. Most often that would be were you normally store
code projects or documents.

If you would like to use this project as a building block for your own work and have a decent understanding of Git,
feel free to fork the project and clone locally for the tutorial.

#### Install Dependencies with Composer

From the example project directory execute `composer install` to install the dependencies. This may take some time
as there are a lot of dependencies.

Example:

```bash
C:\Users\student\Documents\bdd-with-behat-for-beginners>composer install
```

Verify Behat is properly installed by executing the command `vendor\bin\behat` in Windows or `vendor/bin/behat` in
Linux or MacOS.

Example:

```bash
C:\Users\student\Documents\bdd-with-behat-for-beginners>vendor\bin\behat
No scenarios
No steps
0m0.04s (16.40Mb)
```

Verify the Laravel site is properly installed by executing the command `php artisan serve`.

Example:

```bash
C:\Users\student\Documents\bdd-with-behat-for-beginners>php artisan serve
Laravel development server started on http://localhost:8000/
```

Once the PHP internal web server is started, load the website in your browser at the URL: `http://localhost:8000/`. If
the page loads properly, then the PHP internal server is serving the Laravel site properly.

## Nice To Haves

The following items will be useful if you are really interested in full integration browser testing. If it's a bit
complicated or you just can't get this part to work, just skip this for now. It will be the last 30 minutes of the
tutorial and you will get almost as much out of the slides as the direct interaction with the browser.

One note regarding these items is that they will require a GUI for opening and interacting with
Firefox. Headless X11 is possible but way beyond the scope of this document.

### Selenium Standalone Server

Selenium Standalone Server provides an API for testing clients like Behat to interact with supported browsers. The
server can be local or remote. For this tutorial, we will work with a local server.

Although it is call the "Standalone Server", this is the same server that would be used in Matrix mode for masters
and slaves.

#### MacOS w/Homebrew

```
brew install selenium-server-standalone
```

#### Everyone Else

The most recent Selenium Standalone Server can be obtained from the Selenium project's downloads page:
http://www.seleniumhq.org/download/

*Do not be overly concerned if the latest version is a beta version for this tutorial. Using the latest versions
of everything ensures they will all work together properly. If you do not want to use beta versions for testing
on your projects, you will need to work out which versions of which software you will need for interoperability.*

Once the `jar` file is downloaded, place it in a location you will remember. The project directory is a perfectly good
place if you aren't sure where it should go. If you do not already have Java installed,
you will need that as well. Instructions for installing Java can be found here:
https://java.com/en/download/help/download_options.xml

Once you have Java up and running, you can verify that Selenium Standalone Server is operating properly by executing
`java -jar selenium-server-standalone.jar`. It should look something like this:

```
C:\Users\student\Documents\bdd-with-behat-for-beginners>java -jar selenium-server-standalone.jar
15:42:23.978 INFO - Launching a standalone Selenium Server
15:42:24.024 INFO - Java: Oracle Corporation 25.60-b23
15:42:24.024 INFO - OS: Mac OS X 10.11.6 x86_64
15:42:24.049 INFO - v2.53.1, with Core v2.53.1. Built from revision a36b8b1
15:42:24.131 INFO - Driver provider org.openqa.selenium.ie.InternetExplorerDriver registration is skipped:
registration capabilities Capabilities [{ensureCleanSession=true, browserName=internet explorer, version=, platform=WINDOWS}] does not match the current platform MAC
15:42:24.131 INFO - Driver provider org.openqa.selenium.edge.EdgeDriver registration is skipped:
registration capabilities Capabilities [{browserName=MicrosoftEdge, version=, platform=WINDOWS}] does not match the current platform MAC
15:42:24.132 INFO - Driver class not found: com.opera.core.systems.OperaDriver
15:42:24.132 INFO - Driver provider com.opera.core.systems.OperaDriver is not registered
15:42:24.133 INFO - Driver class not found: org.openqa.selenium.htmlunit.HtmlUnitDriver
15:42:24.134 INFO - Driver provider org.openqa.selenium.htmlunit.HtmlUnitDriver is not registered
15:42:24.216 INFO - RemoteWebDriver instances should connect to: http://127.0.0.1:4444/wd/hub
15:42:24.216 INFO - Selenium Server is up and running
```

The really important thing to see in the entire output is the phrase `Selenium Server is up and running`.

### Mozilla Firefox

Mozilla Firefox provides the most compliant WebDriver among all the browsers. If you do not already have the latest
Firefox installed, install it from here: https://www.mozilla.org/firefox


### GeckoDriver

The GeckoDriver is used to provide control of the Firefox browser from Selenium Server Standalone.

#### MacOS w/Homebrew:

```
brew install geckodriver
```

#### Linux/MacOS

Download the latest version of the GeckoDriver for your environment from here:
https://github.com/mozilla/geckodriver/releases/latest

Extract the `geckodriver` file to a directory in your path. `/usr/bin` or `/usr/local/bin` are usually good bets.

#### Windows

Download the latest version of the GeckoDriver for your environment from here:
https://github.com/mozilla/geckodriver/releases/latest

Extract the `geckodriver` file to `C:\Windows\System32` directory.

## License

This project is licensed un the MIT License. See the [license file](license.md) for details .
