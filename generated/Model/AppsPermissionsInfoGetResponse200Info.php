<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace JoliCode\Slack\Api\Model;

class AppsPermissionsInfoGetResponse200Info
{
    /**
     * @var AppsPermissionsInfoGetResponse200InfoAppHome
     */
    protected $appHome;
    /**
     * @var AppsPermissionsInfoGetResponse200InfoChannel
     */
    protected $channel;
    /**
     * @var AppsPermissionsInfoGetResponse200InfoGroup
     */
    protected $group;
    /**
     * @var AppsPermissionsInfoGetResponse200InfoIm
     */
    protected $im;
    /**
     * @var AppsPermissionsInfoGetResponse200InfoMpim
     */
    protected $mpim;
    /**
     * @var AppsPermissionsInfoGetResponse200InfoTeam
     */
    protected $team;

    public function getAppHome(): ?AppsPermissionsInfoGetResponse200InfoAppHome
    {
        return $this->appHome;
    }

    public function setAppHome(?AppsPermissionsInfoGetResponse200InfoAppHome $appHome): self
    {
        $this->appHome = $appHome;

        return $this;
    }

    public function getChannel(): ?AppsPermissionsInfoGetResponse200InfoChannel
    {
        return $this->channel;
    }

    public function setChannel(?AppsPermissionsInfoGetResponse200InfoChannel $channel): self
    {
        $this->channel = $channel;

        return $this;
    }

    public function getGroup(): ?AppsPermissionsInfoGetResponse200InfoGroup
    {
        return $this->group;
    }

    public function setGroup(?AppsPermissionsInfoGetResponse200InfoGroup $group): self
    {
        $this->group = $group;

        return $this;
    }

    public function getIm(): ?AppsPermissionsInfoGetResponse200InfoIm
    {
        return $this->im;
    }

    public function setIm(?AppsPermissionsInfoGetResponse200InfoIm $im): self
    {
        $this->im = $im;

        return $this;
    }

    public function getMpim(): ?AppsPermissionsInfoGetResponse200InfoMpim
    {
        return $this->mpim;
    }

    public function setMpim(?AppsPermissionsInfoGetResponse200InfoMpim $mpim): self
    {
        $this->mpim = $mpim;

        return $this;
    }

    public function getTeam(): ?AppsPermissionsInfoGetResponse200InfoTeam
    {
        return $this->team;
    }

    public function setTeam(?AppsPermissionsInfoGetResponse200InfoTeam $team): self
    {
        $this->team = $team;

        return $this;
    }
}
