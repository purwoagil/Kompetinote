@extends('layouts.main')

@section('container')
   
    
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Tables</h1>
    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
        For more information about DataTables, please visit the <a target="_blank"
            href="https://datatables.net">official DataTables documentation</a>.</p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Waktu</th>
                            <th>Capaian Peserta</th>
                            <th>Tingkat Kegiatan</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Program Kreativitas Mahasiswa</td>
                            <td>06/05/2023</td>
                            <td>Peserta</td>
                            <td>Nasional</td>
                            <td>Disetujui</td>
                            
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>TBIG Youth Changemaker</td>
                            <td>05/12/2023</td>
                            <td>Juara 2</td>
                            <td>Nasional</td>
                            <td>Disetujui</td>
                            
                        </tr>                  
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

@endsection
