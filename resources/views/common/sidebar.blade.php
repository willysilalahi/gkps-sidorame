<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-nav">
        @foreach (Helper::getMenus() as $i)
            @if ($i->route !== null)
                <!-- Nav Item Single -->
                @if (Helper::setActiveMenu($i->route))
                    <li class="nav-item">
                        <a class="nav-link" href="/{{ $i->route }}">
                            <i class="{{ $i->icon }}"></i>
                            <span>{{ $i->name }}</span>
                        </a>
                    </li><!-- End Single Menu Nav -->
                @else
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="/{{ $i->route }}">
                            <i class="{{ $i->icon }}"></i>
                            <span>{{ $i->name }}</span>
                        </a>
                    </li><!-- End Single Menu Nav -->
                @endif
            @else
                @if (count(Helper::authChild($i->id)) > 0)
                    <!-- Nav Item Group -->
                    @if (Helper::setChildActive($i->id))
                        <li class="nav-item">
                            <a class="nav-link" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                                <i class="{{ $i->icon }}"></i><span>{{ $i->name }}</span><i
                                    class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="charts-nav" class="nav-content collapsed" data-bs-parent="#sidebar-nav">
                                @foreach (Helper::authChild($i->id) as $j)
                                    <li>
                                        <a href="/{{ $j->route }}"
                                            @if (Helper::setActiveMenu($j->route)) class="active" @endif>
                                            <i class="bi bi-circle"></i><span>{{ $j->name }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li><!-- End Group Menu Nav -->
                    @else
                        <li class="nav-item">
                            <a class="nav-link collapsed" data-bs-target="#charts-nav-{{ $loop->iteration }}"
                                data-bs-toggle="collapse" href="#">
                                <i class="{{ $i->icon }}"></i><span>{{ $i->name }}</span><i
                                    class="bi bi-chevron-down ms-auto"></i>
                            </a>
                            <ul id="charts-nav-{{ $loop->iteration }}" class="nav-content collapse"
                                data-bs-parent="#sidebar-nav">
                                @foreach (Helper::authChild($i->id) as $j)
                                    <li>
                                        <a href="/{{ $j->route }}"
                                            @if (Helper::setActiveMenu($j->route)) class="active" @endif>
                                            <i class="bi bi-circle"></i><span>{{ $j->name }}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li><!-- End Group Menu Nav -->
                    @endif
                @endif
            @endif
        @endforeach

        <li class="nav-item">
            <a class="nav-link collapsed" href="/logout">
                <i class="bi bi-power"></i>
                <span>Logout</span>
            </a>
        </li><!-- End Login Page Nav -->
    </ul>

</aside><!-- End Sidebar-->
