
<div class="col-md-3 col-lg-2 sidebar row">
    <div class="">
        <h2 class="text-center"> Dashboard </h2>
    </div>
    <div class="">
        <a href="{{ route('admin.dashboard') }}" class="active">
            <span class="iconify" data-icon="mdi-light:home" data-inline="false"></span> 
            Beranda
        </a>
        <a href="{{route('admin.petugas')}}" class="">
            <span class="iconify side-icon" data-icon="codicon:account" data-inline="false"></span> 
            Petugas
        </a>
        <a href="{{route('admin.masyarakat')}}">
            <span class="iconify side-icon" data-icon="cil:people" data-inline="false"></span>
            Masyarakat
        </a>
        <a href="{{route('admin.laporan')}}">
            <span class="iconify side-icon" data-icon="hugeicons:task-01" data-inline="false"></span> 
            Laporan
        </a>
    </div>
</div>