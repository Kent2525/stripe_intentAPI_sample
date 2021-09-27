<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit170e7a3913a8745b0b8a6455c40e3c98
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit170e7a3913a8745b0b8a6455c40e3c98::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit170e7a3913a8745b0b8a6455c40e3c98::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit170e7a3913a8745b0b8a6455c40e3c98::$classMap;

        }, null, ClassLoader::class);
    }
}
