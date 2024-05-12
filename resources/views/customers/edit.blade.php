<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cliente</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Editar Cliente</h1>
        <form action="{{ route('customers.update', $customer->id) }}" method="post">
            @csrf
            @method('PUT')
            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" value="{{ $customer->name }}">
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="{{ $customer->email }}">
            <label for="phone">Telefone:</label>
            <input type="text" id="phone" name="phone" value="{{ $customer->phone }}">
            <button type="submit">Atualizar</button>
        </form>
    </div>
</body>
</html>
