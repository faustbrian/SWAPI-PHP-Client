<?php

declare(strict_types=1);

/*
 * This file is part of SWAPI PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\Swapi\API;

use Plients\Http\HttpResponse;

class Vehicles extends AbstractAPI
{
    /**
     * @return \Plients\Http\HttpResponse
     */
    public function all(): HttpResponse
    {
        return $this->client->get('vehicles');
    }

    /**
     * @param int $id
     *
     * @return \Plients\Http\HttpResponse
     */
    public function details(int $id): HttpResponse
    {
        return $this->client->get("vehicles/{$id}");
    }

    /**
     * @return \Plients\Http\HttpResponse
     */
    public function schema(): HttpResponse
    {
        return $this->client->get('vehicles/schema');
    }
}
