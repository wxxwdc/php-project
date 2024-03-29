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

/**
 * post addPet
 * Summary: Add a new pet to the store
 * Notes: 

 */
Route::post('/v2/pet', 'PetController@addPet');
/**
 * put updatePet
 * Summary: Update an existing pet
 * Notes: 

 */
Route::put('/v2/pet', 'PetController@updatePet');
/**
 * get findPetsByStatus
 * Summary: Finds Pets by status
 * Notes: Multiple status values can be provided with comma separated strings
 * Output-Formats: [application/xml, application/json]
 */
Route::get('/v2/pet/findByStatus', 'PetController@findPetsByStatus');
/**
 * get findPetsByTags
 * Summary: Finds Pets by tags
 * Notes: Muliple tags can be provided with comma separated strings. Use         tag1, tag2, tag3 for testing.
 * Output-Formats: [application/xml, application/json]
 */
Route::get('/v2/pet/findByTags', 'PetController@findPetsByTags');
/**
 * delete deletePet
 * Summary: Deletes a pet
 * Notes: 

 */
Route::delete('/v2/pet/{petId}', 'PetController@deletePet');
/**
 * get getPetById
 * Summary: Find pet by ID
 * Notes: Returns a single pet
 * Output-Formats: [application/xml, application/json]
 */
Route::get('/v2/pet/{petId}', 'PetController@getPetById');
/**
 * post updatePetWithForm
 * Summary: Updates a pet in the store with form data
 * Notes: 

 */
Route::post('/v2/pet/{petId}', 'PetController@updatePetWithForm');
/**
 * post uploadFile
 * Summary: uploads an image
 * Notes: 
 * Output-Formats: [application/json]
 */
Route::post('/v2/pet/{petId}/uploadImage', 'PetController@uploadFile');
/**
 * get getInventory
 * Summary: Returns pet inventories by status
 * Notes: Returns a map of status codes to quantities
 * Output-Formats: [application/json]
 */
Route::get('/v2/store/inventory', 'StoreController@getInventory');
/**
 * post placeOrder
 * Summary: Place an order for a pet
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
Route::post('/v2/store/order', 'StoreController@placeOrder');
/**
 * delete deleteOrder
 * Summary: Delete purchase order by ID
 * Notes: For valid response try integer IDs with positive integer value.         Negative or non-integer values will generate API errors

 */
Route::delete('/v2/store/order/{orderId}', 'StoreController@deleteOrder');
/**
 * get getOrderById
 * Summary: Find purchase order by ID
 * Notes: For valid response try integer IDs with value &gt;&#x3D; 1 and &lt;&#x3D; 10.         Other values will generated exceptions
 * Output-Formats: [application/xml, application/json]
 */
Route::get('/v2/store/order/{orderId}', 'StoreController@getOrderById');
/**
 * post createUser
 * Summary: Create user
 * Notes: This can only be done by the logged in user.

 */
Route::post('/v2/user', 'UserController@createUser');
/**
 * post createUsersWithArrayInput
 * Summary: Creates list of users with given input array
 * Notes: 

 */
Route::post('/v2/user/createWithArray', 'UserController@createUsersWithArrayInput');
/**
 * post createUsersWithListInput
 * Summary: Creates list of users with given input array
 * Notes: 

 */
Route::post('/v2/user/createWithList', 'UserController@createUsersWithListInput');
/**
 * get loginUser
 * Summary: Logs user into the system
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
Route::get('/v2/user/login', 'UserController@loginUser');
/**
 * get logoutUser
 * Summary: Logs out current logged in user session
 * Notes: 

 */
Route::get('/v2/user/logout', 'UserController@logoutUser');
/**
 * delete deleteUser
 * Summary: Delete user
 * Notes: This can only be done by the logged in user.

 */
Route::delete('/v2/user/{username}', 'UserController@deleteUser');
/**
 * get getUserByName
 * Summary: Get user by user name
 * Notes: 
 * Output-Formats: [application/xml, application/json]
 */
Route::get('/v2/user/{username}', 'UserController@getUserByName');
/**
 * put updateUser
 * Summary: Updated user
 * Notes: This can only be done by the logged in user.

 */
Route::put('/v2/user/{username}', 'UserController@updateUser');

