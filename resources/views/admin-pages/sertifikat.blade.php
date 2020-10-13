@extends('layouts.masterAdmin')

@php
$page = 'Sertifikat';
@endphp

@section('title')
{{ $page }}
@endsection
@section('content')
<!-- DataTales Example -->
<div id="page-top">
    @foreach ($data as $d)
    <div class="card shadow mb-4" style="overflow-x:auto;">
        <div class="card-header py-3">
            <div class="row">
                <h6 class="m-0 font-weight-bold text-primary">{{ strtoupper($d['tablename']) }}</h6>
                <button type="button" class="btn btn-primary ml-auto ">tambah</button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm "
                    width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>action</th>
                            @foreach ($d['fieldname'] as $f)
                            <th>{{ $f }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($d['data'] as $k)
                        <tr>
                            <td>
                                <div class="rows">
                                    <button type="button" class="btn btn-primary">update</button>
                                    <button type="button" class="btn btn-danger">delete</button>
                                </div>
                            </td>
                            @foreach (json_decode($k) as $j)
                            <td>{{ $j }}</td>
                            @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endforeach
</div>
<!-- /.container-fluid -->

@endsection

@section('script')
<script src="{{asset('datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script>
    $(document).ready(function () {
            $('#dtHorizontalVerticalExample').DataTable({
                "scrollX": true,
                "scrollY": 200,
            });
            $('.dataTables_length').addClass('bs-select');
        });
</script>
@endsection

@section('style')
<link href="{{ asset('datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
<style>
    .dtHorizontalVerticalExampleWrapper {
        max-width: 600px;
        margin: 0 auto;
    }

    #dtHorizontalVerticalExample th,
    td {
        white-space: nowrap;
    }

    table.dataTable thead .sorting:after,
    table.dataTable thead .sorting:before,
    table.dataTable thead .sorting_asc:after,
    table.dataTable thead .sorting_asc:before,
    table.dataTable thead .sorting_asc_disabled:after,
    table.dataTable thead .sorting_asc_disabled:before,
    table.dataTable thead .sorting_desc:after,
    table.dataTable thead .sorting_desc:before,
    table.dataTable thead .sorting_desc_disabled:after,
    table.dataTable thead .sorting_desc_disabled:before {
        bottom: 0.5em;
    }
</style>
@endsection