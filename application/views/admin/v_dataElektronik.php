<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>Data Master Status</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Elektronik</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Modal Tambah -->
    <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form method="POST" action="<?php echo base_url();?>Admin/simpan" enctype="multipart/form-data">
            <div class="modal-body">
              <!-- Thumbnail -->
                <div class="form-group">
                    <label for="">Thumbnail<span style ="color :red;">*</span> </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fa-sharp fa-solid fa-id-card fa-xs"></i></span>
                        </div>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="thumbnail">
                          <label class="custom-file-label" for="inputGroupFile01">Upload Thumbnail</label>
                        </div>
                    </div>
                </div>
                <!-- Kategori Produk -->
                 <div class="form-group">
                    <label for="">Kategori Produk<span style ="color :red;">*</span> </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fa-sharp fa-solid fa-id-card fa-xs"></i></span>
                        </div>
                         <select name="kategori" class="form-control">
                            <option selected>Silahkan Pilih</option>
                            <option value="Iphone 13 Pro">Iphone</option>
                            <option value="Samsung X Flip">Samsung</option>
                            <option value="Xiaomi Redmi Note 11 Pro">Xiaomi</option>
                        </select>
                    </div>
                  </div>
                <!-- Kategori Produk -->
                <div class="form-group">
                    <label for="nama">Nama Produk<span style ="color :red;">*</span> </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fa-sharp fa-solid fa-id-card fa-xs"></i></span>
                        </div>
                        <input type="text" class="form-control" name="produk" placeholder="Masukan Nama Produk">
                    </div>
                </div>
                <!-- No telp -->
                <div class="form-group">
                    <label for="telp">Harga Produk<span style ="color :red;">*</span> </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fa-sharp fa-solid fa-id-card fa-xs"></i></span>
                        </div>
                        <input type="text" class="form-control" name="harga" placeholder="Masukan Harga Produk">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
        </form>
        </div>
    </div>
    </div>

    <!-- Modal Edit -->
    <?php
        foreach($mData as $row)
      {
    ?>
      <div class="modal fade" id="modalEdit<?php echo $row->id;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content" style="width:750px;">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Edit Data Elektronik</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" action="<?php echo site_url() . '/admin/updateData' ?>" method="post" enctype="multipart/form-data">
                <div class="card" style="width: 15rem; position: relative; left: 250px;">
                    <img class="card-img-top" src="<?php echo base_url();?>assets/upload/<?php echo $row->thumbnail ?>" alt="Gambar Produk">
                    <div class="card-body">
                      <p class="card-text text-center">File type: jpg, png, jpeg <br/> Max size:1MB</p>
                    </div>
                  </div>
                <!-- Thumbnail -->
                <div class="form-group">
                  <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
                    <label for="">Thumbnail<span style ="color :red;">*</span> </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fa-sharp fa-solid fa-id-card fa-xs"></i></span>
                        </div>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="thumbnail">
                            <label class="custom-file-label" for="inputGroupFile01">Upload Thumbnail</label>
                        </div>
                      </div>
                    </div>
                  <!-- Kategori Produk -->
                  <div class="form-group">
                    <label for="">Kategori Produk<span style ="color :red;">*</span> </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fa-sharp fa-solid fa-id-card fa-xs"></i></span>
                        </div>
                          <select name="kategori" class="form-control">
                            <option value="<?php echo $row->kategori; ?>"><?php echo $row->kategori; ?></option>
                            <option value="Iphone 13 Pro">Iphone</option>
                            <option value="Samsung X Flip">Samsung</option>
                            <option value="Xiaomi Redmi Note 11 Pro">Xiaomi</option>
                        </select>
                    </div>
                  </div>
                <!-- Nama Produk -->
                  <div class="form-group">
                    <label for="nama">Nama Produk<span style ="color :red;">*</span> </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fa-sharp fa-solid fa-id-card fa-xs"></i></span>
                        </div>
                        <input type="text" class="form-control" name="produk" placeholder="Masukan Nama Produk" value="<?php echo $row->produk; ?>">
                    </div>
                </div>
                <!-- Harga Produk -->
                <div class="form-group">
                    <label for="telp">Harga Produk<span style ="color :red;">*</span> </label>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-success text-white" id="basic-addon1"><i class="fa-sharp fa-solid fa-id-card fa-xs"></i></span>
                        </div>
                        <input type="text" class="form-control" name="harga" placeholder="Masukan Harga Produk" value="<?php echo $row->harga; ?>">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                <button type="submit" class="btn btn-success">Simpan</button>
            </div>
	  </form>
    </div>
  </div>
</div>
<?php } ?>

