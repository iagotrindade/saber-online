<section class="teachers-updates-area">
    <div class="teachers-header-area default-flex-between">
        <h3>Nossos Professores</h3>

        <a class="" href="">Ver todos</a>
    </div>

    <div class="teacher-images-area default-flex-start">
        @foreach ($teachers as $teacher)
            <div class="teacher-item">
                <a href="">
                    <img src="{{url($teacher->image->name)}}" alt="{{$teacher->name}}" data-tip="Professor">
                </a>
            </div>
        @endforeach
    </div>

    <div class="updates-area">
        <div class="updates-header-area default-flex-between">
            <h3>Últimas atualizações</h3>
            <a href="">Ver tudo</a>
        </div>

        <div class="updates-items-area default-flex-column">
            @foreach ($updates as $update)
                <div class="update-item default-flex-column">
                    <h4>{{$update->title}}</h4>

                    <p>{{$update->body}}</p>

                    <a href="">Ver mais</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
