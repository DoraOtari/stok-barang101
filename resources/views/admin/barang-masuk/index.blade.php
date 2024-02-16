<x-bootstrap5>
    <div class="my-2">
        @if (session('pesan'))
            <div class="alert alert-info" role="alert">
                <strong><i class="bi bell"></i></strong> {{ session('pesan') }}
            </div>
        @endif
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                <i class="bi-box"></i>
                Data barang masuk
            </h4>
            <hr>
            <div class="table-responsive">
                <table class="table" id="example">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Qty Masuk</th>
                            <th>Supplier</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        @foreach ($list_barang_masuk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->qty_masuk }}</td>
                                <td>{{ $item->supplier }}</td>
                                <td>{{ $item->harga }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-dark shadow float-end" href="{{ url('tambah-produk') }}" role="button">
                    <i class="bi-plus"></i> Tambah
                </a>

            </div>
        </div>
    </div>
</x-bootstrap5>
