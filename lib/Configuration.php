<?PHP

namespace Higeco;

use Knight\Configuration as KnightConfiguration;

/* The Configuration class is a singleton that reads the configuration file and returns the username,
password, and hostname */

class Configuration
{
    use KnightConfiguration;

    const CONFIGURATION_FILENAME = 'Higeco';
    const CONFIGURATION_USERNAME = 0x2774;
    const CONFIGURATION_PASSWORD = 0x2775;
    const CONFIGURATION_HOST = 0x283c;

    final protected function __construct() {}

    /**
     * Get the username from the configuration file
     * 
     * @return The username.
     */

    public static function getUsername() : string
    {
        return static::getConfiguration(static::CONFIGURATION_USERNAME, true, static::CONFIGURATION_FILENAME);
    }

    /**
     * Get the password from the configuration file
     * 
     * @return The password.
     */

    public static function getPassword() : string
    {
        return static::getConfiguration(static::CONFIGURATION_PASSWORD, true, static::CONFIGURATION_FILENAME);
    }

    /**
     * Get the host from the configuration file
     * 
     * @return The hostname of the server.
     */

    public static function getHost() : string
    {
        return static::getConfiguration(static::CONFIGURATION_HOST, true, static::CONFIGURATION_FILENAME);
    }
}