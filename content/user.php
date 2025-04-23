<?php
// session_start();
// include "../function.php";

// $c = mysqli_connect("localhost", "username", "password", "database_name"); / ini buat ngambil data dari database
$addUser =  mysqli_query($c, "SELECT * FROM users ORDER BY id DESC");
$users1 = mysqli_fetch_all($addUser, MYSQLI_ASSOC);

// buat delete
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($conn, "DELETE FROM customers WHERE id = '$id'");
    header("location:?page=customer&notif=success");
}


// if isset()
?>
 
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data User</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $no = 1;
                foreach($users1 as $user): ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['email'] ?></td>
                        <td>
                        <a href="?page=add-user&edit=<?php echo $row['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                        <a href="?page=user&delete=<?php echo $row['id'] ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>