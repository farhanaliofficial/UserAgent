# UserAgent

[![GitHub stars](https://img.shields.io/github/stars/farhanaliofficial/UserAgent.svg?style=flat-square)](https://github.com/farhanaliofficial/UserAgent/stargazers)
[![GitHub license](https://img.shields.io/github/license/farhanaliofficial/UserAgent.svg?style=flat-square)](https://github.com/farhanaliofficial/UserAgent/blob/main/LICENSE)
[![Latest release](https://img.shields.io/github/v/release/farhanaliofficial/UserAgent.svg?style=flat-square)](https://github.com/farhanaliofficial/UserAgent/releases)

UserAgent is a PHP library that provides methods to generate random User-Agent strings for different platforms, including Windows, Linux, and mobile devices.

## Installation

Download and include it in your project.

## Usage

Here's how you can use the UserAgent library in your PHP code:

```php
require_once 'src/UserAgent.php';

// Generate a random User-Agent string for Windows
$userAgent = UserAgent::getWindows();
echo $userAgent;

// Generate a random User-Agent string for Linux
$userAgent = UserAgent::getLinux();
echo $userAgent;

// Generate a random User-Agent string for mobile devices
$userAgent = UserAgent::getMobile();
echo $userAgent;

// Generate a random User-Agent string for any platform
$userAgent = UserAgent::getRandom();
echo $userAgent;
```

## Contributing

Contributions are welcome! If you find any issues or have suggestions for improvements, feel free to open an issue or create a pull request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.
