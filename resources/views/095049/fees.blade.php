<center>
    <br>
    <h3>Add Fees For Student</h3>
    <hr>
    <br>
    <form method="post" action="/AddFees" enctype="multipart/form-data">
        {{csrf_field()}}
        <label>Student Number :</label><input type="text" name="Sno" required><br>
        <br>
        <label>Date:</label><input type="date" name="date" required><br>
        <br>
        <label>Amount:</label><input type="number" name="Amount" required><br>
        <br>
        <button type="submit" name="Save">save</button>
    </form>
</center>
