<div>
    <form action="a.php" method="POST">
                <fieldset id="a">
       <label for="name">Name</label>
       <input type="text" name="name" autofocus required><br><br>
       <label for="mobile">Mobile Number</label>
       <input type="number" name="mobile" required><br><br>
       <label for="email"> Email</label>
       <input type="email" name="email" required><br><br>
        </fieldset>
        <fieldset id="b">
            Address<br>
            <textarea name="address" required>
            </textarea>
        </fieldset>
        <fieldset id="c">
            Personal note<br>
            <textarea name="note" required>
             </textarea>
        </fieldset>
        <input type="submit"  value="Add a New User">
    </form>
    </div>
