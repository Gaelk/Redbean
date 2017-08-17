<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite757b938841cb34e210547a5fc0a3984
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite757b938841cb34e210547a5fc0a3984::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite757b938841cb34e210547a5fc0a3984::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
