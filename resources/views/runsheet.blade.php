@extends('layouts.app', ['pageSlug' => 'home'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">
                    <div class="col-sm-3 btn-group">
                        <button id="seasonname" type="button" class="btn btn-secondary dropdown-toggle seasonname" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Select Season
                        </button>
                        <div class="dropdown-menu scrollable-menu seasondrop">
                            @foreach($seasons as $season)
                            <a class="dropdown-item" href="#">{{ $season->Season }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-sm-3 btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle eventname" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Select Event
                        </button>
                        <div id="eventname" class="dropdown-menu scrollable-menu eventdrop">
                            <a class="dropdown-item">test1</a>
                            <a class="dropdown-item">test2</a>
                        </div>
                    </div>
                    <div class="col-sm-3 btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle sessionname" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Select session
                        </button>
                        <div class="dropdown-menu scrollable-menu sessiondrop">
                            @foreach($sessionLabel as $session)
                            @foreach ($session as $sess)
                            <a class="dropdown-item" href="#">{{ $session->Name }}</a>
                            @endforeach
                            @endforeach
                        </div>
                    </div>
                    <div class="card card-nav-tabs">
                        <div class="card-header card-header-primary text-center">
                            RunSheet
                        </div>
                        <div class="card-body">
                            <form>
                                <div class="form-group">
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Comment Pre Run Race">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Run Pro">
                                        </div>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control"
                                                placeholder="Comment End Run Driver">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Comment Pre Run Perf">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Setup overview">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Setup Change">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" placeholder="Software Change">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control"
                                                placeholder="Start resume of the best lap push">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control"
                                                placeholder="Start resume of the best lap energy">
                                        </div>
                                    </div>
                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <input type="text" class="form-control"
                                                placeholder="Start resume of the best lap selected">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" class="form-control" placeholder="Tire Pressure Cold 20">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" class="form-control"
                                                placeholder="Temperature resume of best lap">
                                        </div>
                                    </div>
                                </div>
                            </form>
                                    <div class="card card-nav-tabs">
                                        <div class="card-header card-header-primary text-center">
                                            Lap Field
                                        </div>
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">NLAP</th>
                                                <th scope="col">Laptime</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">IP1</th>
                                                <th scope="col">IP2</th>
                                                <th scope="col">IP3</th>
                                                <th scope="col">Elaps</th>
                                                <th scope="col">TCell</th>
                                                <th scope="col">ERem</th>
                                                <th scope="col">TTB</th>
                                                <th scope="col">BRK</th>
                                                <th scope="col">DIFF</th>
                                                <th scope="col">OT</th>
                                                <th scope="col">LTHB</th>
                                                <th scope="col">Driver</th>
                                                <th scope="col">Comm</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                        </div>
                        <div class="card-footer text-muted">
                        </div>
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

    $('.sessiondrop a').on('click', function(){
        $('.sessionname').html($(this).html());
    })

    $('.seasondrop a').on('click', function(){
        $('.seasonname').html($(this).html());
        $.ajax({
            url: '{{ route('runsheetgetseason') }}',
            type: "POST",
            data: {
                season: $(this).text()
            },
            success: function(data) {
                let json = JSON.parse(data)
                var $dropdown = $(".eventdrop");
                $dropdown.children().remove();
                json.event.forEach(element => {
                   $dropdown.append("<a class=" + "dropdown-item" + ">" + element.Event + "</a>");
                });
            }
        });
    })

    $('.eventdrop .dropdown-item').on('click', function(){
        $(this).parents(".btn-group").find('.btn').text($(this).text());
        console.log("test");
    })
    </script>
    @endpush
