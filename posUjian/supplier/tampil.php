<div class="content">
    <div class="row">
        <a href="?m=supplier&s=tambah" class="btn btn-info btn-large">Tambah Supplier</a>
        <h2>Modul supplier</h2>
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr class="table-primary">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Kontak</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody> 
                <?php 
                include_once('koneksi.php');
                $sql ='SELECT * FROM supplier';
                $query = mysqli_query($koneksi, $sql);
                    $no = 1;
                    while ($r = mysqli_fetch_assoc($query)) {
                        echo "<tr>";
                        echo "<td>$no</td>";
                        echo "<td>" . $r['nama'] . "</td>";
                        echo "<td>" . $r['alamat'] . "</td>";
                        echo "<td>" . $r['kontak'] . "</td>";
                    
                        echo '<td><a href="?m=supplier&s=edit&id=' . $r['id'] . '" class="btn btn-sm btn-warning">Edit</a>&nbsp;
                        <a href="?m=supplier&s=hapus&id=' . $r['id'] . '" onclick="return confirm(\'Menghapus supplier akan menghilangkan SEMUA data supplier yang ada pada siswa tersebut, yakin supplier ini akan dihapus?\')" class="btn btn-sm btn-danger">Hapus</a></td>';
                        echo "</tr>";
                        $no++;
                    }
                    
                


                ?>
        </table>
    </div>
</div>