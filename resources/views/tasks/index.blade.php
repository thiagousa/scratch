<!DOCTYPE html>
<html>
<head>
<title>Index</title>
</head>
<body>
    
@foreach ($tasks as $task)  
<ul>

    <li>{{ $task->body}}</li>
</ul>


@endforeach   



</body>
</html>