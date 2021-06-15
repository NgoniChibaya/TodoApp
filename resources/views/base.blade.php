<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="user-id" content="{{ Auth::user()->id }}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <style>body {
    margin: 0;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
    font-size: 0.88rem;
    font-weight: 400;
    line-height: 1.5;
    color: #495057;
    text-align: left;
    background-color: #6200EA
}

i {
    font-style: italic
}

.container {
    margin-top: 100px
}

.card {
    box-shadow: 0 0.46875rem 2.1875rem rgba(4, 9, 20, 0.03), 0 0.9375rem 1.40625rem rgba(4, 9, 20, 0.03), 0 0.25rem 0.53125rem rgba(4, 9, 20, 0.05), 0 0.125rem 0.1875rem rgba(4, 9, 20, 0.03);
    border-width: 0;
    transition: all .2s
}

.card-header:first-child {
    border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0
}

.card-header {
    display: flex;
    align-items: center;
    border-bottom-width: 1px;
    padding-top: 0;
    padding-bottom: 0;
    padding-right: 0.625rem;
    height: 3.5rem;
    background-color: #fff
}

.widget-subheading {
    color: #858a8e;
    font-size: 10px
}

.card-header.card-header-tab .card-header-title {
    display: flex;
    align-items: center;
    white-space: nowrap
}

.card-header .header-icon {
    font-size: 1.65rem;
    margin-right: 0.625rem
}

.card-header.card-header-tab .card-header-title {
    display: flex;
    align-items: center;
    white-space: nowrap
}

.btn-actions-pane-right {
    margin-left: auto;
    white-space: nowrap
}

.text-capitalize {
    text-transform: capitalize !important
}

.scroll-area-sm {
    height: 288px;
    overflow-x: hidden
}

.list-group-item {
    position: relative;
    display: block;
    padding: 0.75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.125)
}

.list-group {
    display: flex;
    flex-direction: column;
    padding-left: 0;
    margin-bottom: 0
}

.todo-indicator {
    position: absolute;
    width: 4px;
    height: 60%;
    border-radius: 0.3rem;
    left: 0.625rem;
    top: 20%;
    opacity: .6;
    transition: opacity .2s
}

.bg-warning {
    background-color: #f7b924 !important
}

.widget-content {
    padding: 1rem;
    flex-direction: row;
    align-items: center
}

.widget-content .widget-content-wrapper {
    display: flex;
    flex: 1;
    position: relative;
    align-items: center
}

.widget-content .widget-content-right.widget-content-actions {
    visibility: hidden;
    opacity: 0;
    transition: opacity .2s
}

.widget-content .widget-content-right {
    margin-left: auto
}

.btn:not(:disabled):not(.disabled) {
    cursor: pointer
}

.btn {
    position: relative;
    transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s
}

.btn-outline-success {
    color: #3ac47d;
    border-color: #3ac47d
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #3ac47d;
    border-color: #3ac47d
}

.btn-outline-success:hover {
    color: #fff;
    background-color: #3ac47d;
    border-color: #3ac47d
}

.btn-primary {
    color: #fff;
    background-color: #3f6ad8;
    border-color: #3f6ad8
}

.btn {
    position: relative;
    transition: color 0.15s, background-color 0.15s, border-color 0.15s, box-shadow 0.15s;
    outline: none !important
}

.card-footer {
    background-color: #fff
}</style>
    <title>Hello, world!</title>
  </head>
  <body>
  <div class="container">

  </br>
  </br>
  </br>

    
     @yield('content')
  </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="{{asset('js/app.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>