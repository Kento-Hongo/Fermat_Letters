<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{_('DashBoard') }}
    </x-slot>
        <h1>Fermat's_Letters</h1>
        <a href='/questions/create'>create</a>
        <div class='questions'>
            @foreach ($questions as $question)
                <div class='title'>
                    <h2 class='title'><a href="/questions/{{ $question->id }}">{{ $question->title }}</a></h2>
                    <p class='body'>{{ $question->question }}</p>
                </div>
            @endforeach
        </div>
        <div class='paginate'>
            {{ $questions->links() }}
        </div>
</x-app-layout>