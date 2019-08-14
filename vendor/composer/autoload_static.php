<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita1dae54fb7c423b765303d91ad8e8850
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MF\\' => 3,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MF\\' => 
        array (
            0 => __DIR__ . '/..' . '/MF',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita1dae54fb7c423b765303d91ad8e8850::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita1dae54fb7c423b765303d91ad8e8850::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
