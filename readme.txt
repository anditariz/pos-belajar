Bikin koneksi, jangan lupa session start di file connection.php
Bikin variabel untuk koneksi $conn = new mysqli($servername, $username, $password, $dbname);

Login nya jangan lupa pake if isset 
if (isset($_POST['login'])) {
    $username = $_POST['username']; $password = $_POST['password'];

    bikin variabel check
    $check = mysqli_query($variabel koneksi,"SELECT * FROM users WHERE username='$username' AND password='$password'");

    bikin variabel hitung
    $count = mysqli_num_rows($check);
    if ($count > 0) {
        <!--  -->
    }
}

// $c = mysqli_connect("localhost", "username", "password", "database_name"); / ini buat ngambil data dari database
$addUser =  mysqli_query($c, "SELECT * FROM users ORDER BY id DESC");
$users = mysqli_fetch_all($addUser, MYSQLI_ASSOC);

// buat delete
if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete = mysqli_query($conn, "DELETE FROM customers WHERE id = '$id'");
    header("location:?page=customer&notif=success");
}

buat nampilin di view jangan lupa pake 
<?php $no = 1 foreach ($vartable as $variabel nilai):  ?> INI BUAT ISI TAMPILANNYA 
buat nampilin nomor : <?php echo $no++ ?>
buat nampilin data <?= $variabel ['nama-tabel di DB'] ?>
<?php endforeach ?>