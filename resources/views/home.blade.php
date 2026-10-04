<x-layout>
    <x-slot:title>
        Welcome
    </x-slot:title>
    <div class="max-w-2xl mx-auto">
        {{-- @foreach ($chirps as $chirp)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <h1 class="text-3xl font-bold">{{ $chirp['author'] }}</h1>
                        <p class="mt-4 text-base-content/60">
                            {{ $chirp['message'] }}
                        </p>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ $chirp['time'] }}
                        </p>

                    </div>
                </div>
            </div>
        @endforeach --}}
        @forelse ($chirps as $chirp)
            <div class="card bg-base-100 shadow mt-8">
                <div class="card-body">
                    <div>
                        <h1 class="text-3xl font-bold">{{ $chirp->user ? $chirp->user->email : 'Anonymous' }}</h1>
                        <p class="mt-4 text-base-content/60">
                            {{ $chirp->message }}
                        </p>
                        <p class="mt-2 text-sm text-gray-600">
                            {{ $chirp->created_at->diffForHumans() }}
                        </p>

                    </div>
                </div>
            </div>
        @empty
            <p>You have not any chirp yet!</p>
        @endforelse
    </div>
</x-layout>
