<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class UsersLookupByEmailGetResponse200 extends \ArrayObject
{
    /**
     * @var bool
     */
    protected $ok;
    /**
     * Merged user object for non enterprise type and enterprise user.
     *
     * @var ObjsUser
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

    /**
     * Merged user object for non enterprise type and enterprise user.
     */
    public function getUser(): ?ObjsUser
    {
        return $this->user;
    }

    /**
     * Merged user object for non enterprise type and enterprise user.
     */
    public function setUser(?ObjsUser $user): self
    {
        $this->user = $user;

        return $this;
    }
}
