@include('layouts.header')

@include('layouts.nav')

@include('layouts.side')
     

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        @yield('ctitle')
        <small>Control panel</small>
      </h1>
      
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">




	 @yield('content')


  

@include('layouts.footer')