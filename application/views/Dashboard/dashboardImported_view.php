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
                <input id="demo" type="text">
                <button class="btn btn-default btn-sm-2 calcBtn" id="btn_evaluate" value="eval"
                        onclick="writeToOutPut_DOMElement()">Show result
                </button>
                <p id="print_general"></p>


                <!--<h1 class="text-center">
                    The simple calculator
                </h1>

                <div class="container" id="calcs-section">
                    <div class="row">
                        <input id="print" class="text-right calcBtn" type="text" size="16">
                    </div>
                </div>
                <div class="container" id="calc-buttons">
                    <div class="row">
                        <button class="btn btn-default btn-sm calcBtn" id="btn_clear" value="ac">AC</button>
                        <button class="btn btn-default btn-sm calcBtn" id="btn_log" value="log">log</button>
                        <button class="btn btn-default btn-sm calcBtn" id="btn_sin" value="sin">sin</button>
                        <button class="btn btn-default btn-sm calcBtn" id="btn_tan" value="tan">tan</button>
                    </div>
                    <div class="row">
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn7" value="7">7</button>
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn8" value="8">8</button>
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn9" value="9">9</button>
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn_multiply" value=" * ">*</button>
                    </div>
                    <div class="row">
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn4" value="4">4</button>
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn5" value="5">5</button>
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn6" value="6">6</button>
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn_subtract" value="' - ">-</button>
                    </div>
                    <div class="row">
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn1" value="1">1</button>
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn2" value="2">2</button>
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn3" value="3">3</button>
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn_add" value=" + ">+</button>
                    </div>
                    <div class="row">
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn0" value="0">0</button>
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn_decimal" value=".">.</button>
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn_evaluate" value="eval"
                                onclick="displayResult()">=
                        </button>
                        <button class="btn btn-default btn-sm-2 calcBtn" id="btn_divide" value=" / ">/</button>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
</div>


<div class="clearfix"></div>
<!-- /.table-responsive -->

</div>
<!-- /#page-wrapper -->




