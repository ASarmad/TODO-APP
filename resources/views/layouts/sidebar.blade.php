@extends('layouts.navbar')

@section('sidebar')
    <!--Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="#" class="brand-link">
            <span class="brand-text font-weight-light">TODO APP</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user name -->
            <div class="user-panel mt-3 pb-3 mb-3 ">
                <div class="info">
                    <span class="d-block" style="color: white !important;">WELCOME, {{ Auth::user()->name }}</span>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{ Route('view_tasks') }}" class="nav-link">
                            <i class="nav-icon fas fa-tasks"></i>
                            <p> Tasks</p>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>
@endsection
