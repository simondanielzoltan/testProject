<?php include "view/header.php"?>

<h3 class="p-4">Users</h3>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user) {?>
                <tr>
                    <th scope="row"><?php echo $user->id ?></th>
                    <td><?php echo $user->name ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<?php include "view/footer.php"?>
