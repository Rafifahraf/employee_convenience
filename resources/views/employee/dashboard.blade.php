@extends('template.template')
@section('title', 'Dashboard')
@section('container')
    <h1>Dashboard</h1>


    <div class="row gap-3">
        <div class="col-lg card">
            <div class="card-body d-flex flex-column justify-content-center gap-6">
                <div class="d-flex align-items-center gap-6 mb-4 ">
                    <span class="round-48 d-flex align-items-center justify-content-center rounded bg-secondary-subtle">
                        <iconify-icon icon="mdi:face-male" class="fs-6 text-secondary"></iconify-icon>
                    </span>
                    <h6 class="mb-0 fs-4">Male Workers</h6>
                </div>
                <div class="">
                    <h2 class="fs-11 text-info fw-semibold m-0">{{ $male_worker }}</h2>

                </div>
            </div>
        </div>
        <div class="col-lg card">
            <div class="card-body d-flex flex-column justify-content-center gap-6">
                <div class="d-flex align-items-center gap-6 mb-4 ">
                    <span class="round-48 d-flex align-items-center justify-content-center rounded bg-danger-subtle">
                        <iconify-icon icon="mdi:face-female" class="fs-6 text-danger">
                        </iconify-icon>
                    </span>
                    <h6 class="mb-0 fs-4">Female Workers</h6>
                </div>

                <div class="">
                    <h2 class="fs-11 text-danger fw-semibold m-0">{{ $female_worker }}</h2>

                </div>
            </div>
        </div>
        <div class="col-lg card">
            <div class="card-body d-flex flex-column justify-content-center gap-6">
                <div class="d-flex align-items-center gap-6 mb-4">
                    <span class="round-48 d-flex align-items-center justify-content-center rounded bg-success-subtle">
                        <iconify-icon icon="healthicons:female-and-male" class="fs-6 text-success"></iconify-icon>
                    </span>
                    <h6 class="mb-0 fs-4">Total Workers</h6>
                </div>
                <div class="">
                    <h2 class="fs-11 text-success fw-semibold m-0">{{ $total_worker }}</h2>

                </div>
            </div>
        </div>

    </div>

    <div class="row ">
        <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
                <div class="card-body d-flex flex-column align-items-center">
                    <div class="d-sm-flex d-block align-items-center justify-content-between mb-9">
                        <div class="mb-3 mb-sm-0">
                            <h5 class="card-title fw-semibold">Data Employee</h5>
                        </div>

                    </div>
                    <div id="revenue-forecast"></div>
                </div>
            </div>
        </div>

    </div>



@endsection

@section('script')

    <script>
        $(function() {


            // -----------------------------------------------------------------------
            // Subscriptions
            // -----------------------------------------------------------------------
            var chart = {
                series: [{{ $male_worker }}, {{ $female_worker }}],
                chart: {
                    width: 380,
                    type: "pie"
                },
                colors: ["var(--bs-secondary)", "var(--bs-danger)"],
                labels: ["Male Workers", "Female Workers"],
                responsive: [{
                    breakpoint: 480,
                    options: {
                        chart: {
                            width: 200
                        },
                        legend: {
                            position: "bottom"
                        }

                    }
                }]
            };

            var chart = new ApexCharts(
                document.querySelector("#revenue-forecast"),
                chart
            );
            chart.render();



        })
    </script>

@endsection
