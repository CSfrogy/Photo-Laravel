<x-layout.index :hideNavHero="true">
    <div class="flex justify-center items-center min-h-screen">
        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <fieldset class="fieldset bg-base-200 border-base-300 rounded-box w-xs border p-4 text-center">
                <legend class="fieldset-legend">Login</legend>
                @if ($errors->any())
                    <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" x-transition
                        class="alert alert-error mb-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <label class="label">Email</label>
                <input type="email" name="email" class="input" placeholder="Your Email" value="{{ old('email') }}" required />

                <label class="label">Password</label>
                <input type="password" name="password" class="input" placeholder="Your Password" required />

                <button type="submit" class="btn btn-neutral mt-4">Login</button>
            </fieldset>
        </form>
    </div>
</x-layout.index>
