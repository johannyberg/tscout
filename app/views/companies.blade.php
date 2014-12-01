@extends('layout')
@section('content')
<h1>Companies</h1>
<p>The list of all our companies:</p>
<ul>
	@foreach($companies as $company)
		<li>Slug: {{ $company->slug }}</li>
		<li>Businesses:
			<ol>
			@foreach($company->businesses as $business)
				<li>{{ $business->business }}</li>
			@endforeach
			</ol>
		</li>
		<li>Categories:
			<ol>
			@foreach($company->categories as $category)
				<li>{{ $category->category }}</li>
			@endforeach
			</ol>
		</li>
		<li>Contact person: {{ $company->contact_person }}</li>
		<li>Phone: {{ $company->phone }}</li>
		<li>Email: {{ $company->email }}</li>
		<li>Web: {{ $company->homepage_url }}</li>
		<li>Description<br />{{ $company->description }}</li>
		<li>Password: {{ $company->password }}</li>
		<hr />
	@endforeach
</ul>
@stop
