@extends('template_admin.template')
@section('konten')
<style>
    .select2-selection__rendered {
        line-height: 43px !important;
    }

    .select2-selection {
        height: 43px !important;
    }

</style>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- [ breadcrumb ] start -->
        <div class="page-header">
            <div class="page-block">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="page-header-title">
                            <h5 class="m-b-10">{{ $main_title }}</h5>
                        </div>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html"><i class="feather icon-file-text"></i></a></li>
                            <li class="breadcrumb-item"><a href="javascript:">Pelayanan RT</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:">{{ $main_title }}</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ breadcrumb ] end -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- [ Main Content ] start -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row">
                                    <div class="col-lg-8 mt-3">
                                        <h5>{{ $main_title }}</h5>
                                    </div>

                                </div>
                            </div>
                            <div class="card-block">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <canvas id="pengajuan_hari" height="350"></canvas>
                                    </div>
                                    <div class="col-lg-4">
                                        <canvas id="pengajuan_minggu" height="350"></canvas>
                                    </div>
                                    <div class="col-lg-4">
                                        <canvas id="pengajuan_bulan" height="350"></canvas>
                                    </div>
                                </div>
                                <div class="row mt-5">
                                    <div class="col-lg-12">
                                        <canvas id="penilaian" height="150"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- [ Main Content ] end -->
            </div>
        </div>
    </div>
</div>

@push('custom-scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        var select2 = $('.js-example-basic-single').select2({
            height: '100%',
            dropdownCssClass: "bigdrop"
        });
        select2.data('select2').$selection.css('height', '43px');

    });

     //    chart
     const ctx_1 = $('#pengajuan_hari');
            const pengajuanHari = new Chart(ctx_1, {
                type: 'pie',
                data: {
                    labels: ['RT. 1', 'RT. 2'],
                    datasets: [
                        {
                            data: [2, 5],
                            label: 'Dataset 1',
                            borderColor: ['rgb(210, 0, 0)', 'rgb(111, 219, 254)'],
                            backgroundColor:  ['rgb(255,0,0, 0.7)',  'rgb(111, 219, 225, 0.7)'],
                        },
                    ]
                },
                options: {
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Grafik Pengajuan RT Perhari'
                        }
                    }
                },
            });

            //    chart
     const ctx_2 = $('#pengajuan_minggu');
            const pengajuanMinggu = new Chart(ctx_2, {
                type: 'bar',
                data: {
                    labels: ['Minggu 1', 'Minggu 2', 'Minggu 3', 'Minggu 4'],
                    datasets: [
                        {
                            label: 'RT. 01',
                            data: [2, 3, 5, 3.5],
                            fill: false,
                            borderColor: 'rgb(210, 0, 0)',
                            backgroundColor:  'rgb(255,0,0, 0.7)',
                            tension: 0.1
                        },
                        {
                            label: 'RT. 02',
                            data: [1, 4, 6, 10],
                            fill: false,
                            borderColor: 'rgb(111, 219, 254)',
                            backgroundColor: 'rgb(111, 219, 225, 0.7)',
                            tension: 0.1
                        },
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Grafik Pengajuan RT Bulan - April'
                        }
                    }
                },
            });


              //    chart
     const ctx_3 = $('#pengajuan_bulan');
            const pengajuanBulan = new Chart(ctx_3, {
                type: 'bar',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                    datasets: [
                        {
                            label: 'RT. 01',
                            data: [2, 3, 5, 3.5],
                            fill: false,
                            borderColor: 'rgb(210, 0, 0)',
                            backgroundColor:  'rgb(255,0,0, 0.7)',
                            tension: 0.1
                        },
                        {
                            label: 'RT. 02',
                            data: [1, 4, 6, 10],
                            fill: false,
                            borderColor: 'rgb(111, 219, 254)',
                            backgroundColor: 'rgb(111, 219, 225, 0.7)',
                            tension: 0.1
                        },
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Grafik Pengajuan RT Bulan - April'
                        }
                    }
                },
            });

    //    chart
    const ctx = $('#penilaian');
            const myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                    datasets: [{
                            label: 'RT. 01',
                            data: [2, 3, 3, 3.5],
                            fill: false,
                            borderColor: 'rgb(255,0,0)',
                            tension: 0.1
                        },
                    ]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: 'top',
                        },
                        title: {
                            display: true,
                            text: 'Grafik Penilaian RT Perbulan'
                        }
                    }
                },
            });
    </script>
@endpush
@endsection
