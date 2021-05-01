@extends("master")

@section("title", "Over mij")

@section("main")
    <div class="row">
        <div class="col">
            <h1 class="display-3 mb-4">Over mij</h1>
            <img src="/image/antonbaeckelandt.jpg" alt="Foto Anton Baeckelandt" title="Anton Baeckelandt"
                 id="profilepicture" class="img-thumbnail rounded float-right w-25 ml-3"/>
            <p class="mb-5">
                Deze blog en artikels werden geschreven door mezelf, Anton Baeckelandt.
                <br/>
                <br/>
                In 2018 ben ik gestart met de opleiding Toegepaste Informatica aan Howest campus Brugge.
                Ondertussen zijn we drie jaar verder en zal ik in juni dit jaar afstuderen in de afstudeerrichting
                Software Engineer.
                <br/>
                <br/>
                Zoals de afstudeerrichting doet vermoeden, ben ik vooral geïnteresseerd in programmeren.
                Ik werk graag in zowel de front- als de back-end, maar ik heb toch een lichte voorkeur voor back-end
                development.
                <br/>
                <br/>
                Tijdens mijn laatste jaar in de opleiding kon ik mijn passie voor programmeren uitgebreid uitoefenen tijdens mijn gevarieerde stage bij <a href="https://www.duo.be/nl" target="_blank">Duo</a> in het app-team.
            </p>
            <h3 class="">Contacteer mij</h3>
            <ul class="list-unstyled">
                <li class="mb-1"><a class="btn btn-floating m-1"
                       href="https://www.linkedin.com/in/anton-baeckelandt/"
                       role="button"
                       target="_blank">
                        <i class="bi bi-linkedin mr-2"></i>
                        LinkedIn
                    </a></li>

                <li><a class="btn btn-floating m-1"
                       href="https://github.com/AntonBaeckelandt/"
                       role="button"
                       target="_blank">
                        <i class="bi bi-github mr-2"></i>
                        Github
                    </a></li>
            </ul>
        </div>
    </div>
@endsection
