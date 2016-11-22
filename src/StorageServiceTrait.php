<?php

namespace Phpfox\Storage;

Trait StorageServiceTrait
{
    /**
     * @var string
     */
    protected $baseUrl;

    /**
     * @var string
     */
    protected $basePath;

    /**
     * @var string
     */
    protected $baseCdn;

    /**
     * @var int
     */
    protected $directoryPermission = 0755;

    /**
     * @var int
     */
    protected $filePermission = 0644;

    protected function initialize($configs)
    {

        $baseUrl = $configs['basePath'];
        if (!$baseUrl) {
            $baseUrl = PHPFOX_BASE_URL;
        }
        $this->baseUrl = rtrim($baseUrl, '/') . '/';

        $basePath = $configs['basePath'];
        if (!$basePath) {
            $basePath = PHPFOX_DIR;
        }
        $this->basePath = rtrim($basePath, '/') . '/';

        $baseCdn = $configs['baseCdn'];
        if (!$baseCdn) {
            $baseCdn = PHPFOX_BASE_URL;
        }
        $this->baseCdn = $baseCdn;
    }

    public function getUrl($name)
    {
        return $this->baseUrl . $name;
    }

    public function getPath($name)
    {
        return $this->basePath . $name;
    }

    public function cdnUrl($name)
    {
        return $this->baseCdn . $name;
    }

    public function url($name)
    {
        return $this->baseCdn . $name;
    }
}