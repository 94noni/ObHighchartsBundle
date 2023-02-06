<?php
namespace Ob\HighchartsBundle\Twig;

use Ob\HighchartsBundle\Highcharts\ChartInterface;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class HighchartsExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('chart', [$this, 'chart'], ['is_safe' => ['html']]),
        ];
    }

    public function chart(ChartInterface $chart, $engine = 'jquery'): string
    {
        return $chart->render($engine);
    }

    public function getName(): string
    {
        return 'highcharts_extension';
    }
}
