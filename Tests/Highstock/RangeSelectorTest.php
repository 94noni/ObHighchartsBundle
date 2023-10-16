<?php

namespace Ob\HighchartsBundle\Tests\Highstock;

use Ob\HighchartsBundle\Highcharts\Highstock;
use PHPUnit\Framework\TestCase;

class RangeSelectorTest extends TestCase
{
    protected Highstock $chart;
    protected $range;

    protected function setUp(): void
    {
        $this->chart = new Highstock();
        $this->range = $this->chart->rangeSelector;
    }

    public function testButtonSpacing(): void
    {
        $spacing = 0;
        $this->range->buttonSpacing($spacing);
        $this->assertEquals($spacing, $this->range->buttonSpacing);
        $this->assertMatchesRegularExpression('/"buttonSpacing":0/', $this->chart->render());
    }

    public function testButtonTheme(): void
    {
        $this->markTestIncomplete();
    }

    public function testButtons(): void
    {
        $buttons = array(array(
            'type' => 'month',
                'count' => 3,
                'text' => '3m'
        ));

        $this->range->buttons($buttons);
        $this->assertEquals($buttons, $this->range->buttons);
        $this->assertMatchesRegularExpression('/"buttons":\[{"type":"month","count":3,"text":"3m"}\]/', $this->chart->render());
    }

    public function testEnabled(): void
    {
        $this->range->enabled(true);
        $this->assertTrue($this->range->enabled);
        $this->assertMatchesRegularExpression('/"enabled":true/', $this->chart->render());

        $this->range->enabled(false);
        $this->assertFalse($this->range->enabled);
        $this->assertMatchesRegularExpression('/"enabled":false/', $this->chart->render());
    }

    public function testInputBoxBorderColor(): void
    {
        $color = 'silver';
        $this->range->inputBoxBorderColor($color);
        $this->assertEquals($color, $this->range->inputBoxBorderColor);
        $this->assertMatchesRegularExpression('/"inputBoxBorderColor":"silver"/', $this->chart->render());
    }

    public function testInputBoxHeight(): void
    {
        $height = 16;
        $this->range->inputBoxHeight($height);
        $this->assertEquals($height, $this->range->inputBoxHeight);
        $this->assertMatchesRegularExpression('/"inputBoxHeight":16/', $this->chart->render());
    }

    public function testInputBoxWidth(): void
    {
        $width = 16;
        $this->range->inputBoxWidth($width);
        $this->assertEquals($width, $this->range->inputBoxWidth);
        $this->assertMatchesRegularExpression('/"inputBoxWidth":16/', $this->chart->render());
    }

    public function testInputDateFormat(): void
    {
        $format = '%b %e, %Y';
        $this->range->inputDateFormat($format);
        $this->assertEquals($format, $this->range->inputDateFormat);
        $this->assertMatchesRegularExpression('/"inputDateFormat":"%b %e, %Y"/', $this->chart->render());
    }

    public function testInputDateParser(): void
    {
        $this->markTestIncomplete();
    }

    public function testInputEditDateFormat(): void
    {
        $format = '%b %e, %Y';
        $this->range->inputEditDateFormat($format);
        $this->assertEquals($format, $this->range->inputEditDateFormat);
        $this->assertMatchesRegularExpression('/"inputEditDateFormat":"%b %e, %Y"/', $this->chart->render());
    }

    public function testinputEnabled(): void
    {
        $this->range->inputEnabled(true);
        $this->assertTrue($this->range->inputEnabled);
        $this->assertMatchesRegularExpression('/"inputEnabled":true/', $this->chart->render());

        $this->range->inputEnabled(false);
        $this->assertFalse($this->range->inputEnabled);
        $this->assertMatchesRegularExpression('/"inputEnabled":false/', $this->chart->render());
    }

    public function testInputPosition(): void
    {
        $position= array(
            'align' => 'right'
        );
        $this->range->position($position);
        $this->assertEquals($position, $this->range->position);
        $this->assertMatchesRegularExpression('/"position":{"align":"right"}/', $this->chart->render());
    }

    public function testInputStyle(): void
    {
        $this->markTestIncomplete();
    }

    public function testLabelStyle(): void
    {
        $this->markTestIncomplete();
    }

    public function testSelected(): void
    {
        $index = 3;
        $this->range->selected($index);
        $this->assertEquals($index, $this->range->selected);
        $this->assertMatchesRegularExpression('/"selected":3/', $this->chart->render());
    }
}
