<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9d338d8cfe9cfa7f80d95e0cb78da1d1
{
    public static $prefixLengthsPsr4 = array (
        'g' => 
        array (
            'gabung\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'gabung\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit9d338d8cfe9cfa7f80d95e0cb78da1d1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9d338d8cfe9cfa7f80d95e0cb78da1d1::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}