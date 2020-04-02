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
    public function ConfigLoad(string $filename): array
    {
        $this->stopOnFail(true);
        $filename .= '.json';
        if(!file_exists($filename)){
            throw new \Exception($filename. ' doesnt exists.');
        }
        $file = file_get_contents($filename);
        return (array)json_decode($file, true);
    }

    /**
     * @param array $config
     */
    public function ConfigSave(string $filename, array $config)
    {
        $this->stopOnFail(true);
        $filename .= '.json';
        if(!file_exists($filename)){
            throw new \Exception($filename. ' doesnt exists.');
        }

        file_put_contents($filename, json_encode($config, JSON_FORCE_OBJECT));
    }
}
