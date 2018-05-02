<?php
    foreach ($member as $data)
    {
?>        
        
        <div class="content">
            <form action="<?= base_url(); ?>eyemarket" class="form_basic">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label> Pilih Alamat </label>
                    <?php 
                        if ($jumlah < 4)
                        {
                    ?>
                            <a id="tambah-alamat" style="float: right; cursor: pointer;"> Tambah Alamat </a>
                    <?php
                        }
                    ?>
                            
                            <select name="pilih_alamat" id="pilih-alamat" class="form-control" required="required">
                                <option value="">Pilih Alamat Anda</option>
                <?php
                    if (isset($address) && !empty($address))
                    {
                        foreach ($address as $key => $alamat)
                        {
                ?>
                                <option value="<?= $alamat['id']; ?>" id="<?= $key; ?>"><?= $alamat['nama']; ?></option>
                <?php
                        }
                    }
                    else
                    {
                ?>
                                <option value="">Belum Ada Data Alamat</option>
                <?php
                    }
                ?>    
                            </select>
                        </div>
                    </div>
                </div>
            
        <?php
            foreach ($address as $key => $alamat)
            {
        ?>
                <div class="alamat-<?= $key; ?>" style="display: none;">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="firstname">Nama Lengkap Penerima</label>
                                <input type="text" class="form-control" id="firstname" value="<?= $alamat['penerima']; ?>" disabled="disabled">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="phone">Handphone</label>
                                <input type="text" class="form-control" id="phone" value="<?= $alamat['hp'] ?>" disabled="disabled">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea id="alamat" class="form-control" disabled="disabled"><?= $alamat['alamat']; ?></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label for="zip">Kode Pos</label>
                                <input type="number" id="kodepos" class="form-control" value="<?= $alamat['kodepos']; ?>" disabled="disabled">
                            </div>
                        </div>
                    </div>
                </div>
        <?php        
            }
        ?>
                <div class="box-footer">
                    <div class="pull-left">
                        <a href="<?=base_url(); ?>eyemarket/view_keranjang/<?= $id_member; ?>" class="btn btn-default"><i class="fa fa-chevron-left"></i>Kembali Ke Keranjang</a>
                    </div>
                    <div class="pull-right">
                        <button type="submit" class="btn btn-template-main" id="btn-next">Lanjut ke Metode Pengiriman<i class="fa fa-chevron-right"></i>
                        </button>
                    </div>
                </div>
                <input type="hidden" name="fn" value="order_address">
                <input type="hidden" name="id_member" value="<?= $id_member; ?>">
            </form>
        </div>
<?php        
    }
?>

<!-- Modal Form Tambah Alamat -->
<div class="modal fade" id="modalAlamat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="font-size: 14px;opacity: 1;">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="border: unset;">
            <div class="modal-header" style="margin-top: 50%;">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Alamat</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url(); ?>eyemarket" class="form_basic">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="nama_alamat">Simpan alamat sebagai</label>
                                <input type="text" name="nama_alamat" id="nama_alamat" value="" class="form-control" placeholder="Rumah 1 / Kantor / Rumah Kakek">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="penerima">Nama Lengkap Penerima</label>
                                <input type="text" name="penerima" id="penerima" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="hp">Handphone</label>
                                <input type="number" name="hp" id="hp" value="" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <textarea name="alamat" id="alamat" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group">
                                <select id="provinsi" name="provinsi" class="form-control form_change" action="eyemarket" fn="get_kota" loading="off" dest="opt-kota">
                                    <option value="">Pilih Provinsi</option>
                                    <?php
                                        foreach ($provinsi as $provinsinya)
                                        {
                                    ?>
                                            <option value="<?= $provinsinya['provinsi'] ?>">
                                                <?= $provinsinya['provinsi'] ?> 
                                            </option>
                                    <?php        
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group opt-kota">
                                <!-- <select id="kota" name="kota" class="form-control">
                                    <option value="">Pilih Kota</option>
                                </select> -->
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-4">
                            <div class="form-group opt-kecamatan">
                                <!-- <select id="kecamatan" name="kecamatan" class="form-control">
                                    <option value="">Pilih Kecamatan</option>
                                </select> -->
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-3">
                            <div class="form-group">
                                <label for="zip">Kode Pos</label>
                                <input type="number" name="kodepos" id="kodepos" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-9"></div>
                        <div class="col-sm-3">
                            <input type="submit" value="Simpan" class="btn btn-info">
                        </div>
                    </div>
                </div>
                <input type="hidden" name="fn" value="set_address">
                <input type="hidden" name="id_member" value="<?= $id_member; ?>">
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">
    $('#tambah-alamat').click(function()
    {
        $("#modalAlamat").modal();
    });

    $('select').on('change', function() {
        var id_address  = $(this).val();
        var id_form = $(this).find("option:selected").attr('id');

        if (id_form == "0")
        {
            $('.alamat-0').attr('style','display: block');
            $('.alamat-1').attr('style','display: none');
            $('.alamat-2').attr('style','display: none');
        }
        else
        if (id_form == "1")
        {
            $('.alamat-0').attr('style','display: none');
            $('.alamat-1').attr('style','display: block');
            $('.alamat-2').attr('style','display: none');
        }
        else
        if (id_form == "2")
        {
            $('.alamat-0').attr('style','display: none');
            $('.alamat-1').attr('style','display: none');
            $('.alamat-2').attr('style','display: block');
        }
        else
        {
            $('.alamat-0').attr('style','display: none');
            $('.alamat-1').attr('style','display: none');
            $('.alamat-2').attr('style','display: none');
        }
    });
</script>