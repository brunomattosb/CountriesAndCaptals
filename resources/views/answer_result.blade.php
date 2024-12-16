<x-main-layout pageTitle="Countries & Captals Quiz">

    <div class="container">


        <x-questions :country='$country' :totalQuestion='$totalQuestion' :currentQuestion='$currentQuestion'/>

        <div class="text-center fs-3 mb-3">
            Resposta correta: <span class="text-info">{{$correct_answers}}</span>
        </div>

        <div class="text-center fs-3 mb-3">
            A sua resposta: <span class="[conditional]">{{$choice_answer}}</span>
        </div>

    </div>

    <!-- cancel game -->
    <div class="text-center mt-5">
        <a href="{{route('next_question')}}" class="btn btn-primary mt-3 px-5">AVANÇAR</a>
    </div>
</x-main-layout>
