<?php
namespace Aequation\ToolwireBundle\Attribute;

// PHP
use Attribute;

/**
 * Service for object
 * @Target({"CLASS"})
 * @author emmanuel:dujardin Aequation
 */
#[Attribute(Attribute::TARGET_CLASS)]
Class ClassCustomService
{

    public function __construct(
        public string $service,
    ) {}

}