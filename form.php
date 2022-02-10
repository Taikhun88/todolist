<!-- <pre>

<?php
print_r($_POST);
?>

</pre> -->

<form action="form.php" method="POST">
    <div>
        <label for="firstname">Prénom</label>
        <br>
        <input type="text" name="firstname" id="firstname">
    </div>
    <div>
        <label for="lastname">Nom</label>
        <br>
        <input type="text" name="lastname" id="lastname">
    </div>
    <div>
        <label for="date">Date</label>
        <br>
        <input type="date" name="date" id="date">
    </div>
    <div>
        <label for="email">Email</label>
        <br>
        <input type="email" name="email" id="email">
    </div>
    <div>
        <label for="femme">Femme</label>
        <input type="radio" name="gender" id="femme" value="femme">
        <label for="homme">Homme</label>
        <input type="radio" name="gender" id="homme" value="homme">
    </div>
    <div>
        <label for="cgu">Conditions générales de vente</label>
        <input type="checkbox" name="cgu" id="cgu">
    </div>
    <div>
        <label for="favorite">Favoris</label>
        <br>
        <select name="favorite" id="favorite">
            <option value="wifi">Wifi</option>
            <option value="tv">TV</option>
            <option value="fibre">Fibre</option>
        </select>
    </div>
    <button type="submit">Submit</button>
</form>