<?php
namespace Aequation\ToolwireBundle\Attribute;

// PHP
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class Slugable
{

    public function __construct(
        public bool $property
    )
    {}


}