<?php require 'partials/header.php'; ?>

    <h1>Submit your details!</h1>
    <form action="/users" method="POST">
        First name: <br>
        <input type="text" name="firstname"><br>
        Last name: <br>
        <input type="text" name="lastname"><br>
        <br>
        Gender: <br>
        <label>
            <input type="radio" name="gender" value="male">  Male<br>
        </label>
        <label>
            <input type="radio" name="gender" value="female">  Female<br>
        </label>
        <label>
            <input type="radio" name="gender" value="other">  Other?<br>
        </label>
        <br>
        Age: <br>
        <input type="integer" name="age"><br>
        <br>
        <button>Submit</button>
    </form>

    <h3>Current users:</h3>
<?php foreach($users as $user) : ?>
        <li><?= "$user->firstname $user->lastname"; ?></li>
<?php endforeach; ?>

<?php require 'partials/footer.php'; ?>

