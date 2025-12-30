<x-layout title="Login">
    <section class="flex justify-center">
        <fieldset class="fieldset bg-base-100 rounded-box shadow-lg p-5 w-xs">
            <legend class="fieldset-legend text-2xl">Login</legend>
            <form action="" method="POST">
                @csrf

                <x-text-input name="email" label="Email Address" type="email" required/>
                <x-text-input name="password" label="Password" type="password" required/>
                <label for="remember_me" class="label mt-3">
                    <input type="checkbox" name="remember_me" class="checkbox" id="remember_me">
                    Remeber me
                </label>
                <br>
                <button type="submit" class="btn btn-neutral mt-3">Login</button>
            </form>
        </fieldset>
    </section>
</x-layout>
