<?php require 'inc/head.php'; ?>
<?php require 'inc/data/products.php'; ?>
<?php
if (empty($_SESSION['login'])) {
    header("location: login.php");
    exit();
}
if (isset($_POST['logout'])) {
    session_destroy();
    exit();
}
$quantities = array_count_values($_SESSION['card']);


?>

    <section class="cookies container-fluid">
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th>Réf</th>
                    <th>Product</th>
                    <th>Quantité</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($_SESSION['card'] as $productID) { ?>
                    <tr>
                        <td><?= $productID; ?></td>
                        <td><?= $catalog[$productID]['name']; ?></td>
                        <td><?= $quantities[$productID]; ?></td>
                    </tr>
                <?php } ?>

                </tbody>
            </table>
        </div>
        <div>
            <form action="#" method="post">
                <button class="btn btn-primary" name="logout">
                    <span class="glyphicon glyphicon" aria-hidden="true"> logout </span>
                </button>
            </form>
        </div>
    </section>

<?php require 'inc/foot.php'; ?>