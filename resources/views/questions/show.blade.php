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
            <div class="answer_area">
                @foreach ($answers as $answer)
                    <div class="answer_index">
                        <p class='answer'>{{ $answers->answer }}</p>
                    </div>
                @endforeach
                <textarea name="answer[answer]" placeholder="?"></textarea>
                <input type="submit" value="Answer_submit"/>
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>