<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Faketube</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<div class="container">
    <main>
        
        <table class="table table-bordered">
            <thead>
            <tr>
                
                <th scope="col">ChannelID</th>
                <th scope="col">ChannelName</th>
                <th scope="col">Description</th>
                <th scope="col">SubscribersCount</th>
                <th scope="col">URL</th>
                <th scope="col" colspan="3" class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($channels as $emp)
                <tr>
                    <th scope="row">{{$emp->id}}</th>
                    <td>{{$emp->name}}</td>
                    <td>{{$emp->address}}</td>
                    <td>{{$emp->salary}}</td>
                    <td>{{$emp->salary}}</td>
                    <td>{{$emp->salary}}</td>

                    <td>
                        <a href="{{ route('employees.show', ['employee' => $emp->id]) }}"><i class="bi bi-eye"></i></a>
                    </td>
                    <td>
                        <a href=""><i class="bi bi-pencil"></i></a>
                    </td>
                    <td>
                        <a data-id="{{ $emp->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal" class="btn btn-danger delete-button"><i class="bi bi-trash"></i></a>
                        <!-- Delete Confirmation Modal -->
                        <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
                            <form method="post" action="{{ route('employees.destroy', ['employee' => $emp->id]) }}">
                                @csrf
                                @method('DELETE')
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel">Confirm Delete</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure you want to delete this todo?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger" id="confirmDelete">Delete</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>


f
    </main>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
