<?php require 'partials/header.php'; ?>

<h1>Submit your details!</h1>
<form action="/details" method="POST">
    First name: <br>
    <input type="text" name="firstname" value="Nick"><br>
    Last name: <br>
    <input type="text" name="lastname" value="de Vries"><br>
    Gender: <br>
    <label>
        <input type="radio" name="gender" value="male" checked>Male<br>
    </label>
    <label>
        <input type="radio" name="gender" value="female">Female<br>
    </label>
    <label>
        <input type="radio" name="gender" value="other">Other?<br>
    </label>
    Age: <br>
    <input type="integer" name="age"><br>
    <button>Submit</button>
</form>

<h3>Current users:</h3>
<?php foreach($users as $user) : ?>
    <li><?= "$user->firstname $user->lastname"; ?></li>
<?php endforeach; ?>

<?php require 'partials/footer.php'; ?>
