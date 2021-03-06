<?php

namespace Intervention\Image\Gd\Commands;

class ContrastCommand extends \Intervention\Image\Commands\AbstractCommand
{
    /**
     * Changes contrast of image
     *
     * @param  \Intervention\Image\Image $image
     * @return boolean
     */
    public function execute($image)
    {
        $level = $this->argument(0)->between(-100, 100)->required()->value();

        foreach ($image as $frame) {
            imagefilter($frame->getCore(), IMG_FILTER_CONTRAST, ($level * -1));
        }

        return true;
    }
}
