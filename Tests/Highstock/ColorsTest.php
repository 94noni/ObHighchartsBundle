<?php

namespace Ob\HighchartsBundle\Tests\Highstock;

use Ob\HighchartsBundle\Highcharts\Highstock;
use PHPUnit\Framework\TestCase;

class ColorsTest extends TestCase
{
    public function testColors(): void
    {
        $chart = new Highstock();

        $colors = array('#FF0000', '#00FF00', '#0000FF');
        $chart->colors($colors);
        $this->assertMatchesRegularExpression('/colors: \[\["#FF0000","#00FF00","#0000FF"\]\]/', $chart->render());
    }
}
