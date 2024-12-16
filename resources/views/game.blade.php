 <x-main-layout pageTitle="Countries & Captals Quiz">

    <div class="container">

        <x-questions :country='$country' :totalQuestion='$totalQuestion' :currentQuestion='$currentQuestion'/>
        <div class="row">
            @foreach ($answers as $answer )
                @include("components.answer", ["capital" => "$answer"])
            @endforeach


        </div>

    </div>

    <!-- cancel game -->
    <div class="text-center mt-5">
        <a href="#" class="btn btn-outline-danger mt-3 px-5">CANCELAR JOGO</a>
    </div>
</x-main-layout>
