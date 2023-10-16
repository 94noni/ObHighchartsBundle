<?php

namespace Ob\HighchartsBundle\Tests\Highcharts;

use Ob\HighchartsBundle\Highcharts\Highchart;
use PHPUnit\Framework\TestCase;

/**
 * This class hold Unit tests for the lang option
 */
class LangTest extends TestCase
{
    /**
     * Set localized month names
     */
    public function testMonths(): void
    {
        $chart = new Highchart();
        $chart->lang->months(array('Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin',  'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'));

        $this->assertMatchesRegularExpression(
            '/lang: \{"months":\["Janvier","Fevrier","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Decembre"\]\}/',
            $chart->render()
        );
    }

    /**
     * Set abbreviated localized month names
     */
    public function testShortMonths(): void
    {
        $chart = new Highchart();
        $chart->lang->shortMonths(array('Jan', 'Fev', 'Mars', 'Avril', 'Mai', 'Juin',  'Juil', 'Aout', 'Sept', 'Oct', 'Nov', 'Dec'));

        $this->assertMatchesRegularExpression(
            '/lang: \{"shortMonths":\["Jan","Fev","Mars","Avril","Mai","Juin","Juil","Aout","Sept","Oct","Nov","Dec"\]\}/',
            $chart->render()
        );
    }

    /**
     * Set localized weekday names
     */
    public function testWeekDays(): void
    {
        $chart = new Highchart();
        $chart->lang->weekdays(array('Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'));

        $this->assertMatchesRegularExpression(
            '/lang: \{"weekdays":\["Dimanche","Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi"\]\}/',
            $chart->render()
        );
    }
}
