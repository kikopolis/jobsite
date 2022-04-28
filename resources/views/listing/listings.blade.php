@extends('base.layout')
@section('content')
	<x-layout.hero></x-layout.hero>
	<x-forms.search></x-forms.search>
	<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
		@unless(count($listings)===0)
			@foreach($listings as $listing)
				<x-listing.card :listing="$listing"></x-listing.card>
			@endforeach
		@else
			<h2>No job listings found</h2>
		@endunless
	</div>
@endsection
