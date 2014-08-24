<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
<h1>New section</h1>

{{ Form::open(['url' => 'admin/sections', 'method' => 'POST']) }}

    @include('admin.sections.partials._form')

    <p>
        {{ Form::submit('Create section') }}
    </p>

{{ Form::close() }}

</body>
</html>