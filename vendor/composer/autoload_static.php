<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit613610fa8c422d9db5686cf6a136cde1
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'Repositories\\' => 13,
        ),
        'D' => 
        array (
            'Dotenv\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Repositories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app/Repositories',
        ),
        'Dotenv\\' => 
        array (
            0 => __DIR__ . '/..' . '/vlucas/phpdotenv/src',
        ),
    );

    public static $classMap = array (
        'Dotenv\\Dotenv' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Dotenv.php',
        'Dotenv\\Exception\\ExceptionInterface' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ExceptionInterface.php',
        'Dotenv\\Exception\\InvalidCallbackException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidCallbackException.php',
        'Dotenv\\Exception\\InvalidFileException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidFileException.php',
        'Dotenv\\Exception\\InvalidPathException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/InvalidPathException.php',
        'Dotenv\\Exception\\ValidationException' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Exception/ValidationException.php',
        'Dotenv\\Loader' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Loader.php',
        'Dotenv\\Validator' => __DIR__ . '/..' . '/vlucas/phpdotenv/src/Validator.php',
        'Repositories\\Db\\Connection\\GetConnection' => __DIR__ . '/../..' . '/app/Repositories/Db/Connection/GetConnection.php',
        'Repositories\\Login\\Authenticate\\UserAuthentication' => __DIR__ . '/../..' . '/app/Repositories/User/Authentication/UserAuthentication.php',
        'Repositories\\Utils\\Json\\JsonReturn' => __DIR__ . '/../..' . '/app/Repositories/Utils/Json/JsonReturn.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit613610fa8c422d9db5686cf6a136cde1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit613610fa8c422d9db5686cf6a136cde1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit613610fa8c422d9db5686cf6a136cde1::$classMap;

        }, null, ClassLoader::class);
    }
}
