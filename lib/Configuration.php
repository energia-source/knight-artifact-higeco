<?PHP

namespace Higeco;

use Knight\Configuration as KnightConfiguration;

class Configuration
{
    use KnightConfiguration;

    const CONFIGURATION_FILENAME = 'Higeco';
    const CONFIGURATION_USERNAME = 0x2774;
    const CONFIGURATION_PASSWORD = 0x2775;
    const CONFIGURATION_HOST = 0x283c;

    final protected function __construct() {}

    public static function getUsername() : string
    {
        return static::getConfiguration(static::CONFIGURATION_USERNAME, true, static::CONFIGURATION_FILENAME);
    }

    public static function getPassword() : string
    {
        return static::getConfiguration(static::CONFIGURATION_PASSWORD, true, static::CONFIGURATION_FILENAME);
    }

    public static function getHost() : string
    {
        return static::getConfiguration(static::CONFIGURATION_HOST, true, static::CONFIGURATION_FILENAME);
    }
}