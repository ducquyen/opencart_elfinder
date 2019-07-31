<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit03651dab1fc025296cbf407307aece7a
{
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
            $loader->classMap = ComposerStaticInit03651dab1fc025296cbf407307aece7a::$classMap;

        }, null, ClassLoader::class);
    }
}
