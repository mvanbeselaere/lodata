<?php

namespace Flat3\OData\Resource\Operation;

use Flat3\OData\Resource\Operation;

class Function_ extends Operation
{
    public function getKind(): string
    {
        return 'Function';
    }
}