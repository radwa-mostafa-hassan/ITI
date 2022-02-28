<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitde98d234db4701c0b3227b00951d59d9
{
    public static $files = array (
        'd61b0996a8581803e0c3f1a7c2ffb113' => __DIR__ . '/../..' . '/config.php',
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Counter' => __DIR__ . '/../..' . '/Model/Counter.php',
        'Visitor' => __DIR__ . '/../..' . '/Model/Visitor.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitde98d234db4701c0b3227b00951d59d9::$classMap;

        }, null, ClassLoader::class);
    }
}
