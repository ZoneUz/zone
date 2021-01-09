<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3ac69aec6c3a6645d5788c803a18c390
{
    public static $files = array (
        '71ecd0286a4e74fd8732297fb587023c' => __DIR__ . '/..' . '/thingengineer/mysqli-database-class/MysqliDb.php',
        'd383f1ec7b1e54a09cb53eb6fcf751e0' => __DIR__ . '/..' . '/thingengineer/mysqli-database-class/dbObject.php',
        'acd94bcfbec64072e5fb1a9eb4106fc8' => __DIR__ . '/..' . '/mysqlLb',
    );

    public static $prefixLengthsPsr4 = array (
        'z' => 
        array (
            'zone\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'zone\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit3ac69aec6c3a6645d5788c803a18c390::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3ac69aec6c3a6645d5788c803a18c390::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3ac69aec6c3a6645d5788c803a18c390::$classMap;

        }, null, ClassLoader::class);
    }
}
