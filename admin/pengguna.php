        <?php include("header.php") ?>
        <h1>Halaman Pengguna</h1>
        <form class="row g-3" method="get">
            <div class="col-auto">
                <input type="text" class="form-control" placeholder="Masukkan ID Pengguna" name="idpengguna" value="<?php echo isset($_GET['idpengguna']) ? $_GET['idpengguna'] : ''; ?>">
            </div>
            <div class="col-auto">
                <input type="submit" name="cari" value="cari ID Pengguna" class="btn btn-secondary"
                    </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="col-1">#</th>
                    <th>ID Pengguna</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Password</th>
                    <th>Nomor Handphone</th>
                    <th>aksi</th>
                </tr>
            </thead>
            <tbody>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>1</td>
                <td>
                    <span class="badge text-bg-danger">Hapus</span>
                    <span class="badge text-bg-warning">Edit</span>
                </td>
            </tbody>

        </table>
        <?php include("footer.php") ?>