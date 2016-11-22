<?php

namespace Phpfox\Storage;


class StorageFactory
{
    /**
     * @param array $options
     */
    public function factory($options)
    {
        return (new $options['driver'])($options);
    }
}