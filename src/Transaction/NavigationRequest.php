<?php

namespace Flat3\Lodata\Transaction;

use Flat3\Lodata\NavigationProperty;
use Illuminate\Http\Request;

class NavigationRequest extends Request
{
    /** @var NavigationProperty $navigationProperty */
    protected $navigationProperty;

    public function parseQueryString(string $queryString): self
    {
        parse_str($queryString, $queryParameters);
        $this->query->replace($queryParameters);

        return $this;
    }

    public function getMethod(): string
    {
        return Request::METHOD_GET;
    }

    public function setPath(string $path): self
    {
        $this->basePath = $path;
        return $this;
    }

    public function setNavigationProperty(NavigationProperty $navigationProperty): self
    {
        $this->navigationProperty = $navigationProperty;

        return $this;
    }

    public function getNavigationProperty(): NavigationProperty
    {
        return $this->navigationProperty;
    }

    public function __toString()
    {
        return $this->getBasePath();
    }
}
