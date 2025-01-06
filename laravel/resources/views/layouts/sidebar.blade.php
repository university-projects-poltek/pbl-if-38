<div class="col-md-3 col-lg-2 sidebar row">
    <div>
        <h2 class="text-center"> Dashboard </h2>
    </div>
    <div>
        <a href="{{ route('officer.dashboard') }}" class="active">
            <span class="iconify" data-icon="mdi-light:home" data-inline="false"></span>
            Beranda
        </a>
        <a href="{{ route('officer.profile') }}" class="">
            <span class="iconify side-icon" data-icon="codicon:account" data-inline="false"></span>
            Profil
        </a>
        <a href="{{ route('officer.officersTable') }}">
            <span class="iconify side-icon" data-icon="cil:people" data-inline="false"></span>
            Petugas
        </a>
        <a href="{{ route('officer.reportsTable') }}">
            <span class="iconify side-icon" data-icon="hugeicons:task-01" data-inline="false"></span>
            Laporan
        </a>
    </div>
</div>
