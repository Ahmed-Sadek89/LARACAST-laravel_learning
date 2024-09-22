<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>

    <h2 class="font-bold text-lg">{{ $job['title'] }}</h2>
    <span>{{$job->employer->name}}</span>
    <p>
        This job pays {{ $job['salary'] }} per year.
    </p>
</x-layout>
