<!-- Page body start -->
<div class="page-body">
    <div class="row">
        <div class="col-sm-12">
            <!-- Basic Form Inputs card start -->
            <div class="card">
                <div class="card-header">
                    <h4>Form Peminjaman Barang</h4>
                    <i class="icofont icofont-spinner-alt-5"></i>
                    <div class="card-header-right">
                    </div>

                </div>
                <div class="card-block">
                    <h4 class="sub-title"></h4>
                    <form action="<?= base_url('peminjaman/update_data')?>" method="post">
                    <?php
                       $message = $this->session->flashdata('message');

                       if($message == "success"){
                  ?>
                           <script>alert('berhasil merubah data')</script>
                  <?php
                       };
                  ?>  
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="id" value="<?= $_GET['id'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Peminjam</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_peminjam">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Barang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="nama_barang">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Masa Peminjaman</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="masa_peminjaman">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Waktu Peminjaman</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="waktu_peminjaman">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Waktu Pengembalian</label>
                            <div class="col-sm-10">
                                <input type="date" class="form-control" name="waktu_pengembalian">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2">Submit</button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
            <!-- Input Alignment card end -->
        </div>
    </div>
</div>
<!-- Page body end -->
</div>
</div>
<!-- Main-body end -->