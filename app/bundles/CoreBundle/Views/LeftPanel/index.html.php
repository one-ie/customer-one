<?php

/*
 * @copyright   2014 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */
$extraMenu = $view['menu']->render('extra');
?>
<!-- start: sidebar-header -->
<div class="sidebar-header">
    <!-- brand -->
    <a class="mautic-brand<?php echo (!empty($extraMenu)) ? ' pull-left pl-0 pr-0' : ''; ?>" href="#">
        <!-- logo figure -->
        <svg width="89px" height="45px" viewBox="0 0 89 45" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
            <!-- Generator: Sketch 40.3 (33839) - http://www.bohemiancoding.com/sketch -->
            <title>ONE-l-light</title>
            <desc>Created with Sketch.</desc>
            <defs></defs>
            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <image id="ONE-l-light" x="0" y="10" width="75.75" height="30" xlink:href="data:image/png;base64,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"></image>
            </g>
        </svg>
        <!--/ logo figure -->
        <!-- logo text -->
        <svg version="1.1" class="mautic-logo-text mnl-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 260 65" enable-background="new 0 0 260 65" xml:space="preserve">
            <g>
                <path class="m" d="M39.336,57.983V37.951c0-4.932-2.58-9.409-7.664-9.409
                c-5.008,0-7.967,4.477-7.967,9.409v20.032h-9.258V20.498h8.575l0.683,4.553c1.972-3.794,6.298-5.16,9.864-5.16
                c4.477,0,8.955,1.822,11.079,6.981c3.339-5.311,7.664-6.829,12.521-6.829c10.623,0,15.859,6.526,15.859,17.756v20.185H63.77V37.799
                c0-4.932-2.049-9.106-7.057-9.106s-8.119,4.326-8.119,9.258v20.032H39.336z"/>
                <path class="a" d="M109.031,20.574h8.879v37.41h-8.728l-0.456-5.464
                c-2.124,4.402-7.967,6.527-12.14,6.604c-11.079,0.074-19.275-6.754-19.275-19.883c0-12.898,8.575-19.652,19.502-19.577
                c5.01,0,9.789,2.352,11.913,6.07L109.031,20.574z M86.569,39.24c0,7.134,4.934,11.384,11.079,11.384
                c14.569,0,14.569-22.689,0-22.689C91.503,27.935,86.569,32.108,86.569,39.24"/>
                <path class="u" d="M133.101,20.574v19.578c0,5.69,3.11,10.016,9.03,10.016
                c5.69,0,9.561-4.781,9.561-10.471V20.574h9.181v37.486h-8.27l-0.607-5.084c-3.871,3.794-7.437,5.614-12.672,5.614
                c-8.954,0-15.48-6.754-15.48-18.363V20.574H133.101z"/>
                <path class="t" d="M182.123,10.026V20.65h10.319v7.967h-10.396V44.78
                c0,3.567,1.973,5.313,4.855,5.313c1.443,0,3.112-0.455,4.479-1.14l2.58,7.893c-2.656,1.062-4.857,1.518-7.664,1.594
                c-8.12,0.303-13.432-4.326-13.432-13.659V28.617h-6.98V20.65h6.98v-9.637L182.123,10.026z"/>
                <path class="i" d="M209.441,10.026c0,7.209-10.929,7.209-10.929,0 C198.513,2.818,209.441,2.818,209.441,10.026 M199.348,57.984h9.259V20.422h-9.259V57.984z"/>
                <path class="c" d="M247.803,53.203c-4.326,4.249-8.879,5.92-14.418,5.92
                c-10.853,0-19.881-6.526-19.881-19.807c0-13.279,9.028-19.805,19.881-19.805c5.312,0,9.409,1.518,13.507,5.54l-5.843,6.146
                c-2.2-1.973-4.934-2.959-7.514-2.959c-6.221,0-10.773,4.553-10.773,11.078c0,7.133,4.855,10.927,10.623,10.927
                c2.959,0,5.919-0.834,8.194-3.11L247.803,53.203z"/>
            </g>
        </svg>
        <!--/ logo text -->
    </a>
    <?php if (!empty($extraMenu)): ?>
        <div class="dropdown extra-menu">
            <a href="#" data-toggle="dropdown" class="dropdown-toggle">
                <i class="fa fa-chevron-down fa-lg"></i>
            </a>
            <?php echo $extraMenu; ?>
        </div>
    <?php endif; ?>
    <!--/ brand -->
