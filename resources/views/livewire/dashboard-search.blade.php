<div>
    <div class="dashboard-header-input-area" style="height: {{$areaHeight}}; overflow-y: {{$areaOverflow}};">
        <input type="text" name="search" id="dashboardSearch" placeholder="Buscar..." wire:keyup="searchFunction" wire:model="searchTerm">

        <div class="search-results-area default-flex-column-start">
            <div class="search-result-item">
                <div class="search-result-title-area default-flex-start">
                    <i class='bx bx-user'></i>
                    <p>Professores</p>
                </div>

                @foreach ($teachers as $teacher)
                    <div class="search-result-item-list default-flex-column">
                        <a href="{{url("/teacher/$teacher->id")}}">* {{$teacher->name}}</a>
                    </div>
                @endforeach
            </div>

            <div class="search-result-item">
                <div class="search-result-title-area default-flex-start">
                    <i class='bx bxs-graduation'></i>
                    <p>Cursos</p>
                </div>

                @foreach ($courses as $course)
                    <div class="search-result-item-list default-flex-column">
                        <a href="{{url("courses/$course->id")}}">* {{Str::limit($course->name, 50, '...') }}</a>
                    </div>
                @endforeach
            </div>

            <div class="search-result-item">
                <div class="search-result-title-area default-flex-start">
                    <i class='bx bxs-quote-alt-left'></i>
                    <p>Tópicos</p>
                </div>

                @foreach ($topics as $topic)
                    <div class="search-result-item-list default-flex-column">
                        <a href="{{url("courses/$topic->id")}}">* {{ Str::limit($topic->title, 50, '...') }}</a>
                    </div>
                @endforeach
            </div>

            <div class="search-result-item">
                <div class="search-result-title-area default-flex-start">
                    <i class='bx bx-note'></i>
                    <p>Notas</p>
                </div>

                @foreach ($notes as $note)
                    <div class="search-result-item-list default-flex-column">
                        <a href="{{url("courses/$note->id")}}">* {{ Str::limit($note->body, 50, '...') }}</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
