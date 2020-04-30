    @foreach ($runs as $run)
    <div class="card-header card-header-primary text-center">
        {{ $run->Setup_ID }}
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
    @endforeach