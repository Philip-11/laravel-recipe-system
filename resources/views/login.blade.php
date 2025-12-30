<x-layout>
    <section>
        <fieldset class="fieldset bg-base-100 rounded-box w-xs">
            <form action="" method="POST">
                @csrf

                <x-text-input name="email" label="Email Address" type="email" required/>
                <x-text-input name="password" label="Password" type="password" required/>
                <button type="submit" class="btn btn-neutral mt-3">Login</button>
            </form>
        </fieldset>
    </section>
</x-layout>
