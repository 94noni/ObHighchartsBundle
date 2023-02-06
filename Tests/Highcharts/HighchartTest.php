<?php

namespace Ob\HighchartsBundle\Tests\Highcharts;

use Ob\HighchartsBundle\Highcharts\Highchart;
use PHPUnit\Framework\TestCase;

/**
 * This class hold Unit tests for the Highchart Class
 */
class HighchartTest extends TestCase
{
    /**
     * Render chart using jQuery
     */
    public function testJquery(): void
    {
        $chart = new Highchart();
        $this->assertMatchesRegularExpression(
            '/\$\(function\s?\(\)\s?\{\n?\r?\s*var chart = new Highcharts.Chart\(\{\n?\r?\s*\}\);\n?\r?\s*\}\);/',
            $chart->render()
        );
    }

    /**
     * Render chart without library wrapper
     */
    public function testNoEngine(): void
    {
        $chart = new Highchart();
        $this->assertMatchesRegularExpression(
            '/var chart = new Highcharts.Chart\(\{\n?\r?\s*\}\);/',
            $chart->render(null)
        );
    }

    /**
     * Render chart using Mootools
     */
    public function testMooTools(): void
    {
        $chart = new Highchart();
        $this->assertMatchesRegularExpression(
            '/window.addEvent\(\'domready\', function\s?\(\)\s?\{\r?\n?\s*var chart = new Highcharts.Chart\(\{\n?\r?\s*\}\);\n?\r?\s*\}\);/',
            $chart->render('mootools')
        );
    }

    /**
     * Magic getters and setters
     */
    public function testSetGet(): void
    {
        $chart = new Highchart();

        $chart->credits->enabled(false);
        $this->assertTrue($chart->credits->enabled == false);

        $chart->credits->enabled(true);
        $this->assertTrue($chart->credits->enabled == true);
    }

    /**
     * Look for that mean trailing comma
     */
    public function testIeFriendliness(): void
    {
        $chart = new Highchart();

        $chart->chart->setTitle('Am I IE friendly yet?');
        $this->assertMatchesRegularExpression(
            '/\}(?<!,)\n?\r?\s*\}\);\n?\r?\s*\}\);/',
            $chart->render()
        );
    }
}
