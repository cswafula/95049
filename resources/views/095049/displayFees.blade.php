<html>

<head>
    <title>Student Fees Installments</title>
</head>
@forelse($fees as $fee)
<p>Amount: {{$fee->Amount}} ==> Date: {{$fee->Date}}</p> @empty
<p>There are no Installments for this Student</p>
@endforelse


</html>
