<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7e6f4b1fc972b6ecc4140d56f6ed199c
{
    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7e6f4b1fc972b6ecc4140d56f6ed199c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7e6f4b1fc972b6ecc4140d56f6ed199c::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit7e6f4b1fc972b6ecc4140d56f6ed199c::$classMap;

        }, null, ClassLoader::class);
    }
}
