<?php

namespace Arins\Bo\Http\Controllers\Activity;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

trait Api
{

    /** close */
    public function supportMonthlybyyear($year)
    {
        $dataSourceRequest = $this->data->countByActivitySubtype(1, 1, $year, null);
        $dataSourceIncident = $this->data->countByActivitySubtype(1, 2, $year, null);
        $requestItems = [];
        $incidentItems = [];
        

        $requestItem = 0;
        $incidentItem = 0;
        for ($i=1; $i < 13; $i++) { 
            
            $requestItem = 0;
            foreach ($dataSourceRequest as $index => $item) {

                if ($i == $item->month) {

                    $requestItem = $item->value;

                }

            } //end loop
            
            $incidentItem = 0;
            foreach ($dataSourceIncident as $index => $item) {

                if ($i == $item->month) {

                    $incidentItem = $item->value;

                }

            } //end loop

            array_push($requestItems, $requestItem);
            array_push($incidentItems, $incidentItem);
                

        } //end loop

        $data = [
            'year' => $year,
            'months' => [
                'Jan','Feb','Mar','Apr','Mei','Jun',
                'Jul','Agt','Sep','Okt','Nov','Des'
            ],
            'incidents' => $incidentItems,
            'requests' => $requestItems,
        ];

        $result = json_encode($data);

        return $result;
    }

    public function incidentBycategoryMonthinyear($year, $month)
    {

        $dataSource = $this->data->countByActivityType(1, $year, $month);
        $labels = [];
        $items = [];

        foreach ($dataSource as $index => $item) {

            $labels[$index] = $item->tasktype->name;
            $items[$index] = $item->value;

        } //end loop

        $data = [
            'year' => $year,
            'month' => $month,
            'labels' => $labels,
            'items' => $items,
        ];

        $result = json_encode($data);

        return $result;
    }

}

