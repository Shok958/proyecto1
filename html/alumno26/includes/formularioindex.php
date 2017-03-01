<div class="center">

<form action="<?= $_SERVER['PHP_SELF']?>" method ="post">
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" placeholder="Email" name = "email" value="<?php
        if (isset($_POST['email'])) {echo $_POST['email'];}?>">
    </div>
    <div class="form-group">
        <label for="email">Password:</label>
            <input type="password"  class="form-control" placeholder="Password" name="password">
    </div>
    <div class="form-group">
            <input type="submit" name="login" value="Inicia Sesion" class="btn btn-primary">
    </div>
 </form>
 <form action="registro.php">
     <div class="form-group">
         <input type="submit" name="register" value="Registrate" class="btn btn-primary">
     </div>
</form>

</div>