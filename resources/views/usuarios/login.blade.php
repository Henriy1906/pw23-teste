<div style="border:1px solid rgb(189, 82, 221);">

    <h1>Login dos gurizes</h1>

    @if (session('erro'))
        <div>{{ session('erro') }}</div>
    @endif

    <form action="{{ url()->current() }}" method="post">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <br>
        <input type="password" name="password" placeholder="Senha">
        <br><br>
        <input type="submit" value="Loga ai bb">
    </form>

</div>
