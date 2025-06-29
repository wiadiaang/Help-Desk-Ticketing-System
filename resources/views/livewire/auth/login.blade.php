<div class="w-px-400 mx-auto mt-sm-12 mt-8">
    <h4 class="mb-1">Welcome back! 👋</h4>
    <p class="mb-6">Please sign-in to your account</p>

    <form wire:submit="login" class="mb-6">
      <div class="mb-6 form-control-validation">
        <label for="email" class="form-label">Email</label>
        <input type="email" wire:model="email" class="form-control" id="email" name="email" placeholder="Enter your email" autofocus />
        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="form-password-toggle form-control-validation">
        <label class="form-label" for="password">Password</label>
        <div class="input-group input-group-merge">
          <input type="password" wire:model="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
          <span class="input-group-text cursor-pointer"><i class="icon-base bx bx-hide"></i></span>
        </div>
        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
      </div>
      <div class="my-7 form-control-validation">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" id="remember-me" name="remember" />
          <label class="form-check-label" for="remember-me">
            Remember me
          </label>
        </div>
      </div>
      <button type="submit" class="btn btn-primary d-grid w-100">Sign in</button>
    </form>

    <p class="text-center">
      <span>New on our platform?</span>
      <a href="#">
        <span>Create an account</span>
      </a>
    </p>




  </div>