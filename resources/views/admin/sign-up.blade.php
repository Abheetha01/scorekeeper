<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
data-assets-path="../assets/" data-template="vertical-menu-template-free">
<head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>SCOREKEEPER | SING UP</title>

    <meta name="description" content="" />
    
    @include('layouts.admin-panel-com-css')
  </head>
  <body>
    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              
                <div class="app-brand justify-content-center">
                  <a href="index.html" class="app-brand-link">
                    <span class="app-brand-logo demo">
                      <img style="width: 40px" src="{{ asset('img/logo/logo.png') }}" alt="">
                    </span>
                    <span style="text-transform: capitalize; font-size: 35px; font-family: 'Teko', sans-serif; color: yellow" class="app-brand-text demo menu-text fw-bolder ms-2">SCORE</span>
                    <span style="text-transform: capitalize; font-size: 35px; font-family: 'Teko', sans-serif; margin-left: 0px !important; color: black" class="app-brand-text demo menu-text fw-bolder ms-2">KEEPER</span>
                  </a>
            
                  <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
                    <i class="bx bx-chevron-left bx-sm align-middle"></i>
                  </a>
                </div>
            
              <!-- /Logo -->
              <h4 class="mb-2">WELCOME TO SCOREKEEPER  👋</h4>
              <p class="mb-4">Please your account to update score </p>

              <form id="formAuthentication" class="mb-3" action="index.html" method="POST">
                <div class="mb-3">
                  <label for="email" class="form-label">Username</label>
                  <input type="text" class="form-control" id="email" name="email-username" placeholder="Enter your email or username" autofocus="">
                </div>
                <div class="mb-3 form-password-toggle">
                  <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                    <a href="auth-forgot-password-basic.html">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                  <div class="input-group input-group-merge">
                    <input type="password" id="password" class="form-control" name="password" placeholder="············" aria-describedby="password">
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>
                <div class="mb-3 form-password-toggle">
                    <div class="d-flex justify-content-between">
                      <label class="form-label" for="password">Password</label>
                      
                    </div>
                    <div class="input-group input-group-merge">
                      <input type="password" id="password" class="form-control" name="password" placeholder="············" aria-describedby="password">
                      <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                    </div>
                  </div>
                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember-me">
                    <label class="form-check-label" for="remember-me"> Remember Me </label>
                  </div>
                </div>
                <div class="mb-3">
                  <button class="btn btn-primary d-grid w-100" type="submit">SING UP</button>
                </div>
              </form>

              <p class="text-center">
                <span>Allready Registerd <span style="font-weight: bold;">SCOREKEEPER</span> </span>
                <a href="auth-register-basic.html">
                  <span>Create an account</span>
                </a>
              </p>
            </div>
          </div>
          <!-- /Register -->
        </div>
      </div>
    </div>
  </body>
</html>