@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Edit Mahasiswa Page </h4><br><br>
            
  

 <form method="post" action="{{ route('mahasiswa.update') }}" id="myForm" >
                @csrf

                <input type="hidden" name="id" value="{{ $mahasiswa->id }}">

                <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">NIM </label>
                <div class="form-group col-sm-10">
                    <input name="nim" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Nama Mahasiswa </label>
                <div class="form-group col-sm-10">
                    <input name="nama" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Tempat Lahir </label>
                <div class="form-group col-sm-10">
                    <input name="tempat_lahir" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Alamat </label>
                <div class="form-group col-sm-10">
                    <input name="alamat" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                <div class="form-group col-sm-10">
                    <input name="email" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->
            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">No HP</label>
                <div class="form-group col-sm-10">
                    <input name="no_hp" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Jurusan </label>
        <div class="col-sm-10">
            <select name="jurusan_id" class="form-select" aria-label="Default select example">
                <option selected="">Open this select menu</option>
                @foreach($jurusan as $jur)
                <option value="{{ $jur->id }}" {{ $jur->id == $mahasiswa->jurusan_id ? 'selected' : '' }}   >{{ $jur->nama_jurusan }}</option>
               @endforeach
                </select>
        </div>
    </div>
  <!-- end row -->

        
<input type="submit" class="btn btn-info waves-effect waves-light" value="Update Mahasiswa">
            </form>
             
           
        </div>
    </div>
</div> <!-- end col -->
</div>
 


</div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                nim: {
                    required : true,
                }, 
                nama: {
                    required : true,
                }, 
                tempat_lahir: {
                    required : true,
                }, 
                alamat: {
                    required : true,
                }, 
                email: {
                    required : true,
                }, 
                no_hp: {
                    required : true,
                }, 
                 jurusan_id: {
                    required : true,
                },
            },
            messages :{
                nim: {
                    required : 'Please Enter Your NIM',
                },
                nama: {
                    required : 'Please Enter Your Nama',
                },
                tempat_lahir: {
                    required : 'Please Enter Your Tempat Lahir',
                },
                alamat: {
                    required : 'Please Enter Your alamat',
                },
                email: {
                    required : 'Please Enter Your Email',
                },
                no_hp: {
                    required : 'Please Enter Your No HP',
                },
                jurusan_id: {
                    required : 'Please Select One Jurusan',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>


 
@endsection 
