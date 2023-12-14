<x-layout>
        <form id="signinForm" method="POST" action="register">
            @csrf
            <div class="mx-auto" style="width: 25%">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{ old('email') }}"
                        aria-describedby="emailHelp" placeholder="Enter email">
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
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <div class="text-danger">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
</x-layout>
