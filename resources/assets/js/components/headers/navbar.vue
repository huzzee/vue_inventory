<template>
    <div class="navbar-custom">
        <div class="container">
            <div id="navigation">

                <ul class="navigation-menu">

                    <li class="has-submenu">
                        <router-link to="/"><i class="mdi mdi-view-dashboard"></i>Dashboard</router-link>

                    </li>



                    <li class="has-submenu">
                        <a href="#"><i class="mdi mdi-diamond"></i>Components</a>
                        <ul class="submenu">
                            <li class="has-submenu">
                                <a href="#">Forms</a>
                                <ul class="submenu">
                                    <li><a href="form-elements.html">Form Elements</a></li>
                                    <li><a href="form-advanced.html">Form Advanced</a></li>
                                    <li><a href="form-validation.html">Form Validation</a></li>
                                    <li><a href="form-pickers.html">Form Pickers</a></li>
                                    <li><a href="form-wizard.html">Form Wizard</a></li>
                                    <li><a href="form-mask.html">Form Masks</a></li>
                                    <li><a href="form-summernote.html">Summernote</a></li>
                                    <li><a href="form-wysiwig.html">Wysiwig Editors</a></li>
                                    <li><a href="form-uploads.html">Multiple File Upload</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Charts</a>
                                <ul class="submenu">
                                    <li><a href="chart-flot.html">Flot Chart</a></li>
                                    <li><a href="chart-morris.html">Morris Chart</a></li>
                                    <li><a href="chart-google.html">Google Chart</a></li>
                                    <li><a href="chart-chartist.html">Chartist Charts</a></li>
                                    <li><a href="chart-chartjs.html">Chartjs Chart</a></li>
                                    <li><a href="chart-c3.html">C3 Chart</a></li>
                                    <li><a href="chart-sparkline.html">Sparkline Chart</a></li>
                                    <li><a href="chart-knob.html">Jquery Knob</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Email</a>
                                <ul class="submenu">
                                    <li><a href="email-inbox.html"> Inbox</a></li>
                                    <li><a href="email-read.html"> Read Mail</a></li>
                                    <li><a href="email-compose.html"> Compose Mail</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Icons</a>
                                <ul class="submenu">
                                    <li><a href="icons-glyphicons.html">Glyphicons</a></li>
                                    <li><a href="icons-colored.html">Colored Icons</a></li>
                                    <li><a href="icons-materialdesign.html">Material Design</a></li>
                                    <li><a href="icons-ionicons.html">Ion Icons</a></li>
                                    <li><a href="icons-fontawesome.html">Font awesome</a></li>
                                    <li><a href="icons-themifyicon.html">Themify Icons</a></li>
                                    <li><a href="icons-typicons.html">Typicons</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Tables</a>
                                <ul class="submenu">
                                    <li><a href="tables-basic.html">Basic Tables</a></li>
                                    <li><a href="tables-layouts.html">Tables Layouts</a></li>
                                    <li><a href="tables-datatable.html">Data Table</a></li>
                                    <li><a href="tables-responsive.html">Responsive Table</a></li>
                                    <li><a href="tables-tablesaw.html">Tablesaw Table</a></li>
                                    <li><a href="tables-editable.html">Editable Table</a></li>
                                </ul>
                            </li>
                            <li class="has-submenu">
                                <a href="#">Maps</a>
                                <ul class="submenu">
                                    <li><a href="maps-google.html">Google Maps</a></li>
                                    <li><a href="maps-vector.html">Vector Maps</a></li>
                                    <li><a href="maps-mapael.html">Mapael Maps</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>


                </ul>

            </div>
        </div>
    </div>
</template>

<style>
    .navigation-menu .has-submenu .submenu .has-submenu .submenu{
        display: block;
        float: right;
    }
</style>