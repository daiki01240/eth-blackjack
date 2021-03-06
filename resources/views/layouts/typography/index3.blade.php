@extends('index')

@section('title')

@endsection

@section('extra-css')

@endsection

@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h2>ADVANCED FORM ELEMENTS</h2>
            </div>
            <!-- Color Pickers -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                COLOR PICKERS
                                <small>Taken from <a href="https://github.com/mjolnic/bootstrap-colorpicker/" target="_blank">github.com/mjolnic/bootstrap-colorpicker</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <b>HEX CODE</b>
                                    <div class="input-group colorpicker colorpicker-element">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" value="#00AABB">
                                        </div>
                                        <span class="input-group-addon">
                                            <i style="background-color: rgb(0, 170, 187);"></i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <b>RGB(A) CODE</b>
                                    <div class="input-group colorpicker colorpicker-element">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control" value="rgba(0,0,0,0.7)">
                                        </div>
                                        <span class="input-group-addon">
                                            <i style="background-color: rgba(0, 0, 0, 0.7);"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Color Pickers -->
            <!-- File Upload | Drag & Drop OR With Click & Choose -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                FILE UPLOAD - DRAG &amp; DROP OR WITH CLICK &amp; CHOOSE
                                <small>Taken from <a href="http://www.dropzonejs.com/" target="_blank">www.dropzonejs.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <form action="/" id="frmFileUpload" class="dropzone dz-clickable" method="post" enctype="multipart/form-data">
                                <div class="dz-message">
                                    <div class="drag-icon-cph">
                                        <i class="material-icons">touch_app</i>
                                    </div>
                                    <h3>Drop files here or click to upload.</h3>
                                    <em>(This is just a demo dropzone. Selected files are <strong>not</strong> actually uploaded.)</em>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# File Upload | Drag & Drop OR With Click & Choose -->
            <!-- Masked Input -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MASKED INPUT
                                <small>Taken from <a href="https://github.com/RobinHerbots/jquery.inputmask" target="_blank">github.com/RobinHerbots/jquery.inputmask</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="demo-masked-input">
                                <div class="row clearfix">
                                    <div class="col-md-3">
                                        <b>Date</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control date" placeholder="Ex: 30/07/2016">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Time (24 hour)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">access_time</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control time24" placeholder="Ex: 23:59">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Time (12 hour)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">access_time</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control time12" placeholder="Ex: 11:59 pm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Date Time</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">date_range</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control datetime" placeholder="Ex: 30/07/2016 23:59">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Mobile Phone Number</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone_iphone</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Phone Number</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">phone</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Money (Dollar)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">attach_money</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control money-dollar" placeholder="Ex: 99,99 $">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Money (Euro)</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">euro_symbol</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control money-euro" placeholder="Ex: 99,99 €">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>IP Address</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">computer</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control ip" placeholder="Ex: 255.255.255.255">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Credit Card</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">credit_card</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control credit-card" placeholder="Ex: 0000 0000 0000 0000">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Email Address</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">email</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control email" placeholder="Ex: example@example.com">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <b>Serial Key</b>
                                        <div class="input-group">
                                            <span class="input-group-addon">
                                                <i class="material-icons">vpn_key</i>
                                            </span>
                                            <div class="form-line">
                                                <input type="text" class="form-control key" placeholder="Ex: XXX0-XXXX-XX00-0XXX">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Masked Input -->
            <!-- Input Group -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT GROUP
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <h2 class="card-inside-title">With Icon</h2>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Message">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date" placeholder="Recipient's username">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">With Text</h2>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">@</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Recipient's username">
                                        </div>
                                        <span class="input-group-addon">@example.com</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control date">
                                        </div>
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">
                                Different Sizes
                                <small>You can use the <code>.input-group-sm, .input-group-lg</code> classes for sizing.</small>
                            </h2>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <p>
                                        <b>Input Group Large</b>
                                    </p>
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <p>
                                        <b>Input Group Default</b>
                                    </p>
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Message">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <p>
                                        <b>Input Group Small</b>
                                    </p>
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon">
                                            <i class="material-icons">person</i>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Recipient's username">
                                        </div>
                                        <span class="input-group-addon">
                                            <i class="material-icons">send</i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-4">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">@</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Username">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Recipient's username">
                                        </div>
                                        <span class="input-group-addon">@example.com</span>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="input-group input-group-sm">
                                        <span class="input-group-addon">$</span>
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                        </div>
                                        <span class="input-group-addon">.00</span>
                                    </div>
                                </div>
                            </div>

                            <h2 class="card-inside-title">Radio &amp; Checkbox</h2>
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <input type="checkbox" class="filled-in" id="ig_checkbox">
                                            <label for="ig_checkbox"></label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <input type="radio" class="with-gap" id="ig_radio">
                                            <label for="ig_radio"></label>
                                        </span>
                                        <div class="form-line">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input Group -->
            <!-- Multi Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MULTI-SELECT
                                <small>Taken from <a href="https://github.com/lou/multi-select/" target="_blank">github.com/lou/multi-select</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <select id="optgroup" class="ms" multiple="multiple" style="position: absolute; left: -9999px;">
                                <optgroup label="Alaskan/Hawaiian Time Zone">
                                    <option value="AK">Alaska</option>
                                    <option value="HI">Hawaii</option>
                                </optgroup>
                                <optgroup label="Pacific Time Zone">
                                    <option value="CA">California</option>
                                    <option value="NV">Nevada</option>
                                    <option value="OR">Oregon</option>
                                    <option value="WA">Washington</option>
                                </optgroup>
                                <optgroup label="Mountain Time Zone">
                                    <option value="AZ">Arizona</option>
                                    <option value="CO">Colorado</option>
                                    <option value="ID">Idaho</option>
                                    <option value="MT">Montana</option>
                                    <option value="NE">Nebraska</option>
                                    <option value="NM">New Mexico</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="UT">Utah</option>
                                    <option value="WY">Wyoming</option>
                                </optgroup>
                                <optgroup label="Central Time Zone">
                                    <option value="AL">Alabama</option>
                                    <option value="AR">Arkansas</option>
                                    <option value="IL">Illinois</option>
                                    <option value="IA">Iowa</option>
                                    <option value="KS">Kansas</option>
                                    <option value="KY">Kentucky</option>
                                    <option value="LA">Louisiana</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="MS">Mississippi</option>
                                    <option value="MO">Missouri</option>
                                    <option value="OK">Oklahoma</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="TX">Texas</option>
                                    <option value="TN">Tennessee</option>
                                    <option value="WI">Wisconsin</option>
                                </optgroup>
                                <optgroup label="Eastern Time Zone">
                                    <option value="CT">Connecticut</option>
                                    <option value="DE">Delaware</option>
                                    <option value="FL">Florida</option>
                                    <option value="GA">Georgia</option>
                                    <option value="IN">Indiana</option>
                                    <option value="ME">Maine</option>
                                    <option value="MD">Maryland</option>
                                    <option value="MA">Massachusetts</option>
                                    <option value="MI">Michigan</option>
                                    <option value="NH">New Hampshire</option>
                                    <option value="NJ">New Jersey</option>
                                    <option value="NY">New York</option>
                                    <option value="NC">North Carolina</option>
                                    <option value="OH">Ohio</option>
                                    <option value="PA">Pennsylvania</option>
                                    <option value="RI">Rhode Island</option>
                                    <option value="SC">South Carolina</option>
                                    <option value="VT">Vermont</option>
                                    <option value="VA">Virginia</option>
                                    <option value="WV">West Virginia</option>
                                </optgroup>
                            </select><div class="ms-container" id="ms-optgroup"><div class="ms-selectable"><ul class="ms-list" tabindex="-1"><li class="ms-optgroup-container" id="optgroup-selectable-1929759235"><ul class="ms-optgroup"><li class="ms-optgroup-label"><span>Alaskan/Hawaiian Time Zone</span></li><li class="ms-elem-selectable" id="2090-selectable"><span>Alaska</span></li><li class="ms-elem-selectable" id="2305-selectable"><span>Hawaii</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selectable--721749976"><ul class="ms-optgroup"><li class="ms-optgroup-label"><span>Pacific Time Zone</span></li><li class="ms-elem-selectable" id="2142-selectable"><span>California</span></li><li class="ms-elem-selectable" id="2504-selectable"><span>Nevada</span></li><li class="ms-elem-selectable" id="2531-selectable"><span>Oregon</span></li><li class="ms-elem-selectable" id="2762-selectable"><span>Washington</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selectable--1492321428"><ul class="ms-optgroup"><li class="ms-optgroup-label"><span>Mountain Time Zone</span></li><li class="ms-elem-selectable" id="2105-selectable"><span>Arizona</span></li><li class="ms-elem-selectable" id="2156-selectable"><span>Colorado</span></li><li class="ms-elem-selectable" id="2331-selectable"><span>Idaho</span></li><li class="ms-elem-selectable" id="2471-selectable"><span>Montana</span></li><li class="ms-elem-selectable" id="2487-selectable"><span>Nebraska</span></li><li class="ms-elem-selectable" id="2495-selectable"><span>New Mexico</span></li><li class="ms-elem-selectable" id="2486-selectable"><span>North Dakota</span></li><li class="ms-elem-selectable" id="2719-selectable"><span>Utah</span></li><li class="ms-elem-selectable" id="2786-selectable"><span>Wyoming</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selectable-3723284"><ul class="ms-optgroup"><li class="ms-optgroup-label"><span>Central Time Zone</span></li><li class="ms-elem-selectable" id="2091-selectable"><span>Alabama</span></li><li class="ms-elem-selectable" id="2097-selectable"><span>Arkansas</span></li><li class="ms-elem-selectable" id="2339-selectable"><span>Illinois</span></li><li class="ms-elem-selectable" id="2328-selectable"><span>Iowa</span></li><li class="ms-elem-selectable" id="2408-selectable"><span>Kansas</span></li><li class="ms-elem-selectable" id="2414-selectable"><span>Kentucky</span></li><li class="ms-elem-selectable" id="2421-selectable"><span>Louisiana</span></li><li class="ms-elem-selectable" id="2465-selectable"><span>Minnesota</span></li><li class="ms-elem-selectable" id="2470-selectable"><span>Mississippi</span></li><li class="ms-elem-selectable" id="2466-selectable"><span>Missouri</span></li><li class="ms-elem-selectable" id="2524-selectable"><span>Oklahoma</span></li><li class="ms-elem-selectable" id="2641-selectable"><span>South Dakota</span></li><li class="ms-elem-selectable" id="2692-selectable"><span>Texas</span></li><li class="ms-elem-selectable" id="2682-selectable"><span>Tennessee</span></li><li class="ms-elem-selectable" id="2770-selectable"><span>Wisconsin</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selectable-1820079139"><ul class="ms-optgroup"><li class="ms-optgroup-label"><span>Eastern Time Zone</span></li><li class="ms-elem-selectable" id="2161-selectable"><span>Connecticut</span></li><li class="ms-elem-selectable" id="2177-selectable"><span>Delaware</span></li><li class="ms-elem-selectable" id="2246-selectable"><span>Florida</span></li><li class="ms-elem-selectable" id="2266-selectable"><span>Georgia</span></li><li class="ms-elem-selectable" id="2341-selectable"><span>Indiana</span></li><li class="ms-elem-selectable" id="2456-selectable"><span>Maine</span></li><li class="ms-elem-selectable" id="2455-selectable"><span>Maryland</span></li><li class="ms-elem-selectable" id="2452-selectable"><span>Massachusetts</span></li><li class="ms-elem-selectable" id="2460-selectable"><span>Michigan</span></li><li class="ms-elem-selectable" id="2490-selectable"><span>New Hampshire</span></li><li class="ms-elem-selectable" id="2492-selectable"><span>New Jersey</span></li><li class="ms-elem-selectable" id="2507-selectable"><span>New York</span></li><li class="ms-elem-selectable" id="2485-selectable"><span>North Carolina</span></li><li class="ms-elem-selectable" id="2521-selectable"><span>Ohio</span></li><li class="ms-elem-selectable" id="2545-selectable"><span>Pennsylvania</span></li><li class="ms-elem-selectable" id="2615-selectable"><span>Rhode Island</span></li><li class="ms-elem-selectable" id="2640-selectable"><span>South Carolina</span></li><li class="ms-elem-selectable" id="2750-selectable"><span>Vermont</span></li><li class="ms-elem-selectable" id="2731-selectable"><span>Virginia</span></li><li class="ms-elem-selectable" id="2783-selectable"><span>West Virginia</span></li></ul></li></ul></div><div class="ms-selection"><ul class="ms-list" tabindex="-1"><li class="ms-optgroup-container" id="optgroup-selection-1929759235"><ul class="ms-optgroup"><li class="ms-optgroup-label" style="display: none;"><span>Alaskan/Hawaiian Time Zone</span></li><li class="ms-elem-selection" id="2090-selection" style="display: none;"><span>Alaska</span></li><li class="ms-elem-selection" id="2305-selection" style="display: none;"><span>Hawaii</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selection--721749976"><ul class="ms-optgroup"><li class="ms-optgroup-label" style="display: none;"><span>Pacific Time Zone</span></li><li class="ms-elem-selection" id="2142-selection" style="display: none;"><span>California</span></li><li class="ms-elem-selection" id="2504-selection" style="display: none;"><span>Nevada</span></li><li class="ms-elem-selection" id="2531-selection" style="display: none;"><span>Oregon</span></li><li class="ms-elem-selection" id="2762-selection" style="display: none;"><span>Washington</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selection--1492321428"><ul class="ms-optgroup"><li class="ms-optgroup-label" style="display: none;"><span>Mountain Time Zone</span></li><li class="ms-elem-selection" id="2105-selection" style="display: none;"><span>Arizona</span></li><li class="ms-elem-selection" id="2156-selection" style="display: none;"><span>Colorado</span></li><li class="ms-elem-selection" id="2331-selection" style="display: none;"><span>Idaho</span></li><li class="ms-elem-selection" id="2471-selection" style="display: none;"><span>Montana</span></li><li class="ms-elem-selection" id="2487-selection" style="display: none;"><span>Nebraska</span></li><li class="ms-elem-selection" id="2495-selection" style="display: none;"><span>New Mexico</span></li><li class="ms-elem-selection" id="2486-selection" style="display: none;"><span>North Dakota</span></li><li class="ms-elem-selection" id="2719-selection" style="display: none;"><span>Utah</span></li><li class="ms-elem-selection" id="2786-selection" style="display: none;"><span>Wyoming</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selection-3723284"><ul class="ms-optgroup"><li class="ms-optgroup-label" style="display: none;"><span>Central Time Zone</span></li><li class="ms-elem-selection" id="2091-selection" style="display: none;"><span>Alabama</span></li><li class="ms-elem-selection" id="2097-selection" style="display: none;"><span>Arkansas</span></li><li class="ms-elem-selection" id="2339-selection" style="display: none;"><span>Illinois</span></li><li class="ms-elem-selection" id="2328-selection" style="display: none;"><span>Iowa</span></li><li class="ms-elem-selection" id="2408-selection" style="display: none;"><span>Kansas</span></li><li class="ms-elem-selection" id="2414-selection" style="display: none;"><span>Kentucky</span></li><li class="ms-elem-selection" id="2421-selection" style="display: none;"><span>Louisiana</span></li><li class="ms-elem-selection" id="2465-selection" style="display: none;"><span>Minnesota</span></li><li class="ms-elem-selection" id="2470-selection" style="display: none;"><span>Mississippi</span></li><li class="ms-elem-selection" id="2466-selection" style="display: none;"><span>Missouri</span></li><li class="ms-elem-selection" id="2524-selection" style="display: none;"><span>Oklahoma</span></li><li class="ms-elem-selection" id="2641-selection" style="display: none;"><span>South Dakota</span></li><li class="ms-elem-selection" id="2692-selection" style="display: none;"><span>Texas</span></li><li class="ms-elem-selection" id="2682-selection" style="display: none;"><span>Tennessee</span></li><li class="ms-elem-selection" id="2770-selection" style="display: none;"><span>Wisconsin</span></li></ul></li><li class="ms-optgroup-container" id="optgroup-selection-1820079139"><ul class="ms-optgroup"><li class="ms-optgroup-label" style="display: none;"><span>Eastern Time Zone</span></li><li class="ms-elem-selection" id="2161-selection" style="display: none;"><span>Connecticut</span></li><li class="ms-elem-selection" id="2177-selection" style="display: none;"><span>Delaware</span></li><li class="ms-elem-selection" id="2246-selection" style="display: none;"><span>Florida</span></li><li class="ms-elem-selection" id="2266-selection" style="display: none;"><span>Georgia</span></li><li class="ms-elem-selection" id="2341-selection" style="display: none;"><span>Indiana</span></li><li class="ms-elem-selection" id="2456-selection" style="display: none;"><span>Maine</span></li><li class="ms-elem-selection" id="2455-selection" style="display: none;"><span>Maryland</span></li><li class="ms-elem-selection" id="2452-selection" style="display: none;"><span>Massachusetts</span></li><li class="ms-elem-selection" id="2460-selection" style="display: none;"><span>Michigan</span></li><li class="ms-elem-selection" id="2490-selection" style="display: none;"><span>New Hampshire</span></li><li class="ms-elem-selection" id="2492-selection" style="display: none;"><span>New Jersey</span></li><li class="ms-elem-selection" id="2507-selection" style="display: none;"><span>New York</span></li><li class="ms-elem-selection" id="2485-selection" style="display: none;"><span>North Carolina</span></li><li class="ms-elem-selection" id="2521-selection" style="display: none;"><span>Ohio</span></li><li class="ms-elem-selection" id="2545-selection" style="display: none;"><span>Pennsylvania</span></li><li class="ms-elem-selection" id="2615-selection" style="display: none;"><span>Rhode Island</span></li><li class="ms-elem-selection" id="2640-selection" style="display: none;"><span>South Carolina</span></li><li class="ms-elem-selection" id="2750-selection" style="display: none;"><span>Vermont</span></li><li class="ms-elem-selection" id="2731-selection" style="display: none;"><span>Virginia</span></li><li class="ms-elem-selection" id="2783-selection" style="display: none;"><span>West Virginia</span></li></ul></li></ul></div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Select -->

            <div class="row clearfix">
                <!-- Spinners -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                SPINNERS
                                <small>Taken from <a href="https://github.com/vsn4ik/jquery.spinner" target="_blank">github.com/vsn4ik/jquery.spinner</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <div class="input-group spinner" data-trigger="spinner">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control text-center" value="1" data-rule="quantity">
                                        </div>
                                        <span class="input-group-addon">
                                            <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                            <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                        </span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group spinner" data-trigger="spinner">
                                        <div class="form-line focused">
                                            <input type="text" class="form-control text-center" value="1" data-rule="currency">
                                        </div>
                                        <span class="input-group-addon">
                                            <a href="javascript:;" class="spin-up" data-spin="up"><i class="glyphicon glyphicon-chevron-up"></i></a>
                                            <a href="javascript:;" class="spin-down" data-spin="down"><i class="glyphicon glyphicon-chevron-down"></i></a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Spinners -->
                <!-- Tags Input -->
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                TAGS INPUT
                                <small>Taken from <a href="https://github.com/bootstrap-tagsinput/bootstrap-tagsinput" target="_blank">github.com/bootstrap-tagsinput/bootstrap-tagsinput</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="form-group demo-tagsinput-area">
                                <div class="form-line focused">
                                    <div class="bootstrap-tagsinput"><span class="tag label label-info">Amsterdam<span data-role="remove"></span></span> <span class="tag label label-info">Washington<span data-role="remove"></span></span> <span class="tag label label-info">Sydney<span data-role="remove"></span></span> <span class="tag label label-info">Beijing<span data-role="remove"></span></span> <span class="tag label label-info">Cairo<span data-role="remove"></span></span> <input type="text" placeholder=""></div><input type="text" class="form-control" data-role="tagsinput" value="Amsterdam,Washington,Sydney,Beijing,Cairo" style="display: none;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Tags Input -->
            </div>
            <!-- Advanced Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                ADVANCED SELECT
                                <small>Taken from <a href="https://silviomoreto.github.io/bootstrap-select/" target="_blank">silviomoreto.github.io/bootstrap-select</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-3">
                                    <p>
                                        <b>Basic</b>
                                    </p>
                                    <div class="btn-group bootstrap-select form-control show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Mustard"><span class="filter-option pull-left">Mustard</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Mustard</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Ketchup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Relish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control show-tick" tabindex="-98">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select></div>

                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>With OptGroups</b>
                                    </p>
                                    <div class="btn-group bootstrap-select form-control show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Mustard"><span class="filter-option pull-left">Mustard</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li class="dropdown-header " data-optgroup="1"><span class="text">Picnic</span></li><li data-original-index="0" data-optgroup="1" class="selected"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Mustard</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1" data-optgroup="1"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Ketchup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2" data-optgroup="1"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Relish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-optgroup="2div"></li><li class="dropdown-header " data-optgroup="2"><span class="text">Camping</span></li><li data-original-index="3" data-optgroup="2"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Tent</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4" data-optgroup="2"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Flashlight</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5" data-optgroup="2"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Toilet Paper</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control show-tick" tabindex="-98">
                                        <optgroup label="Picnic">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Camping">
                                            <option>Tent</option>
                                            <option>Flashlight</option>
                                            <option>Toilet Paper</option>
                                        </optgroup>
                                    </select></div>

                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>Multiple Select</b>
                                    </p>
                                    <div class="btn-group bootstrap-select show-tick form-control"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Mustard</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Ketchup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Relish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control show-tick" multiple="" tabindex="-98">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                    </select></div>

                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>With Search Bar</b>
                                    </p>
                                    <div class="btn-group bootstrap-select form-control show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Hot Dog, Fries and a Soda"><span class="filter-option pull-left">Hot Dog, Fries and a Soda</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><div class="bs-searchbox"><input type="text" class="form-control" autocomplete="off"></div><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Hot Dog, Fries and a Soda</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Burger, Shake and a Smile</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Sugar, Spice and all things nice</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control show-tick" data-live-search="true" tabindex="-98">
                                        <option>Hot Dog, Fries and a Soda</option>
                                        <option>Burger, Shake and a Smile</option>
                                        <option>Sugar, Spice and all things nice</option>
                                    </select></div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-md-3">
                                    <p>
                                        <b>Max Selection Limit: 2</b>
                                    </p>
                                    <div class="btn-group bootstrap-select show-tick form-control"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li class="dropdown-header " data-optgroup="1"><span class="text">Condiments</span></li><li data-original-index="0" data-optgroup="1"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Mustard</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1" data-optgroup="1"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Ketchup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2" data-optgroup="1"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Relish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-optgroup="2div"></li><li class="dropdown-header " data-optgroup="2"><span class="text">Breads</span></li><li data-original-index="3" data-optgroup="2"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Plain</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="4" data-optgroup="2"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Steamed</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="5" data-optgroup="2"><a tabindex="0" class="opt  " style="" data-tokens="null"><span class="text">Toasted</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control show-tick" multiple="" tabindex="-98">
                                        <optgroup label="Condiments" data-max-options="2">
                                            <option>Mustard</option>
                                            <option>Ketchup</option>
                                            <option>Relish</option>
                                        </optgroup>
                                        <optgroup label="Breads" data-max-options="2">
                                            <option>Plain</option>
                                            <option>Steamed</option>
                                            <option>Toasted</option>
                                        </optgroup>
                                    </select></div>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>Display Count</b>
                                    </p>
                                    <div class="btn-group bootstrap-select show-tick form-control"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Nothing selected"><span class="filter-option pull-left">Nothing selected</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Mustard</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Ketchup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Relish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Onions</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control show-tick" multiple="" data-selected-text-format="count" tabindex="-98">
                                        <option>Mustard</option>
                                        <option>Ketchup</option>
                                        <option>Relish</option>
                                        <option>Onions</option>
                                    </select></div>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>With SubText</b>
                                    </p>
                                    <div class="btn-group bootstrap-select form-control show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Mustard French's"><span class="filter-option pull-left">Mustard <small class="text-muted">French's</small></span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Mustard<small class="text-muted">French's</small></span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Ketchup<small class="text-muted">Heinz</small></span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Relish<small class="text-muted">Sweet</small></span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="3"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Mayonnaise<small class="text-muted">Miracle Whip</small></span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li class="divider" data-original-index="4"></li><li data-original-index="5"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Barbecue Sauce<small class="text-muted">Honey</small></span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="6"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Salad Dressing<small class="text-muted">Ranch</small></span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="7"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Tabasco<small class="text-muted">Sweet &amp; Spicy</small></span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="8"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Salsa<small class="text-muted">Chunky</small></span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control show-tick" data-show-subtext="true" tabindex="-98">
                                        <option data-subtext="French's">Mustard</option>
                                        <option data-subtext="Heinz">Ketchup</option>
                                        <option data-subtext="Sweet">Relish</option>
                                        <option data-subtext="Miracle Whip">Mayonnaise</option>
                                        <option data-divider="true"></option>
                                        <option data-subtext="Honey">Barbecue Sauce</option>
                                        <option data-subtext="Ranch">Salad Dressing</option>
                                        <option data-subtext="Sweet &amp; Spicy">Tabasco</option>
                                        <option data-subtext="Chunky">Salsa</option>
                                    </select></div>
                                </div>
                                <div class="col-md-3">
                                    <p>
                                        <b>Disabled Option</b>
                                    </p>
                                    <div class="btn-group bootstrap-select form-control show-tick"><button type="button" class="btn dropdown-toggle btn-default" data-toggle="dropdown" title="Mustard"><span class="filter-option pull-left">Mustard</span>&nbsp;<span class="bs-caret"><span class="caret"></span></span></button><div class="dropdown-menu open"><ul class="dropdown-menu inner" role="menu"><li data-original-index="0" class="selected"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Mustard</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="1" class="disabled"><a tabindex="-1" class="" style="" data-tokens="null" href="#"><span class="text">Ketchup</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li><li data-original-index="2"><a tabindex="0" class="" style="" data-tokens="null"><span class="text">Relish</span><span class="glyphicon glyphicon-ok check-mark"></span></a></li></ul></div><select class="form-control show-tick" tabindex="-98">
                                        <option>Mustard</option>
                                        <option disabled="">Ketchup</option>
                                        <option>Relish</option>
                                    </select></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Select -->
            <!-- Input Slider -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                INPUT SLIDER
                                <small>Taken from <a href="http://refreshless.com/nouislider" target="_blank">refreshless.com/nouislider</a> &amp; <a href="http://materializecss.com" target="_blank">materializecss.com</a></small>
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Another action</a></li>
                                        <li><a href="javascript:void(0);" class=" waves-effect waves-block">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-6">
                                    <p><b>Basic Example</b></p>
                                    <div id="nouislider_basic_example" class="noUi-target noUi-ltr noUi-horizontal noUi-connect"><div class="noUi-base"><div class="noUi-origin noUi-background" style="left: 30%;"><div class="noUi-handle noUi-handle-lower"></div></div></div></div>
                                    <div class="m-t-20 font-12"><b>Value: </b><span class="js-nouislider-value">30%</span></div>
                                </div>
                                <div class="col-md-6">
                                    <p><b>Range Example</b></p>
                                    <div id="nouislider_range_example" class="noUi-target noUi-ltr noUi-horizontal noUi-background"><div class="noUi-base"><div class="noUi-origin noUi-connect" style="left: 10%;"><div class="noUi-handle noUi-handle-lower"></div></div><div class="noUi-origin noUi-background" style="left: 50%;"><div class="noUi-handle noUi-handle-upper"></div></div></div></div>
                                    <div class="m-t-20 font-12"><b>Value: </b><span class="js-nouislider-value">32500.00,62500.00</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Input Slider -->
        </div>                        






        <button type="SEND" class="btn btn-block btn-lg btn-primary waves-effect">SEND</button>
@endsection

@section('extra-script')

@endsection
