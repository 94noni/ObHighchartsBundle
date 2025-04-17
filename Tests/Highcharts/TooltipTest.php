<?php

namespace Ob\HighchartsBundle\Tests\Highcharts;

use Ob\HighchartsBundle\Highcharts\Highchart;
use PHPUnit\Framework\TestCase;

/**
 * This class hold Unit tests for the tooltip option
 */
class TooltipTest extends TestCase
{
    /**
     * Animation option (true/false)
     */
    public function testAnimation(): void
    {
        $chart = new Highchart();

        $chart->tooltip->animation("true");
        $this->assertMatchesRegularExpression('/tooltip: \{"animation":"true"\}/', $chart->render());

        $chart->tooltip->animation("false");
        $this->assertMatchesRegularExpression('/tooltip: \{"animation":"false"\}/', $chart->render());
    }

    /**
     * backgroundColor option (rgba)
     */
    public function testBackgroundColor(): void
    {
        $chart = new Highchart();

        $chart->tooltip->backgroundColor("rgba(255, 255, 255, .85)");
        $this->assertMatchesRegularExpression('/tooltip: \{"backgroundColor":"rgba\(255, 255, 255, .85\)"\}/', $chart->render());
    }

    /**
     * borderColor option (null/auto/rgba)
     */
    public function testBorderColor(): void
    {
        $chart = new Highchart();

        $chart->tooltip->borderColor('null');
        $this->assertMatchesRegularExpression('/tooltip: \{"borderColor":"null"\}/', $chart->render());

        $chart->tooltip->borderColor('auto');
        $this->assertMatchesRegularExpression('/tooltip: \{"borderColor":"auto"\}/', $chart->render());

        $chart->tooltip->borderColor('rgba(255, 255, 255, .85)');
        $this->assertMatchesRegularExpression('/tooltip: \{"borderColor":"rgba\(255, 255, 255, .85\)"\}/', $chart->render());
    }

    /**
     * borderRadius option (integer - radius in px)
     */
    public function testBorderRadius(): void
    {
        $chart = new Highchart();

        $chart->tooltip->borderRadius(5);
        $this->assertMatchesRegularExpression('/tooltip: \{"borderRadius":5\}/', $chart->render());

        $chart->tooltip->borderRadius("5");
        $this->assertMatchesRegularExpression('/tooltip: \{"borderRadius":"5"\}/', $chart->render());
    }

    /**
     * borderWidth option (integer - width in px)
     */
    public function testborderWidth(): void
    {
        $chart = new Highchart();

        $chart->tooltip->borderWidth(5);
        $this->assertMatchesRegularExpression('/tooltip: \{"borderWidth":5\}/', $chart->render());

        $chart->tooltip->borderWidth("5");
        $this->assertMatchesRegularExpression('/tooltip: \{"borderWidth":"5"\}/', $chart->render());
    }

    /**
     * enabled option (true/false)
     */
    public function testEnabled(): void
    {
        $chart = new Highchart();

        $chart->tooltip->enabled("true");
        $this->assertMatchesRegularExpression('/tooltip: \{"enabled":"true"\}/', $chart->render());

        $chart->tooltip->enabled("false");
        $this->assertMatchesRegularExpression('/tooltip: \{"enabled":"false"\}/', $chart->render());
    }

    /**
     * shadow option (true/false)
     */
    public function testShadow(): void
    {
        $chart = new Highchart();

        $chart->tooltip->shadow("true");
        $this->assertMatchesRegularExpression('/tooltip: \{"shadow":"true"\}/', $chart->render());

        $chart->tooltip->shadow("false");
        $this->assertMatchesRegularExpression('/tooltip: \{"shadow":"false"\}/', $chart->render());
    }
}