<!-- Modal Hapus -->
	<?php 
	foreach($mData as $row)
	{
	?>
	<div class="modal fade" id="modalHapus<?php echo $row->id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data Elektronik</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
	  <form class="form-horizontal" action="<?php echo site_url() . '/admin/hapusData' ?>" method="post" enctype="multipart/form-data">
      <div class="modal-body">
		 <input type="hidden" name="id" value="<?php echo $row->id; ?>" />
		 <input type="hidden" name="thumbnail" value="<?php echo $row->thumbnail; ?>" />
		<p>Apakah anda yakin akan menghapus data ?</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark" data-dismiss="modal">Tutup</button>
        <button type="submit" class="btn btn-danger">Hapus</button>
      </div>
		</form>
    </div>
  </div>
</div>
<?php
	}
?>


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">

            <div class="card">
                <?php 
                if($this->session->flashdata('error') !='')
                {
                echo '<div class="alert alert-danger" role="alert">';
                echo $this->session->flashdata('error');
                echo '</div>';
                }
                if($this->session->flashdata('success_insert') !='')
                {
                echo '<div class="alert alert-info" role="alert">';
                echo $this->session->flashdata('success_insert');
                echo '</div>';
                }
                if($this->session->flashdata('success_update') !='')
                {
                echo '<div class="alert alert-info" role="alert">';
                echo $this->session->flashdata('success_update');
                echo '</div>';
                }
                if($this->session->flashdata('success_delete') !='')
                {
                echo '<div class="alert alert-info" role="alert">';
                echo $this->session->flashdata('success_delete');
                echo '</div>';
                }
                ?>
              <div class="card-header">
                <h3 class="card-title">Data Elektronik</h3>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-success mb-3 float-right" data-toggle="modal" data-target="#modalTambah">
                Tambah Data
                </button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Thumbnail</th>
                    <th>Kategori</th>
                    <th>Produk</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php 
                    $no = 1;
                    foreach($mData as $row)
                    {
                    ?>
                    <tr>
                    <th scope="row"><?php echo $no++;?></th>
                    <td><img src="<?php echo base_url();?>assets/upload/<?php echo $row->thumbnail ?>" alt="Gambar" width="100" height="100" /></td>
                    <td><?php echo $row->kategori;?></td>
                    <td><?php echo $row->produk;?></td>
                    <td><?php echo $row->harga;?></td>
                    <td>
                        <a class="btn btn-info"   data-toggle="modal" data-target="#modalEdit<?php echo $row->id; ?>"><i class="fa fa-pencil"></i> Edit</a> |
                        <a class="btn btn-danger" data-toggle="modal" data-target="#modalHapus<?php echo $row->id; ?>"><i class="fa fa-trash"></i> Hapus</a>
                    </td>
                    </tr>
                    </tfoot>
                <?php } ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script>
    $(document).ready(function () {
        // Menangkap perubahan file pada input
        $('.custom-file-input').on('change', function () {
            // Ambil nama file yang diupload
            var fileName = $(this).val().split('\\').pop();
            // Setel nama file di label
            $(this).next('.custom-file-label').html(fileName);
        });
    });

  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      dom :
      "<'row'<'col-md-3'l><'col-md-6'B><'col-md-3'f>>" +
      "<'row'<'col-md-12'tr>>" +
      "<'row'<'col-md-5'i><'col-md-7'p>>"
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>
