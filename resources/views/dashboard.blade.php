<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Base HTML Structure</title>
</head>
<body>
    <h1>Hello</h1>

    <?php
    foreach ($users as $user)
    {
    echo $user['name'];
    echo "<br>";
    echo $user['age'];
    echo "<br>";

    }
    ?>
@foreach ($users as $user)


       <p>Použivatel {{ $user['name'] }} má {{ $user['age'] }} rokov, a preto:</p>

       @if ($user['age'] >= 18)
           <p>{{ $user['name'] }} môže šoférovať.</p>
       @else
           <p>{{ $user['name'] }} nemôže šoférovať.</p>
       @endif
    @endforeach


</body>
</html>
