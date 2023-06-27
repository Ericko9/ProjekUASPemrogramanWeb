<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8570c768c1d6a2f9465c2a3584c0a64a
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8570c768c1d6a2f9465c2a3584c0a64a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8570c768c1d6a2f9465c2a3584c0a64a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit8570c768c1d6a2f9465c2a3584c0a64a::$classMap;

        }, null, ClassLoader::class);
    }
}
