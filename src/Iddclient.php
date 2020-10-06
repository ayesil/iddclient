<?php
namespace ayesil\Iddclient;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2020 Abdullatif yesil <ayesil@gmail.com>
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Class IddController
 * @package ayesil\Iddclient
 */
class Iddclient
{
    protected $appKey;
    protected $appSecret;
    protected $token;

    /**
     * Iddclient constructor.
     * @param $appKey
     * @param $appSecret
     * @param $token
     */
    function __construct($appKey = '', $appSecret = '', $token = '')
    {
        $this->appKey = $appKey;
        $this->appSecret = $appSecret;
        $this->token = $token;
    }

    /**
     *
     */
    public function start()
    {
        var_dump($this->appKey);
        var_dump($this->appSecret);
        var_dump($this->token);
    }

    /**
     * @param $hash
     * @return false|string
     */
    public function getUserDataByUserHash($hash)
    {
        $url = "https://idd.ddev.site/?type=3771&hash=".$hash;

        $rawResponse = @file_get_contents($url);

        if ($rawResponse === false || $rawResponse === null) {
            return false;
        }

        return $rawResponse;
    }

    /**
     * @param $hash
     * @return false|string
     */
    public function getUserConnectDataByUserHash($hash)
    {
        $url = "https://idd.ddev.site/?type=3772&hash=".$hash;

        $rawResponse = @file_get_contents($url);

        if ($rawResponse === false || $rawResponse === null) {
            return false;
        }

        return $rawResponse;
    }
}
