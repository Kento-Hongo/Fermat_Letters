<x-app-layout>
    <x-slot name="header">
        　
    </x-slot>
   <h1>Fermat's Letters</h1>
        <form action="/questions" method="POST">
            @csrf
            <div class="title">
                <h2>Title</h2>
                <input type="text" name="question[title]" placeholder="タイトル" value="{{ old('question.title')}}"/>
                <p class="title__error" style="color:red">{{ $errors->first('question.title') }}</p>
            </div>
            <div class="body">
                <h2>Question</h2>
                <textarea name="question[question]" placeholder='1 + 1 = ?'> {{ old('question.question')}}</textarea>
                <textarea name="question[hint]" placeholder='足し算'> {{ old('question.hint') }}</textarea>
                <textarea name="question[model_answer]" placeholder='2'>{{ old('question.model_answer') }}</textarea>
                 <p class="question__error" style="color:red">{{ $errors->first('question.question') }}</p>
                 <p class="hint__error" style="color:red">{{ $errors->first('question.hint') }}</p>
                 <p class="model_answer__error" style="color:red">{{ $errors->first('question.model_answer') }}</p>

            </div>
            <input type="submit" value="store"/>
        </form>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
</x-app-layout>