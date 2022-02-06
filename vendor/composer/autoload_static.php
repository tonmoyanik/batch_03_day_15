<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2a9e92b01534b8d1da531493621ea529
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2a9e92b01534b8d1da531493621ea529::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2a9e92b01534b8d1da531493621ea529::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit2a9e92b01534b8d1da531493621ea529::$classMap;

        }, null, ClassLoader::class);
    }
}