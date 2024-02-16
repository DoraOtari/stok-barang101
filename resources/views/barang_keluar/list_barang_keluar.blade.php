<x-bootstrap5>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">List Barang Keluar</h4>
            <hr>
            <div class="table-responsive">
                <table  class="table table-borderless">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Barang</th>
                            <th>Qty Keluar</th>
                            <th>Harga Jual</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($list_barang_keluar as $item)
                            <tr>
                                <td>{{ $loop->iteration }}.</td>
                                <td>{{ $item->nama_barang }}</td>
                                <td>{{ $item->qty_keluar }} Pcs</td>
                                <td>Rp. {{ number_format($item->harga_jual,2,',','.')  }}</td>
                            </tr>
                            
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-bootstrap5>
