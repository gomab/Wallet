<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite43921e1270fa68df4c6a6c4193ea244
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'RedBeanPHP\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'RedBeanPHP\\' => 
        array (
            0 => __DIR__ . '/..' . '/gabordemooij/redbean/RedBeanPHP',
        ),
    );

    public static $fallbackDirsPsr0 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite43921e1270fa68df4c6a6c4193ea244::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite43921e1270fa68df4c6a6c4193ea244::$prefixDirsPsr4;
            $loader->fallbackDirsPsr0 = ComposerStaticInite43921e1270fa68df4c6a6c4193ea244::$fallbackDirsPsr0;

        }, null, ClassLoader::class);
    }
}
