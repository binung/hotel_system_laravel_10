<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class=""> <a href="{{ route('home') }}"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a> </li>
                <li class="list-divider"></li>
                <li class="submenu"> <a href="#"><i class="fas fa-suitcase"></i> <span> Booking </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('form/allbooking') }}"> All Booking </a></li>
                        <li><a href="{{ url('form/booking/edit') }}"> Edit Booking </a></li>
                        <li><a href="{{ route('form/booking/add') }}"> Add Booking </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Customers </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('form/allcustomers/page') }}"> All customers </a></li>
                        <li><a class="active" href="{{ url('form/customer/edit/') }}"> Edit Customer </a></li>
                        <li><a href="{{ route('form/addcustomer/page') }}"> Add Customer </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-key"></i> <span> Rooms </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="{{ route('form/allrooms/page') }}">All Rooms </a></li>
                        <li><a href="{{ url('form/room/edit') }}"> Edit Rooms </a></li>
                        <li><a href="{{ route('form/addroom/page') }}"> Add Rooms </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Staff </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="all-staff.html">All Staff </a></li>
                        <li><a href="edit-staff.html"> Edit Staff </a></li>
                        <li><a href="add-staff.html"> Add Staff </a></li>
                    </ul>
                </li>
               
                <li class="submenu"> <a href="#"><i class="fas fa-user"></i> <span> Employees </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="employees.html">Employees List </a></li>
                        <li><a href="leaves.html">Leaves </a></li>
                        <li><a href="holidays.html">Holidays </a></li>
                        <li><a href="attendance.html">Attendance </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="far fa-money-bill-alt"></i> <span> Accounts </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="invoices.html">Invoices </a></li>
                        <li><a href="payments.html">Payments </a></li>
                        <li><a href="expenses.html">Expenses </a></li>
                        <li><a href="taxes.html">Taxes </a></li>
                        <li><a href="provident-fund.html">Provident Fund </a></li>
                    </ul>
                </li>
                <li class="submenu"> <a href="#"><i class="fas fa-book"></i> <span> Payroll </span> <span class="menu-arrow"></span></a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="salary.html">Employee Salary </a></li>
                        <li><a href="salary-veiw.html">Payslip </a></li>
                    </ul>
                </li>
                <li class="submenu">
                    <a href="#">
                        <i class="fa fa-user-plus"></i> 
                        <span> User Management </span> 
                        <span class="menu-arrow"></span>
                    </a>
                    <ul class="submenu_class" style="display: none;">
                        <li><a href="salary.html">All User</a></li>
                        <li><a href="salary-veiw.html">User Log Activity </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>