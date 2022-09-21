<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd74fe40e909563b7771e98332acb10f0
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd74fe40e909563b7771e98332acb10f0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd74fe40e909563b7771e98332acb10f0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}