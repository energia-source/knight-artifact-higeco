<?PHP

namespace Higeco;

use stdClass;

use Knight\armor\Curl;
use Knight\armor\Output;
use Knight\armor\CustomException;

use Higeco\Configuration;

class Request
{
    const TOKEN = 'token';
    const HEADER_AUTHOTIZATION = 'authorization';
    const AUTHENTICATE = 'api/v1/authenticate';

    protected static $curl;  // (curl)

    final protected function __construct() {}

    /* A constructor. */

    final public static function instance() : self
    {
        static $instance;
        if (null !== $instance) return $instance;

        $instance = new static();
        $instance_curl = new Curl();
        $instance_curl->setHeader('Content-Type: application/x-www-form-urlencoded');
        $instance_curl_response = $instance_curl->request(Configuration::getHost() . static::AUTHENTICATE, Output::json([
            'username' => Configuration::getUsername(),
            'password' => Configuration::getPassword()
        ]));
        if (false === property_exists($instance_curl_response, static::TOKEN)) throw new CustomException('developer/higeco/login/error');
        $instance_curl->setHeader(static::HEADER_AUTHOTIZATION . chr(58) . $instance_curl_response->{static::TOKEN});
        static::setCURL($instance_curl);
        return $instance;
    }

    /**
     * This function is used to call the API
     * 
     * @param string get The API endpoint to call.
     * @param array querystring The querystring is the part of the URL that comes after the ?. In our
     * example, it's `?key=value`.
     * 
     * @return An array of the response from the API.
     */

    public static function callAPI(string $get, array $querystring = []) : array
    {
        static::instance();
        $curl = static::getCURL();
        $curl_request = Configuration::getHost();
        $curl_request .= $get;
        if (!!$querystring) {
            $curl_querystring = http_build_query($querystring);
            $curl_request .= chr(63) . $curl_querystring;
        }
        $curl_response = $curl->request($curl_request);
        return (array)$curl_response;
    }

    /**
     * Returns the current instance of the Curl class
     * 
     * @return Nothing.
     */

    public static function getCURL() :? Curl
    {
        return static::$curl;
    }

    /**
     * It sets the static property of the class to the value of the argument.
     * 
     * @param Curl curl The Curl object that will be used to make the request.
     */

    protected static function setCURL(Curl $curl) : void
    {
        static::$curl = $curl;
    }
}