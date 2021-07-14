<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
        <meta name="author" content="Nlyone">
        <title>Print Formulir</title>
        <!-- Favicon -->
        <link rel="icon" href="{{asset('dashboard/assets/img/brand/favicon.png')}}" type="image/png">
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
        <!-- Icons -->
        <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/nucleo/css/nucleo.css')}}" type="text/css">
        <link rel="stylesheet" href="{{asset('dashboard/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}"
            type="text/css">
        <!-- Page plugins -->
        <!-- Argon CSS -->
        <link rel="stylesheet" href="{{asset('dashboard/assets/css/argon.css?v=1.2.0')}}" type="text/css">
    </head>

    <style>
@media print {
   .body {
       display: table;
       table-layout: fixed;
       padding-top: 2.5cm;
       padding-bottom: 2.5cm;
       margin-right: 4cm;
       padding-right: 4cm;
       height: auto;
   }
   .card
{
    position: relative;

    display: flex;
    flex-direction: column;

    min-width: 0;

    word-wrap: break-word;

    border: 1px solid rgba(0, 0, 0, .05);
    border-radius: .375rem;
    background-color: #fff;
    background-clip: border-box;
  margin-bottom: 800px;
  margin-right: 150px;
  margin-left: 80px;
}
.card > hr
{
    margin-right: 0;
    margin-left: 0;
}
.card > .list-group:first-child .list-group-item:first-child
{
    border-top-left-radius: .375rem;
    border-top-right-radius: .375rem;
}
.card > .list-group:last-child .list-group-item:last-child
{
    border-bottom-right-radius: .375rem;
    border-bottom-left-radius: .375rem;
}

.card-body
{
    min-height: 1px;
    padding: 1.5rem;

    flex: 1 1 auto;
}

.card-title
{
    margin-bottom: 1.25rem;
}

.card-subtitle
{
    margin-top: -.625rem;
    margin-bottom: 0;
}

.card-text:last-child
{
    margin-bottom: 0;
}

.card-link:hover
{
    text-decoration: none;
}

.card-link + .card-link
{
    margin-left: 1.5rem;
}

.card-header
{
    margin-bottom: 0;
    padding: 1.25rem 1.5rem;

    border-bottom: 1px solid rgba(0, 0, 0, .05);
    background-color: #fff;
}
.card-header:first-child
{
    border-radius: calc(.375rem - 1px) calc(.375rem - 1px) 0 0;
}
.card-header + .list-group .list-group-item:first-child
{
    border-top: 0;
}

.card-footer
{
    padding: 1.25rem 1.5rem;

    border-top: 1px solid rgba(0, 0, 0, .05);
    background-color: #fff;
}
.card-footer:last-child
{
    border-radius: 0 0 calc(.375rem - 1px) calc(.375rem - 1px);
}

.card-header-tabs
{
    margin-right: -.75rem;
    margin-bottom: -1.25rem;
    margin-left: -.75rem;

    border-bottom: 0;
}

.card-header-pills
{
    margin-right: -.75rem;
    margin-left: -.75rem;
}

.card-img-overlay
{
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;

    padding: 1.25rem;
}

.card-img,
.card-img-top,
.card-img-bottom
{
    width: 100%;

    flex-shrink: 0;
}

.card-img,
.card-img-top
{
    border-top-left-radius: calc(.375rem - 1px);
    border-top-right-radius: calc(.375rem - 1px);
}

.card-img,
.card-img-bottom
{
    border-bottom-right-radius: calc(.375rem - 1px);
    border-bottom-left-radius: calc(.375rem - 1px);
}

.card-deck .card
{
    margin-bottom: 15px;
}
}
    </style>
<body onload="window.print()">
    <?php
        $querys = DB::table('forms')->get();
        foreach ($querys as $key) {
    ?>
        <div class="card" style="width: 80%; align: center;">

            <div class="card-body">
                <a><img style="width:100px; height:auto"
                    src="{{asset('home/assets/img/logo.png')}}" alt=""></a>
                <h1 class="display-4">Pendaftar no.{{$key->id}}</h1>
                <form>
                    <div class="form-group">
                        <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                        <input class="form-control" type="text" value="{{$key->name}}" id="example-text-input" readonly>
                    </div>
                    <div class="form-group">
                        <label for="example-email-input" class="form-control-label">NIS</label>
                        <input class="form-control" type="text" value="{{$key->stb}}" id="example-email-input" readonly>
                    </div>
                    <div class="form-group">
                        <label for="example-url-input" class="form-control-label">Jenis Kelamin</label>
                        <input class="form-control" type="text" value="{{$key->gender}}" id="example-url-input" readonly>
                    </div>
                    <div class="form-group">
                        <label for="example-tel-input" class="form-control-label">Phone</label>
                        <input class="form-control" type="tel" value="{{$key->phone}}" id="example-tel-input" readonly>
                    </div>
                    <div class="form-group">
                        <label for="example-password-input" class="form-control-label">Kelas</label>
                        <input class="form-control" type="text" value="{{$key->kelas}}" id="example-password-input" readonly>
                    </div>
                    <div class="form-group">
                        <label for="example-number-input" class="form-control-label">PIN</label>
                        <input class="form-control" type="number" vid="example-number-input" value="{{$key->pin}}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="example-datetime-local-input" class="form-control-label">{{$key->tgl_daftar}}</label>
                    </div>
                </form>
            </div>
        </div>


    <?php
        }
    ?>
<!-- Core -->
<script src="/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<!-- Argon JS -->
<script src="/assets/js/argon.min.js"></script>
</body>
</html>
