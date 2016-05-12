
    <nav class="navbar" >
        <div class="container" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><img src="img/logo.png" data-active-url="img/logo-active.png" alt=""></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse"  id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right main-nav">
                    <li><a href="./" class='btn btn-blue2'>กลับหน้าหลัก</a></li>
                    @if (Auth::guest())
                        <li><a href="#" data-toggle="modal" data-target="#modal_login" class="btn btn-blue">เข้าสู่ระบบ</a></li>
                        <li><a href="#" data-toggle="modal" data-target="#modal_register" class="btn btn-blue">สมัครสมาชิก</a></li>
                    @else
                        <li class="dropdown">
                            <a href="" class="dropdown-toggle btn btn-blue2" data-toggle="dropdown" role="button" aria-expanded="false">
                                ผู้ใช้งาน : {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="">ข้อมูลส่วนตัว </a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/logout') }}" class="btn btn-blue">ออกจากระบบ</a></li>
                    @endif
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
