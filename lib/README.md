# Documentation knight-artifact-higeco

Knight PHP library for [Higeco](https://www.higeco.com/) integration.

**NOTE:** This repository is part of [Knight](https://github.com/energia-source/knight). Any
support requests, bug reports, or development contributions should be directed to
that project.

## Structure

library:
    - [Higeco](https://github.com/energia-source/knight-artifact-higeco/tree/main/lib)

<br>

#### ***Class Higeco\Request usable methods***

##### `public static function callAPI(string $get, array $querystring = []) : array`

This function is used to call the API

 * **Parameters:**
   * `string` — The API endpoint to call.
   * `array` — The querystring is the part of the URL that comes after the ?. In our

     example, it's `?key=value`.

     <p>
 * **Returns:** `An` — array of the response from the API.

##### `public static function getCURL() :? Curl`

Returns the current instance of the Curl class

 * **Returns:** `Nothing.` — 

<br>

#### ***Class Higeco\Configuration usable methods***

##### `public static function getUsername() : string`

Get the username from the configuration file

 * **Returns:** `The` — username.

##### `public static function getPassword() : string`

Get the password from the configuration file

 * **Returns:** `The` — password.

##### `public static function getHost() : string`

Get the host from the configuration file

 * **Returns:** `The` — hostname of the server.

## Built With

* [PHP](https://www.php.net/) - PHP

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details