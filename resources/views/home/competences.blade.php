<section id="competences" class="resume-section container">
    <h2 class="section-title">Compétences professionnelles</h2>
    @if($competences->isNotEmpty())
    <div class="row justify-content-center gy-4">
        @foreach($competences as $competence_group)
        <div class="col-md-6 col-md-4 col-lg-4">
            @if($competence_group['title'])
                <p class="skills-group-title"><strong>#{{$competence_group['title']}}</strong></p>
            @endif
            @if($competence_group['skills']->isNotEmpty())
            <ul class="list-unstyled">
                @foreach($competence_group['skills'] as $skill)
                <li>
                    <h3>{{$skill}}</h3>
                </li>
                @endforeach
            </ul>
            @endif
        </div>
        @endforeach
    </div>
    @endif
    <a href="#presentation" class="arrow-down-link" title="Section suivante"><span>Aller à la section suivante</span></a>
</section>
