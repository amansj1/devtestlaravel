<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
 
               
                    <div class="row">
                     
                             <div class="form-floating mb-3">
                                
                                    <select class="form-control changeLang">
                                        <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>English</option>
                                        <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }} >Indonesia</option>
                                        <option value="sp" {{ session()->get('locale') == 'sp' ? 'selected' : '' }}>Spanish</option>
                                    </select>
                          
                             </div>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                              <div class="form-floating mb-3">
                                    <input type="text" class="form-control" name="fullname" id="floatingInput">
                                    <label for="floatingInput">{{ __('login.Fullname') }}</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="email" class="form-control" id="floatingInput" name="email">
                                <label for="floatingInput">{{ __('login.Email') }}</label>
                              </div>
                              <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" name="subdomain" >
                                <label for="floatingInput">{{ __('login.Subdomain') }}</label>
                          </div>
                              <div class="form-floating mb-3">
                                <input type="password" class="form-control" id="floatingPassword" name="pass" >
                                <label for="floatingPassword">{{ __('login.Password') }}</label>
                              </div>
                              <div class="d-grid">
                                <button class="btn btn-primary btn-login text-uppercase fw-bold" type="submit">Sign
                                  Up</button>
                              </div>
                             
                            </form>
                        
                    </div>
                  

               
            </div>
        </div>
        <script type="text/javascript">
  
            var url = "{{ route('changeLang') }}";
          
            $(".changeLang").change(function(){
                window.location.href = url + "?lang="+ $(this).val();
            });
          
        </script>
    </body>
</html>
