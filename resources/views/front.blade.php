<html>
<body>
    @foreach ($scores as $scores)
      <li>{{ $scores->score }}</li>
      <li>{{ $scores->name }}</li>
    @endforeach
    <form method="POST" action="{{ url('/index')}}" name="form">
    {{ csrf_field() }} 
        <input type="text" name="name">
        <input type="number" name="score">
        <input type="submit">
    </form>
</body>
</html>