</div>
<!--/ end: sidebar-header -->

<!-- start: sidebar-content -->
<div class="sidebar-content">
    <!-- scroll-content -->

    <div class="scroll-content slimscroll">
        <!-- start: navigation -->
        <nav class="nav-sidebar">
        <ul class="nav mt-10" data-toggle="menu">
        <li class="first nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/dashboard"><span class="icon pull-left fa fa-th-large"></span><span class="nav-item-name text pull-left">Intelligence</span></a>
        </li>
        <li class="nav-group active">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/contacts"><span class="icon pull-left fa fa-user"></span><span class="nav-item-name text pull-left">Contacts</span></a>
        </li>
        <li class="nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/companies"><span class="icon pull-left fa fa-building-o"></span><span class="nav-item-name text pull-left">Companies</span></a>
        </li>
        <li class="nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/segments"><span class="icon pull-left fa fa-pie-chart"></span><span class="nav-item-name text pull-left">Segments</span></a>
        </li>

        <li class="nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/campaigns"><span class="icon pull-left fa fa-clock-o"></span><span class="nav-item-name text pull-left">Campaigns</span></a>
        </li>
        <li class="nav-group">
        <a href="javascript:void(0);" data-target="#mautic_channels_root_child" data-toggle="submenu" data-parent=".nav" data-menu-link="mautic_channels_root" id="mautic_channels_root">
        <span class="arrow pull-right text-right"></span>
        <span class="icon pull-left fa fa-rss"></span><span class="nav-item-name text pull-left">Channels</span></a>
        <ul class="nav-submenu collapse" id="mautic_channels_root_child" style="height: 0px;">
        <li class="first nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/messages"><span class="nav-item-name text">Messages</span></a>
        </li>
        <li class="nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/emails"><span class="nav-item-name text">Emails</span></a>
        </li>
        <li class="nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/focus"><span class="nav-item-name text">Web</span></a>
        </li>
        <li class="nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/notifications"><span class="nav-item-name text">Notifications</span></a>
        </li>
        <li class="nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/sms"><span class="nav-item-name text">SMS</span></a>
        </li>
        <li class="last nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/tweets"><span class="nav-item-name text">Tweets</span></a>
        </li>
        </ul>
        </li>
        <li class="nav-group">
        <a href="javascript:void(0);" data-target="#mautic_points_root_child" data-toggle="submenu" data-parent=".nav" data-menu-link="mautic_points_root" id="mautic_points_root">
        <span class="arrow pull-right text-right"></span>
        <span class="icon pull-left fa fa-calculator"></span><span class="nav-item-name text pull-left">Points</span></a>
        <ul class="nav-submenu collapse" id="mautic_points_root_child" style="height: 0px;">
        <li class="first nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/points"><span class="nav-item-name text">Actions</span></a>
        </li>
        <li class="last nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/points/triggers"><span class="nav-item-name text">Triggers</span></a>
        </li>
        </ul>
        </li>
        <li class="nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/stages"><span class="icon pull-left fa fa-tachometer"></span><span class="nav-item-name text pull-left">Stages</span></a>
        </li>
        <li class="nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/calendar"><span class="icon pull-left fa fa-calendar"></span><span class="nav-item-name text pull-left">Calendar</span></a>
        </li>
        <li class="last nav-group">
        <a href="<?php echo '//'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']); ?>s/reports"><span class="icon pull-left fa fa-line-chart"></span><span class="nav-item-name text pull-left">Reports</span></a>
        </li>
        </ul>

        <ul class="nav sidebar-left-dark">
        <li class="hidden-xs">
        <a href="javascript:void(0)" data-toggle="minimize" class="sidebar-minimizer"><span class="direction icon pull-left fa"></span><span class="nav-item-name pull-left text">Collapse Menu</span></a>
        </li>
        </ul>

        </nav>

        <!--/ end: navigation -->
    </div>
    <!--/ scroll-content -->
</div>
<!--/ end: sidebar-content -->
