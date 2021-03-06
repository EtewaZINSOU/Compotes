<?php

declare(strict_types=1);

/*
 * This file is part of the Compotes package.
 *
 * (c) Alex "Pierstoval" Rock <pierstoval@gmail.com>.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App\Highcharts\Chart;

abstract class AbstractBarChart extends AbstractChart
{
    protected function getOptions(): array
    {
        return [
            'chart' => [
                'type' => $type = 'column',
                'height' => 500,
            ],
            'legend' => [
                'align' => 'right',
                'layout' => 'vertical',
            ],
            'title' => ['text' => $this->getName()],
            'xAxis' => [
                'categories' => [''],
            ],
            'yAxis' => [
                'title' => null,
                'plotLines' => [
                    [
                        'value' => 0,
                        'width' => 3,
                        'color' => '#000',
                    ],
                ],
            ],
            'plotOptions' => [
                $type => [
                    'pointWidth' => 25,
                    'borderWidth' => 0,
                    'groupPadding' => 0.01,
                    'dataLabels' => [
                        'enabled' => true,
                    ],
                    'enableMouseTracking' => false,
                ],
            ],
        ];
    }
}
