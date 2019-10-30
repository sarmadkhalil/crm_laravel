<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/assets/css/now-ui-dashboard.css" rel="stylesheet" />
  </head>
  <body style="background: linear-gradient(to left, #1d4350, #a43931);">
    <div class="container">
      <div class="row mt-4">
        <div class="col-6 offset-3">
          <div class="card card-chart text-white" style="background-color: rgba(0, 0, 0, 0.2);">
            <div class="card-header bg-dark" >
              <div class="card-title" style="margin-top: -30px; padding-bottom: 5px;">
                <h4 class="text-center">@yield('title')</h4>
              </div>
            </div>
            <div class="card-body text-center">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
