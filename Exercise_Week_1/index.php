<?php
session_start();
include_once("menu_item.php");
include "drink.php";
include "food.php";
include_once("header.php");
?>

<body class="mx-8">
    <section>
        <h1 class="font-bold text-5xl m-4">
            Rizztaurant Menu
        </h1>
    </section>

    <section class="mx-8 mt-8 mb-4 flex px-8">
            <a href="form_menu.php" class="mx-8 p-2 bg-emerald-500 hover:bg-emerald-700 duration-200 rounded-md hover:rounded-lg hover:text-slate-200">Add Item</a><br>
            <a href="delete_menu.php" class="mx-8 p-2 bg-rose-500 hover:bg-rose-700 duration-200 rounded-md hover:rounded-lg hover:text-slate-200"> Delete All Items</a>
    </section>
    <section class="flex justify-center mx-8">
        <table class="min-w-full text-center mx-auto overflow-hidden">
            <tr class="border-b font-medium dark:border-neutral-500 bg-slate-300">
                <td>Name</td>
                <td>Type</td>
                <td>Price</td>
                <td>Final Price</td>
                <td>Description</td>
            </tr>
            <?php
            if (isset($_SESSION['full_menu'])) {
                $menu_bg = 1;
                $menu = unserialize($_SESSION['full_menu']);
                foreach ($menu as $menu_item) {
            ?>
                    <tr class="border-b font-medium dark:border-neutral-500 max-w-xs break-words
            <?php
                if($menu_bg%2 != 0){

                }else{
            ?>
                 bg-slate-100
            <?php
                }
            ?>
                    ">
                        <td><?= $menu_item->get_name(); ?></td>
                        <td><?= $menu_item->get_type(); ?></td>
                        <td>$<?= $menu_item->get_price(); ?></td>
                        <td>$<?= $menu_item->get_final_price(); ?></td>
                        <td><?= $menu_item->get_desc(); ?></td>
                    </tr>
                <?php
            $menu_bg += 1;
                }
            } else {
                ?>
                <tr>
                    <td colspan=5 class="text-xl font-bold">Your Menu Is Empty</td>
                </tr>
            <?php
            }
            ?>
        </table>
    </section>
</body>

</html>