<?php declare(strict_types=1);
include_once("header.php");
?>
    <main>
        <form class="main-form" action="get-data.php" method="post">
            <h3>Formulár</h3>
            <label for="name">
                Meno
                <input type="text" name="name" id="name">
            </label>
            <button type="submit">Odoslať</button>
        </form>
        <br>
        <br>
        <h1>List of all users here</h1>
    </main>
<?php
include_once("footer.php");