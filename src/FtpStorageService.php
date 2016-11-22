<?php
namespace Phpfox\Storage;


class FtpStorageService implements StorageServiceInterface
{
    use StorageServiceTrait;

    public function __construct($configs)
    {
        $this->initialize($configs);
    }

    public function putFile($local, $name)
    {
        // TODO: Implement putFile() method.
    }

    public function getFile($local, $name)
    {
        // TODO: Implement getFile() method.
    }

    public function deleteFile($name)
    {
        // TODO: Implement deleteFile() method.
    }

}