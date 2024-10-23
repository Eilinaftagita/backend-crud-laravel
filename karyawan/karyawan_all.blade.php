@extends('admin.admin_master')
@section('admin')


 <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0">Karyawan All</h4>



                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                <a href="{{ route('karyawan.add') }}" class="btn btn-dark btn-rounded waves-effect waves-light" style="float:right;">Add Karyawan </a> <br>  <br>
                    <h4 class="card-title">Karyawan All Data </h4>


                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr>
                            <th>Sl</th>
                            <th>Photo</th>
                            <th>NIK</th> 
                            <th>Nama</th>
                            <th>Jenis Kelamin</th> 
                            <th>Jabatan</th>
                            <th>Departemen</th>   
                            <th>Action</th>

                        </thead>


                        <tbody>

                        	@foreach($karyawans as $key => $item)
                        <tr>
                            <td> {{ $key+1}} </td>
                            <td> {{ $item->nik }} </td> 
           <td> <img src="{{ asset( $item->karyawan_image ) }}" style="width:60px; height:50px"> </td> 
                              <td> {{ $item->nama }} </td> 
                               <td> {{ $item->jenis_kelamin }} </td> 
                               <td> {{ $item->jabatan }} </td> 
                               <td> {{ $item->departemen }} </td> 
                            <td>
                            <a href="{{ route('karyawan.edit',$item->id) }}" class="btn btn-info sm" title="Edit Data">  <i class="fas fa-edit"></i> </a>
                            <a href="{{ route('karyawan.delete',$item->id) }}" class="btn btn-danger sm" title="Delete Data" id="delete">  <i class="fas fa-trash-alt"></i> </a>

                            </td>

                        </tr>
                        @endforeach

                        </tbody>
                    </table>

                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->



                    </div> <!-- container-fluid -->
                </div>


@endsection