<div class="topo">

    <div class="logo">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/brands.min.css" integrity="sha512-apX8rFN/KxJW8rniQbkvzrshQ3KvyEH+4szT3Sno5svdr6E/CP0QE862yEeLBMUnCqLko8QaugGkzvWS7uNfFQ==" crossorigin="anonymous" />
        <img src="{{ asset('img/logo2.png') }}">
    </div>

    <div class="menu">
        <ul>
            <li><a href="{{ route('app.index') }}">Home</a></li>
            <li><a href="{{ route('app.movimentacoes.index') }}">Cadastrar Movimentação</a></li>
            <li><a href="{{ route('app.criptoinvestimento.index') }}">Cadastrar Criptoinvestimento</a></li>
            <li><a href="{{ route('app.movimentacao.visualizacao') }}">Visualizar Movimentações</a></li>
            <li><a href="{{ route('app.criptoinvestimento.visualizacao') }}">Visualizar Criptoinvestimentos</a></li>
        </ul>
    </div>
</div>