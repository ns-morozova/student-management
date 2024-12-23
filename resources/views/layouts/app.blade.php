<!DOCTYPE html>
<html>
<head>
    <title>Управление студентами</title>
</head>
<body>
    <nav>
        <a href="{{ route('groups.index') }}">Группы</a>
    </nav>
    <div>
        @yield('content')
    </div>
</body>
</html>