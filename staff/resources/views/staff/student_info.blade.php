@extends('master')
<link rel="stylesheet" type="text/css" href="/css/student_info_style.css">
@section('title', 'Student Infomation')
@section('content')
<style>
	th ,td{
		width:18%;
		text-align:center;
		
	}
	table{
		position:relative;
		left:9%;
	}
</style>

	<form method="get" action="studentSearch" class="search-form">
		<input type="text" name="std_search" placeholder="{{trans('message.search_detail').'600611028' }}">
		<input type="submit" value="{{trans('message.search') }}">
	</form>

<br />
<br />

	<hr id="student-line">
	<table class="table table-bordered">
   <tr>
   <th>First Name</th>
   <th>Last name</th>
   <th>ID</th>
   <th>Phone</th>
   <th>Address</th>
   <th>Facebook</th>

   </tr>
  
		
		

	
		

@if(isset($id))
	@foreach($info as $i)
	@if($i['std_id']==$id)
   <tr>
  
      <td>{{$i['fname']}}</td>
      <td>{{$i['lname']}}</td>
      <td>{{$i['std_id']}}</td>
      <td>{{$i['phone']}}</td>
      <td>{{$i['address']}}</td>
      <td>{{$i['facebook']}}</td>

	</tr>
	@endif
	@endforeach
@endif
   </table>

@stop