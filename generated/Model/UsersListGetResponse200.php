<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class UsersListGetResponse200
{
    /**
     * @var int
     */
    protected $cacheTs;
    /**
     * @var ObjsUser[]
     */
    protected $members;
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var ObjsResponseMetadata
     */
    protected $responseMetadata;

    public function getCacheTs(): ?int
    {
        return $this->cacheTs;
    }

    public function setCacheTs(?int $cacheTs): self
    {
        $this->cacheTs = $cacheTs;

        return $this;
    }

    /**
     * @return ObjsUser[]|null
     */
    public function getMembers(): ?array
    {
        return $this->members;
    }

    /**
     * @param ObjsUser[]|null $members
     */
    public function setMembers(?array $members): self
    {
        $this->members = $members;

        return $this;
    }

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getResponseMetadata(): ?ObjsResponseMetadata
    {
        return $this->responseMetadata;
    }

    public function setResponseMetadata(?ObjsResponseMetadata $responseMetadata): self
    {
        $this->responseMetadata = $responseMetadata;

        return $this;
    }
}
