<?php
// Koneksi ke database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'web2';
$conn = new mysqli($host, $user, $password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Fungsi untuk menghapus data
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM students WHERE id=$id");
    header('Location: index.php');
}

// Ambil semua data mahasiswa
$result = $conn->query("SELECT * FROM students");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            color: white;
        }
        .btn-edit {
            background-color: #3498db;
        }
        .btn-delete {
            background-color: #e74c3c;
        }
    </style>
</head>
<body>
    <h1>Halaman Admin/Back-end</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Opsi</th>
                <th>Potret Wajah</th>
                <th>Nama</th>
                <th>Alamat E-mail</th>
                <th>Jurusan</th>
                <th>Universitas</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn btn-edit">Ubah</a>
                        <a href="?delete=<?php echo $row['id']; ?>" class="btn btn-delete" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                    </td>
                    <td><img src="<?php echo $row['photo']; ?>" alt="Foto" width="50"></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['major']; ?></td>
                    <td><?php echo $row['university']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</body>
</html>
