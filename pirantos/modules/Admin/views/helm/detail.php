<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content"> 
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Helm</h5>
                                </div>
                                <ul class="breadcrumb">
                                 <li class="breadcrumb-item"><a href="#">
                                    <i class="feather icon-user"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Helm</a></li>
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
                                        <h5>Detail Helm</h5>
                                        <a href="<?php echo base_url('admin/layanan/data') ?>" class="btn shadow-2 btn-primary pull-right">Data</a> 
                                    </div>
                                    <?php 
                                    $id = $this->uri->segment(4);
                                    $this->db->where('id', $id);
                                    $row = $this->db->get('kimochi_helm.data_helm')->row();
                                    ?>
                                    <form  id="input_data">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <br>
                                                    <label for="">Foto</label>
                                                    <br>
                                                    <img src="<?php echo base_url('prabotan/image/helm/'.@$row->img) ?>" alt="" id="preview" style="width:20%; margin:20px auto;">
                                                    <br><br>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Customer ID</label>
                                                        <input type="text" class="form-control" name="id_cust" placeholder="Cust ID" value="<?php echo @$row->id_cust ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Jenis</label>
                                                        <select class="form-control" name="jenis_helm" placeholder="Jenis" disabled>
                                                            <option <?php if($row->jenis_helm == 'Half Face'){ echo 'selected'; } ?> value="Half Face">Half Face</option> 
                                                            <option <?php if($row->jenis_helm == 'Full Face'){ echo 'selected'; } ?> value="Full Face">Full Face</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Merk</label>
                                                        <input type="text" class="form-control" name="merk_helm" placeholder="Merk" value="<?php echo @$row->merk_helm ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Lama Pemakaian</label>
                                                        <input type="text" class="form-control" name="lama_pemakaian" placeholder="Lama Pemakaian" value="<?php echo @$row->lama_pemakaian ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Tempurung Luar</label>
                                                        <select class="form-control" name="tempurung_luar" placeholder="Tempurung Luar" disabled>
                                                            <option <?php if($row->tempurung_luar == 'Mulus'){ echo 'selected'; } ?> value="Mulus">Mulus</option> 
                                                            <option <?php if($row->tempurung_luar == 'Baret'){ echo 'selected'; } ?> value="Baret">Baret</option> 
                                                            <option <?php if($row->tempurung_luar == 'Retak'){ echo 'selected'; } ?> value="Retak">Retak</option> 
                                                            <option <?php if($row->tempurung_luar == 'Pecah'){ echo 'selected'; } ?> value="Pecah">Pecah</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Visor</label>
                                                        <select class="form-control" name="visor" placeholder="Visor" disabled>
                                                            <option <?php if($row->visor == 'Mulus'){ echo 'selected'; } ?> value="Mulus">Mulus</option> 
                                                            <option <?php if($row->visor == 'Baret Buram'){ echo 'selected'; } ?> value="Baret Buram">Baret Buram</option> 
                                                            <option <?php if($row->visor == 'Retak'){ echo 'selected'; } ?> value="Retak">Retak</option> 
                                                            <option <?php if($row->visor == 'Pecah'){ echo 'selected'; } ?> value="Pecah">Pecah</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Baut Kiri</label>
                                                        <select class="form-control" name="baut_kiri" placeholder="Baut Kiri" disabled>
                                                            <option <?php if($row->baut_kiri == 'Bagus'){ echo 'selected'; } ?> value="Bagus">Bagus</option> 
                                                            <option <?php if($row->baut_kiri == 'Peyot'){ echo 'selected'; } ?> value="Peyot">Peyot</option> 
                                                            <option <?php if($row->baut_kiri == 'Rusak'){ echo 'selected'; } ?> value="Rusak">Rusak</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Baut Kanan</label>
                                                        <select class="form-control" name="baut_kanan" placeholder="Baut Kanan" disabled>
                                                            <option <?php if($row->baut_kanan == 'Bagus'){ echo 'selected'; } ?> value="Bagus">Bagus</option> 
                                                            <option <?php if($row->baut_kanan == 'Peyot'){ echo 'selected'; } ?> value="Peyot">Peyot</option> 
                                                            <option <?php if($row->baut_kanan == 'Rusak'){ echo 'selected'; } ?> value="Rusak">Rusak</option> 
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Busa</label>
                                                        <input type="text" class="form-control" name="busa" placeholder="Busa" value="<?php echo @$row->busa ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Jumlah</label>
                                                        <input type="text" class="form-control" name="jumlah" placeholder="Jumlah" value="<?php echo @$row->jumlah ?>" disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <input type="text" class="form-control" name="status" placeholder="Status" value="<?php echo @$row->status ?>" disabled>
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
                url : "<?php echo base_url('admin/Users/detail') ?>",  
                cache :false,
                data: $(this).serialize(),
                dataType: 'json',
                success : function(data) {
                    if (data.msg == 'success') {
                        $('.sukses_menyimpan').click();
                        setTimeout(function(){
                            window.location = "<?php echo base_url('admin/users/detail') ?>";
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