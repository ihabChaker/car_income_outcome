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
                    <input type="hidden" name="id" id="edit-id">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="edit-car-name">اسم السيارة</label>
                            <input type="text" name="car_name" id="edit-car-name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="edit-license-plate">لوحة الترقيم</label>
                            <input type="text" name="car_name" id="edit-license-plate" class="form-control">
                        </div>
                        <div class="form-group">
                            <select name="edit_car_buyer" id="edit_car_buyer_select" class="form-control select2">
                            </select>
                            <label for="edit_car_buyer_select"> لي شرا الطاكسي</label>
                        </div>
                        <div class="form-group">
                            <label for="edit-buy-price">سعرالشراء</label>
                            <input type="text" oninput="formatNumber(this)" name="buy_price" id="edit-buy-price"
                                class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <label for="edit-repair-parts">قطع الغيار</label>
                            <input type="text" oninput="formatNumber(this)" name="buy_price" id="edit-repair-parts"
                                class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <select name="edit_repair_parts_buyer" id="edit_repair_parts_buyer_select"
                                class="form-control select2">
                            </select>
                            <label for="edit_repair_parts_buyer_select"> لي شرا قطع الغيار</label>
                        </div>
                        <div class="form-group">
                            <label for="edit-electricity">الكهرباء</label>
                            <input type="text" oninput="formatNumber(this)" name="electricity" id="edit-electricity"
                                class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <select name="edit_electricity_buyer" id="edit_electricity_buyer_select"
                                class="form-control select2">
                            </select>
                            <label for="edit_electricity_buyer_select"> لي صرف على الكهرباء</label>
                        </div>
                        <div class="form-group">
                            <label for="edit-mechanism">الميكانيك</label>
                            <input type="text" oninput="formatNumber(this)" name="mechanism" id="edit-mechanism"
                                class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <select name="edit_mechanism_buyer" id="edit_mechanism_buyer_select"
                                class="form-control select2">
                            </select>
                            <label for="edit_mechanism_buyer_select"> لي صرف على الميكانيك</label>
                        </div>
                        <div class="form-group">
                            <label for="edit-tole">الهيكل</label>
                            <input type="text" oninput="formatNumber(this)" name="tole" id="edit-tole"
                                class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <select name="edit_tole_buyer" id="edit_tole_buyer_select" class="form-control select2">
                            </select>
                            <label for="edit_tole_buyer_select"> لي صرف على الهيكل</label>
                        </div>
                        <div class="form-group">
                            <label for="edit-sell-price">سعر البيع</label>
                            <input type="text" oninput="formatNumber(this)" name="sell-price" id="edit-sell-price"
                                class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <select name="edit_payment_reciever" id="edit_payment_reciever_select"
                                class="form-control select2">
                            </select>
                            <label for="edit_payment_reciever_select">لي قبض الدراهم</label>
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
                            <label for="create-license-plate">لوحة الترقيم</label>
                            <input type="text" name="car_name" id="create-license-plate" class="form-control">
                        </div>
                        <div class="form-group">
                            <select name="create_car_buyer" id="create_car_buyer_select" class="form-control select2">
                            </select>
                            <label for="create_car_buyer_select"> لي شرا الطاكسي</label>
                        </div>
                        <div class="form-group">
                            <label for="create-buy-price">سعرالشراء</label>
                            <input type="text" oninput="formatNumber(this)" name="buy_price" id="create-buy-price"
                                class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <label for="create-repair-parts">قطع الغيار</label>
                            <input type="text" oninput="formatNumber(this)" name="buy_price" id="create-repair-parts"
                                class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <select name="create_repair_parts_buyer" id="create_repair_parts_buyer_select"
                                class="form-control select2">
                            </select>
                            <label for="create_repair_parts_buyer_select"> لي شرا قطع الغيار</label>
                        </div>
                        <div class="form-group">
                            <label for="create-electricity">الكهرباء</label>
                            <input type="text" oninput="formatNumber(this)" name="electricity"
                                id="create-electricity" class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <select name="create_electricity_buyer" id="create_electricity_buyer_select"
                                class="form-control select2">
                            </select>
                            <label for="create_electricity_buyer_select"> لي صرف على الكهرباء</label>
                        </div>
                        <div class="form-group">
                            <label for="create-mechanism">الميكانيك</label>
                            <input type="text" oninput="formatNumber(this)" name="mechanism" id="create-mechanism"
                                class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <select name="create_mechanism_buyer" id="create_mechanism_buyer_select"
                                class="form-control select2">
                            </select>
                            <label for="create_mechanism_buyer_select"> لي صرف على الميكانيك</label>
                        </div>
                        <div class="form-group">
                            <label for="create-tole">الهيكل</label>
                            <input type="text" oninput="formatNumber(this)" name="tole" id="create-tole"
                                class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <select name="create_tole_buyer" id="create_tole_buyer_select" class="form-control select2">
                            </select>
                            <label for="create_tole_buyer_select"> لي صرف على الهيكل</label>
                        </div>
                        <div class="form-group">
                            <label for="create-sell-price">سعر البيع</label>
                            <input type="text" oninput="formatNumber(this)" name="sell-price" id="create-sell-price"
                                class="form-control" value="0">
                        </div>
                        <div class="form-group">
                            <select name="create_payment_reciever" id="create_payment_reciever_select"
                                class="form-control select2">
                            </select>
                            <label for="create_payment_reciever_select">لي قبض الدراهم</label>
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
        <div class="card  d-inline-block">
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
        $(document).ready(() => {
            $('#create_car_buyer_select').select2({
                placeholder: "Select an option",
                allowClear: true,
                minimumInputLength: 2,
                delay: true,
                cache: true,
                ajax: {
                    url: "{{ route('select.employees') }}",
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function({
                                text,
                                id
                            }) {
                                return {
                                    text,
                                    id
                                }
                            }),
                            pagination: {
                                more: data.next_page_url
                            }
                        };
                    }
                }
            });
            $('#edit_car_buyer_select').select2({
                placeholder: "Select an option",
                allowClear: true,
                minimumInputLength: 2,
                delay: true,
                cache: true,
                ajax: {
                    url: "{{ route('select.employees') }}",
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function({
                                text,
                                id
                            }) {
                                return {
                                    text,
                                    id
                                }
                            }),
                            pagination: {
                                more: data.next_page_url
                            }
                        };
                    }
                }
            });
            $('#create_repair_parts_buyer_select').select2({
                placeholder: "Select an option",
                allowClear: true,
                minimumInputLength: 2,
                delay: true,
                cache: true,
                ajax: {
                    url: "{{ route('select.employees') }}",
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function({
                                text,
                                id
                            }) {
                                return {
                                    text,
                                    id
                                }
                            }),
                            pagination: {
                                more: data.next_page_url
                            }
                        };
                    }
                }
            });
            $('#edit_repair_parts_buyer_select').select2({
                placeholder: "Select an option",
                allowClear: true,
                minimumInputLength: 2,
                delay: true,
                cache: true,
                ajax: {
                    url: "{{ route('select.employees') }}",
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function({
                                text,
                                id
                            }) {
                                return {
                                    text,
                                    id
                                }
                            }),
                            pagination: {
                                more: data.next_page_url
                            }
                        };
                    }
                }
            });
            $('#create_tole_buyer_select').select2({
                placeholder: "Select an option",
                allowClear: true,
                minimumInputLength: 2,
                delay: true,
                cache: true,
                ajax: {
                    url: "{{ route('select.employees') }}",
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function({
                                text,
                                id
                            }) {
                                return {
                                    text,
                                    id
                                }
                            }),
                            pagination: {
                                more: data.next_page_url
                            }
                        };
                    }
                }
            });
            $('#edit_tole_buyer_select').select2({
                placeholder: "Select an option",
                allowClear: true,
                minimumInputLength: 2,
                delay: true,
                cache: true,
                ajax: {
                    url: "{{ route('select.employees') }}",
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function({
                                text,
                                id
                            }) {
                                return {
                                    text,
                                    id
                                }
                            }),
                            pagination: {
                                more: data.next_page_url
                            }
                        };
                    }
                }
            });
            $('#create_mechanism_buyer_select').select2({
                placeholder: "Select an option",
                allowClear: true,
                minimumInputLength: 2,
                delay: true,
                cache: true,
                ajax: {
                    url: "{{ route('select.employees') }}",
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function({
                                text,
                                id
                            }) {
                                return {
                                    text,
                                    id
                                }
                            }),
                            pagination: {
                                more: data.next_page_url
                            }
                        };
                    }
                }
            });
            $('#edit_mechanism_buyer_select').select2({
                placeholder: "Select an option",
                allowClear: true,
                minimumInputLength: 2,
                delay: true,
                cache: true,
                ajax: {
                    url: "{{ route('select.employees') }}",
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function({
                                text,
                                id
                            }) {
                                return {
                                    text,
                                    id
                                }
                            }),
                            pagination: {
                                more: data.next_page_url
                            }
                        };
                    }
                }
            });
            $('#create_electricity_buyer_select').select2({
                placeholder: "Select an option",
                allowClear: true,
                minimumInputLength: 2,
                delay: true,
                cache: true,
                ajax: {
                    url: "{{ route('select.employees') }}",
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function({
                                text,
                                id
                            }) {
                                return {
                                    text,
                                    id
                                }
                            }),
                            pagination: {
                                more: data.next_page_url
                            }
                        };
                    }
                }
            });
            $('#edit_electricity_buyer_select').select2({
                placeholder: "Select an option",
                allowClear: true,
                minimumInputLength: 2,
                delay: true,
                cache: true,
                ajax: {
                    url: "{{ route('select.employees') }}",
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function({
                                text,
                                id
                            }) {
                                return {
                                    text,
                                    id
                                }
                            }),
                            pagination: {
                                more: data.next_page_url
                            }
                        };
                    }
                }
            });
            $('#create_payment_reciever_select').select2({
                placeholder: "Select an option",
                allowClear: true,
                minimumInputLength: 2,
                delay: true,
                cache: true,
                ajax: {
                    url: "{{ route('select.employees') }}",
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function({
                                text,
                                id
                            }) {
                                return {
                                    text,
                                    id
                                }
                            }),
                            pagination: {
                                more: data.next_page_url
                            }
                        };
                    }
                }
            });
            $('#edit_payment_reciever_select').select2({
                placeholder: "Select an option",
                allowClear: true,
                minimumInputLength: 2,
                delay: true,
                cache: true,
                ajax: {
                    url: "{{ route('select.employees') }}",
                    dataType: 'json',
                    processResults: function(data) {
                        return {
                            results: $.map(data.data, function({
                                text,
                                id
                            }) {
                                return {
                                    text,
                                    id
                                }
                            }),
                            pagination: {
                                more: data.next_page_url
                            }
                        };
                    }
                }
            });
        })
        $(document).on('click', '.edit-btn', function() {
            $('#edit_car_buyer_select').val('').trigger('change');
            $('#edit_repair_parts_buyer_select').val('').trigger('change');
            $('#edit_tole_buyer_select').val('').trigger('change');
            $('#edit_mechanism_buyer_select').val('').trigger('change');
            $('#edit_electricity_buyer_select').val('').trigger('change');
            $('#edit_payment_reciever_select').val('').trigger('change');

            let option = new Option($(this).data('car_buyer_name'), $(this).data('car_buyer_id'), true, true);
            $('#edit_car_buyer_select').append(option).trigger('change');
            $('#edit_car_buyer_select').trigger({
                type: 'select2:select',
                params: {
                    data: {
                        id: $(this).data('car_buyer_id'),
                        text: $(this).data('car_buyer_name')
                    }
                }
            });
            option = new Option($(this).data('repair_parts_buyer_name'), $(this).data('repair_parts_buyer_id'),
                true, true);
            $('#edit_repair_parts_buyer_select').append(option).trigger('change');
            $('#edit_repair_parts_buyer_select').trigger({
                type: 'select2:select',
                params: {
                    data: {
                        id: $(this).data('repair_parts_buyer_id'),
                        text: $(this).data('repair_parts_buyer_name')
                    }
                }
            });
            option = new Option($(this).data('tole_buyer_name'), $(this).data('tole_buyer_id'),
                true, true);
            $('#edit_tole_buyer_select').append(option).trigger('change');
            $('#edit_tole_buyer_select').trigger({
                type: 'select2:select',
                params: {
                    data: {
                        id: $(this).data('tole_buyer_id'),
                        text: $(this).data('tole_buyer_name')
                    }
                }
            });
            option = new Option($(this).data('mechanism_buyer_name'), $(this).data('mechanism_buyer_id'),
                true, true);
            $('#edit_mechanism_buyer_select').append(option).trigger('change');
            $('#edit_mechanism_buyer_select').trigger({
                type: 'select2:select',
                params: {
                    data: {
                        id: $(this).data('mechanism_buyer_id'),
                        text: $(this).data('mechanism_buyer_name')
                    }
                }
            });
            option = new Option($(this).data('electricity_buyer_name'), $(this).data('electricity_buyer_id'),
                true, true);
            $('#edit_electricity_buyer_select').append(option).trigger('change');
            $('#edit_electricity_buyer_select').trigger({
                type: 'select2:select',
                params: {
                    data: {
                        id: $(this).data('electricity_buyer_id'),
                        text: $(this).data('electricity_buyer_name')
                    }
                }
            });
            option = new Option($(this).data('payment_reciever_name'), $(this).data('payment_reciever_id'),
                true, true);
            $('#edit_payment_reciever_select').append(option).trigger('change');
            $('#edit_payment_reciever_select').trigger({
                type: 'select2:select',
                params: {
                    data: {
                        id: $(this).data('payment_reciever_id'),
                        text: $(this).data('payment_reciever_name')
                    }
                }
            });

            $('#edit-id').val($(this).data('id'));
            $('#edit-car-name').val($(this).data('name'));
            $('#edit-license-plate').val($(this).data('license_plate'));
            $('#edit-buy-price').val($(this).data('buy_price').toLocaleString());
            $('#edit-electricity').val($(this).data('electricity').toLocaleString());
            $('#edit-mechanism').val($(this).data('mechanism').toLocaleString());
            $('#edit-tole').val($(this).data('tole').toLocaleString());
            $('#edit-repair-parts').val($(this).data('repair_parts').toLocaleString());
            $('#edit-sell-price').val($(this).data('selling_price').toLocaleString());
        });
        $('#edit-form').submit(function(event) {
            event.preventDefault();
            let id = $('#edit-id').val();
            let car_name = $('#edit-car-name').val()
            let license_plate = $('#edit-license-plate').val()
            let buy_price = parseFormattedNumber($('#edit-buy-price').val())
            let buyer_id = $('#edit_car_buyer_select').val()
            let electricity = parseFormattedNumber($('#edit-electricity').val())
            let electricity_buyer_id = $('#edit_electricity_buyer_select').val()
            let mechanism = parseFormattedNumber($('#edit-mechanism').val())
            let mechanism_buyer_id = $('#edit_mechanism_buyer_select').val()
            let tole = parseFormattedNumber($('#edit-tole').val())
            let tole_buyer_id = $('#edit_tole_buyer_select').val()
            let repair_parts = parseFormattedNumber($('#edit-repair-parts').val())
            let repair_parts_buyer_id = $('#edit_repair_parts_buyer_select').val()
            let sell_price = parseFormattedNumber($('#edit-sell-price').val())
            let payment_reciever_id = $('#edit_payment_reciever_select').val()
            axios.patch('{{ route('cars.update', ['car' => 0]) }}' + id, {
                    car_name,
                    buyer_id,
                    license_plate,
                    buy_price,
                    electricity,
                    electricity_buyer_id,
                    mechanism,
                    mechanism_buyer_id,
                    tole,
                    tole_buyer_id,
                    repair_parts,
                    repair_parts_buyer_id,
                    sell_price,
                    payment_reciever_id
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
            let license_plate = $('#create-license-plate').val()
            let buy_price = parseFormattedNumber($('#create-buy-price').val())
            let buyer_id = $('#create_car_buyer_select').val()
            let electricity = parseFormattedNumber($('#create-electricity').val())
            let electricity_buyer_id = $('#create_electricity_buyer_select').val()
            let mechanism = parseFormattedNumber($('#create-mechanism').val())
            let mechanism_buyer_id = $('#create_mechanism_buyer_select').val()
            let tole = parseFormattedNumber($('#create-tole').val())
            let tole_buyer_id = $('#create_tole_buyer_select').val()
            let repair_parts = parseFormattedNumber($('#create-repair-parts').val())
            let repair_parts_buyer_id = $('#create_repair_parts_buyer_select').val()
            let sell_price = parseFormattedNumber($('#create-sell-price').val())
            let payment_reciever_id = $('#create_payment_reciever_select').val()
            axios.post('{{ route('cars.store') }}', {
                    car_name,
                    buyer_id,
                    license_plate,
                    buy_price,
                    electricity,
                    electricity_buyer_id,
                    mechanism,
                    mechanism_buyer_id,
                    tole,
                    tole_buyer_id,
                    repair_parts,
                    repair_parts_buyer_id,
                    sell_price,
                    payment_reciever_id
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
