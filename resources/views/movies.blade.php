<div>
    <h1>Movies List</h1>
    <table border="1">
        <tr>
            <td>id</td>
            <td>title</td>
            <td>synopsis</td>
            <td>year</td>
            <td>cover</td>
        </tr>
        @foreach($movies as $movie)
        <tr>
            <td>{{$movie->id}}</td>
            <td>{{$movie->title}}</td>
            <td>{{$movie->synopsis}}</td>
            <td>{{$movie->year}}</td>
            <td>{{$movie->cover}}</td>
        </tr>
        @endforeach
    </table>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
</div>
