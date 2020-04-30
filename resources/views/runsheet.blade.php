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
                        <select id="session" class="bg-light text-dark browser-default custom-select">
                            <option selected>Select Session</option>
                        </select>
                    </div>
                    <div id="runsheets" class="card card-nav-tabs"></div>
                    <div class="card-footer text-muted"></div>
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

    <script>
        $.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
    });

    $('#session').change(function(){
        $.ajax({
            url: '{{ route('runsheetgetsession') }}',
            type: "POST",
            data: {
                session: $('#session option:selected').text()
            },
            success: function(data) {
                let json = JSON.parse(data)
                console.log(json);
                $('#runsheets').append($(json.view));
            }
        });
    })

    $('#season').change(function(){
        $.ajax({
            url: '{{ route('runsheetgetseason') }}',
            type: "POST",
            data: {
                season: $('#season option:selected').text()
            },
            success: function(data) {
                $("#event").find("option").remove();
                let json = JSON.parse(data)
                json.event.forEach(element => {
                    let option = new Option(element.Event, element.Event_ID)
                    $(option).html(element.Event);
                    $("#event").append(option);
                });
            }
        });
    })

    $('#event').change(function(){
        $.ajax({
            url: '{{ route('runsheetgetevent') }}',
            type: "POST",
            data: {
                event: $('#event option:selected').text()
            },
            success: function(data) {
                $("#session").find("option").remove();
                let json = JSON.parse(data);
                json.sessionName.forEach(element => {
                    let option = new Option(element.Name, element.Session_ID)
                    $(option).html(element.Name);
                    $("#session").append(option);
                })
            }
        });
    })

    </script>
    @endpush