<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <a href="bagusimutsekali">ke bagus</a>
    <a href="dashboard">ke bagian dashboard</a>

    @extends('masterlayouts')
    @section('konten')
        <x-ui.card>
        </x-ui.card>

        <x-ui.button variant="danger">merah</x-ui.button>
        <x-ui.button variant="warning">kuning</x-ui.button>
        <x-ui.button variant="secondary">abu</x-ui.button>
        <x-ui.button variant="primary">biru</x-ui.button>
        <x-ui.button>hijau</x-ui.button>
    @endsection
</body>

</html>
