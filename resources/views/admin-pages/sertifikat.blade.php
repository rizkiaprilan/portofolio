@extends('layouts.masterAdmin')

@php
$page = 'Sertifikat';
@endphp

@section('title')
{{ $page }}
@endsection

@section('content')
@foreach ($data as $d)
<br>
<caption>Table {{ $d['tablename'] }}</caption>
<div style="overflow-x:auto;">
    <table id="dtHorizontalVerticalExample" class="table table-striped table-bordered table-sm " cellspacing="0"
        width="100%">
        <thead>
            <tr>
                <th>#</th>
                @foreach ($d['fieldname'] as $f)
                <th>{{ $f }}</th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach ($d['data'] as $key=>$k)
            <tr class="table-info">
                <td>{{ $key+1 }}</td>
                @foreach (json_decode($k) as $j)
                <td>{{ $j }}</td>
                @endforeach
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endforeach
@endsection

@section('script')
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