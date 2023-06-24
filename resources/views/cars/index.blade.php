@extends('adminlte::page')

@section('title', 'النفقات')

@section('content')
    <div class="modal fade" id="edit-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">تعديل نفقة</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form id="edit-form">
                    <div class="modal-body">
                        <input type="hidden" name="id" id="edit-id">
                        <div class="form-group">
                            <label for="edit-car-name">اسم السيارة</label>
                            <input type="text" name="car_name" id="edit-car-name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="edit-buyer-name">شكون لي شرا طاكسي</label>
                            <input type="text" name="buyer_name" id="edit-buyer-name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="edit-license-plate">لوحة الترقيم</label>
                            <input type="text" name="car_name" id="edit-license-plate" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="edit-buy-price">سعرالشراء</label>
                            <input type="number" name="buy_price" id="edit-buy-price" class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <label for="edit-repair-parts">قطع الغيار</label>
                            <input type="number" name="buy_price" id="edit-repair-parts" class="form-control"
                                value="0">
                        </div>
                        <div class="form-group">
                            <label for="edit-electricity">الكهرباء</label>
                            <input type="number" name="electricity" id="edit-electricity" class="form-control"
                                value="0">
                        </div>
                        <div class="form-group">
                            <label for="edit-mechanism">الميكانيك</label>
                            <input type="number" name="mechanism" id="edit-mechanism" class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <label for="edit-tole">الهيكل</label>
                            <input type="number" name="tole" id="edit-tole" class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <label for="edit-sell-price">سعر البيع</label>
                            <input type="number" name="sell-price" id="edit-sell-price" class="form-control"
                                value="0">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">غلق</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="create-modal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">اضافة سيارة</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form id="create-form">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="create-car-name">اسم السيارة</label>
                            <input type="text" name="car_name" id="create-car-name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="create-buyer-name">شكون لي شرا الطاكسي</label>
                            <input type="text" name="buyer_name" id="create-buyer-name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="create-license-plate">لوحة الترقيم</label>
                            <input type="text" name="car_name" id="create-license-plate" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="create-buy-price">سعرالشراء</label>
                            <input type="number" name="buy_price" id="create-buy-price" class="form-control"
                                value="0">
                        </div>
                        <div class="form-group">
                            <label for="create-repair-parts">قطع الغيار</label>
                            <input type="number" name="buy_price" id="create-repair-parts" class="form-control"
                                value="0">
                        </div>
                        <div class="form-group">
                            <label for="create-electricity">الكهرباء</label>
                            <input type="number" name="electricity" id="create-electricity" class="form-control"
                                value="0">
                        </div>
                        <div class="form-group">
                            <label for="create-mechanism">الميكانيك</label>
                            <input type="number" name="mechanism" id="create-mechanism" class="form-control"
                                value="0">
                        </div>
                        <div class="form-group">
                            <label for="create-tole">الهيكل</label>
                            <input type="number" name="tole" id="create-tole" class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <label for="create-sell-price">سعر البيع</label>
                            <input type="number" name="sell-price" id="create-sell-price" class="form-control"
                                value="0">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">غلق</button>
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="card  ">
            <div class="card-header">
                <div class="row">
                    <div class="col-8">
                    </div>
                    <div class="col-4 text-right">
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#create-modal">اضافة
                            سيارة</button>
                    </div>
                </div>
            </div>
            <div class="card-body">
                {{ $dataTable->table() }}
            </div>
        </div>
    </div>

@stop

@section('css')
    @vite(['resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('css/admin_custom.css') }}">
@stop
@section('plugins.Datatables', true)
@section('plugins.Toastr', true)
@section('plugins.Select2', true)
@section('plugins.Sweetalert2', true)
<script src="{{ asset('js/functions.js') }}"></script>

@section('js')
    <script>
        $(document).on('click', '.edit-btn', function() {
            $('#edit-id').val($(this).data('id'));
            $('#edit-car-name').val($(this).data('name'));
            $('#edit-license-plate').val($(this).data('license_plate'));
            $('#edit-buy-price').val($(this).data('buy_price'));
            $('#edit-electricity').val($(this).data('electricity'));
            $('#edit-mechanism').val($(this).data('mechanism'));
            $('#edit-tole').val($(this).data('tole'));
            $('#edit-repair-parts').val($(this).data('repair_parts'));
            $('#edit-sell-price').val($(this).data('selling_price'));
            $('#edit-buyer-name').val($(this).data('buyer_name'))
        });
        $('#edit-form').submit(function(event) {
            event.preventDefault();
            let id = $('#edit-id').val();
            let car_name = $('#edit-car-name').val()
            let buyer_name = $('#edit-buyer-name').val()
            let license_plate = $('#edit-license-plate').val()
            let buy_price = $('#edit-buy-price').val()
            let electricity = $('#edit-electricity').val()
            let mechanism = $('#edit-mechanism').val()
            let tole = $('#edit-tole').val()
            let repair_parts = $('#edit-repair-parts').val()
            let sell_price = $('#edit-sell-price').val();

            axios.patch('{{ route('cars.update', ['car' => 0]) }}' + id, {
                    car_name,
                    buyer_name,
                    license_plate,
                    buy_price,
                    electricity,
                    mechanism,
                    tole,
                    repair_parts,
                    sell_price
                })
                .then(function(response) {
                    toastr.success(response.data.message);
                    refreshDatatable();
                })
                .catch(function(error) {
                    toastr.error(error.response.data.message);
                });
        });
        $('#create-form').submit(function(event) {
            event.preventDefault();
            let car_name = $('#create-car-name').val()
            let buyer_name = $('#create-buyer-name').val()
            let license_plate = $('#create-license-plate').val()
            let buy_price = $('#create-buy-price').val()
            let sell_price = $('#create-sell-price').val()
            let electricity = $('#create-electricity').val()
            let mechanism = $('#create-mechanism').val()
            let tole = $('#create-tole').val()
            let repair_parts = $('#create-repair-parts').val()
            axios.post('{{ route('cars.store') }}', {
                    car_name,
                    buyer_name,
                    license_plate,
                    buy_price,
                    electricity,
                    mechanism,
                    tole,
                    repair_parts,
                    sell_price
                })
                .then(function(response) {
                    toastr.success(response.data.message);
                    refreshDatatable();
                })
                .catch(function(error) {
                    console.log(error.response)
                    var errors = error.response.data.errors;
                    var errorMessages = '';
                    Object.keys(errors).forEach(function(key) {
                        errorMessages += errors[key][0] + '<br>';
                    });

                    toastr.error(errorMessages, '', {
                        "timeOut": "5000",
                        "extendedTImeout": "2000",
                    });
                    toastr.error(error.response.data.message);

                });
        });
    </script>
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}

@stop
