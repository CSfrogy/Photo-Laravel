<x-layout :hideNavHero="true">
    <div class="flex justify-center items-center min-h-screen">
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 text-center">
                <legend class="fieldset-legend">Login</legend>
                <label class="label">Email</label>
            <input type="email" name="email" class="input" placeholder="Your Email" required />
                @error('email')
                    <span class="text-error text-sm">{{ $message }}</span>
                @enderror
                <label class="label">Password</label>
                <input type="password" name="password" class="input" placeholder="Your Password" required />
                @error('password')
                    <span class="text-error text-sm">{{ $message }}</span>
                @enderror
                <button type="submit" class="btn btn-neutral mt-4">Login</button>
            </fieldset>
        </form>
    </div>
</x-layout>
