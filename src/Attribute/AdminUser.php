<?php
namespace Aequation\ToolwireBundle\Attribute;

// PHP
use Attribute;

#[Attribute(Attribute::TARGET_PROPERTY)]
class AdminUser
{

    public function __construct(
        public bool $replace = false,
        public bool $required = false
    )
    {}


}