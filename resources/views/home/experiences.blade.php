<section id="experiences" class="resume-section container">
    <h2>Expériences en développement web</h2>
    @if($experiences->isNotEmpty())
        <ul class="list-unstyled">
            @foreach($experiences as $experience)
                <li>
                    <div class="experience-wrapper">
                        <img src="https://placehold.co/48x48" srcset="https://placehold.co/96x96 2x"/>
                        <div>

                            <h3>{{$experience['job-title']}}</h3>
                            <p>{{$experience['company']}}</p>
                            <p class="text-muted">
                                {{$experience['start-date-short']}}
                                &dash;
                                {{$experience['end-date-short']}}
                                &bull;
                                {{$experience['duration']}}
                            </p>
                            <p>{{$experience['description']}}</p>
                            <h4>ACQUIS : {{$experience['acquired-skills']}}</h4>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
</section>
