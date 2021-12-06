<?php

/*
 * This file is part of PHP-FFmpeg.
 *
 * (c) Strime <contact@strime.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FFMpeg\Filters\Gif;

use FFMpeg\Media\Gif;
use FFMpeg\Filters\Audio\AudioFilters;
use FFMpeg\Filters\Video;
use FFMpeg\Filters\Video\VideoFilters;

class GifFilters
{
    private $gif;

    public function __construct(Gif $gif)
    {
        $this->gif = $gif;
    }
    /**
     * Applies a custom filter: -vf foo bar
     *
     * @param string    $parameters
     *
     * @return GifFilters
     */
    public function custom($parameters)
    {
        $this->gif->addFilter(new CustomFilter($parameters));

        return $this;
    }
}
