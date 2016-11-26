<?php
namespace Phpfox\Storage;

return [
    'storage.drivers' => [
        'local' => LocalStorageService::class,
        'ftp'   => FtpStorageService::class,
        'ssh2'  => Ssh2StorageService::class,
    ],
    'services'        => [
        'storage' => [SampleStorageManagerFactory::class, null, null],
    ],
];