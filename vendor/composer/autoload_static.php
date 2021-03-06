<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit18c184b629f15c44a713263929d8160f
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit18c184b629f15c44a713263929d8160f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit18c184b629f15c44a713263929d8160f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit18c184b629f15c44a713263929d8160f::$classMap;

        }, null, ClassLoader::class);
    }
}
