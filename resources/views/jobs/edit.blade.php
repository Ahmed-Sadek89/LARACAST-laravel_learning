<x-layout>
    <x-slot:heading>
        Edit Job: {{ $job->title }}
    </x-slot:heading>

    <form method="POST" action="/jobs/{{ $job->id }}">
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <x-form-label>Title</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="title" id="title" placeholder="Shift Leader"
                                value="{{ $job->title }}" required />
                            <x-form-error name="title" />
                        </div>
                    </div>

                    <div class="sm:col-span-4">
                        <x-form-label>Salary</x-form-label>
                        <div class="mt-2">
                            <x-form-input type="text" name="salary" id="salary" placeholder="Shift Leader"
                                value="{{ $job->salary }}" required />
                            <x-form-error name="salary" />
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-between gap-x-6">
            <div class="flex items-center">
                <button form="delete-form" class="text-red-500 text-sm font-bold">Delete</button>
            </div>

            <div class="flex items-center gap-x-6">
                <a href="/jobs/{{ $job->id }}" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>

                <div>
                    <x-form-submit>Update</x-form-submit>

                </div>
            </div>
        </div>
    </form>

    <form method="POST" action="/jobs/{{ $job->id }}/delete" id="delete-form" class="hidden">
        @csrf
        @method('DELETE')
    </form>
</x-layout>
