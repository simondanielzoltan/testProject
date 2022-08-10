<?php include "view/header.php"?>

<h3 class="p-4">Ads</h3>
<div class="container">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">User Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ads as $ad) {?>
                <tr>
                    <th scope="row"><?php echo $ad->id ?></th>
                    <td><?php echo $ad->title ?></td>
                    <td><?php echo $ad->userName ?></td>
                </tr>
            <?php }?>
        </tbody>
    </table>
</div>

<?php include "view/footer.php"?>
