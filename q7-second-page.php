<?php include('q7-header.php'); ?>

<main class="centered-div">
    <h2>User Login</h2>
    <div >
        <div>
            <label>  UserName</label>
            <input type="text" id="name" name="name" required minlength="4" maxlength="8" size="10" />
            
        </div>
        <div>
            <label>Password</label>
            <input type="text" id="pass" name="pass" required minlength="4" maxlength="8" size="10" />
        </div>
        <div>
        <input type="button" value="submit" onclick="login()" />
        <input type="button" value="reset" onclick="reset()" />
        </div>
    </div>
    <?php include('q7-footer.php'); ?>
</main>

<script>
    const users = new Map();
    users.set("thiru", "password");
    users.set("sams", "password" );
    users.set("cool","password" );
    users.set("ok", "password");
    function login(){
        var userName = document.getElementById("name").value;
        var pass = document.getElementById("pass").value;
        console.log(userName)
        if (users.get(userName) == pass){
            alert("login sucess")
        }else {
        alert("login failed")  
        }  
    }
    function reset(){
        document.getElementById("name").textContent = "";
        document.getElementById("pass").textContent = "";
    }
</script>

