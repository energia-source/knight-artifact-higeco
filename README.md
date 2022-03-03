# Documentation knight-artifact-higeco

Knight PHP library for [Higeco](https://www.higeco.com/) integration.

**NOTE:** This repository is part of [Knight](https://github.com/energia-source/knight). Any
support requests, bug reports, or development contributions should be directed to
that project.

## Installation

To begin, install the preferred dependency manager for PHP, [Composer](https://getcomposer.org/).

Now to install just this component:

```sh

$ composer require knight/artifact-higeco

```

## Configuration

Configuration is grouped into configuration namespace by the framework [Knight](https://github.com/energia-source/knight).
The configuration files are stored in the configurations folder and file named Higeco.php.

So the basic setup looks something like this:

```

<?PHP

namespace configurations;

use Knight\Lock;

use Higeco\Configuration as Define;

final class Higeco
{
	use Lock;

	const PARAMETERS = [
		// default server username
		Define::CONFIGURATION_USERNAME => 'username',
		// default server password
		Define::CONFIGURATION_PASSWORD => 'password',
		// default server endpoint
		Define::CONFIGURATION_HOST => 'https://now.energia-europa.com/',
	];
}

```

## Structure

library:
    - [Higeco](https://github.com/energia-source/knight-artifact-higeco/tree/main/lib)

## Usage

So the basic usage looks something like this:

```

<?PHP

namespace what\you\want;

use Higeco\Request

$api = 'https://now.energia-europa.com/api/v1/getLogData/123/567/91011';
$response = Request::callApi($api, $_GET); // in $_GET passing [from=>timestamp], [to=>timestamp] or other variable required from remote API

```

## Built With

* [PHP](https://www.php.net/) - PHP

## Contributing

Please read [CONTRIBUTING.md](https://github.com/energia-source/knight-artifact-higeco/blob/main/CONTRIBUTING.md) for details on our code of conduct, and the process for submitting us pull requests.

## Versioning

We use [SemVer](https://semver.org/) for versioning. For the versions available, see the [tags on this repository](https://github.com/energia-source/knight-artifact-higeco/tags). 

## Authors

* **Paolo Fabris** - *Initial work* - [energia-europa.com](https://www.energia-europa.com/)
* **Gabriele Luigi Masero** - *Developer* - [energia-europa.com](https://www.energia-europa.com/)

See also the list of [contributors](https://github.com/energia-source/knight-artifact-higeco/blob/main/CONTRIBUTORS.md) who participated in this project.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details