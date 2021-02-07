<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd37a078837caac6316947e6c7816467c
{
    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'PHPThumb\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/masterexploder/phpthumb/tests',
            ),
            'PHPThumb' => 
            array (
                0 => __DIR__ . '/..' . '/masterexploder/phpthumb/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitd37a078837caac6316947e6c7816467c::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitd37a078837caac6316947e6c7816467c::$classMap;

        }, null, ClassLoader::class);
    }
}
