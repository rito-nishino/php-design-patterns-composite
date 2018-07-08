<?php

namespace App\Component;

abstract class FileSystem
{
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public abstract function add(FileSystem $file);

    public function display()
    {
        echo sprintf("%s<br>\n", $this->getName());
    }
}