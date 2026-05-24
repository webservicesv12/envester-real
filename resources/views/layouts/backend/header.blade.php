<ul class="scrollable">
    <!-- BEGIN: First Child -->
    <li class="side-menu__divider">
        START MENU
    </li>
    <li>
        <a href="{{route('dashboard.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="home" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Dashboard</div>
        </a>

        <a href="{{route('roles.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="user" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Roles</div>
        </a>

        <a href="{{route('packages.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="cloud" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Invest Plans</div>
        </a>

        <a href="{{route('clients.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="users" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">All Users</div>
        </a>

        <a href="{{route('deposit.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="cloud" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">All Deposits</div>
        </a>

        <a href="{{route('withdrawals.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="cloud" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">All Withdrawal</div>
        </a>

        <a href="{{route('investments.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="cloud" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">All Investments</div>
        </a>

        <a href="{{route('custom-message.create')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="message-square" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Custom Message</div>
        </a>

        <a href="{{route('administrative.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="users" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">All Administrative</div>
        </a>

        <a href="{{route('payment-method.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="cloud" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Payment Method</div>
        </a>



        <a href="{{route('settings.index')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="settings" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Settings</div>
        </a>

        <a href="{{url('panel/logout')}}" class="side-menu__link ">
            <i data-tw-merge="" data-lucide="user" class="stroke-[1] w-5 h-5 side-menu__link__icon"></i>
            <div class="side-menu__link__title">Logout</div>
        </a>
    </li>
</ul>
