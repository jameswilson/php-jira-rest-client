<?php

namespace JiraRestApi\Issue;

use JiraRestApi\ClassSerialize;

/**
 * Class Watcher.
 */
class Watcher implements \JsonSerializable
{
    use ClassSerialize;

    /** @var string */
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * Function to serialize obj vars.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return array_filter(get_object_vars($this));
    }
}
