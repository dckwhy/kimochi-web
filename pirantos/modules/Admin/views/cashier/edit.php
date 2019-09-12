<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content"> 
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Cashier</h5>
                                </div>
                                <ul class="breadcrumb">
                                   <li class="breadcrumb-item"><a href="#">
                                    <i class="feather icon-user"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Cashier</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Update</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="main-body">
                    <div class="page-wrapper"> 
                        <div class="row"> 
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Update Cashier</h5> 
                                        <a href="<?php echo base_url('admin/cashier/add') ?>" class="btn shadow-2 btn-success pull-right">Add</a> 
                                        <a href="<?php echo base_url('admin/cashier/data') ?>" class="btn shadow-2 btn-primary pull-right">Data</a> 
                                    </div>
                                    <?php 
                                    $id = $this->uri->segment(4);
                                    $this->db->where('id', $id);
                                    $row = $this->db->get('data_cashier')->row();
                                    ?>
                                    <form  id="input_data">
                                        <div class="card-block"> 
                                            <div class="row">
                                                <div class="col-md-12 col-sm-6 col-xs-6"> 
                                                    <label>Photo</label>
                                                    <br>
                                                    <img src="<?php echo base_url('prabotan/image/photo_cashier/'.@$row->photo) ?>" alt="" 
                                                    id="preview" style="width:20%; margin:20px auto;">
                                                    <br><br>
                                                    <div class="custom-file">
                                                        <input type="file" name="foto_file" class="custom-file-input"
                                                        id="imgInp">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                        file</label>
                                                    </div>
                                                    <br><br>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Nama</label>
                                                        <input type="text" class="form-control" name="nama_cashier" value="<?php echo @$row->nama_cashier ?>" placeholder="Nama" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input type="tel" class="form-control" name="nohp_cashier" value="<?php echo @$row->nohp_cashier ?>" placeholder="Phone" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12" required>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" name="email" value="<?php echo @$row->email ?>" placeholder="Email" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Username</label> 
                                                        <input type="text" class="form-control" name="username" value="<?php echo @$row->username ?>" placeholder="Username" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Password</label> 
                                                        <input type="text" class="form-control" name="password" value="<?php echo @$row->password ?>" placeholder="Password" required>
                                                    </div>
                                                </div>
                                                
                                                <input type="hidden" name="id" value="<?= @$row->id ?>">
                                                <input type="hidden" name="photo" value="<?php echo @$row->photo ?>">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <button type="submit" class="btn btn-primary pull-right"><i class="feather icon-send"></i>Save </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<button type="button" style="display:none" class="btn btn-success btn-sm sukses_menyimpan" id="sukses_menyimpan"></button>
<button type="button" style="display:none" class="btn btn-success btn-sm gagal_menyimpan" id="gagal_menyimpan"></button>
<button type="button" style="display:none" class="btn btn-success btn-sm error_menyimpan" id="error_menyimpan"></button>
<button type="button" style="display:none" class="btn btn-success btn-sm tersedia" id="tersedia"></button>
</div>  
<script type="text/javascript">
   $(document).ready(function () {
       function readURL(input) {

           if (input.files && input.files[0]) {
               var reader = new FileReader();

               reader.onload = function (e) {
                   $('#preview').attr('src', e.target.result);
               }

               reader.readAsDataURL(input.files[0]);
           }
       }

       $("#imgInp").change(function () {
           readURL(this);
       });

       $('#input_data').on('submit', function (e) {
        e.preventDefault();
                    // $('#content_berita').val($('#berita').summernote('code'));

                    $('.loading').show();
                    $.ajax({
                       type: "post",
                       url: "<?php echo base_url('admin/cashier/edit_data') ?>",
                       cache: false,
                       enctype: 'multipart/form-data',
                       data: new FormData($('#input_data')[0]),
                       processData: false,
                       contentType: false,
                       dataType: 'json',
                       success: function (data) {
                           if (data.msg == 'success') {
                               $('.sukses_menyimpan').click();
                               setTimeout(function () {
                                   window.location =
                                   "<?php echo base_url('admin/cashier/data') ?>";
                               }, 2000)
                           } else {
                               $('.gagal_menyimpan').click();
                           }
                           $('.loading').hide();
                       },
                       error: function () {
                           $('.gagal_menyimpan').click();
                           $('.loading').hide();
                       }
                   });
                    return false;
                });
   });

</script>


