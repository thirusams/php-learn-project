<?php include('q7-header.php'); ?>

<main class="centered-div">
    <h2 style = "width:70%; text-align:left; margin-left: 15%;"> Please spare a few minutes for given valuable feedback</h2>
    <div >
        <div>
            <label class = "size-50">Your Name</label>
            <input class = "size-50" type="text" id="name" name="name" required minlength="4" maxlength="8" size="10" />
            
        </div>
        <div>
        <label class = "size-50">Gender</label>
        <select class = "size-50" name="pets" id="pet-select">
        <option value="">--Please choose an option--</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        </select>
        </div>
        <div>
        <fieldset>
  <legend>Occupation:</legend>
    <input type="checkbox" id="service" name="service" checked />
    <label for="service">Service</label>
    <input type="checkbox" id="self" name="self" />
    <label for="self">Self Employment</label>
    <input type="checkbox" id="other" name="other" />
    <label for="other">Others</label>
</fieldset>
<div>
<label class = "size-50" for="email">Email:</label>
<input class = "size-50" type="email" id="email" pattern=".+@globex\.com" size="30" required />
</div>
</div>

<label for="comments">comments:</label>
<textarea class = "size-50" id="comments" name="comments" rows="5" cols="33">
sample comments...
</textarea>
</div>
    <?php include('q7-footer.php'); ?>
</main>

<script>
    
</script>

