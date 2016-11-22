<?php

namespace Phpfox\Storage;


class LocalStorageService implements StorageServiceInterface
{
    use StorageServiceTrait;

    /**
     * LocalStorageService constructor.
     *
     * @param $configs
     */
    public function __construct($configs)
    {
        $this->initialize($configs);
    }

    protected function ensure($path)
    {
        if (!is_dir($path)
            && !mkdir(dirname($path), $this->directoryPermission, true)
        ) {
            throw new StorageException("Could not write to '{$path}'.");
        }

        if (file_exists($path)) {
            @unlink($path);
        }
        return true;
    }

    public function putFile($local, $name)
    {
        $path = $this->getPath($name);
        $this->ensure($path);

        if (!copy($local, $path)) {
            throw new StorageException("Could not put file from '{$local}' to '{$path}'.");
        }
        return true;
    }

    public function getFile($local, $name)
    {
        $path = $this->getPath($name);
        $this->ensure($path);

        if (!copy($path, $local)) {
            throw new StorageException("Could not put file from '$path' to '{$local}'.");
        }

        return true;
    }

    public function deleteFile($name)
    {
        $path = $this->getPath($name);

        if (file_exists($path)) {
            @unlink($path);
        }
        return true;
    }
}