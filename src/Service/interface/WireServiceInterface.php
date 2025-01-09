<?php
namespace Aequation\ToolwireBundle\Service\interface;

// PHP
use Reflector;

interface WireServiceInterface extends Reflector // --> stringable
{

    public function __toString(): string;
    public function getName(): string;

}