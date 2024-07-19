<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>UTS Tambah Data Stok Barang - Pemrograman Web 2</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="js/style.js"></script>
</head>
  
  <body>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
						<h2>Stok <b>Barang</b></h2>
					</div>
					<div class="col-sm-6">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Tambahkan Stok Barang</span></a>
						<!-- <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Delete</span></a>	-->					
					</div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>						
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
						<th>Deskripsi</th>                        
                        <th>Kategori</th>
                        <th>Stok Tersedia</th>
                        <th>Harga Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penyimpanan as $item)
                    <tr>
						
                        <td>{{$item->id}}</td>
                        <td>{{$item->nama_barang}}</td>
                        <td>{{$item->deskripsi}}</td>
                        <td>{{$item->kategori}}</td>
                        <td>{{$item->stok_tersedia}}</td>
                        <td>{{$item->harga_satuan}}</td>
                        
                    </tr>
                    @endforeach
                    @if ($penyimpanan->count() == 0)
                        <tr>
                            <td colspan="6" class="text-center">Tidak ada data!</td>
                        </tr>
                    @endif
                </tbody>
            </table>
			
            <div class="clearfix">
                <div class="hint-text">Projek <b>UTS</b> Nama: <b>Muhamad Abdul Rosyid</b> D112331022</div>
                
            </div>
        </div>
    </div>

	<!-- Tambah Data -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form method="POST" action="/add">
                    @csrf
					<div class="modal-header">						
						<h4 class="modal-title">Tambah Stok Barang</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">					
						<div class="form-group">
							<label>ID Barang</label>
							<input type="text" class="form-control" name="id" id="id" required>
						</div>
						<div class="form-group">
							<label>Nama Barang</label>
							<input type="text" class="form-control" name="nama_barang" id="nama_barang" required>
						</div>
						<div class="form-group">
							<label>Deskripsi</label>
							<textarea class="form-control" name="deskripsi" id="deskripsi"></textarea>
						</div>
                        <div class="form-group">
							<label>Stok Tersedia</label>
							<input type="text" class="form-control" name="stok_tersedia" id="stok_tersedia" required>
						</div>
                        <div class="form-group">
							<label>Harga Satuan</label>
							<input type="text" class="form-control" name="harga_satuan" id="harga_satuan" required>
						</div>
                        <div>
							<label>Kategori</label><br>
							<input type="radio" class="form-check-input" name="kategori" id="kategori1" value="Sepatu" checked>
                            <label class="form-check-label" for="kategori1">Sepatu</label><br>
                            <input type="radio" class="form-check-input" name="kategori" id="kategori2" value="Pakaian">
                            <label class="form-check-label" for="kategori2">Pakaian</label><br>
                            <input type="radio" class="form-check-input" name="kategori" id="kategori3" value="Aksesoris">
                            <label class="form-check-label" for="kategori3">Aksesoris</label>
						</div>					
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input type="submit" name="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>