<?php
session_start();

include_once("header.php");
?>

<body class="mx-8">
    <h1 class="font-bold text-5xl mt-4 mb-8">Adding New Item</h1>

    <form action="check_menu.php" method="POST" class="mx-4">
        Name of Item <br> <input type="text" name="name" class="min-w-full border rounded-md px-2 dark:border-neutral-500 focus:bg-slate-50" required><br>
        Price <br> <input type="number" name="price" class="min-w-full border rounded-md px-2 dark:border-neutral-500 focus:bg-slate-50" required><br>
        Description<br><textarea name="desc" class="min-w-full h-24 border rounded-md px-2 dark:border-neutral-500 focus:bg-slate-50" required></textarea><br>
        <input type="radio" name="type" value="food" required>
        <label for="food" class="mr-8">Food</label>
        <input type="radio" name="type" value="drink">
        <label for="drink">Drink</label> <br>
        <input type="submit" name="submit" class="mt-4 px-4 py-2 bg-sky-500 hover:bg-sky-700 duration-200 rounded-md hover:rounded-lg hover:text-slate-200">
    </form>

</body>
</html>