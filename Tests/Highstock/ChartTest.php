<?php

namespace Ob\HighchartsBundle\Tests\Highstock;

use Ob\HighchartsBundle\Highcharts\Highstock;
use PHPUnit\Framework\TestCase;

class ChartTest extends TestCase
{
    protected Highstock $chart;

    protected function setUp(): void
    {
        $this->chart = new Highstock();
    }

    public function testAlignTicks(): void
    {
        $this->chart->chart->alignTicks(true);
        $this->assertTrue($this->chart->chart->alignTicks);
        $this->assertMatchesRegularExpression('/"alignTicks":true/', $this->chart->render());

        $this->chart->chart->alignTicks(false);
        $this->assertFalse($this->chart->chart->alignTicks);
        $this->assertMatchesRegularExpression('/"alignTicks":false/', $this->chart->render());
    }

    public function testAnimation(): void
    {
        $this->chart->chart->animation(true);
        $this->assertTrue($this->chart->chart->animation);
        $this->assertMatchesRegularExpression('/"animation":true/', $this->chart->render());

        $this->chart->chart->animation(false);
        $this->assertFalse($this->chart->chart->animation);
        $this->assertMatchesRegularExpression('/"animation":false/', $this->chart->render());
    }

    public function testBackgroundColor(): void
    {
        $color = '#ffffff';
        $this->chart->chart->backgroundColor($color);
        $this->assertEquals($color, $this->chart->chart->backgroundColor);
        $this->assertMatchesRegularExpression('/"backgroundColor":"#ffffff"/', $this->chart->render());
    }

    public function testBorderColor(): void
    {
        $color = '#4572a7';
        $this->chart->chart->borderColor($color);
        $this->assertEquals($color, $this->chart->chart->borderColor);
        $this->assertMatchesRegularExpression('/"borderColor":"#4572a7"/', $this->chart->render());
    }

    public function testBorderRadius(): void
    {
        $radius = 5;
        $this->chart->chart->borderRadius($radius);
        $this->assertEquals($radius, $this->chart->chart->borderRadius);
        $this->assertMatchesRegularExpression('/"borderRadius":5/', $this->chart->render());
    }

    public function testBorderWidth(): void
    {
        $width = 0;
        $this->chart->chart->borderWidth($width);
        $this->assertEquals($width, $this->chart->chart->borderWidth);
        $this->assertMatchesRegularExpression('/"borderWidth":0/', $this->chart->render());
    }

    public function testClassName(): void
    {
        $class = 'extraClass';
        $this->chart->chart->className($class);
        $this->assertEquals($class, $this->chart->chart->className);
        $this->assertMatchesRegularExpression('/"className":"extraClass"/', $this->chart->render());
    }

    public function testEvents(): void
    {
        $this->markTestIncomplete();
    }

    public function testHeight(): void
    {
        $height = '300px';
        $this->chart->chart->height($height);
        $this->assertEquals($height, $this->chart->chart->height);
        $this->assertMatchesRegularExpression('/"height":"300px"/', $this->chart->render());
    }

    public function testIgnoreHiddenSeries(): void
    {
        $this->chart->chart->ignoreHiddenSeries(true);
        $this->assertTrue($this->chart->chart->ignoreHiddenSeries);
        $this->assertMatchesRegularExpression('/"ignoreHiddenSeries":true/', $this->chart->render());

        $this->chart->chart->ignoreHiddenSeries(false);
        $this->assertFalse($this->chart->chart->ignoreHiddenSeries);
        $this->assertMatchesRegularExpression('/"ignoreHiddenSeries":false/', $this->chart->render());
    }

    public function testMargin(): void
    {
        $this->markTestIncomplete();
    }

    public function testMarginBottom(): void
    {
        $margin = '150px';
        $this->chart->chart->marginBottom($margin);
        $this->assertEquals($margin, $this->chart->chart->marginBottom);
        $this->assertMatchesRegularExpression('/"marginBottom":"150px"/', $this->chart->render());
    }

