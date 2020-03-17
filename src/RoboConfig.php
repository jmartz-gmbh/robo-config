<?php

namespace JmartzGmbh;

/**
 * Trait RoboConfig
 */
trait RoboConfig
{
    /**
     * @return array
     */
    public function ConfigLoad(): array
    {
        $this->stopOnFail(true);
        $filename = 'deployment-config.json';
        $file = file_get_contents($filename);
        return (array)json_decode($file);
    }

    /**
     * @param array $config
     */
    public function ConfigSave(array $config)
    {
        $this->stopOnFail(true);
        $filename = 'deployment-config.json';
        file_put_contents($filename, json_encode($config, JSON_FORCE_OBJECT));
    }
}
