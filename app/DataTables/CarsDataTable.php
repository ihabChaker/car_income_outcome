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
                return $data->selling_price - ($data->buy_price + $data->electricity + $data->mechanism + $data->tole);
            })
        ;
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Car $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('cars-table')
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

            Column::make('name')->title('السيارة'),
            Column::make('license_plate')->title('لوحة الترقيم'),
            Column::make('buy_price')->title('سعر الشراء'),
            Column::make('repair_parts')->title('قطع الغيار'),
            Column::make('mechanism')->title('ميكانيك'),
            Column::make('electricity')->title('كهرباء'),
            Column::make('tole')->title('الهيكل'),
            Column::make('selling_price')->title('سعر البيع'),
            Column::make('net_gain')->title('الفائدة'),

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