<div class="container-fluid">

    <?php echo $this->session->flashdata('message'); ?>

    <!-- Basic Card Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pembayaran Pendaftaran</h6>
        </div>

        <div class="card-body">
            <?= form_open_multipart('pembayaran/simpan_pembayaran/' . $pendaftaran[0]['ID_PENDAFTARAN']); ?>

            <label class="col-form-label">Silakan lakukan pembayaran biaya pendaftaran ke rekening berikut:<br>
                <strong>Bank JATIM</strong><br>
                Nomor rekening: <strong>0022851314</strong><br>
                Atas nama: <strong>TK DHARMA WANITA 91 PESANGGARAN</strong></label><br>
                Nominal: Rp.100.000
            <br>
            <br>
            <div class="form-group row">
                <label for="desc" class="col-sm-4 col-form-label">Tujuan Pembayaran</label>
                <div class="col-sm-8">
                    <input type="text" name="tujuan" class="form-control" id="tujuan" placeholder="Masukan tujuan rekening pembayaran">
                </div>
            </div>
            <div class="form-group">
                <div class="row">
                    <div class="col-sm-4">
                        <label for="tgl_bayar">Tanggal Pembayaran</label>
                    </div>
                    <div class="col">
                        <input class="form-control <?php echo form_error('tgl_bayar') ? 'is-invalid' : '' ?>" type="date" name="tgl_bayar" placeholder="Pilih tanggal pembayaran" />

                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="nama_pengirim" class="col-sm-4 col-form-label">Nama Rekening Pengirim</label>
                <div class="col-sm-8">
                    <input type="text" name="nama_pengirim" class="form-control" id="nama_pengirim" placeholder="Masukan Nama rekening pengirim">
                </div>
            </div>
            <div class="form-group row">
                <label for="nomor_pengirim" class="col-sm-4 col-form-label">Nomor Rekening Pengirim</label>
                <div class="col-sm-8">
                    <input type="number" name="nomor_pengirim" class="form-control" id="nomor_pengirim" placeholder="Masukan Nomor rekening pengirim">
                </div>
            </div>
            <div class="form-group row">
                <label for="nominal" class="col-sm-4 col-form-label">Nominal</label>
                <div class="col-sm-8">
                    <input type="number" name="nominal" class="form-control" id="nominal" placeholder="Masukan nominal yang dikirim">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4">
                    <label for="bukti_bayar" class="col-form-label">Bukti Pembayaran</label>
                </div>
                <div class="col-sm-8">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" value="" for="image">Pilih gambar</label>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4"></div>
                <div class="col-sm-8 align-self-end">
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                        BAYAR
                    </button>
                </div>
            </div>
            </form>
        </div>
    </div>

  