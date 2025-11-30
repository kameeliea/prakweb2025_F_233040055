<h2>Edit User</h2>
<form method="POST">
    <input type="hidden" name="id" value="<?= $data['user']['id']; ?>">
    <label>Nama</label><br>
    <input type="text" name="nama" value="<?= $data['user']['nama']; ?>"><br>
    <label>Email</label><br>
    <input type="email" name="email" value="<?= $data['user']['email']; ?>"><br><br>
    <button type="submit">Update</button>
</form>