<?php

namespace Ob\HighchartsBundle\Tests\Highcharts;

use Ob\HighchartsBundle\Highcharts\Highchart;
use PHPUnit\Framework\TestCase;

/**
 * This class hold Unit tests for the series option
 */
class SeriesTest extends TestCase
{
    /**
     * @var array
     */
    private array $series;

    /**
     * Initialises the data
     */
    public function setUp(): void
    {
        $this->series = array(
            array("name" => "Data Serie #1", "data" => array(1,2,4,5,6,3,8)),
            array("name" => "Data Serie #2", "data" => array(7,3,5,1,6,5,9))
        );
    }

    /**
     * Series output
     */
    public function testData(): void
    {
        $chart = new Highchart();
        $chart->series($this->series);

        $this->assertMatchesRegularExpression('/\{"name":"Data Serie #1","data":\[1,2,4,5,6,3,8\]\}/', $chart->render());
        $this->assertMatchesRegularExpression('/\{"name":"Data Serie #2","data":\[7,3,5,1,6,5,9\]\}/', $chart->render());
    }
}
