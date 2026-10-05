<?php

namespace MaximeRainville\SilverstripeReact\Tests\Components;

use SilverStripe\Model\ModelData;
use MaximeRainville\SilverstripeReact\BootstrapComponent;

class GenericComponent extends ModelData
{
    use BootstrapComponent;

    public function getProps(): array
    {
        return [
            'title' => 'hello world'
        ];
    }

    public function getComponent(): string
    {
        return 'GenericComponent';
    }
}
