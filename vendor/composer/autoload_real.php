<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitc8b2347cd5c92c066a2d186ec2b6c936
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInitc8b2347cd5c92c066a2d186ec2b6c936', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitc8b2347cd5c92c066a2d186ec2b6c936', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitc8b2347cd5c92c066a2d186ec2b6c936::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}