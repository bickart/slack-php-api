<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class UsersIdentityGetResponse200Item1
{
    /**
     * @var bool
     */
    protected $ok;
    /**
     * @var UsersIdentityGetResponse200Item1Team
     */
    protected $team;
    /**
     * @var UsersIdentityGetResponse200Item1User
     */
    protected $user;

    public function getOk(): ?bool
    {
        return $this->ok;
    }

    public function setOk(?bool $ok): self
    {
        $this->ok = $ok;

        return $this;
    }

    public function getTeam(): ?UsersIdentityGetResponse200Item1Team
    {
        return $this->team;
    }

    public function setTeam(?UsersIdentityGetResponse200Item1Team $team): self
    {
        $this->team = $team;

        return $this;
    }

    public function getUser(): ?UsersIdentityGetResponse200Item1User
    {
        return $this->user;
    }

    public function setUser(?UsersIdentityGetResponse200Item1User $user): self
    {
        $this->user = $user;

        return $this;
    }
}
