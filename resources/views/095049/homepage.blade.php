<html>
<center>
    <br>
    <h3>This is the Homepage</h3>
    <hr>

    <a href="/RegisterStudent">Register Student</a>
    <br>
    <br>
    <a href="/AddFees">Add Fees</a><br>
    <br>
    <br>
    <P>Total Amount of money So far: KSH {{$fees->sum('Amount')}}</P>
    <br>
    <form method="post" action="/SearchStudentFees" enctype="multipart/form-data">
        {{csrf_field()}}
        <label>Student Number :</label><input type="text" name="Sno" required>
        <button type="submit" name="Save">search Student Fees</button>
    </form>
</center>

</html>
