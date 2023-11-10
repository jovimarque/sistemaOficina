<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit855e16129f8ec3298846460bf3ff73ec
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sinesp\\' => 7,
        ),
        'D' => 
        array (
            'DeividFortuna\\Fipe\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sinesp\\' => 
        array (
            0 => __DIR__ . '/..' . '/breskott/sinesp/src',
        ),
        'DeividFortuna\\Fipe\\' => 
        array (
            0 => __DIR__ . '/..' . '/deividfortuna/fipe/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit855e16129f8ec3298846460bf3ff73ec::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit855e16129f8ec3298846460bf3ff73ec::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit855e16129f8ec3298846460bf3ff73ec::$classMap;

        }, null, ClassLoader::class);
    }
}
