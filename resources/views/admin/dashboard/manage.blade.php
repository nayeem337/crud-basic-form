<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h4>{{Session('nessage')}}</h4>
<table id="myTable" class="table table-striped border">
    <thead>
    <tr>
        <th> SL NO </th>
        <th>  Name </th>
        <th> Email Address </th>
    </tr>
    </thead>
    <tbody>
    @foreach($forms as $form)
        <tr>
            <td> {{$loop->iteration}} </td>
            <td> {{$form->name}} </td>
            <td> {{$form->email}} </td>

            <td>
                <a href="{{route('edit.form',['id' => $form->id])}}" >
                    <i>Edit </i>
                </a>
                <a href="{{route('delete.form',['id' => $form->id])}}">
                    <i>Delete </i>
                </a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>



</body>
</html>
