<?php

class Config 
{
    private array $configs;

    public function __construct()
    {
        $this->configs['LOG_LEVEL'] = getenv("LOG_LEVEL", "INFO");
        $this->configs['LOG_PATH'] = getenv("LOG_PATH", "INFO");
    }
}