@if (strtolower(config("app.env")) === "local")
    <div class="alert alert-danger font-weight-bold text-center" role="alert">
        You're currently accessing the app / site in LOCAL mode.
    </div>
@endif
@if (strtolower(config("app.env")) === "staging")
    <div class="alert alert-warning font-weight-bold text-center" role="alert">
        You're currently accessing the app / site in STAGING mode.
    </div>
@endif