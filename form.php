<?php include 'modules/header.php'; ?>
    <article class="row">
        <div class="column medium-8 medium-centered">
            <form class="" action="scripts/script_form-send.php" method="post">
                <label for="firstname">First name</label>
                <input id="firstname" type="text" name="firstname">
                <label for="lastname">Last name</label>
                <input id="lastname" type="text" name="lastname">
                <select class="select" name="select">
                    <option value="optn1">Alternativ 1</option>
                    <option value="optn2">Alternativ 2</option>
                    <option value="optn3">Alternativ 3</option>
               </select>
               <input type="submit" value="Send">
            </form>
        </div>
    </article>
<?php include 'modules/footer.php'; ?>
