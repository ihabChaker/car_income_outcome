<?php

namespace App\DataTables;

use App\Models\Car;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class CarsDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('net_gain', function ($data) {
                return $data->selling_price - ($data->buy_price + $data->electricity + $data->mechanism + $data->tole + $data->repair_parts);
            })->addColumn('delete', function ($data) {
            return '<a  class="btn btn-danger delete-record" onClick="sendDeleteRequest(\'' . route('cars.destroy', $data->id) . '\')"><i class="fas fa-trash"></i></a>';
        })
            ->addColumn('update', function ($data) {
                return '<a href="#" data-toggle="modal" data-target="#edit-modal" data-id="' . $data->id . '" data-name="' . $data->name . '" data-license_plate="' . $data->license_plate . '" data-buy_price="' . $data->buy_price . '"  data-repair_parts="' . $data->repair_parts . '"  data-mechanism="' . $data->mechanism . '" data-tole="' . $data->tole . '" data-electricity="' . $data->electricity . '" data-buyer_name="' . $data->car_buyer . '"  data-selling_price="' . $data->selling_price . '" class="btn btn-xs btn-primary edit-btn"><i class="fas fa-pen"></i></a>';
            })

            ->rawColumns(['delete', 'update',]);
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Car $model): QueryBuilder
    {
        return $model->with(['carBuyer', 'paymentReciever', 'electricityBuyer', 'toleBuyer', 'mechanismBuyer', 'repairPartsBuyer'])->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('data-table')
            ->columns($this->getColumns())
            ->minifiedAjax()
            //->dom('Bfrtip')
            ->orderBy(1)
            ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('delete')->title('حذف')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::computed('update')->title('تعديل')
                ->exportable(false)
                ->printable(false)
                ->width(60)
                ->addClass('text-center'),
            Column::make('net_gain')->title('الفائدة'),
            Column::make('repair_parts_buyer.name')->title('لي حكم الدراهم'),
            Column::make('selling_price')->title('سعر البيع'),
            Column::make('repair_parts_buyer.name')->title('لي صرف على قطع الغيار'),
            Column::make('repair_parts')->title('قطع الغيار'),
            Column::make('mechanism_buyer.name')->title('لي صرف على ميكانيك'),
            Column::make('mechanism')->title('ميكانيك'),
            Column::make('electricity_buyer.name')->title('لي صرف على تريسيتي'),
            Column::make('electricity')->title('كهرباء'),
            Column::make('tole_buyer.name')->title('لي صرف على لاطول'),
            Column::make('tole')->title('الهيكل'),
            Column::make('buy_price')->title('سعر الشراء'),
            Column::make('car_buyer.name')->title(' لي شرا الطاكسي'),
            Column::make('license_plate')->title('لوحة الترقيم'),
            Column::make('name')->title('السيارة'),

        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Cars_' . date('YmdHis');
    }
}