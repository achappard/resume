<section id="experiences" class="resume-section container" style="background-color: red;">
    <h2 class="section-title">Expériences <span class="visually-hidden">en développement web</span></h2>
    @if($experiences->isNotEmpty())
        <ul class="list-unstyled row gy-4 gy-md-5 gy-xl-7">
            @foreach($experiences as $experience)
                <li>
                    <div class="experience-wrapper">
                        <img src="{{ asset('storage/'.$experience['company-logo'].'.jpg')}}"
                             srcset="{{ asset('storage/'.$experience['company-logo'].'_2x.jpg')}} 2x"/>
                        <div class="content">
                            <h3>{{$experience['job-title']}}</h3>
                            <p class="company mb-1">{{$experience['company']}}</p>
                            <p class="duration-dates mb-1">
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
