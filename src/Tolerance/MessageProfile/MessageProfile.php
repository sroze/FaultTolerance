<?php

/*
 * This file is part of the Tolerance package.
 *
 * (c) Samuel ROZE <samuel.roze@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tolerance\MessageProfile;

use Tolerance\MessageProfile\Identifier\MessageIdentifier;
use Tolerance\MessageProfile\Peer\MessagePeer;
use Tolerance\MessageProfile\Timing\MessageTiming;

interface MessageProfile
{
    /**
     * @return MessageIdentifier
     */
    public function getIdentifier();

    /**
     * @return MessagePeer
     */
    public function getSender();

    /**
     * @return MessagePeer
     */
    public function getRecipient();

    /**
     * @return array
     */
    public function getContext();

    /**
     * @param array $context
     *
     * @return MessageProfile
     */
    public function withMergedContext(array $context);

    /**
     * @return MessageTiming
     */
    public function getTiming();

    /**
     * @param MessageTiming $timing
     *
     * @return MessageProfile
     */
    public function withTiming(MessageTiming $timing);
}