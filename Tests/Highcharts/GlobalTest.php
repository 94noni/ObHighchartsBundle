<?php

namespace Ob\HighchartsBundle\Tests\Highcharts;

use Ob\HighchartsBundle\Highcharts\Highchart;
use PHPUnit\Framework\TestCase;

/**
 * This class hold Unit tests for the global option
 */
class GlobalTest extends TestCase
{
    /**
     * useUTC option (true/false)
     */
    public function testGlobal(): void
    {
        $chart = new Highchart();

        $chart->global->useUTC("true");
        $this->assertMatchesRegularExpression('/global: \{"useUTC":"true"\}/', $chart->render());

        $chart->global->useUTC("false");
        $this->assertMatchesRegularExpression('/global: \{"useUTC":"false"\}/', $chart->render());
    }

    /**
     * noData option (string)
     */
    public function testLang(): void
    {
        $chart = new Highchart();

        $chart->lang->noData("No data to display");
        $this->assertMatchesRegularExpression('/"noData":"No data to display"/', $chart->render());
    }
}
