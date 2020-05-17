<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Codeigniter 4 users list</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">

    <a href="<?= site_url('users/create') ?>" class="btn btn-success">Create</a>
    <?php if(isset($_SESSION['msg'])): ?>
        <?= $_SESSION['msg']; ?>
    <?php endif;  ?>


    <div class="row mt-3">

        <table class="table table-bordered" id="users">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if($users): ?>
                <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['id'] ?></td>
                    <td><?= $user['name'] ?></td>
                    <td><?= $user['email']?></td>
                    <td><a href="<?= base_url('users/edit/'.$user['id']) ?>"  class="btn btn-success">Edit</a>

                    <a href="<?= base_url('users/delete/'.$user['id']) ?>"  class="btn btn-success">Delete</a>
                    </td>
                </tr>
                <?php endforeach; ?>
                <?php endif; ?>
            </tbody>

        </table>

    </div>

</div>
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>

<script>
$(document).ready(function(){
    $('#users').DataTable();
});
</script>
</body>
</html>