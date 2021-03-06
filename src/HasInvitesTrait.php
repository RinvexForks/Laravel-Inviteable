<?php

/*
 * This file is part of Laravel Inviteable.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\Inviteable\Traits;

use BrianFaust\Inviteable\Invite;

trait HasInvitesTrait
{
    /**
     * @return mixed
     */
    public function invite()
    {
        return $this->morphOne(Invite::class, 'claimer');
    }
}
