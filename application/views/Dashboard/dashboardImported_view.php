<div id="page-wrapper">

    <div class="col-sm-12 container breadcrumb-container">
        <ol class="breadcrumb breadcrumb-arrow">
            <?php

            ?>
            <li><a href="#"><?= strstr(uri_string(), 'Controller/', true); ?></a></li>
            <li><a href="#"><?= substr(base_url(uri_string()), strrpos(base_url(uri_string()), '/') + 1); ?></a></li>
            <li class="active"><span>Add Project</span></li>

        </ol>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 well">
                <div class="container" id="title">
                    <h1 class="text-center">
                        The simple calculator
                    </h1>

                    <div class="container" id="calcs-section">
                        <div class="row">
                            <input id="print" class="text-right calcs" type="text" name="input" size="16">
                            </div>
                        </div>
                    <div class="container" id="calc-buttons">
                        <div class="row">
                            <button class="btn btn-default btn-sm" onClick="go('ac');">AC</button>
                            <button class="btn btn-default btn-sm" onClick="go('log');">log</button>
                            <button class="btn btn-default btn-sm" onClick="go('sin');">sin</button>
                            <button class="btn btn-default btn-sm" onClick="go('tan');">tan</button>
                            </div>
                        <div class="row">
                            <button class="btn btn-default btn-sm-2" onClick="go(7);">7</button>
                            <button class="btn btn-default btn-sm-2" onClick="go(8);">8</button>
                            <button class="btn btn-default btn-sm-2" onClick="go(9);">9</button>
                            <button class="btn btn-default btn-sm-2" onClick="go(' * ');">*</button>
                            </div>
                        <div class="row">
                            <button class="btn btn-default btn-sm-2" onClick="go(4);">4</button>
                            <button class="btn btn-default btn-sm-2" onClick="go(5);">5</button>
                            <button class="btn btn-default btn-sm-2" onClick="go(6);">6</button>
                            <button class="btn btn-default btn-sm-2" onClick="go(' - ');">-</button>
                            </div>
                        <div class="row">
                            <button class="btn btn-default btn-sm-2" onClick="go(1);">1</button>
                            <button class="btn btn-default btn-sm-2" onClick="go(2);">2</button>
                            <button class="btn btn-default btn-sm-2" onClick="go(3);">3</button>
                            <button class="btn btn-default btn-sm-2" onClick="go(' + ');">+</button>
                        </div>
                        <div class="row">
                            <button class="btn btn-default btn-sm-2" onClick="go(0);">0</button>
                            <button class="btn btn-default btn-sm-2" onClick="go('.');">.</button>
                            <button class="btn btn-default btn-sm-2" onClick="go('eval');">=</button>
                            <button class="btn btn-default btn-sm-2" onClick="go(' / ');">/</button>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>


    <div class="clearfix"></div>
    <!-- /.table-responsive -->

</div>
<!-- /#page-wrapper -->




