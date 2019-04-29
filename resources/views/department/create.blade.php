@extends('layouts.app')


@section('content')
	<div class="col-lg-12">
		<h1 class="page-header">New Department</h1>
	</div>
	<ul>
	@if($errors->any())
		@foreach($errors->all() as $error)
			<li style="color: red">{{ $error }}</li>
		@endforeach
	@endif
{{--    @if(Session::has('success'))--}}
{{--        <div class="alert alert-success">--}}
{{--          {!! Session::get('success') !!}--}}
{{--        </div>--}}
{{--    @endif--}}
    </ul>
    <form action ="{{ route('departments.store') }}" method="POST">
        {{ csrf_field() }}

        <div class="form-group col-lg-6">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group col-lg-12">
            <button class ="btn.btn.success" type="submit">Save Department</button>
        </div>

    </form>
    {{--    @if(session()->has('message.level'))--}}
{{--        <div class="alert alert-{{ session('message.level') }}">--}}
{{--            {!! session('message.content') !!}--}}
{{--        </div>--}}
{{--    @endif--}}
@endsection

