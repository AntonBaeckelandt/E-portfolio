@extends("master")

@section("title", "Projecten")

@section('head')
    @parent
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/css/timeline.css') }}"/>
@endsection

@section("main")

    <div class="container mb-5">
        <h3 class="mb-5 d-block mx-auto text-center">Projecten</h3>
        <div class="row">
            <div class="col-md-10">
                <ul class="cbp_tmtimeline">
                    <li>
                        <h4 class="text-right d-block">
                            <time class="cbp_tmtime" datetime="2020">2020</time>
                        </h4>
                        <div class="cbp_tmicon bg-info"><span class="material-icons">web_asset</span></div>
                        <div class="cbp_tmlabel">
                            <h3 class="title mb-0">Mars Transaction Server</h3>
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item font-weight-light">Java/Spring boot</li>
                                <li class="list-inline-item font-weight-light">Datomic</li>
                            </ul>
                            <p class="description">
                                De Mars Transaction Server was een van de deployables in een groter geheel dat ficitef toeliet om huizen op Mars te managen.
                                Deze server had de taak om data over de aan- en verkopen van huizen bij te houden. Als servertechnologie werd er gekozen voor Spring boot. Datomic werd gebruikt om de transacties op te slaan.
                            </p>
                        </div>
                    </li>
                    <li>
                        <h4 class="text-right d-block">
                            <time class="cbp_tmtime" datetime="2020">2020</time>
                        </h4>
                        <div class="cbp_tmicon bg-info"><span class="material-icons">web_asset</span></div>
                        <div class="cbp_tmlabel">
                            <h3 class="title mb-0">Prijsvergelijker</h3>
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item font-weight-light">PHP/Laravel</li>
                                <li class="list-inline-item font-weight-light">HTML5</li>
                                <li class="list-inline-item font-weight-light">CSS3</li>
                                <li class="list-inline-item font-weight-light">JS</li>
                                <li class="list-inline-item font-weight-light">PWA</li>
                            </ul>
                            <p class="description">
                                In deze PWA kan je de prijzen van verschillende winkelketens vergelijken voor een bepaald product.
                                Het is ook mogelijk om uw boodschappenlijstje in de app in te vullen. De app berekent per winkelketen de totaalprijs zodat u naar de goedkoopste winkel kan gaan voor uw boodschappenlijstje.
                            </p>
                        </div>
                    </li>
                    <li>
                        <h4 class="text-right d-block">
                            <time class="cbp_tmtime" datetime="2020">2020</time>
                        </h4>
                        <div class="cbp_tmicon bg-info"><span class="material-icons">web_asset</span></div>
                        <div class="cbp_tmlabel">
                            <h3 class="title mb-0">SportTogether</h3>
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item font-weight-light">Node.JS</li>
                                <li class="list-inline-item font-weight-light">Android</li>
                            </ul>
                            <p class="description">
                                Deze android-app laat je toe om mensen in je buurt te zoeken om mee te gaan sporten.
                                Na de app toegang te geven tot uw locatie, uw favoriete sporten en de uren waarop u vrij bent in te vullen, gaat de app opzoek naar mensen met gelijkaardige interesses in uw buurt.
                                Bij een 'match' kan je chatten met de andere persoon om zo af te spreken om samen eens te gaan sporten!
                            </p>
                        </div>
                    </li>
                    <li>
                        <h4 class="text-right d-block">
                            <time class="cbp_tmtime" datetime="2020">2020</time>
                        </h4>
                        <div class="cbp_tmicon bg-info"><span class="material-icons">web_asset</span></div>
                        <div class="cbp_tmlabel">
                            <h3 class="title mb-0">TransLatte</h3>
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item font-weight-light">Node.JS</li>
                                <li class="list-inline-item font-weight-light">Vue.JS</li>
                                <li class="list-inline-item font-weight-light">CSS3</li>
                                <li class="list-inline-item font-weight-light">PWA</li>
                            </ul>
                            <p class="description">
                                Een nieuwe taal leren tijdens de koffie, dat is het idee van deze PWA!
                                In de app kies je een taal die wil leren. Je kan kiezen uit naamwoorden, werkwoorden of adjectieven om te leren.
                                Eerst krijg je een lijst van een aantal woorden en hun vertaling te zien.
                                Het doel is om er zo veel mogelijk te memoriseren om dan zo veel mogelijk goede antwoorden te geven op de quiz. Met een goede score op de quiz kan je zelfs op het scorebord terecht komen! <br/>
                                De PWA staat nog altijd live en is <a href="https://quiz-eb6f3.web.app/" target="_blank">hier</a> te vinden.
                            </p>
                        </div>
                    </li>
                    <li>
                        <h4 class="text-right d-block">
                            <time class="cbp_tmtime" datetime="2020">2020</time>
                        </h4>
                        <div class="cbp_tmicon bg-info"><span class="material-icons">web_asset</span></div>
                        <div class="cbp_tmlabel">
                            <h3 class="title mb-0">Big data project</h3>
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item font-weight-light">Python</li>
                                <li class="list-inline-item font-weight-light">Scikit-learn</li>
                                <li class="list-inline-item font-weight-light">Matplotlib</li>
                                <li class="list-inline-item font-weight-light">Pandas</li>
                                <li class="list-inline-item font-weight-light">NumPy</li>
                            </ul>
                            <p class="description">
                                Via verschillende Python libraries hebben 2 medestudenten en ik het mogelijk gemaakt om een model te bouwen dat in staat is om prijzen van huizen te voorspellen.
                                Door dit model een grote hoop gekende data te voeden, is het nu in staat om de prijs van huizen te voorspellen aan de hand van enkele eigenschappen van het huis.
                            </p>
                        </div>
                    </li>
                    <li>
                        <h4 class="text-right d-block">
                            <time class="cbp_tmtime" datetime="2019">2019</time>
                        </h4>
                        <div class="cbp_tmicon bg-orange"><span class="material-icons">web_asset</span></div>
                        <div class="cbp_tmlabel">
                            <h3 class="title mb-0">SportOut: Competetive Breakout</h3>
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item font-weight-light">Java/Vert.x</li>
                                <li class="list-inline-item font-weight-light">HTML5</li>
                                <li class="list-inline-item font-weight-light">CSS3</li>
                                <li class="list-inline-item font-weight-light">JS</li>
                                <li class="list-inline-item font-weight-light">Websockets</li>
                            </ul>
                            <p class="description">
                                Speel Breakout volledig in het thema 'sport' in real-time tegen uw vrienden. <br/>
                                In deze versie van Breakout is het doel is om zoveel mogelijk keer in het doel van je tegenstander te scoren.
                                Neem de rol op van voetballer of basketballer en gebruik je unieke power-ups en
                                power-downs. De power-ups maken het spel tijdelijk makkelijker voor de eigen speler.
                                Een voorbeeld hiervan was het tijdelijk vertragen van de bal.
                                Power-downs kunnen naar uw tegenstanders verstuurd worden en maken het spel moeilijker
                                voor hen. <br/>
                                Het real-time aspect van het spel had mogelijk geweest zonder het gebruik van
                                websockets.
                            </p>
                        </div>
                    </li>
                    <li>
                        <h4 class="text-right d-block">
                            <time class="cbp_tmtime" datetime="2019">2019</time>
                        </h4>
                        <div class="cbp_tmicon bg-orange"><span class="material-icons">web_asset</span></div>
                        <div class="cbp_tmlabel">
                            <h3 class="title mb-0">Stratego</h3>
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item font-weight-light">Java/Vert.x</li>
                                <li class="list-inline-item font-weight-light">HTML5</li>
                                <li class="list-inline-item font-weight-light">CSS3</li>
                                <li class="list-inline-item font-weight-light">JS</li>
                            </ul>
                            <p class="description">
                                Mijn eerste echte IT project was een real-time turn-based online versie van Stratego.
                                Dit was een groepsproject verwezenlijkt door 4 studenten inclusief mezelf.
                                Ik nam de rol op van technical lead en hield me vooral bezig met de servercode (Java/Vert.x). <br/>
                                Onze versie van stratego had uiteindelijk vier verschillende game modes:
                            <ul>
                                <li>Classic</li>
                                <li>Airborne</li>
                                <li>Duel</li>
                                <li>Infiltrator</li>
                            </ul>
                            </p>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
@endsection
