<x-layout.baseCard>
	<div class="flex">
		<img class="hidden w-48 mr-6 md:block" src="{{ asset($listing->logo) }}" alt="" />
		<div>
			<h3 class="text-2xl">
				<a href="{{ url('/listing', ['id' => $listing->id]) }}">{{ $listing->title }}</a>
			</h3>
			<div class="text-xl font-bold mb-4">{{ $listing->company }}</div>
			<x-listing.tagsList :tags="$listing->tags"></x-listing.tagsList>
			<div class="text-lg mt-4">
				<i class="fa-solid fa-location-dot"></i>{{ $listing->location }}
			</div>
		</div>
	</div>
</x-layout.baseCard>
