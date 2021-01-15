<div class="col-sm-3 p-0 d-sm-none d-md-block d-none shadow-sm" id="menu">
    <div class="pt-3 pb-3 bg-white text-bold shadow-sm">
        Oke
    </div>
    <nav class="mt-3">
        <a href="#" class="link-menu-a">
            <div class="link-menu aktif">
                <i class="fa fa-bolt mr-3"></i> 
                <span>Petir Cok</span>
            </div>
        </a>
        @for ($i = 0; $i < 5; $i++)
            <a href="#" class="link-menu-a">
                <div class="link-menu">
                    <i class="fa fa-bookmark"></i>
                    <span>Cobak</span>
                </div>
            </a>
        @endfor
    </nav>
</div>