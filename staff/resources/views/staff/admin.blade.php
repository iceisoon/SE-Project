@extends('master')
<link rel="stylesheet" type="text/css" href="/css/admin_style.css">
@section('title', 'Admin Mangement')
@section('content')
	<!-- form to add new user -->
	<form method="post" action="{{URL::to('') }}" class="add">
		<b>{{trans('message.add_staff') }}</b><br/>
		<input type="text" name="name" placeholder="{{trans('message.saff_name')}}">
		<input type="text" name="sername" placeholder="{{trans('message.staff_sername')}}">
		<input type="text" name="uname" placeholder="{{trans('message.staff_uname')}}">
		<input type="password" name="pwd" placeholder="{{trans('message.staff_pwd')}}">
		<select name="role">
			<option value="blank">{{trans('message.role') }}</option>
			<option vlaue="staff">{{trans('message.role_staff') }}</option>
			<option value="adminstator">{{trans('message.role_admin') }}</option>
		</select>
		<input type="button" name="submit" value="{{trans('message.submit') }}" class="submit">
	</form>

	<hr id="form-line">

	<!-- area to show content -->
	<div class="content-wrapper">	
		<table class="content-container">
			<tr>
				<th id="title-name">{{trans('message.name') }}</th>
				<th id="title-sur">{{trans('message.surname') }}</th>
				<th id="title-user">{{trans('message.username') }}</th>
				<th id="title-role">{{trans('message.role') }}</th>

				<hr id="title-line">
			</tr>

			@foreach($info as $i)
				<tr class="data">
					<td class="data-name">{{$i['fname']}}</td>
					<td class="data-sur">{{$i['lname']}}</td>
					<td class="data-user">{{$i['username']}}</td>
					<td class="data-role">{{$i['role']}}</td>
				</tr>
			@endforeach
			
		</table>
		
		
		

	</div>
@stop