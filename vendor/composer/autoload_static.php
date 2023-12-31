<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit9e1f732ccd6fad7cb8313cca759e6881
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit9e1f732ccd6fad7cb8313cca759e6881::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit9e1f732ccd6fad7cb8313cca759e6881::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit9e1f732ccd6fad7cb8313cca759e6881::$classMap;

        }, null, ClassLoader::class);
    }
}
