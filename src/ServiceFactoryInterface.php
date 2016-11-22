<?php

namespace Phpfox\Storage;


interface ServiceFactoryInterface
{
    /**
     * @param array $options
     *
     * @return StorageServiceInterface
     */
    public function factory($options);
}