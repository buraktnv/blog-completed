@props(['listing'])

<x-card>
    <div class="flex relative h-full w-full pb-8">
        <img class="hidden w-48 mr-6 md:block"
            src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
            alt="" />
        <div>
            <h3 class="text-2xl font-semibold capitalize">
                <a href="/listings/{{ $listing->id }}">{{ $listing->title }}</a>
            </h3>
            <h3 class="text-lg capitalize line-clamp-3">
                <a href="/listings/{{ $listing->id }}">{{ $listing->description }}</a>
            </h3>

        </div>
        <a class="text-lg font-semibold border-2 bg-gray-600 text-white rounded w-fit px-6 py-3 absolute -right-4 -bottom-4 cursor-pointer"
            href="/listings/{{ $listing->id }}"> Read More </a>
    </div>
</x-card>
