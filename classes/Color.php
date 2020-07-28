<?php

namespace Grav\Plugin\ColorTools;

use Grav\Common\Grav;

class Color extends \Mexitek\PHPColors\Color
{
    public function getHue()
    {
        $hue = round($this->getHsl()['H'], 2);
        return $hue;
    }

    public function getSaturation()
    {
        $sat = round($this->gethsl()['S'] * 100, 2);
        return $sat . '%';
    }

    public function getLightness()
    {
        $lgh = round($this->gethsl()['L'] * 100, 2);
        return $lgh . '%';
    }
}