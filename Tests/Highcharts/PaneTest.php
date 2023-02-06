<?php

namespace Ob\HighchartsBundle\Tests\Highcharts;

use Ob\HighchartsBundle\Highcharts\Highchart;
use PHPUnit\Framework\TestCase;

/**
 * This class hold Unit tests for the pane option
 */
class PaneTest extends TestCase
{
    public function testBackground(): void
    {
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }

    public function testCenter(): void
    {
        $chart = new Highchart();

        // pixel based
        $chart->pane->center(array(50, 100));
        $this->assertMatchesRegularExpression('/pane: \{"center":\[50,100\]\}/', $chart->render());

        // percentage based
        $chart->pane->center(array('50%', '40%'));
        $this->assertMatchesRegularExpression('/pane: \{"center":\["50%","40%"\]\}/', $chart->render());
    }

    public function testEndAngle(): void
    {
        $chart = new Highchart();

        $chart->pane->endAngle(5);
        $this->assertMatchesRegularExpression('/pane: \{"endAngle":5\}/', $chart->render());
    }

    public function testStartAngle(): void
    {
        $chart = new Highchart();

        $chart->pane->startAngle(5);
        $this->assertMatchesRegularExpression('/pane: \{"startAngle":5\}/', $chart->render());
    }
}
