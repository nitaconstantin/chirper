<x-layout>
    <x-slot:title>
        Edit Chirp
    </x-slot:title>
    {{-- @if ($errors->any())
        {{ dd($errors->all()) }}
    @endif --}}


    <div class="max-w-2xl mx-auto">
        <h1 class="text-3xl font-bold mt-8">Edit Chirp</h1>
        <!-- Chirp Form -->
        <!-- Chirp Form -->
        <div class="card bg-base-100 shadow mt-8">
            <div class="card-body">
                <form method="POST" action="/chirps/{{ $chirp->id }}">
                    @csrf
                    @method('PUT')
                    <div class="form-control w-full">
                        <textarea name="message" placeholder="What's on your mind?"
                            class="textarea textarea-bordered w-full resize-none @error('message') border-red-500 text-red-500 @enderror"
                            rows="4" maxlength="255" required>{{ old('message', $chirp->message) }}</textarea>
                        @error('message')
                            <p class="mt-2 text-sm font-bold @error('message') text-red-500  @enderror">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div class="mt-4 flex items-center justify-end space-x-3">
                        <a href="/" class="btn btn-ghost"> Cancel</a>
                        <button type="submit" class="btn btn-primary">
                            Update Chirp
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>
</x-layout>
