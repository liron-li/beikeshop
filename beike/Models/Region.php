<?php
/**
 * Region.php
 *
 * @copyright  2022 opencart.cn - All Rights Reserved
 * @link       http://www.guangdawangluo.com
 * @author     Edward Yang <yangjin@opencart.cn>
 * @created    2022-07-21 16:55:16
 * @modified   2022-07-21 16:55:16
 */

namespace Beike\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Region extends Base
{
    public function zones(): BelongsToMany
    {
        return $this->belongsToMany(Zone::class, 'region_zones');
    }
}