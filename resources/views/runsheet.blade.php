@extends('layouts.app', ['pageSlug' => 'home'])

@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">
                    <div class="col-sm-2 btn-group">
                        <button id="eventname" type="button" class="btn btn-secondary dropdown-toggle eventname" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Select Event
                        </button>
                        <div class="dropdown-menu scrollable-menu eventdrop">
                            @foreach($events as $event)
                            <a class="dropdown-item" href="#">{{ $event->Event }}</a>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-sm-2 btn-group">
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
        $('.eventdrop a').on('click', function(){
        $('.eventname').html($(this).html());
        console.log($(this).text());
        $.ajax({
            url: '{{ route('runsheet') }}',
            type: "POST",
            data: $(this).text(),
        });
    })

    $('.sessiondrop a').on('click', function(){    
        $('.sessionname').html($(this).html());    
    })
    </script>
    @endpush