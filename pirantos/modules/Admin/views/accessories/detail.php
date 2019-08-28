<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
    integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
</script>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.css">
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/theme/monokai.css">
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/codemirror.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/3.20.0/mode/xml/xml.js"></script>
<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/codemirror/2.36.0/formatting.js"></script>
<link href="<?php echo base_url() ?>prabotan/admin/plugins/summernote/summernote.css" rel="stylesheet">
<section class="pcoded-main-container">
    <div class="pcoded-wrapper">
        <div class="pcoded-content">
            <div class="pcoded-inner-content">
                <div class="page-header">
                    <div class="page-block">
                        <div class="row align-items-center">
                            <div class="col-md-12">
                                <div class="page-header-title">
                                    <h5 class="m-b-10">Accessories</h5>
                                </div>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">
                                            <i class="feather icon-user"></i></a></li>
                                    <li class="breadcrumb-item"><a href="javascript:">Accessories</a></li>
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
                                        <h5>Detail Accessories</h5>
                                        <a href="<?php echo base_url('admin/accessories/add') ?>"
                                            class="btn shadow-2 btn-success pull-right">Add</a>
                                        <a href="<?php echo base_url('admin/accessories/data') ?>"
                                            class="btn shadow-2 btn-primary pull-right">Data</a>
                                    </div>
                                    <?php 
                                    $id = $this->uri->segment(4);
                                    $this->db->where('id', $id);
                                    $row = $this->db->get('kimochi_product.data_accessories')->row();
                                    ?>
                                    <form id="input_data">
                                        <div class="card-block">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <br>
                                                    <label for="">Image</label>
                                                    <br>
                                                    <img src="<?= base_url('prabotan/image/accessories/'.$row->img) ?>"
                                                        alt="" id="preview" style="width:60%; margin:20px auto;">
                                                    <br><br>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Nama Accessories</label> 
                                                        <input type="text" class="form-control" name="nama_accessories" value="<?php echo @$row->nama_accessories ?>"placeholder="Nama Accessories" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Kategori</label> 
                                                        <input type="text" class="form-control" name="kategori" value="<?php echo @$row->kategori ?>" placeholder="Kategori" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Jenis</label> 
                                                        <input type="text" class="form-control" name="jenis" value="<?php echo @$row->jenis ?>" placeholder="Jenis" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Merk</label> 
                                                        <input type="text" class="form-control" name="merk" value="<?php echo @$row->merk ?>" placeholder="Merk" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Harga Pokok</label> 
                                                        <input type="text" class="form-control" name="harga_pokok" value="<?php echo @$row->harga_pokok ?>" placeholder="Harga Pokok" required disabled>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <label>Harga Jual</label> 
                                                        <input type="text" class="form-control" name="harga_jual" value="<?php echo @$row->harga_jual ?>" placeholder="Harga Jual" required disabled>
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
</section>
<script src="<?php echo base_url() ?>prabotan/admin/plugins/summernote/summernote.js"></script>
<script type="text/javascript">
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

    $(function () {
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
            success: function (url) {
                $('.summernote').summernote("insertImage", url);
            }
        });

    }

    $('#input_data').on('submit', function (e) {
        $('.loading').hide();
        $.ajax({
            type: "post",
            url: "<?php echo base_url('admin/Users/detail') ?>",
            cache: false,
            data: $(this).serialize(),
            dataType: 'json',
            success: function (data) {
                if (data.msg == 'success') {
                    $('.sukses_menyimpan').click();
                    setTimeout(function () {
                        window.location = "<?php echo base_url('admin/users/detail') ?>";
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

</script>
