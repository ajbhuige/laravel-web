@extends("layout")
@section("content")

    <h1 class="heading">Dashboard</h1>

    <div class="container">
        <div class="row">
            <div class="col-sm-7 monitor normal">
                <a href="/dashboard/create">
                    <button type="button" class="btn btn-default submit"><i class="fa fa-paper-plane"
                                                                            aria-hidden="true">
                        </i>+ Add
                    </button>
                </a>
                <br><br><br>
                <section id="tabs" class="project-tab">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-blok1-tab" data-toggle="tab"
                               href="#nav-blok1"
                               role="tab" aria-controls="nav-blok1" aria-selected="true">Year 1</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-blok1" role="tabpanel"
                             aria-labelledby="nav-blok1-tab">
                            <table id="dashboardTable" class="table" cellspacing="0">
                                <thead>
                                <tr>
                                    <th>Term</th>
                                    <th>Course</th>
                                    <th>Assignment</th>
                                    <th>Weight</th>
                                    <th>EC</th>
                                    <th>Result</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($assignments as $assignment)
                                    <tr>
                                        <td class="duplicates">
                                            <a href="/dashboard/{{ $assignment->id }}">{{$assignment->course->term->id}}</a>
                                        </td>
                                        <td class="duplicates">{{$assignment->course->name}}</td>
                                        <td>{{$assignment->name}}</td>
                                        <td>{{$assignment->weight}}%</td>
                                        <td>{{$assignment->course->ec}}</td>
                                        <td>{{$assignment->result}}</td>
                                        <td><a href="/dashboard/{{ $assignment->id }}/edit">
                                                <button type="button" class="btn btn-default edit"><i class="fa fa-paper-plane"
                                                                                                      aria-hidden="true"></i>Edit
                                                </button>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
