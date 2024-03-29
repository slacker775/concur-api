<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Concur\Api\Model;

class Merchant
{
    /**
     * @var Location
     */
    protected $location;
    /**
     * The name of the provider (merchant). Maximum length: 64 characters.
     *
     * @var string
     */
    protected $name;

    public function getLocation(): Location
    {
        return $this->location;
    }

    public function setLocation(Location $location): self
    {
        $this->location = $location;

        return $this;
    }

    /**
     * The name of the provider (merchant). Maximum length: 64 characters.
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * The name of the provider (merchant). Maximum length: 64 characters.
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
