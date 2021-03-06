<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class RtmConnectGetResponse200
{
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var RtmConnectGetResponse200Self
     */
    protected $self;
    /**
     * @var RtmConnectGetResponse200Team
     */
    protected $team;
    /**
     * @var string
     */
    protected $url;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getSelf(): ?RtmConnectGetResponse200Self
    {
        return $this->self;
    }

    public function setSelf(?RtmConnectGetResponse200Self $self): self
    {
        $this->self = $self;

        return $this;
    }

    public function getTeam(): ?RtmConnectGetResponse200Team
    {
        return $this->team;
    }

    public function setTeam(?RtmConnectGetResponse200Team $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getUrl(): ?string
    {
        return $this->url;
    }

    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }
}
