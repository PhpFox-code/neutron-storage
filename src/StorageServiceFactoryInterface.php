<?php
namespace Neutron\Storage;

interface StorageServiceFactoryInterface
{
    /**
     * @param array $options
     *
     * @throws StorageServiceException
     */
    public function factory($options);
}