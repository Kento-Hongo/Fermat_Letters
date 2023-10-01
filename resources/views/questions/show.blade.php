<x-app-layout>
    <x-slot name="header">
       
    </x-slot>
        <h1 class="title">
            {{ $question->title }}
        </h1>
        <div class="content">
            <div class="content__question">
                
                <p>{{ $question->question }}</p>
                <p>{{ $question->hint }}</p>
            </div>
            <div class="answer">
                <p>{{ $answer->answer }}</p>
                <textarea name="answer[answer]" placeholder="?"></textarea>
                <input type="submit" value="store"/>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>