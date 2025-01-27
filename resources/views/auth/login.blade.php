<h2>Login</h2>
<form method="POST" action="{{ route('login') }}">
    @csrf
    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}" autofocus>
        @error('email')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="password">Password:</label>
        <input type="password" name="password">
        @error('password')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <button type="submit">Login</button>
</form>