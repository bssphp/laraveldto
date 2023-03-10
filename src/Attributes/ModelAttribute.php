<?php

namespace bssphp\laraveldto\Attributes;

use Attribute;
use bssphp\laraveldto\Attributes\Interfaces\DataAttributeInterface;
use bssphp\laraveldto\Attributes\Interfaces\ModelAttributeInterface;

#[Attribute]
class ModelAttribute implements DataAttributeInterface, ModelAttributeInterface
{
    public function __construct(
        private ?string $attribute = null
    ) {
    }

    public function getModelAttribute(): ?string
    {
        return $this->attribute;
    }
}
