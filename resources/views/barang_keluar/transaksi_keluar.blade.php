<x-bootstrap5>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Transaksi Keluar</h4>
            <form action="{{ url('cari/produk') }}" method="get">
                <div class="mb-3">
                    
                    <input type="text" class="form-control" name="nama_barang" placeholder="masukan nama barang"
                        list="barang" />
                    @foreach ($listBarang as $item)
                        <datalist id="barang">
                            <option value="{{ $item->nama_barang }}">
                        </datalist>
                    @endforeach
                </div>
                <button type="submit" class="btn btn-dark float-end">
                    <i class="bi-search"></i> Cari
                </button>
            </form>
            @isset($barang)
                <div class="row">
                    <div class="col">
                        <img src='{{ asset("storage/$barang->foto_produk") }}' class="img-fluid" width="200">
                    </div>
                    <div class="col">
                        <div class="vstack">
                            <b>Nama: {{ $barang->nama_barang }}</b>
                            <b>Sisa Stok: {{ $barang->qty_masuk }}</b>
                            <b>Supplier : {{ $barang->supplier }}</b>
                            @php $harga_jual = $barang->harga + ($barang->harga * 0.5) @endphp
                            <b>Harga Beli: Rp. {{ number_format($barang->harga, 2, ',', '.') }}</b>
                        </div>
                    </div>
                </div>
            @endisset
            <hr>
            <h3 class="text-center">Transaksi Keluar</h3>
            <form action="{{ url('transaksi/keluar') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">Nama Barang</label>
                    <input type="text" name="nama_barang" value="{{ $barang->nama_barang ?? '-' }}" readonly
                        class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Jumlah Beli</label>
                    <input type="number" onkeyup="HitungTotal()" name="jumlah_beli" id="jumlah" class="form-control"
                        placeholder="Masukan jumlah beli">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Harga Jual</label>
                    <input type="number" name="harga_jual" id="harga" class="form-control"
                        value="{{ $harga_jual ?? 0 }}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Total Bayar</label>
                    <input type="text" name="total_bayar" id="total" class="form-control form-control-lg"
                        readonly>
                </div>
                <button type="submit" class="btn btn-primary float-end">
                    Submit
                </button>

            </form>
        </div>
    </div>
    <script>
        var jumlah = document.getElementById("jumlah");
        var harga = document.getElementById("harga");
        var total = document.getElementById("total");

        function HitungTotal() {
            total.value = jumlah.value * harga.value;
        }
    </script>
</x-bootstrap5>
