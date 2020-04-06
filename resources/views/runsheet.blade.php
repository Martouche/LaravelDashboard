@extends('layouts.app', ['pageSlug' => 'home'])

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card card-chart">
                <div class="card-header ">
                    <div class="row">
                        <div class="col-sm-6 text-left">
                            <h2 class="card-title">Notre Run Sheet</h2>
                        </div>
                        <div class="col-sm-6">
                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                            <label class="btn btn-sm btn-primary btn-simple active" id="0">
                                <input type="radio" name="options" checked>
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Accounts</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-single-02"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple" id="1">
                                <input type="radio" class="d-none d-sm-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Purchases</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-gift-2"></i>
                                </span>
                            </label>
                            <label class="btn btn-sm btn-primary btn-simple" id="2">
                                <input type="radio" class="d-none" name="options">
                                <span class="d-none d-sm-block d-md-block d-lg-block d-xl-block">Sessions</span>
                                <span class="d-block d-sm-none">
                                    <i class="tim-icons icon-tap-02"></i>
                                </span>
                            </label>
                            </div>
                        </div>
                    </div>
                    <div class="Pilote_form" align="center">
                        <form id="first_form" name="first_form" action="/action_page.php">
                            <label for="fname">Pilote name:</label><br>
                            <input type="text" id="pilote_name" name="pilote_name" placeholder="MASSA"><br>
                            <label for="lname">Id of the RUN:</label><br>
                            <input type="text" id="lname" name="lname" placeholder="Id"><br>
                            <button type="submit" formaction="/setupsheet">Set Up</button><br>
                        </form>
                    </div>
                    <div class="Pre_Comment_form">
                        <form id="second_form" name="second_form" action="/action_page.php">
                            <label for="fname">Comment Pre RUN Race :</label><br>
                            <input type="text" id="comment_pre_run_race" name="comment_pre_run_race"><br>
                            <label for="fname">Comment Pre RUN Race :</label><br>
                            <input type="text" id="comment_pre_run_perf" name="comment_pre_run_perf"><br>
                            <label for="fname">Setup Overview :</label><br>
                            <input type="text" id="setup_over" name="setup_over"><br>
                            <label for="fname">Setup Change :</label><br>
                            <input type="text" id="setup_change" name="setup_change"><br>                            <input type="submit" value="Valider">
                            <label for="fname">software Change :</label><br>
                            <input type="text" id="software_change" name="software_change"><br>                          </form>
                    </div>
                    <div class="End_Comment_form">
                        <form id="fourth_form" name="fourth_form" action="/action_page.php">
                            <label for="fname">Comment End RUN Driver :</label><br>
                            <input type="text" id="comment_end_driver" name="comment_end_driver"><br>                            <label for="fname">Comment End RUN Race :</label><br>
                            <input type="text" id="comment_end_run_race" name="comment_end_run_race"><br>
                            <label for="fname">Comment End RUN Race :</label><br>
                            <input type="text" id="comment_end_run_perf" name="comment_end_run_perf"><br>
                            <label for="fname">Comment End RUN System :</label><br>
                            <input type="text" id="comment_end_system" name="comment_end_system"><br>                            <input type="submit" value="Valider">
                     </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="chartBig1"></canvas>
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
