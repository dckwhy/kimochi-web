<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content"> 
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Layanan</h5>
                                </div>
                                <ul class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#">
                                    <i class="feather icon-user"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Layanan</a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Detail</a></li>
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
                                        <h5>Detail Layanan</h5> 
                                        <a href="<?php echo base_url('admin/layanan/add') ?>" class="btn shadow-2 btn-success pull-right">Add</a> 
                                        <a href="<?php echo base_url('admin/layanan/data') ?>" class="btn shadow-2 btn-primary pull-right">Data</a> 
                                    </div>
                                    <?php 
                                    $id = $this->uri->segment(4);
                                    $this->db->where('id', $id);
                                    $row = $this->db->get('kimochi_product.data_jasa')->row();
                                    ?>
                                    <form  id="input_data">
                                        <div class="card-block"> 
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <br>
                                                    <label for="">Image</label>
                                                    <br>
                                                    <img src="<?= base_url('prabotan/image/layanan/'.$row->img) ?>"
                                                        alt="" id="preview" style="width:60%; margin:20px auto;">
                                                    <br><br>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Judul Layanan</label>
                                                        <input type="text" class="form-control" required name="judul_layanan" value="<?php echo @$row->judul_layanan ?>" placeholder="Judul Layanan" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Harga</label>
                                                        <input type="text" class="form-control" required name="harga" value="<?php echo @$row->harga ?>" placeholder="harga" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Deskripsi</label>
                                                        <textarea type="text" class="form-control" required name="deskripsi" placeholder="Deskripsi" disabled><?= $row->deskripsi ?></textarea>
                                                    </div>
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
    <script type="text/javascript"> 
        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#preview').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function() {
            readURL(this);
        }); 

        $(function() {
            $('.summernote').summernote('disable'); 

        });

        function uploadFile(file) {
            data = new FormData();
            data.append("file", file);

            $.ajax({
                data: data,
                type: "POST",
                url: "<?php echo base_url('admin/event/upload_img_summernote') ?>",  
                cache: false,
                contentType: false,
                processData: false,
                success: function(url) {
                    $('.summernote').summernote("insertImage", url);
                }
            });

        }

        $('#input_data').on('submit', function (e) {
            $('.loading').hide(); 
            $.ajax({
                type :"post",  
                url : "<?php echo base_url('admin/layanan/detail') ?>",  
                cache :false,
                data: $(this).serialize(),
                dataType: 'json',
                success : function(data) {
                    if (data.msg == 'success') {
                        $('.sukses_menyimpan').click();
                        setTimeout(function(){
                            window.location = "<?php echo base_url('admin/layanan/detail') ?>";
                        },2000)
                    }else{
                        $('.gagal_menyimpan').click();  
                    }
                    $('.loading').hide(); 
                },  
                error : function() {  
                    $('.gagal_menyimpan').click();   
                    $('.loading').hide(); 
                }
            }); 
            return false;
        });
    </script>



