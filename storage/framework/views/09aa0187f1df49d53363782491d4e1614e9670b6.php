<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo e(Auth::user()->name); ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
    
    
    
    
    
    
    
    
    
    <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            
            <?php switch( Auth::user()->role ):
                case (1): ?>
                <li><a href="/"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
                <li><a href="/karyawan"><i class="fa fa-book"></i> <span>Karyawan</span></a></li>
                <li><a href="/department"><i class="fa fa-book"></i> <span>Departments</span></a></li>
                <li><a href="/position"><i class="fa fa-book"></i> <span>Positions</span></a></li>
                <li><a href="/employee"><i class="fa fa-book"></i> <span>Employee</span></a></li>
                <li><a href="/archive"><i class="fa fa-book"></i> <span>Archive</span></a></li>
                <li><a href="/inventory"><i class="fa fa-book"></i> <span>Inventory</span></a></li>
                <?php break; ?>

                <?php case (2): ?>
                <li><a href="/"><i class="fa fa-book"></i> <span>Dashboard</span></a></li>
                <li><a href="/archive"><i class="fa fa-book"></i> <span>Archive</span></a></li>
                <li><a href="/inventory"><i class="fa fa-book"></i> <span>Inventory</span></a></li>
                <?php break; ?>

                <?php default: ?>
                <?php break; ?>
            <?php endswitch; ?>
            
            
            
            
            
            
            

            
            
            
            
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
<?php /**PATH D:\Laravel Project\project_coursenet - Utama\resources\views/layouts/navigation.blade.php ENDPATH**/ ?>