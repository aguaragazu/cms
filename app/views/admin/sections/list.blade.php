<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>Sections</h1>
<p>
    <a href="{{ url('admin/sections/create') }}">
        Add a new section
    </a>
</p>
<section>
	@foreach ($sections as $section)
		<p><a class="item" href="{{ route('admin.sections.show', [$section->id]) }}">{{ $section->name }}</a></p>
	@endforeach
</section>
</body>
</html>