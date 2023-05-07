<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
    <title>Project</title>
</head>

<body>
    <div class="page-content">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card">
                    <h2>Project Task</h2>
                    <div class="card-body">
                        <form onsubmit="task_sumbit()" action="{{ route('admin.projecttask.store') }}" method="post"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" value="{{ $project_id }}" name="project_id">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class='table-danger'>
                                        <tr>
                                            <th></th>
                                            <th>No</th>
                                            <th>Phase</th>
                                            <th>task</th>
                                            <th>sub_task</th>
                                            <th>description</th>
                                            <th>per day hours</th>
                                            <th>total days</th>
                                            <th>total hours</th>
                                            <th>per hours rate</th>
                                            <th>total</th>
                                        </tr>
                                    </thead>
                                    <tbody id="project_task">
                                        @foreach ($projectdetails as $key => $item)
                                            {{-- <tr>
                                            <td>{{ $item->number }}</td>
                                            <td>{{ $item->phase }}</td>
                                            <td>{{ $item->task }}</td>
                                            <td>{{ $item->sub_task }}</td>
                                            <td>{{ $item->description }}</td>
                                            <td>{{ $item->per_day_hours }}</td>
                                            <td>{{ $item->total_days }}</td>
                                            <td>{{ $item->total_hours }}</td>
                                            <td>{{ $item->per_hours_rate }}</td>
                                            <td>{{ $item->total }}</td>
                                        </tr> --}}
                                            <tr>
                                                <td>
                                                    <button onclick="add_row()" type="button">+</button>
                                                    <button onclick="remove_row()" type="button">-</button>
                                                    <input type="hidden" value="{{ $project_id }}"
                                                        name="task_row[row{{ $key + 1 }}}][project_id]">
                                                </td>
                                                <td>
                                                    <input style="width: 100%" value="{{ $item->number }}"
                                                        type="text" name="task_row[row{{ $key + 1 }}}][number]">
                                                </td>
                                                <td>
                                                    <input style="width:100%" value="{{ $item->phase }}" type="text"
                                                        name="task_row[row{{ $key + 1 }}}][phase]">
                                                </td>
                                                <td>
                                                    <input style="width: 100%" type="text"
                                                        name="task_row[row{{ $key + 1 }}}][task]">
                                                </td>
                                                <td>
                                                    <input style="width: 100%" type="text"
                                                        name="task_row[row{{ $key + 1 }}}][sub_task]">
                                                </td>
                                                <td>
                                                    <input style="width: 100%" type="text"
                                                        name="task_row[row{{ $key + 1 }}}][description]">
                                                </td>
                                                <td>
                                                    <input style="width: 100%" type="text"
                                                        name="task_row[row{{ $key + 1 }}}][per_day_hours]">
                                                </td>
                                                <td>
                                                    <input style="width: 100%" type="text"
                                                        name="task_row[row{{ $key + 1 }}}][total_days]">
                                                </td>
                                                <td>
                                                    <input style="width: 100%" type="text"
                                                        name="task_row[row{{ $key + 1 }}}][total_hours]">
                                                </td>
                                                <td>
                                                    <input style="width: 100%" type="text"
                                                        name="task_row[row{{ $key + 1 }}}][per_hours_cost]">
                                                </td>
                                                <td>
                                                    <input style="width: 100%" type="text"
                                                        name="task_row[row{{ $key + 1 }}}][total]">
                                                </td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                <div class="my-2 text-end">
                                    <button type="button" onclick="add_row()"
                                        class="btn add_new btn-primary">append</button>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                        </form>
                    </div>

                </div>

            </div>
        </div>

    </div>

    </div>
    <script>
        var row_no = parseInt("{{ isset($key) ? $key + 2 : 1 }}");
        var project_id = "{{ $project_id }}"

        function add_row() {
            let button = event?.target;

            let html = `
                <tr>
                    <td>
                        <button onclick="add_row()" type="button">+</button>
                        <button onclick="remove_row()" type="button">-</button>
                        <input type="hidden" value="${project_id}" name="task_row[row${row_no}][project_id]">
                    </td>
                    <td>
                        <input style="width: 100%" type="text" name="task_row[row${row_no}][number]">
                    </td>
                    <td>
                        <input style="width:100%" type="text" name="task_row[row${row_no}][phase]">
                    </td>
                    <td>
                        <input style="width: 100%" type="text" name="task_row[row${row_no}][task]">
                    </td>
                    <td>
                        <input style="width: 100%" type="text" name="task_row[row${row_no}][sub_task]">
                    </td>
                    <td>
                        <input style="width: 100%" type="text" name="task_row[row${row_no}][description]">
                    </td>
                    <td>
                        <input style="width: 100%" type="text" name="task_row[row${row_no}][per_day_hours]">
                    </td>
                    <td>
                        <input style="width: 100%" type="text" name="task_row[row${row_no}][total_days]">
                    </td>
                    <td>
                        <input style="width: 100%" type="text" name="task_row[row${row_no}][total_hours]">
                    </td>
                    <td>
                        <input style="width: 100%" type="text" name="task_row[row${row_no}][per_hours_cost]">
                    </td>
                    <td>
                        <input style="width: 100%" type="text" name="task_row[row${row_no}][total]">
                    </td>
                </tr>
            `
            if (button && !button.classList.contains('add_new')) {
                let button_tr = button.parentElement.parentElement;
                button_tr.insertAdjacentHTML('afterend', html);
                row_no++;
            } else {
                let project_task = document.getElementById('project_task');
                project_task.insertAdjacentHTML('beforeend', html);
                row_no++;
            }
        }
        add_row();

        function remove_row() {
            let button = event?.target;
            let button_tr = button.parentElement.parentElement;
            button_tr.remove();
        }

        function task_sumbit() {
            event.preventDefault();
            fetch(event.target.action, {
                    method: "POST",
                    body: new FormData(event.target)
                })
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                    alert('data updated')
                })
        }
    </script>
</body>

</html>
