<?php

/*
 * This file is part of the overtrue/wechat.
 *
 * (c) overtrue <i@overtrue.me>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace EasyWeChat\Applications\OfficialAccount\AutoReply;

use EasyWeChat\Applications\Base\Core\AbstractAPI;

/**
 * Class Client.
 *
 * @author overtrue <i@overtrue.me>
 */
class Client extends AbstractAPI
{
    const API_GET_CURRENT_SETTING = 'https://api.weixin.qq.com/cgi-bin/get_current_autoreply_info';

    /**
     * Get current auto reply settings.
     *
     * @return \EasyWeChat\Support\Collection
     */
    public function current()
    {
        return $this->parseJSON('get', [self::API_GET_CURRENT_SETTING]);
    }
}