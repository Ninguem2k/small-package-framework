<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6a39a5e68318c634a94516a337389176
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
            'AnotherNamespace\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'AnotherNamespace\\' => 
        array (
            0 => __DIR__ . '/../..' . '/another-folder',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6a39a5e68318c634a94516a337389176::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6a39a5e68318c634a94516a337389176::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6a39a5e68318c634a94516a337389176::$classMap;

        }, null, ClassLoader::class);
    }
}
