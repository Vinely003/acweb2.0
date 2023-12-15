<x-layout>
    <div class="center">
        <div class="mx-auto logo" style="width: 50%">
            <img style="width: 100%" src="image/ac_logo.png" alt="ACLogo">
        </div>
        <div class="form">
            <form id="loginForm" method="POST" action="logingin">
                @csrf
                <fieldset>
                    <div class="mx-auto" style="width: 25%">
                        <legend>Login</legend>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" id="email"
                                value="{{ old('email') }}" aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                            <div class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password"
                                placeholder="Password">
                            <div class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </fieldset>
            </form>
            <div class="page mx-auto">
                <a class="btn btn-secondary" href="/login">Signin</a>
            </div>
        </div>
    </div>
</x-layout>
