<?php

namespace Phpfox\Storage;

interface StorageServiceInterface
{
    /**
     * @param string $name Filename
     *
     * @return mixed
     */
    public function getUrl($name);

    /**
     * @param string $name
     *
     * @return mixed
     */
    public function getPath($name);

    /**
     * Copy from local to file service path.
     *
     * @param string $local local source filename (full path)
     * @param string $name  Relative path
     *
     * @return mixed
     */
    public function putFile($local, $name);

    /**
     * @param string $local Local source filename (full path)
     * @param string $name
     *
     * @return mixed
     */
    public function getFile($local, $name);

    /**
     * @param string $name Relative path
     *
     * @return mixed
     */
    public function deleteFile($name);
}