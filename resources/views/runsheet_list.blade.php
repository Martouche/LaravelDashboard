@foreach($lapnb as $nblap)
    <div class="card-header card-header-primary text-center">
        Runsheet {{ $nblap+1 }}
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
                @foreach ($laps[$nblap] as $lap)
                    <tr>
                        <?php
                        $laptime = gmdate("i:s", $lap->Laptime);
                        $S1 = gmdate("i:s", $lap->S1Time);
                        $S2 = gmdate("i:s", $lap->S2Time);
                        $S3 = gmdate("i:s", $lap->S3Time);
                        ?>
                        <td>{{ $lap->LapNumber }}</td>
                        <td>{{ $laptime }}</td>
                        <td>{{ $lap->Type }}</td>
                        <td>{{ $S1 }}</td>
                        <td>{{ $S2 }}</td>
                        <td>{{ $S3 }}</td>
                        <td>{{ $lap->Elapsed }}</td>
                        <td>-</td>
                        <td>{{ $lap->ERemaining }}</td>
                        <td>{{ $lap->Stats_ID }}</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td>-</td>
                        <td><input type="text" class="form-control" placeholder="Driver comments"></td>
                        <td><input type="text" class="form-control" placeholder="Engineer comments"></td>



                    </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
    <div class="mb-4">
        <h6 class="text-uppercase"></h6>
        <!-- Solid divider -->
        <hr class="solid">
    </div>
    @endforeach
    <style>
        hr.solid {
    border-top: 2px solid #999;
}
hr.hr-text {
  position: relative;
    border: none;
    height: 1px;
    background: #999;
}

hr.hr-text::before {
    content: attr(data-content);
    display: inline-block;
    background: #fff;
    font-weight: bold;
    font-size: 0.85rem;
    color: #999;
    border-radius: 30rem;
    padding: 0.2rem 2rem;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}

    </style>