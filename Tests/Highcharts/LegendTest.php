<?php

namespace Ob\HighchartsBundle\Tests\Highcharts;

use Ob\HighchartsBundle\Highcharts\Highchart;
use PHPUnit\Framework\TestCase;

/**
 * This class hold Unit tests for the legend option
 */
class LegendTest extends TestCase
{
    /**
     * Align option (left/center/right)
     */
    public function testAlign(): void
    {
        $chart = new Highchart();

        $chart->legend->align("left");
        $this->assertMatchesRegularExpression('/legend: \{"align":"left"\}/', $chart->render());

        $chart->legend->align("center");
        $this->assertMatchesRegularExpression('/legend: \{"align":"center"\}/', $chart->render());

        $chart->legend->align("right");
        $this->assertMatchesRegularExpression('/legend: \{"align":"right"\}/', $chart->render());
    }

    /**
     * Layout option (horizontal/vertical)
     */
    public function testLayout(): void
    {
        $chart = new Highchart();

        $chart->legend->layout("horizontal");
        $this->assertMatchesRegularExpression('/legend: \{"layout":"horizontal"\}/', $chart->render());

        $chart->legend->layout("vertical");
        $this->assertMatchesRegularExpression('/legend: \{"layout":"vertical"\}/', $chart->render());
    }

    /**
     * Enabled option (true/false)
     */
    public function testEnabledDisabled(): void
    {
        $chart = new Highchart();

        $chart->legend->enabled(false);
        $this->assertMatchesRegularExpression('/legend: \{"enabled":false\}/', $chart->render());

        $chart->legend->enabled(true);
        $this->assertMatchesRegularExpression('/legend: \{"enabled":true\}/', $chart->render());
    }
}
