<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03651dab1fc025296cbf407307aece7a
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        'b067bc7112e384b61c701452d53a14a8' => __DIR__ . '/..' . '/mtdowling/jmespath.php/src/JmesPath.php',
        '8a9dc1de0ca7e01f3e08231539562f61' => __DIR__ . '/..' . '/aws/aws-sdk-php/src/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Cache\\' => 10,
        ),
        'L' => 
        array (
            'League\\Flysystem\\Cached\\' => 24,
            'League\\Flysystem\\AwsS3v3\\' => 25,
            'League\\Flysystem\\' => 17,
        ),
        'J' => 
        array (
            'JmesPath\\' => 9,
        ),
        'I' => 
        array (
            'Intervention\\Image\\' => 19,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'B' => 
        array (
            'Barryvdh\\elFinderFlysystemDriver\\' => 33,
        ),
        'A' => 
        array (
            'Aws\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/cache/src',
        ),
        'League\\Flysystem\\Cached\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem-cached-adapter/src',
        ),
        'League\\Flysystem\\AwsS3v3\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem-aws-s3-v3/src',
        ),
        'League\\Flysystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/flysystem/src',
        ),
        'JmesPath\\' => 
        array (
            0 => __DIR__ . '/..' . '/mtdowling/jmespath.php/src',
        ),
        'Intervention\\Image\\' => 
        array (
            0 => __DIR__ . '/..' . '/intervention/image/src/Intervention/Image',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'Barryvdh\\elFinderFlysystemDriver\\' => 
        array (
            0 => __DIR__ . '/..' . '/barryvdh/elfinder-flysystem-driver/src',
        ),
        'Aws\\' => 
        array (
            0 => __DIR__ . '/..' . '/aws/aws-sdk-php/src',
        ),
    );

    public static $classMap = array (
        'RecursiveCallbackFilterIterator' => __DIR__ . '/../..' . '/php/elFinderVolumeLocalFileSystem.class.php',
        'elFinder' => __DIR__ . '/../..' . '/php/elFinder.class.php',
        'elFinderAbortException' => __DIR__ . '/../..' . '/php/elFinder.class.php',
        'elFinderConnector' => __DIR__ . '/../..' . '/php/elFinderConnector.class.php',
        'elFinderEditor' => __DIR__ . '/../..' . '/php/editors/editor.php',
        'elFinderEditorOnlineConvert' => __DIR__ . '/../..' . '/php/editors/OnlineConvert/editor.php',
        'elFinderEditorZipArchive' => __DIR__ . '/../..' . '/php/editors/ZipArchive/editor.php',
        'elFinderEditorZohoOffice' => __DIR__ . '/../..' . '/php/editors/ZohoOffice/editor.php',
        'elFinderLibGdBmp' => __DIR__ . '/../..' . '/php/libs/GdBmp.php',
        'elFinderPlugin' => __DIR__ . '/../..' . '/php/elFinderPlugin.php',
        'elFinderPluginAutoResize' => __DIR__ . '/../..' . '/php/plugins/AutoResize/plugin.php',
        'elFinderPluginAutoRotate' => __DIR__ . '/../..' . '/php/plugins/AutoRotate/plugin.php',
        'elFinderPluginNormalizer' => __DIR__ . '/../..' . '/php/plugins/Normalizer/plugin.php',
        'elFinderPluginSanitizer' => __DIR__ . '/../..' . '/php/plugins/Sanitizer/plugin.php',
        'elFinderPluginWatermark' => __DIR__ . '/../..' . '/php/plugins/Watermark/plugin.php',
        'elFinderSession' => __DIR__ . '/../..' . '/php/elFinderSession.php',
        'elFinderSessionInterface' => __DIR__ . '/../..' . '/php/elFinderSessionInterface.php',
        'elFinderVolumeBox' => __DIR__ . '/../..' . '/php/elFinderVolumeBox.class.php',
        'elFinderVolumeDriver' => __DIR__ . '/../..' . '/php/elFinderVolumeDriver.class.php',
        'elFinderVolumeDropbox' => __DIR__ . '/../..' . '/php/elFinderVolumeDropbox.class.php',
        'elFinderVolumeDropbox2' => __DIR__ . '/../..' . '/php/elFinderVolumeDropbox2.class.php',
        'elFinderVolumeFTP' => __DIR__ . '/../..' . '/php/elFinderVolumeFTP.class.php',
        'elFinderVolumeFlysystem' => __DIR__ . '/..' . '/barryvdh/elfinder-flysystem-driver/elFinderVolumeFlysystem.php',
        'elFinderVolumeFlysystemGoogleDriveCache' => __DIR__ . '/../..' . '/php/elFinderFlysystemGoogleDriveNetmount.php',
        'elFinderVolumeFlysystemGoogleDriveNetmount' => __DIR__ . '/../..' . '/php/elFinderFlysystemGoogleDriveNetmount.php',
        'elFinderVolumeGoogleDrive' => __DIR__ . '/../..' . '/php/elFinderVolumeGoogleDrive.class.php',
        'elFinderVolumeGroup' => __DIR__ . '/../..' . '/php/elFinderVolumeGroup.class.php',
        'elFinderVolumeLocalFileSystem' => __DIR__ . '/../..' . '/php/elFinderVolumeLocalFileSystem.class.php',
        'elFinderVolumeMySQL' => __DIR__ . '/../..' . '/php/elFinderVolumeMySQL.class.php',
        'elFinderVolumeOneDrive' => __DIR__ . '/../..' . '/php/elFinderVolumeOneDrive.class.php',
        'elFinderVolumeTrash' => __DIR__ . '/../..' . '/php/elFinderVolumeTrash.class.php',
        'elFinderVolumeTrashMySQL' => __DIR__ . '/../..' . '/php/elFinderVolumeTrashMySQL.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit03651dab1fc025296cbf407307aece7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit03651dab1fc025296cbf407307aece7a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit03651dab1fc025296cbf407307aece7a::$classMap;

        }, null, ClassLoader::class);
    }
}
