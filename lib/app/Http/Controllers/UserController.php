<?php

/**
 * Swagger Petstore
 * This is a sample server Petstore server.  You can find out more about     Swagger at [http://swagger.io](http://swagger.io) or on [irc.freenode.net, #swagger](http://swagger.io/irc/).      For this sample, you can use the api key `special-key` to test the authorization     filters.
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: apiteam@swagger.io
 *
 * NOTE: This class is auto generated by OpenAPI-Generator
 * https://openapi-generator.tech
 * Do not edit the class manually.
 *
 * Source files are located at:
 *
 * > https://github.com/OpenAPITools/openapi-generator/blob/master/modules/openapi-generator/src/main/resources/php-laravel/
 */


namespace App\Http\Controllers;

use Illuminate\Support\Facades\Request;

class UserController extends Controller
{
    /**
     * Constructor
     */
    public function __construct()
    {
    }

    /**
     * Operation createUser
     *
     * Create user.
     *
     *
     * @return Http response
     */
    public function createUser()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createUser');
        }
        $body = $input['body'];


        return response('How about implementing createUser as a post method ?');
    }
    /**
     * Operation createUsersWithArrayInput
     *
     * Creates list of users with given input array.
     *
     *
     * @return Http response
     */
    public function createUsersWithArrayInput()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createUsersWithArrayInput');
        }
        $body = $input['body'];


        return response('How about implementing createUsersWithArrayInput as a post method ?');
    }
    /**
     * Operation createUsersWithListInput
     *
     * Creates list of users with given input array.
     *
     *
     * @return Http response
     */
    public function createUsersWithListInput()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['body'])) {
            throw new \InvalidArgumentException('Missing the required parameter $body when calling createUsersWithListInput');
        }
        $body = $input['body'];


        return response('How about implementing createUsersWithListInput as a post method ?');
    }
    /**
     * Operation loginUser
     *
     * Logs user into the system.
     *
     *
     * @return Http response
     */
    public function loginUser()
    {
        $input = Request::all();

        //path params validation


        //not path params validation
        if (!isset($input['username'])) {
            throw new \InvalidArgumentException('Missing the required parameter $username when calling loginUser');
        }
        $username = $input['username'];

        if (!isset($input['password'])) {
            throw new \InvalidArgumentException('Missing the required parameter $password when calling loginUser');
        }
        $password = $input['password'];


        return response('How about implementing loginUser as a get method ?');
    }
    /**
     * Operation logoutUser
     *
     * Logs out current logged in user session.
     *
     *
     * @return Http response
     */
    public function logoutUser()
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing logoutUser as a get method ?');
    }
    /**
     * Operation deleteUser
     *
     * Delete user.
     *
     * @param string $username The name that needs to be deleted (required)
     *
     * @return Http response
     */
    public function deleteUser($username)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing deleteUser as a delete method ?');
    }
    /**
     * Operation getUserByName
     *
     * Get user by user name.
     *
     * @param string $username The name that needs to be fetched. Use user1 for testing. (required)
     *
     * @return Http response
     */
    public function getUserByName($username)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing getUserByName as a get method ?');
    }
    /**
     * Operation updateUser
     *
     * Updated user.
     *
     * @param string $username name that need to be updated (required)
     *
     * @return Http response
     */
    public function updateUser($username)
    {
        $input = Request::all();

        //path params validation


        //not path params validation

        return response('How about implementing updateUser as a put method ?');
    }
}
