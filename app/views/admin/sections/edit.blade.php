<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<h1>{{ $section->name }}</h1>
{{ Form::model($section, ['url' => route('admin.sections.update', [$section->id]), 'method' => 'PUT']) }}

    @include('admin.sections.partials._form')

    <p>
        {{ Form::submit('Update section') }}
    </p>

{{ Form::close() }}

{{ Form::model($section, ['url' => route('admin.sections.destroy', [$section->id]), 'method' => 'DELETE']) }}
    {{ Form::submit('Delete') }}
{{ Form::close() }}
</body>
</html>