<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3df1a35322124a34ceb5accdc09a24eb
{
    public static $prefixLengthsPsr4 = array (
        'm' => 
        array (
            'myapp\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'myapp\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3df1a35322124a34ceb5accdc09a24eb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3df1a35322124a34ceb5accdc09a24eb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
