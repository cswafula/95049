<center>
    <br>
    <h3>Register new Student</h3>
    <hr>
    <br>
    <form method="post" action="/RegisterStudent" enctype="multipart/form-data">
        {{csrf_field()}}
        <label>Student Number :</label><input type="text" name="Sno" required><br>
        <br>
        <label>Full Student Names:</label><input type="text" name="names" required><br>
        <br>
        <label>Date Of Birth:</label><input type="date" name="DOB" required><br>
        <br>
        <label>Address:</label><input type="text" name="Address" required>
        <br>
        <button type="submit" name="Save">save</button>
    </form>
</center>
