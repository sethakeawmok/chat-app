<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite848ea9e26e91aa630097fe2a0a9f3e5
{
    public static $prefixesPsr0 = array (
        'M' => 
        array (
            'MyApp' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInite848ea9e26e91aa630097fe2a0a9f3e5::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite848ea9e26e91aa630097fe2a0a9f3e5::$classMap;

        }, null, ClassLoader::class);
    }
}