# Flagger API SDK for Laravel 

[![Build Status](https://github.com/useflagger/flagger-laravel/actions/workflows/tests.yml/badge.svg)](https://github.com/useflagger/flagger-laravel)

This library helps with integrating Flagger into Laravel applications.

## Installation

This library can be installed via [Composer](https://getcomposer.org):

```bash
composer require useflagger/flagger-laravel
```

## Configuration

The only required configuration is the Environment Token. You can get your Environment Token via the [Project settings](https://app.useflagger.com/admin/projects) in your Flagger account.

Configuration values can be set when creating a new API client or via environment variables. The environment takes precedence over values provided during the initialization process.

**Configuration via environment variables**

```bash
FLAGGER_ENVIRONMENT_TOKEN=tok-sample
```

## Contributing

Bug reports and pull requests are welcome on GitHub at https://github.com/useflagger/flagger-laravel. This project is intended to be a safe, welcoming space for collaboration, and contributors are expected to adhere to the [Contributor Covenant](http://contributor-covenant.org) code of conduct.

## License

The library is available as open source under the terms of the [MIT License](http://opensource.org/licenses/MIT).

## Code of Conduct

Everyone interacting in the Flagger's code bases, issue trackers, chat rooms and mailing lists is expected to follow the [code of conduct](https://github.com/useflagger/flagger-laravel/blob/master/CODE_OF_CONDUCT.md).

## What is Flagger?

[Flagger](https://useflagger.com/) allows you to control which features and settings are enabled in your application giving you better flexibility to deploy code and release features.

Flagger was started in 2024 as an alternative to highly complex feature flag tools. Learn more [about us](https://useflagger.com/).
