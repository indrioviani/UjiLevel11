<!DOCTYPE html>
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="adminn/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    
  @include('admin.css')
  </head>

  <body>
  @include('admin.header')
  @include('admin.body')
  @include('admin.sidebar')
      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    @include('admin.script')
  </body>
</html>