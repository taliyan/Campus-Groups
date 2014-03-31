<?php include( 'template-files/campus-groups-header.php' ); ?>
 
<!-- HIGHLIGHT -->
    <div id="highlight">
      <div class="jumbotron">
        <div class="container">
          <div class="row">
            <div class="col-sm-12">
              <!--<div class="branding"></div>-->
            </div>
          </div>
        </div>
      </div>
    </div>
   <!-- HIGHLIGHT END -->
   <!-- MAIN SECTION -->
    <div id="main-top">
      <div class="container">
        <div class="row">
          <a class="btn btn-breadcrumb btn-sidebar-show" data-toggle="offcanvas" data-target="#breadcrumb-container">Show Sidebar</span></a> 
          <a class="btn btn-breadcrumb" data-toggle="collapse" data-target="#breadcrumb-container"><span class="glyphicon glyphicon-map-marker"></span></a>
          <div class="clearfix"></div>     
          <div class="col-md-12">
            <div id="breadcrumb-container" class="collapse"> 
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li> 
                <li><a href="#">Link</a></li>
                <li class="active">Link Active</li> 
              </ol>
            </div>      
          </div>
        </div>
      </div>
    </div>
    <div class="clearfix"></div>
    <div id="main">
      <div class="container">
        <div class="row row-offcanvas row-offcanvas-left">
           <?php include( 'template-files/campus-groups-sidebar.php' ); ?>
           <div class="col-xs-12 col-sm-9">
             <!-- LEFT NAVIGATION COLLAPSE 
             <p class="pull-left visible-xs">
               <button class="btn btn-primary btn-xs" data-toggle="offcanvas" type="button">Show Sidebar</button>
             </p>
             <!-- LEFT NAVIGATION COLLAPSE END -->
             <div class="content-header">
               <h2>STYLE GUIDE</h2>
               <p> xxxx </p>
             </div>
             <div class="content-main">
               <h1>Header 1</h1>
               <h2>Header 2</h2>
               <h3>Header 3</h3>
               <h4>Header 4</h4>
               <h5>Header 5</h5>
               <h6>Header 6</h6>
               <p>Xorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu sem vitae turpis laoreet congue at ac eros. Sed ut erat sed urna bibendum suscipit. Vivamus elementum, nisl eu hendrerit elementum, elit nunc bibendum elit, ac rutrum urna erat vel dolor. Nulla vestibulum turpis est, eu varius erat laoreet eget. Nam ac luctus neque, eget vestibulum magna. Proin sit amet velit neque. Quisque vestibulum sagittis magna vel ornare. Praesent hendrerit in turpis porta lobortis. Integer ut turpis pharetra, venenatis leo vel, ullamcorper tortor. Donec placerat, lorem non vehicula bibendum, lacus dolor placerat ligula, quis ultricies lacus tortor sed sapien. Vivamus molestie rutrum bibendum.
  
  Praesent sodales varius blandit. Sed posuere massa eu odio facilisis, et pulvinar massa iaculis. Donec porttitor risus vel nibh bibendum feugiat. Fusce vel porttitor odio, et ultricies ipsum. Suspendisse ac libero sed erat vulputate tincidunt. Ut sit amet felis dictum, porta est nec, pharetra sem. Sed cursus velit nec lacus rutrum, viverra mollis justo pulvinar. Cras commodo elementum molestie. Pellentesque mattis elit nunc, ut adipiscing enim dictum at. Quisque nec libero pellentesque erat porttitor sollicitudin. Proin sed leo vel eros fringilla fermentum. Curabitur est metus, malesuada non turpis in, hendrerit cursus felis. Sed rutrum, sapien quis gravida fringilla, eros lacus vulputate augue, sed eleifend nisl diam sed erat.
  
  Nullam quis egestas sem. Integer ut iaculis metus. Cras lacus metus, mollis eget auctor in, interdum in eros. Etiam odio elit, aliquet at nulla ut, rutrum congue sem. Donec metus erat, luctus sit amet hendrerit quis, sollicitudin a arcu. Duis a arcu accumsan tortor facilisis aliquam eget in nibh. Suspendisse eros lorem, pharetra at dui vel, fringilla tincidunt tellus</p>

             </div>
           </div>
        </div>
      </div>
    </div>
    <!-- MAIN SECTION END -->
 
<?php include( 'template-files/campus-groups-footer.php' ); ?>