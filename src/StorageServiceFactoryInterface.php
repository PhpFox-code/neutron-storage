<?php
namespace Phpfox\Storage;

interface StorageServiceFactoryInterface
{
    /**
     * @param array $options
     *
     * @throws StorageException
     */
    public function factory($options);
}