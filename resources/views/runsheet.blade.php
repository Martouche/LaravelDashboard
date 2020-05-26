@extends('layouts.app', ['pageSlug' => 'home'])

@section('content')
<style>
    select.custom-select {
        -moz-appearance: none;
        -webkit-appearance: none;
        appearance: none;
    }
</style>
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">
                    <div class="col-sm-3">
                        <select id="season" class="bg-light text-dark browser-default custom-select season">
                            <option class="text-dark" selected>Select Season</option>
                            @foreach($seasons as $season)
                            <option class="text-dark" value={{ $season->Sesaon_ID }}>{{ $season->Season }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select id="event" class="bg-light text-dark browser-default custom-select">
                            <option selected>Select Event</option>
                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select id="driver" class="bg-light text-dark browser-default custom-select">
                            <option selected>Select Driver</option>
                            <option class="text-dark" value=11>Massa</option>
                            <option class="text-dark" value=20>Mortara</option>
                            <option class="text-dark" value=9>Nick</option>
                            <option class="text-dark" value=4>Stoffel</option>

                        </select>
                    </div>
                    <div class="col-sm-3">
                        <select id="session" class="bg-light text-dark browser-default custom-select">
                            <option selected>Select Session</option>
                        </select>
                    </div>
                    <div id="runsheets" class="card card-nav-tabs"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('js')
    <script src="{{ asset('black') }}/js/plugins/chartjs.min.js"></script>
    <script>
        $(document).ready(function() {
          demo.initDashboardPageCharts();
        });
    </script>
@endpush