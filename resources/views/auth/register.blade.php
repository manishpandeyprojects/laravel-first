<h2>Register</h2>
<form method="POST" action="{{ route('register_save') }}">
    @csrf
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ old('name') }}" autofocus>
        @error('name')
        <div>{{ $message }}</div>
        @enderror
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}">
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

    <div>
        <label for="password_confirmation">Confirm Password:</label>
        <input type="password" name="password_confirmation">
    </div>

    <button type="submit">Register</button>
</form>