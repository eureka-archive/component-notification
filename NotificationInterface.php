<?php

/**
 * Copyright (c) 2010-2016 Romain Cottard
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Eureka\Component\Notification;

/**
 * Class for basic notifications on actions (save, delete...)
 *
 * @author  Romain Cottard
 * @version 1.0.0
 */
interface NotificationInterface
{
    /**
     * @var int TYPE_ERROR
     */
    const TYPE_ERROR   = 1;

    /**
     * @var int TYPE_WARNING
     */
    const TYPE_WARNING = 2;

    /**
     * @var int TYPE_INFO
     */
    const TYPE_INFO    = 3;

    /**
     * @var int TYPE_SUCCESS
     */
    const TYPE_SUCCESS = 4;

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage();

    /**
     * Get css
     *
     * @return string
     */
    public function getCss();

    /**
     * Get Icon
     *
     * @return string
     */
    public function getIcon();

    /**
     * Get header message.
     *
     * @return string
     */
    public function getHeader();
}
