This is students index
<hr/>
@foreach ($student_details as $ss)
Grade: {{$ss->grade}}<br/>
Parent num: {{$ss->parent_contact_num}}<br/>
First_name: {{$ss->getName()}}<hr/><!--Returning without eloquent relationship-->
<!--Make sure to include parentheses-->
@endforeach