    public function testMarginLeft(): void
    {
        $margin = '150px';
        $this->chart->chart->marginLeft($margin);
        $this->assertEquals($margin, $this->chart->chart->marginLeft);
        $this->assertMatchesRegularExpression('/"marginLeft":"150px"/', $this->chart->render());
    }

    public function testMarginRight(): void
    {
        $margin = '150px';
        $this->chart->chart->marginRight($margin);
        $this->assertEquals($margin, $this->chart->chart->marginRight);
        $this->assertMatchesRegularExpression('/"marginRight":"150px"/', $this->chart->render());
    }

    public function testMarginTop(): void
    {
        $margin = '150px';
        $this->chart->chart->marginTop($margin);
        $this->assertEquals($margin, $this->chart->chart->marginTop);
        $this->assertMatchesRegularExpression('/"marginTop":"150px"/', $this->chart->render());
    }

    public function testPanning(): void
    {
        $this->chart->chart->panning(true);
        $this->assertTrue($this->chart->chart->panning);
        $this->assertMatchesRegularExpression('/"panning":true/', $this->chart->render());

        $this->chart->chart->panning(false);
        $this->assertFalse($this->chart->chart->panning);
        $this->assertMatchesRegularExpression('/"panning":false/', $this->chart->render());
    }

    public function testPlotBackgroundColor(): void
    {
        $this->markTestIncomplete();
    }

    public function testPlotBackgroundImage(): void
    {
        $this->markTestIncomplete();
    }

    public function testPlotBorderColor(): void
    {
        $this->markTestIncomplete();
    }

    public function testPlotBorderWidth(): void
    {
        $this->markTestIncomplete();
    }

    public function testPlotShadow(): void
    {
        $this->markTestIncomplete();
    }

    public function testReflow(): void
    {
        $this->markTestIncomplete();
    }

    public function testRenderTo(): void
    {
        $this->markTestIncomplete();
    }

    public function testSelectionMarkerFIll(): void
    {
        $this->markTestIncomplete();
    }

    public function testShadow(): void
    {
        $this->markTestIncomplete();
    }

    public function testSpacing(): void
    {
        $this->markTestIncomplete();
    }

    public function testSpacingBottom(): void
    {
        $spacing = 15;
        $this->chart->chart->spacingBottom($spacing);
        $this->assertEquals($spacing, $this->chart->chart->spacingBottom);
        $this->assertMatchesRegularExpression('/"spacingBottom":15/', $this->chart->render());
    }

    public function testSpacingLeft(): void
    {
        $spacing = 10;
        $this->chart->chart->spacingLeft($spacing);
        $this->assertEquals($spacing, $this->chart->chart->spacingLeft);
        $this->assertMatchesRegularExpression('/"spacingLeft":10/', $this->chart->render());
    }

    public function testSpacingRight(): void
    {
        $spacing = 10;
        $this->chart->chart->spacingRight($spacing);
        $this->assertEquals($spacing, $this->chart->chart->spacingRight);
        $this->assertMatchesRegularExpression('/"spacingRight":10/', $this->chart->render());
    }

    public function testSpacingTop(): void
    {
        $spacing = 10;
        $this->chart->chart->spacingTop($spacing);
        $this->assertEquals($spacing, $this->chart->chart->spacingTop);
        $this->assertMatchesRegularExpression('/"spacingTop":10/', $this->chart->render());
    }

    public function testStyle(): void
    {
        $this->markTestIncomplete();
    }

    public function testType(): void
    {
        $this->markTestIncomplete();
    }

    public function testWidth(): void
    {
        $width = '800px';
        $this->chart->chart->width($width);
        $this->assertEquals($width, $this->chart->chart->width);
        $this->assertMatchesRegularExpression('/"width":"800px"/', $this->chart->render());
    }

    public function testZoomType(): void
    {
        $this->markTestIncomplete();
    }
}
