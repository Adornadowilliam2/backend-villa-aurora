<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Configuration
    |--------------------------------------------------------------------------
    |
    | This file is where you can configure your CORS settings. By default,
    | Laravel uses the built-in CORS middleware, which can be configured here.
    |
    | You can set which origins, methods, and headers are allowed, and whether
    | credentials are supported. For more advanced setups, you may use a
    | package like fruitcake/laravel-cors.
    |
    */

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    | This option controls the paths that should be CORS-enabled. By default,
    | CORS is applied to all routes under the "api/*" pattern, but you can
    | customize this as needed.
    |
    | Example: 'paths' => ['api/*', 'sanctum/csrf-cookie']
    |
    */

       'paths' => ['api/*'],

    /*
    |--------------------------------------------------------------------------
    | Allowed Methods
    |--------------------------------------------------------------------------
    |
    | Here you may specify the HTTP methods that should be allowed when
    | making a CORS request. You can use an array or use '*' to allow all
    | methods.
    |
    | Example: 'allowed_methods' => ['GET', 'POST', 'PUT', 'DELETE']
    |
    */

    'allowed_methods' => ['*'], // Allows all HTTP methods

    /*
    |--------------------------------------------------------------------------
    | Allowed Origins
    |--------------------------------------------------------------------------
    |
    | This option controls which origins are allowed to access your application.
    | You can specify individual domains or use '*' to allow all origins.
    |
    | Example: 'allowed_origins' => ['http://localhost:3000', 'https://example.com']
    |
    */

    'allowed_origins' => ['http://localhost:5173', 'https://villa-aurora.vercel.app/'], // Replace with your actual front-end URLs

    /*
    |--------------------------------------------------------------------------
    | Allowed Headers
    |--------------------------------------------------------------------------
    |
    | This option controls which headers are allowed when making a CORS request.
    | You can use an array or use '*' to allow all headers.
    |
    | Example: 'allowed_headers' => ['Content-Type', 'X-Requested-With']
    |
    */

    'allowed_headers' => ['*'], // Allows all headers

    /*
    |--------------------------------------------------------------------------
    | Exposed Headers
    |--------------------------------------------------------------------------
    |
    | This option controls which headers are exposed to the browser. This can be
    | useful if you need to expose custom headers.
    |
    | Example: 'exposed_headers' => ['X-Custom-Header']
    |
    */

    'exposed_headers' => [], // No exposed headers by default

    /*
    |--------------------------------------------------------------------------
    | Max Age
    |--------------------------------------------------------------------------
    |
    | This option controls how long the results of a preflight request can be
    | cached by the browser, in seconds. Set to 0 to disable caching.
    |
    | Example: 'max_age' => 3600
    |
    */

    'max_age' => 0, // No caching by default

    /*
    |--------------------------------------------------------------------------
    | Supports Credentials
    |--------------------------------------------------------------------------
    |
    | This option determines whether the request can include user credentials,
    | such as cookies or HTTP authentication.
    |
    | Example: 'supports_credentials' => true
    |
    */

    'supports_credentials' => true, // Set to true if your app uses cookies or authentication
];
