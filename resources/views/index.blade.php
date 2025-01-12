<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Only for Adding the Category</title>
</head>
<body>
<form action="{{ route('index.validate') }}" method="POST">
    @csrf
    <input type="text" name="category" placeholder="Enter the Category" value="{{ old('category') }}">
    
    @if ($errors->has('category'))
        <div style="color: red;">{{ $errors->first('category') }}</div>
    @endif
    <br>
    <br>
    <input type="submit" name="Submit">
</form>


</body>
</html>