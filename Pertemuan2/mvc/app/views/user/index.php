<h2>Daftar User</h2>
<a href="/User/add">+ Tambah User</a>
<table border="1" cellpadding="8">
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($data['users'] as $user): ?>
        <tr>
            <td><?= $user['id']; ?></td>
            <td><?= $user['nama']; ?></td>
            <td><?= $user['email']; ?></td>
            <td>
                <a href="/User/edit/<?= $user['id']; ?>">Edit</a> |
                <a href="/User/delete/<?= $user['id']; ?>" onclick="return confirm('Yakin?')">Hapus</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>