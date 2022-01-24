<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit427420cdd9640370fb33c90c6b57b44f
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HR\\' => 3,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HR\\' => 
        array (
            0 => __DIR__ . '/../..' . '/HR',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit427420cdd9640370fb33c90c6b57b44f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit427420cdd9640370fb33c90c6b57b44f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit427420cdd9640370fb33c90c6b57b44f::$classMap;

        }, null, ClassLoader::class);
    }
}
