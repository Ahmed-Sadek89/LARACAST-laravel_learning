<x-layout>
    <x-slot:heading>
        Create Job
    </x-slot:heading>

    <form method="POST" action="/login">
        @csrf

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">


                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">



                    <div class="sm:col-span-4">
                        <x-form-label>Email address</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="email" id="email"
                                required />
                            <x-form-error name="email" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label>Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="password" id="password"
                                required />
                            <x-form-error name="password" />
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-submit>Login</x-form-submit>
        </div>
    </form>
</x-layout>
