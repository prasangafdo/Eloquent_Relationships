This is students index
<hr/>
@foreach ($student_details as $ss)
Grade: {{$ss->grade}}<br/>
Parent num: {{$ss->parent_contact_num}}<br/>

Full name: {{$ss->user->first_name." ".$ss->user->last_name}}<hr/><!--Returning without eloquent relationship-->
<!--Make sure to include parentheses in normal mode-->
<!--Do not include in eloquent mode-->
@endforeach

