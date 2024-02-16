<x-bootstrap5>
    <div class="card">
        <div class="card-body">
            <div class="hstack">
                <h4 class="card-title">Data Pengguna</h4>
                <a class="btn btn-primary ms-auto" href="{{ url('register') }}" role="button">
                    <i class="bi-plus"></i> Add
                </a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Username</th>
                            <th>email</th>
                            <th>Hapus</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <tr>
                            <td>R1C1</td>
                            <td>R1C2</td>
                            <td>R1C3</td>
                            <td>R1C3</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</x-bootstrap5>
