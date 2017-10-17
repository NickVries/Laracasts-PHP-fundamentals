<?php require 'partials/header.php'; ?>

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

<?php require 'partials/footer.php'; ?>
