# symfony-certification
Materials, highlights, tests, notes and everything related to my Symfony Certification

Lots of KUDOs and "inspirational" credits to [jmolivas](https://github.com/jmolivas) for building [https://github.com/jmolivas/symfony-certification-guide](https://github.com/jmolivas/symfony-certification-guide)

# Contents
## PHP and Web Security

* [Object Oriented Programming](./doc/php_and_web_security/oop.md)
* [Namespaces](doc/php_and_web_security/namespaces.md)
* [Interfaces](./doc/php_and_web_security/interfaces.md)
* [Anonymous functions and closures](./doc/php_and_web_security/functions.md)
* [Abstract classes](doc/php_and_web_security/abstract.md)
* [Exception and error handling](doc/php_and_web_security/exceptions.md)
* [Traits](./doc/php_and_web_security/traits.md)
* [PHP extensions](doc/php_and_web_security/extensions.md)
* [SPL](doc/php_and_web_security/spl.md)
* [Web security (XSS, CSRF, etc.)](./doc/php_and_web_security/web_security.md)

### Resources

* PHP Sandbox online - http://sandbox.onlinephpfunctions.com

## HTTP

* [Client / Server interaction](doc/http/client_server_interaction.md)
* [Status codes](https://en.wikipedia.org/wiki/List_of_HTTP_status_codes)
* [HTTP request](http://symfony.com/doc/current/components/http_foundation.html#request)
* [HTTP response](http://symfony.com/doc/current/components/http_foundation.html#response)
* [HTTP methods](https://www.w3.org/Protocols/rfc2616/rfc2616-sec9.html)
* [Cookies](doc/http/cookies.md)
* [Caching](doc/http/http_cache.md)
* [Content negotiation](doc/http/content_negotiation.md)
* [Language detection](doc/http/language_detection.md)

## Symfony Architecture

* [Symfony Standard Edition](./doc/architecture/sse.md)
* [License](./doc/architecture/license.md)
* [Components](http://symfony.com/components)
* [Bundles](doc/architecture/bundles.md)
* [Bridges](http://stackoverflow.com/questions/11888522/what-are-symfony-bridges-bundles-and-vendor)
* Configuration
* Code organization
* [Request handling](doc/architecture/request.md)
* Exception handling
* Event dispatcher and kernel events
* [Official best practices](doc/architecture/best_practices.md)
* [Release management](http://symfony.com/doc/current/contributing/community/releases.html)
* [Backward compatibility promise](http://symfony.com/doc/current/contributing/code/bc.html)
* [Deprecations best practices](doc/architecture/deprecation_best_practices.md)

## Standardization

* Release management and roadmap schedule
* Framework interoperability and PSRs
* Naming conventions
* Coding standards
* Third-party libraries integration
* Composer packages handling
* Development best practices
* Framework overloading
* Semantic versioning


## Bundles

* Naming conventions
* Code organization
* Controllers
* The views
* The resources
* Overriding default error pages
* Bundle inheritance
* Event dispatcher and kernel events
* Semantic configuration and compiler passes

## Controllers

* Naming conventions
* The base Controller class
* The request
* The response
* The cookies
* The session
* The flash messages
* HTTP redirects
* Internal redirects
* Generate 404 pages
* File upload
* Built-in internal controllers

## Routing

* [Configuration (YAML, XML, PHP & annotations)](http://symfony.com/doc/current/routing.html#routing-examples)
* Restrict URL parameters
* Set default values to URL parameters
* Generate URL parameters
* [Trigger redirects](doc/routing/trigger_redirects.md)
* Special internal routing attributes
* Domain name matching
* Conditional request matching
* [HTTP methods matching](http://symfony.com/doc/current/routing/requirements.html#adding-http-method-requirements)
* [User's locale guessing](http://symfony.com/doc/current/translation/locale.html#the-locale-and-the-url)
* [Router debugging](http://symfony.com/doc/current/routing/debug.html)

## Templating with Twig

* Auto escaping
* Template inheritance
* Global variables:
    - [App variables](http://symfony.com/doc/current/templating/app_variable.html)
    - [Adding global variables](http://symfony.com/doc/current/templating/global_variables.html)
* Filters and functions
* [Template includes](doc/templating/includes.md)
* Loops and conditions
* URLs generation
* [Controller rendering](http://symfony.com/doc/current/templating/embedding_controllers.html)
* [Translations and pluralization](http://symfony.com/doc/current/translation.html)
* [Expresions](http://twig.sensiolabs.org/doc/templates.html#expressions), including new [#{expression} String interpolation](http://twig.sensiolabs.org/doc/templates.html#string-interpolation)
* Assets management
* [Debugging](http://symfony.com/doc/current/templating/debug.html) variables (```dump``` function)

## Forms

* [Forms creation](http://symfony.com/doc/current/book/forms.html)
* Forms handling
* Form types
  * [Collection](http://symfony.com/doc/current/cookbook/form/form_collections.html)
* Forms rendering with Twig
* Forms theming
* CSRF protection
* Handling file upload
* Built-in form types
* Data transformers
* Form events
* Form type extensions

## Data Validation

* PHP object validation
* Built-in validation constraints
* Validation scopes
* Validation groups
* Group sequence
* Custom callback validators
* Violations builder

## Dependency Injection

* Service container
* Built-in services
* Configuration parameters
* [Services registration](./doc/dependency_injection/services.md)
* [Tags](./doc/dependency_injection/tags.md)
* Semantic configuration
* [Factories](./doc/dependency_injection/factories.md)
* Compiler passes
* [Services autowiring](http://symfony.com/doc/current/components/dependency_injection/autowiring.html)

## Security

* Authentication
* Authorization
* Configuration
* Providers
* Firewalls
* Users
* Passwords encoders
* Roles
* Access Control Rules
* Guard authenticators
* [Voters and voting strategies](./doc/security/voters.md)

## HTTP Caching

* [Cache types (browser, proxies and reverse-proxies)](http://symfony.com/doc/current/http_cache.html)
* [Expiration (Expires, Cache-Control)](http://symfony.com/doc/current/http_cache/expiration.html)
* [Validation (ETag, Last-Modified)](http://symfony.com/doc/current/http_cache/validation.html)
* Client side caching
* Server side caching
* [Edge Side Includes](http://symfony.com/doc/current/http_cache/esi.html)

## Console

* [Built-in commands](http://symfony.com/doc/current/components/console/usage.html#built-in-commands)
* Custom commands
* Configuration
* [Options and arguments](http://symfony.com/doc/current/console/input.html)
* Input and Output objects
* [Built-in helpers](http://symfony.com/doc/current/components/console/helpers/index.html)
    * [Formatter Helper](http://symfony.com/doc/current/components/console/helpers/formatterhelper.html)
    * [Process Helper](http://symfony.com/doc/current/components/console/helpers/processhelper.html)
    * [Progress Bar](http://symfony.com/doc/current/components/console/helpers/progressbar.html)
    * [Question Helper](http://symfony.com/doc/current/components/console/helpers/questionhelper.html)
    * [Table](http://symfony.com/doc/current/components/console/helpers/table.html)
    * [Debug Formatter Helper](http://symfony.com/doc/current/components/console/helpers/debug_formatter.html)
* [Console events](http://symfony.com/doc/current/components/console/events.html)
* [Verbosity levels](http://symfony.com/doc/current/console/verbosity.html)

## Automated Tests

* [Unit tests with PHPUnit](doc/automated_tests/unit_tests_with_phpunit.md)
* [Functional tests with PHPUnit](http://symfony.com/doc/current/testing.html#functional-tests)
* [Client object](http://symfony.com/doc/current/components/browser_kit.html)
* [Crawler object](http://symfony.com/doc/current/components/dom_crawler.html)
* [Profile object](http://symfony.com/doc/current/testing/profiling.html)
* [Framework objects access](http://symfony.com/doc/current/testing.html#accessing-internal-objects)
* Client configuration
* [Request and response objects introspection](http://symfony.com/doc/current/testing.html#accessing-internal-objects)
* PHPUnit bridge
* Handling legacy deprecated code

## Miscellaneous

* Error handling
* Code debugging
* Deployment best practices
* Process
* Data collectors
* Web Profiler and Web Debug Toolbar
* Internationalization and localization

# Resources

* Certification - Exam CLI
  - https://github.com/certificationy/certificationy
  - https://vincent.composieux.fr/article/certificationy-a-cli-tool-to-train-on-symfony-certification
* [Symfony CheatSheet](http://www.symfony2cheatsheet.com/)

# Exam

* [Post about exams, with examples](http://www.craftitonline.com/2014/05/the-symfony2-exam-drill-unofficial/)
* [Post and takeaways about PHP 5.3 Zend Certification](http://edward-designer.com/web/passing-php-5-3-certification-exam/)
