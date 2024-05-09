<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Первый тест прошел.</title>

    </head>
    <body class="antialiased">
    @foreach($cities as $city)
        <p>This is user {{ $city->name }}</p>
       @if($i++==10) @break @endif
    @endforeach


    <p>
    @error('utm') <div>{{ $message }}</div> @enderror
    </p>

    <form action="{{ Route('formOne') }}" method="POST">
        @csrf
        @method('POST')
        <label for="name">Name:</label>
        <input type="text" name="utm" value=" {{ old('utm') }}"><br>
        <label for="description">Description:</label>
        <textarea name="description"> </textarea><br>
        <input type="submit" value="Submit">
    </form>

    </body>
</html>
