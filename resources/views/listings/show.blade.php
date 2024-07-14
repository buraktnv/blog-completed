<x-layout>
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col">
                <div class="flex gap-4">
                    <img class="h-64 w-fit mr-6 mb-6"
                        src="{{ $listing->logo ? asset('storage/' . $listing->logo) : asset('/images/no-image.png') }}"
                        alt="" />

                    <h3 class="text-4xl mb-2 font-bold capitalize">
                        {{ $listing->title }}
                    </h3>
                </div>
                <div>
                    <h3 class="text-3xl font-semibold mb-4">Description</h3>
                    <div class="text-lg space-y-6">
                        {{ $listing->description }}
                    </div>
                </div>
            </div>
        </x-card>
    </div>
</x-layout>
