<x-bootstrap5>
    <div class="card border-0">
        <div class="card-body">
            <h4 class="card-title"><i class="bi-box"></i> Form tambah produk</h4>
            <form action="{{ url('tambah-produk') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label text-capitalize">Kode Barang</label>
                    <input type="text" class="form-control" name="kode_barang" placeholder="masukan kode Barang" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-capitalize">nama barang</label>
                    <input type="text" class="form-control" name="nama_barang" placeholder="masukan nama barang" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-capitalize">qty masuk</label>
                    <input type="number" class="form-control" name="qty_masuk" placeholder="masukan qty masuk" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-capitalize">harga produk</label>
                    <input type="number" class="form-control" name="harga" placeholder="masukan harga produk" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-capitalize">rating produk</label>
                    <input type="number" class="form-control" name="rating" placeholder="masukan rating produk" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-capitalize">supplier</label>
                    <input type="text" class="form-control" name="supplier" placeholder="masukan supplier" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label text-capitalize">foto produk</label>
                    <input type="file" class="form-control" name="foto_produk" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Deskripsi Produk</label>
                    <textarea class="form-control" name="deskripsi" rows="5"></textarea>
                </div>
                <button type="submit" class="btn btn-light shadow float-end rounded-pill border-dark">
                    <i class="bi-send"></i> Submit
                </button>

            </form>
        </div>
    </div>

</x-bootstrap5>
