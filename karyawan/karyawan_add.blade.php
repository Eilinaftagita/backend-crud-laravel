@extends('admin.admin_master')
@section('admin')
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
<div class="container-fluid">

<div class="row">
<div class="col-12">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">Add Karyawan Page </h4><br><br>


 
            <form method="post" action="{{ route('karyawan.store') }}" id="myForm" enctype="multipart/form-data" >
                                @csrf

            <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">Nama Karyawan </label>
                <div class="form-group col-sm-10">
                    <input name="nama_karyawan" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label">NIK </label>
                <div class="form-group col-sm-10">
                    <input name="nik" class="form-control" type="text"    >
                </div>
            </div>
            <!-- end row -->


            <div class="row mb-3">
                    <label for="example-text-input" class="col-sm-2 col-form-label"> Jenis Kelamin </label>
                    <div class="form-group col-sm-10">
                        <div>
                            <input type="radio" name="jenis_kelamin" value="Laki-laki"> Laki-laki
                        </div>
                        <div>
                            <input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan
                        </div>
                    </div>
                </div>
                <!-- end row -->


  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Jabatan </label>
                <div class="form-group col-sm-10">
                    <input name="jabatan" class="form-control" type="text"  >
                </div>
            </div>
            <!-- end row -->

  <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Departemen </label>
                <div class="form-group col-sm-10">
                    <input name="departemen" class="form-control" type="text"  >
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                <label for="example-text-input" class="col-sm-2 col-form-label"> Photo </label>
                <div class="form-group col-sm-10">
       <input name="karyawan_image" class="form-control" type="file"  id="image">
                </div>
            </div>
            <!-- end row -->

              <div class="row mb-3">
                 <label for="example-text-input" class="col-sm-2 col-form-label">  </label>
                <div class="col-sm-10">
   <img id="showImage" class="rounded avatar-lg" src="{{  url('upload/no_image.jpg') }}" alt="Card image cap">
                </div>
            </div>
            <!-- end row -->





<input type="submit" class="btn btn-info waves-effect waves-light" value="Add Karyawan">
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
                nik: {
                    required : true,
                }, 
                 nama_karyawan: {
                    required : true,
                },
                 jenis_kelamin: {
                    required : true,
                },
                 jabatan: {
                    required : true,
                },
                 departemen: {
                    required : true,
                },
                 karyawan_image: {
                    required : true,
                },
            },
            messages :{
                nik: {
                    required : 'Masukkan NIK',
                },
                nama_karyawan: {
                    required : 'Masukkan Nama',
                },
                jenis_kelamin: {
                    required : 'Masukkan Jenis Kelamin',
                },
                jabatan: {
                    required : 'Masukkan Jabatan',
                },
                departemen: {
                    required : 'Masukkan Departemen',
                },
                 karyawan_image: {
                    required : 'Please Select one Image',
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


<script type="text/javascript">
    
    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
</script>



@endsection 