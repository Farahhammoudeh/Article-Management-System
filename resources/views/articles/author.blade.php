<x-layout>
  <div class="relative mt-40 flex flex-col items-center gap-y-4">
      <x-author-photo :src="asset('storage/'. $author->profile_image)" class="h-40 w-40"></x-author-photo>
      <div class="text-center text-sm leading-6">
          <p class="font-semibold text-gray-900">
              <a href="/authors/{{ $author->id }}">
                  <x-author-name :name="$author->name"></x-author-name>
              </a>
          </p>
          <x-author-job :job="$author->job"></x-author-job>
      </div>
   </div>
</x-layout>
