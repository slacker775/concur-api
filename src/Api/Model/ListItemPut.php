<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Concur\Api\Model;

class ListItemPut
{
    /**
     * The item code of the list item. Maximum 32 characters.
     *
     * @var string|null
     */
    protected $code;
    /**
     * The unique identifier for the list this item is a member of.
     *
     * @var string
     */
    protected $listID;
    /**
     * The name of item. Maximum 64 characters.
     *
     * @var string|null
     */
    protected $name;

    /**
     * The item code of the list item. Maximum 32 characters.
     */
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * The item code of the list item. Maximum 32 characters.
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * The unique identifier for the list this item is a member of.
     */
    public function getListID(): string
    {
        return $this->listID;
    }

    /**
     * The unique identifier for the list this item is a member of.
     */
    public function setListID(string $listID): self
    {
        $this->listID = $listID;

        return $this;
    }

    /**
     * The name of item. Maximum 64 characters.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * The name of item. Maximum 64 characters.
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }
}
