<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99dd63a1107889df9d90094f8a70c746
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tower\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tower\\' => 
        array (
            0 => __DIR__ . '/../..' . '/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99dd63a1107889df9d90094f8a70c746::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99dd63a1107889df9d90094f8a70c746::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
