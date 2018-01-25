<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <title>杭州北望信息管理系统 - 网站基本信息</title>
    <meta name="keywords" content=" 杭州北望信息管理系统,后台管理系统,生物医药,杭州,网站基本信息"/>
    <meta name="description" content="杭州北望信息管理系统之网站基本信息管理"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <!-- basic styles -->

    <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
    <link rel="stylesheet" href="assets/css/font-awesome.min.css"/>

    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css"/>
    <![endif]-->

    <!-- page specific plugin styles -->

    <link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css"/>
    <link rel="stylesheet" href="assets/css/chosen.css"/>
    <link rel="stylesheet" href="assets/css/datepicker.css"/>
    <link rel="stylesheet" href="assets/css/bootstrap-timepicker.css"/>
    <link rel="stylesheet" href="assets/css/daterangepicker.css"/>
    <link rel="stylesheet" href="assets/css/colorpicker.css"/>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <link rel="stylesheet" href="../style/css/sweetalert.css"/>
    <link rel="stylesheet" href="../style/css/sweet-alert.css"/>
    <link href="assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">

    <!-- fonts -->

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300"/>

    <!-- ace styles -->

    <link rel="stylesheet" href="assets/css/ace.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-rtl.min.css"/>
    <link rel="stylesheet" href="assets/css/ace-skins.min.css"/>

    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css"/>
    <![endif]-->

    <!-- inline styles related to this page -->

    <!-- ace settings handler -->
    <script src="assets/js/ace-extra.min.js"></script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <script src="http://cdn.bootcss.com/jquery/2.0.3/jquery.min.js"></script>
    <![endif]-->
</head>

<body>
<?php
require_once "../controller/adminHeader.php";
$header = AdminHeader::getInstance();
$header->headerGenerate(12, 0);
?>

            <div class="sidebar-collapse" id="sidebar-collapse">
                <i class="icon-double-angle-left" data-icon1="icon-double-angle-left"
                   data-icon2="icon-double-angle-right"></i>
            </div>

            <script type="text/javascript">
                try {
                    ace.settings.check('sidebar', 'collapsed')
                } catch (e) {
                }
            </script>
        </div>

        <div class="main-content">
            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try {
                        ace.settings.check('breadcrumbs', 'fixed')
                    } catch (e) {
                    }
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="icon-home home-icon"></i>
                        <a href="main.php">主页</a>
                    </li>
                    <li class="active">网站基本信息</li>
                </ul><!-- .breadcrumb -->


            </div>

            <div class="page-content">
                <div class="page-header">
                    <h1>网站基本信息</h1>
                </div><!-- /.page-header -->
                <div class="row">
                    <div class="col-xs-12">
                        <form class="form-horizontal" role="form" action="../controller/Base.php"
                              method="post" enctype="multipart/form-data" onsubmit="return baseValidate()">

                            <div class="form-group">
                                <input type="text" id="baseId" name="baseId" class="col-xs-10 col-sm-10 hidden"/>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="webtitle">网站名称</label>

                                <div class="col-sm-10 col-md-10 col-lg-10">
                                    <input type="text" id="webtitle" name="webtitle" placeholder="请输入网站名称"
                                           class="col-xs-10 col-sm-10"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="webtitleError">
                                <label class="col-sm-2 control-label no-padding-right"></label>

                                <div class="col-sm-10 error"></div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="companyIntr">公司介绍</label>

                                <div class="col-sm-10 col-md-10 col-lg-10">
                                    <textarea id="companyIntr" name="companyIntr" class="autosize-transition col-xs-10 col-sm-10" placeholder="请输入公司介绍"></textarea>
                                </div>
                            </div>
                            <div class="form-group hidden" id="companyIntrError">
                                <label class="col-sm-2 control-label no-padding-right"></label>

                                <div class="col-sm-10 error"></div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="address">公司地址</label>

                                <div class="col-sm-10 col-md-10 col-lg-10">
                                    <input type="text" id="address" name="address" placeholder="请输入公司地址"
                                           class="col-xs-10 col-sm-10"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="addressError">
                                <label class="col-sm-2 control-label no-padding-right"></label>

                                <div class="col-sm-10 error"></div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="AdminiatratorTel">行政综合部电话</label>

                                <div class="col-sm-10 col-md-10 col-lg-10">
                                    <input type="text" id="AdminiatratorTel" name="AdminiatratorTel" placeholder="请输入行政综合部电话"
                                           class="col-xs-10 col-sm-10"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="AdminiatratorTelError">
                                <label class="col-sm-2 control-label no-padding-right"></label>

                                <div class="col-sm-10 error"></div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="enzymeTel">酶事业部部电话</label>

                                <div class="col-sm-10 col-md-10 col-lg-10">
                                    <input type="text" id="enzymeTel" name="enzymeTel" placeholder="请输入酶事业部部电话"
                                           class="col-xs-10 col-sm-10"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="enzymeTelError">
                                <label class="col-sm-2 control-label no-padding-right"></label>

                                <div class="col-sm-10 error"></div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="plateTel">平皿事业部电话</label>

                                <div class="col-sm-10 col-md-10 col-lg-10">
                                    <input type="text" id="plateTel" name="plateTel" placeholder="请输入平皿事业部电话"
                                           class="col-xs-10 col-sm-10"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="plateTelError">
                                <label class="col-sm-2 control-label no-padding-right"></label>

                                <div class="col-sm-10 error"></div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="fax">传真</label>

                                <div class="col-sm-10 col-md-10 col-lg-10">
                                    <input type="text" id="fax" name="fax" placeholder="请输入传真"
                                           class="col-xs-10 col-sm-10"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="faxError">
                                <label class="col-sm-2 control-label no-padding-right"></label>

                                <div class="col-sm-10 error"></div>
                            </div>

                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="adminiatratorEmail">行政部邮箱</label>

                                <div class="col-sm-10 col-md-10 col-lg-10">
                                    <input type="text" id="adminiatratorEmail" name="adminiatratorEmail" placeholder="请输入行政部邮箱"
                                           class="col-xs-10 col-sm-10"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="adminiatratorEmailError">
                                <label class="col-sm-2 control-label no-padding-right"></label>

                                <div class="col-sm-10 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="MarketDepartmentEmail">市场部邮箱</label>

                                <div class="col-sm-10 col-md-10 col-lg-10">
                                    <input type="text" id="MarketDepartmentEmail" name="MarketDepartmentEmail" placeholder="请输入市场部邮箱"
                                           class="col-xs-10 col-sm-10"/>
                                </div>
                            </div>
                            <div class="form-group hidden" id="MarketDepartmentEmailError">
                                <label class="col-sm-2 control-label no-padding-right"></label>

                                <div class="col-sm-10 error"></div>
                            </div>


                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="id-input-file-1">网站logo</label>

                                <div class="col-sm-10 col-md-10 col-lg-10">
                                    <input type="file" name="myFile1" id="id-input-file-1" class="col-xs-10 col-sm-10"/>

                                </div>
                            </div>
                            <div class="form-group hidden" id="myFile1Error">
                                <label class="col-sm-2 control-label no-padding-right"></label>

                                <div class="col-sm-10 error"></div>
                            </div>

                            <div class="space-4"></div>
                            <div class="form-group">
                                <label class="col-sm-2 control-label no-padding-right" for="id-input-file-2">微信二维码</label>

                                <div class="col-sm-10 col-md-10 col-lg-10">
                                    <input type="file" name="myFile2" id="id-input-file-2" class="col-xs-10 col-sm-10"/>

                                </div>
                            </div>
                            <div class="space-4"></div>

                            <div class="clearfix ">
                                <div class="col-md-offset-3 col-md-9">
                                    <input type="submit" value="提交" class="btn btn-info"/>
                                </div>
                            </div>
                    </div>

                </div>
            </div><!-- /.main-content -->


            <div class="ace-settings-container" id="ace-settings-container">
                <div class="btn btn-app btn-xs btn-warning ace-settings-btn" id="ace-settings-btn">
                    <i class="icon-cog bigger-150"></i>
                </div>

                <div class="ace-settings-box" id="ace-settings-box">
                    <div>
                        <div class="pull-left">
                            <select id="skin-colorpicker" class="hide">
                                <option data-skin="default" value="#438EB9">#438EB9</option>
                                <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                                <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                                <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                            </select>
                        </div>
                        <span>&nbsp; Choose Skin</span>
                    </div>

                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar"/>
                        <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                    </div>

                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar"/>
                        <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                    </div>

                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs"/>
                        <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                    </div>

                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl"/>
                        <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                    </div>

                    <div>
                        <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-add-container"/>
                        <label class="lbl" for="ace-settings-add-container">
                            Inside
                            <b>.container</b>
                        </label>
                    </div>
                </div>
            </div><!-- /#ace-settings-container -->
        </div><!-- /.main-container-inner -->

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="icon-double-angle-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->


    <!-- <![endif]-->

    <!--[if IE]>
    <script src="http://cdn.bootcss.com/jquery/1.10.2/jquery.min.js"></script><![endif]-->
    <![endif]-->

    <!--[if !IE]> -->

    <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>" + "<" + "/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
    <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>" + "<" + "/script>");
    </script>
    <![endif]-->

    <script type="text/javascript">
        if ("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>" + "<" + "/script>");
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/typeahead-bs2.min.js"></script>

    <!-- page specific plugin scripts -->

    <!--[if lte IE 8]>
    <script src="assets/js/excanvas.min.js"></script>
    <![endif]-->

    <script src="assets/js/jquery-ui-1.10.3.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script src="assets/js/chosen.jquery.min.js"></script>
    <script src="assets/js/fuelux/fuelux.spinner.min.js"></script>
    <script src="assets/js/date-time/bootstrap-datepicker.min.js"></script>
    <script src="assets/js/date-time/bootstrap-timepicker.min.js"></script>
    <script src="assets/js/date-time/moment.min.js"></script>
    <script src="assets/js/date-time/daterangepicker.min.js"></script>
    <script src="assets/js/bootstrap-colorpicker.min.js"></script>
    <script src="assets/js/jquery.knob.min.js"></script>
    <script src="assets/js/jquery.autosize.min.js"></script>
    <script src="assets/js/jquery.inputlimiter.1.3.1.min.js"></script>
    <script src="assets/js/jquery.maskedinput.min.js"></script>
    <script src="assets/js/bootstrap-tag.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
    <script type="text/javascript" src="assets/js/bootstrap-datetimepicker.min.js" charset="UTF-8"></script>
    <!-- ace scripts -->

    <script src="assets/js/bootstrap-wysiwyg.min.js"></script>

    <script src="assets/js/ace-elements.min.js"></script>
    <script src="assets/js/ace.min.js"></script>
    <script src="../style/js/sweetalert.min.js"></script>
    <script src="assets/js/markdown/markdown.min.js"></script>
    <script src="assets/js/markdown/bootstrap-markdown.min.js"></script>
    <script src="assets/js/bootbox.min.js"></script>
    <script src="assets/js/jquery.hotkeys.min.js"></script>


    <!-- inline scripts related to this page -->
    <script type="text/javascript">
        /*
         获取url传递的参数：产品id
         */
        function GetQueryString(name) {
            var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)");
            var r = window.location.search.substr(1).match(reg);
            if (r != null)return unescape(r[2]);
            return null;
        }


        var message = GetQueryString("m");
        if(message == "as"){
            message = "发布成功";
        }else  if(message == "af"){
            message = "发布失败";
        }else  if(message == "us"){
            message = "更新成功";
        }else  if(message == "uf"){
            message = "更新失败";
        }
        if(message != "" && message != null && message != undefined){
            swal(message);
            setTimeout(function () {
                window.location.href = "base.php";
            }, 1000);
        }



        $("#webtitle").on("blur", function () {
            if ($("#webtitle").val() === "") {
                $("#webtitleError").removeClass("hidden");
                $("#webtitleError>div").text("温馨提示：网站名称不能为空");
            } else {
                $("#webtitleError").addClass("hidden");
            }
        });

        $("#companyIntr").on("blur", function () {
            if ($("#companyIntr").val() === "") {
                $("#companyIntrError").removeClass("hidden");
                $("#companyIntrError>div").text("温馨提示：公司介绍不能为空");
            } else {
                $("#companyIntrError").addClass("hidden");
            }
        });
        $("#address").on("blur",function(){
            if ($("#address").val() === "") {
                $("#addressError").removeClass("hidden");
                $("#addressError>div").text("温馨提示：公司地址不能为空");
            } else {
                $("#addressError").addClass("hidden");
            }
        });
        $("#AdminiatratorTel").on("blur",function(){
            if ($("#AdminiatratorTel").val() === "") {
                $("#AdminiatratorTelError").removeClass("hidden");
                $("#AdminiatratorTelError>div").text("温馨提示：行政综合部电话不能为空");
            } else {
                $("#AdminiatratorTelError").addClass("hidden");
            }
        });

        $("#enzymeTel").on("blur",function(){
            if ($("#enzymeTel").val() === "") {
                $("#enzymeTelError").removeClass("hidden");
                $("#enzymeTelError>div").text("温馨提示：酶事业部电话不能为空");
            } else {
                $("#enzymeTelError").addClass("hidden");
            }
        });

        $("#plateTel").on("blur",function(){
            if ($("#plateTel").val() === "") {
                $("#plateTelError").removeClass("hidden");
                $("#plateTelError>div").text("温馨提示：平皿事业部电话不能为空");
            } else {
                $("#plateTelError").addClass("hidden");
            }
        });

        $("#fax").on("blur",function(){
            if ($("#fax").val() === "") {
                $("#faxError").removeClass("hidden");
                $("#faxError>div").text("温馨提示：传真不能为空");
            } else {
                $("#faxError").addClass("hidden");
            }
        });

        $("#adminiatratorEmail").on("blur",function(){
            if ($("#adminiatratorEmail").val() === "") {
                $("#adminiatratorEmailError").removeClass("hidden");
                $("#adminiatratorEmailError>div").text("温馨提示：行政部邮箱不能为空");
            } else {
                $("#adminiatratorEmailError").addClass("hidden");
            }
        });


        $("#MarketDepartmentEmail").on("blur",function(){
            if ($("#MarketDepartmentEmail").val() === "") {
                $("#MarketDepartmentEmailError").removeClass("hidden");
                $("#MarketDepartmentEmailError>div").text("温馨提示：市场部邮箱不能为空");
            } else {
                $("#MarketDepartmentEmailError").addClass("hidden");
            }
        });


        function baseValidate() {
            var whether = false;

            $("input[type='file']").each(function(){
                if($(this).val() === ""){
                    $("#"+$(this).prop("name")+"Error").removeClass("hidden");
                    $("#"+$(this).prop("name")+"Error"+">div").text("温馨提示：请上传至少一张产品图片");
                    whether = false;
                }else {
                    whether = true;
                    $("#"+$(this).prop("name")+"Error").addClass("hidden");
                }
            });


            if ($("#webtitle").val() === "") {
                $("#webtitleError").removeClass("hidden");
                $("#webtitleError>div").text("温馨提示：网站名称不能为空");
                whether = false;
            } else {
                $("#webtitleError").addClass("hidden");
                whether = true;
            }


            if ($("#companyIntr").val() === "") {
                $("#companyIntrError").removeClass("hidden");
                $("#companyIntrError>div").text("温馨提示：公司介绍不能为空");
                whether = false;
            } else {
                $("#companyIntrError").addClass("hidden");
                whether = true;
            }

            if ($("#address").val() === "") {
                $("#addressError").removeClass("hidden");
                $("#addressError>div").text("温馨提示：公司地址不能为空");
                whether = false;
            } else {
                $("#addressError").addClass("hidden");
                whether = true;
            }

            if ($("#AdminiatratorTel").val() === "") {
                $("#AdminiatratorTelError").removeClass("hidden");
                $("#AdminiatratorTelError>div").text("温馨提示：行政综合部电话不能为空");
                whether = false;
            } else {
                $("#AdminiatratorTelError").addClass("hidden");
                whether = true;
            }

            if ($("#enzymeTel").val() === "") {
                $("#enzymeTelError").removeClass("hidden");
                $("#enzymeTelError>div").text("温馨提示：酶事业部电话不能为空");
                whether = false;
            } else {
                $("#enzymeTelError").addClass("hidden");
                whether = true;
            }

            if ($("#plateTel").val() === "") {
                $("#plateTelError").removeClass("hidden");
                $("#plateTelError>div").text("温馨提示：平皿事业部电话不能为空");
                whether = false;
            } else {
                $("#plateTelError").addClass("hidden");
                whether = true;
            }

            if ($("#fax").val() === "") {
                $("#faxError").removeClass("hidden");
                $("#faxError>div").text("温馨提示：传真不能为空");
                whether = false;
            } else {
                $("#faxError").addClass("hidden");
                whether = true;
            }

            if ($("#adminiatratorEmail").val() === "") {
                $("#adminiatratorEmailError").removeClass("hidden");
                $("#adminiatratorEmailError>div").text("温馨提示：行政部邮箱不能为空");
                whether = false;
            } else {
                $("#adminiatratorEmailError").addClass("hidden");
                whether = true;
            }


            if ($("#MarketDepartmentEmail").val() === "") {
                $("#MarketDepartmentEmailError").removeClass("hidden");
                $("#MarketDepartmentEmailError>div").text("温馨提示：市场部邮箱不能为空");
                whether = false;
            } else {
                $("#MarketDepartmentEmailError").addClass("hidden");
                whether = true;
            }

            return whether;
        }

        $.ajax({
            dataType: "json",
            type: "get",
            url: "../controller/Base.php?type=select",
            success: function (data) {
                if (data.code == 200) {
                    if(!jQuery.isEmptyObject(data.data)){
                        var datas = data.data[0];
                        $("#baseId").val(datas.id);
                        $("#webtitle").val(datas.webtitle);

                        $("#companyIntr").val(datas.companyIntroduce);
                        $("#address").val(datas.address);
                        $("#AdminiatratorTel").val(datas.administratorTel);


                        $("#enzymeTel").val(datas.enzymeTel);
                        $("#plateTel").val(datas.plateTel);
                        $("#fax").val(datas.fax);
                        $("#adminiatratorEmail").val(datas.adminiatratorEmail);
                        $("#MarketDepartmentEmail").val(datas.MarketDepartmentEmail);

                    }


                }
            },
            error: function (code, message, data) {
                alert("发生错误：" + message);
            }
        });

        function showErrorAlert(reason, detail) {
            var msg = '';
            if (reason === 'unsupported-file-type') {
                msg = "Unsupported format " + detail;
            }
            else {
                console.log("error uploading file", reason, detail);
            }
            $('<div class="alert"> <button type="button" class="close" data-dismiss="alert">&times;</button>' +
                '<strong>File upload error</strong> ' + msg + ' </div>').prependTo('#alerts');
        }

        $('#contentCopy').ace_wysiwyg({
            toolbar: [
                'font',
                null,
                'fontSize',
                null,
                {name: 'bold', className: 'btn-info'},
                {name: 'italic', className: 'btn-info'},
                {name: 'strikethrough', className: 'btn-info'},
                {name: 'underline', className: 'btn-info'},
                null,
                {name: 'insertunorderedlist', className: 'btn-success'},
                {name: 'insertorderedlist', className: 'btn-success'},
                {name: 'outdent', className: 'btn-purple'},
                {name: 'indent', className: 'btn-purple'},
                null,
                {name: 'justifyleft', className: 'btn-primary'},
                {name: 'justifycenter', className: 'btn-primary'},
                {name: 'justifyright', className: 'btn-primary'},
                {name: 'justifyfull', className: 'btn-inverse'},
                null,
                {name: 'createLink', className: 'btn-pink'},
                {name: 'unlink', className: 'btn-pink'},
                null,
                //{name: 'insertImage', className: 'btn-success'},
                null,
                null,
                'foreColor',
                null,
                {name: 'undo', className: 'btn-grey'},
                {name: 'redo', className: 'btn-grey'}
            ],
            'wysiwyg': {
                fileUploadError: showErrorAlert
            }
        }).prev().addClass('wysiwyg-style2');


        $('[data-toggle="buttons"] .btn').on('click', function (e) {
            var target = $(this).find('input[type=radio]');
            var which = parseInt(target.val());
            var toolbar = $('#editor1').prev().get(0);
            if (which == 1 || which == 2 || which == 3) {
                toolbar.className = toolbar.className.replace(/wysiwyg\-style(1|2)/g, '');
                if (which == 1) $(toolbar).addClass('wysiwyg-style1');
                else if (which == 2) $(toolbar).addClass('wysiwyg-style2');
            }
        });


        $('.form_datetime').datetimepicker({
            //language:  'fr',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            forceParse: 0,
            showMeridian: 1
        });
        $('.form_date').datetimepicker({
            language: 'fr',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 2,
            minView: 2,
            forceParse: 0
        });
        $('.form_time').datetimepicker({
            language: 'fr',
            weekStart: 1,
            todayBtn: 1,
            autoclose: 1,
            todayHighlight: 1,
            startView: 1,
            minView: 0,
            maxView: 1,
            forceParse: 0
        });
    </script>
    <script type="text/javascript">
        jQuery(function ($) {
            $('#id-disable-check').on('click', function () {
                var inp = $('#form-input-readonly').get(0);
                if (inp.hasAttribute('disabled')) {
                    inp.setAttribute('readonly', 'true');
                    inp.removeAttribute('disabled');
                    inp.value = "This text field is readonly!";
                }
                else {
                    inp.setAttribute('disabled', 'disabled');
                    inp.removeAttribute('readonly');
                    inp.value = "This text field is disabled!";
                }
            });


            $(".chosen-select").chosen();
            $('#chosen-multiple-style').on('click', function (e) {
                var target = $(e.target).find('input[type=radio]');
                var which = parseInt(target.val());
                if (which == 2) $('#form-field-select-4').addClass('tag-input-style');
                else $('#form-field-select-4').removeClass('tag-input-style');
            });


            $('[data-rel=tooltip]').tooltip({container: 'body'});
            $('[data-rel=popover]').popover({container: 'body'});

            $('textarea[class*=autosize]').autosize({append: "\n"});
            $('textarea.limited').inputlimiter({
                remText: '%n character%s remaining...',
                limitText: 'max allowed : %n.'
            });

            $.mask.definitions['~'] = '[+-]';
            $('.input-mask-date').mask('99/99/9999');
            $('.input-mask-phone').mask('(999) 999-9999');
            $('.input-mask-eyescript').mask('~9.99 ~9.99 999');
            $(".input-mask-product").mask("a*-999-a999", {
                placeholder: " ", completed: function () {
                    alert("You typed the following: " + this.val());
                }
            });


            $("#input-size-slider").css('width', '200px').slider({
                value: 1,
                range: "min",
                min: 1,
                max: 8,
                step: 1,
                slide: function (event, ui) {
                    var sizing = ['', 'input-sm', 'input-lg', 'input-mini', 'input-small', 'input-medium', 'input-large', 'input-xlarge', 'input-xxlarge'];
                    var val = parseInt(ui.value);
                    $('#form-field-4').attr('class', sizing[val]).val('.' + sizing[val]);
                }
            });

            $("#input-span-slider").slider({
                value: 1,
                range: "min",
                min: 1,
                max: 12,
                step: 1,
                slide: function (event, ui) {
                    var val = parseInt(ui.value);
                    $('#form-field-5').attr('class', 'col-xs-' + val).val('.col-xs-' + val);
                }
            });


            $("#slider-range").css('height', '200px').slider({
                orientation: "vertical",
                range: true,
                min: 0,
                max: 100,
                values: [17, 67],
                slide: function (event, ui) {
                    var val = ui.values[$(ui.handle).index() - 1] + "";

                    if (!ui.handle.firstChild) {
                        $(ui.handle).append("<div class='tooltip right in' style='display:none;left:16px;top:-6px;'><div class='tooltip-arrow'></div><div class='tooltip-inner'></div></div>");
                    }
                    $(ui.handle.firstChild).show().children().eq(1).text(val);
                }
            }).find('a').on('blur', function () {
                $(this.firstChild).hide();
            });

            $("#slider-range-max").slider({
                range: "max",
                min: 1,
                max: 10,
                value: 2
            });

            $("#eq > span").css({width: '90%', 'float': 'left', margin: '15px'}).each(function () {
                // read initial values from markup and remove that
                var value = parseInt($(this).text(), 10);
                $(this).empty().slider({
                    value: value,
                    range: "min",
                    animate: true

                });
            });


            $('#id-input-file-1 , #id-input-file-2').ace_file_input({
                no_file: '没有文件 ...',
                btn_choose: '选取文件',
                btn_change: '重新选取',
                droppable: false,
                onchange: null,
                thumbnail: false //| true | large
                //whitelist:'gif|png|jpg|jpeg'
                //blacklist:'exe|php'
                //onchange:''
                //
            });


            //dynamically change allowed formats by changing before_change callback function
            $('#id-file-format').removeAttr('checked').on('change', function () {
                var before_change
                var btn_choose
                var no_icon
                if (this.checked) {
                    btn_choose = "Drop images here or click to choose";
                    no_icon = "icon-picture";
                    before_change = function (files, dropped) {
                        var allowed_files = [];
                        for (var i = 0; i < files.length; i++) {
                            var file = files[i];
                            if (typeof file === "string") {
                                //IE8 and browsers that don't support File Object
                                if (!(/\.(jpe?g|png|gif|bmp)$/i).test(file)) return false;
                            }
                            else {
                                var type = $.trim(file.type);
                                if (( type.length > 0 && !(/^image\/(jpe?g|png|gif|bmp)$/i).test(type) )
                                    || ( type.length == 0 && !(/\.(jpe?g|png|gif|bmp)$/i).test(file.name) )//for android's default browser which gives an empty string for file.type
                                ) continue;//not an image so don't keep this file
                            }

                            allowed_files.push(file);
                        }
                        if (allowed_files.length == 0) return false;

                        return allowed_files;
                    }
                }
                else {
                    btn_choose = "Drop files here or click to choose";
                    no_icon = "icon-cloud-upload";
                    before_change = function (files, dropped) {
                        return files;
                    }
                }

            });


            $('#spinner1').ace_spinner({
                value: 0,
                min: 0,
                max: 200,
                step: 10,
                btn_up_class: 'btn-info',
                btn_down_class: 'btn-info'
            })
                .on('change', function () {
                    //alert(this.value)
                });
            $('#spinner2').ace_spinner({
                value: 0,
                min: 0,
                max: 10000,
                step: 100,
                touch_spinner: true,
                icon_up: 'icon-caret-up',
                icon_down: 'icon-caret-down'
            });
            $('#spinner3').ace_spinner({
                value: 0,
                min: -100,
                max: 100,
                step: 10,
                on_sides: true,
                icon_up: 'icon-plus smaller-75',
                icon_down: 'icon-minus smaller-75',
                btn_up_class: 'btn-success',
                btn_down_class: 'btn-danger'
            });


            $('.date-picker').datepicker({autoclose: true}).next().on(ace.click_event, function () {
                $(this).prev().focus();
            });
            $('input[name=date-range-picker]').daterangepicker().prev().on(ace.click_event, function () {
                $(this).next().focus();
            });

            $('#timepicker1').timepicker({
                minuteStep: 1,
                showSeconds: true,
                showMeridian: false
            }).next().on(ace.click_event, function () {
                $(this).prev().focus();
            });

            $('#colorpicker1').colorpicker();
            $('#simple-colorpicker-1').ace_colorpicker();


            $(".knob").knob();


            //we could just set the data-provide="tag" of the element inside HTML, but IE8 fails!
            var tag_input = $('#form-field-tags');
            if (!( /msie\s*(8|7|6)/.test(navigator.userAgent.toLowerCase()))) {
                tag_input.tag(
                    {
                        placeholder: tag_input.attr('placeholder'),
                        //enable typeahead by specifying the source array
                        source: ace.variable_US_STATES,//defined in ace.js >> ace.enable_search_ahead
                    }
                );
            }
            else {
                //display a textarea for old IE, because it doesn't support this plugin or another one I tried!
                tag_input.after('<textarea id="' + tag_input.attr('id') + '" name="' + tag_input.attr('name') + '" rows="3">' + tag_input.val() + '</textarea>').remove();
                //$('#form-field-tags').autosize({append: "\n"});
            }


            /////////
            $('#modal-form input[type=file]').ace_file_input({
                style: 'well',
                btn_choose: 'Drop files here or click to choose',
                btn_change: null,
                no_icon: 'icon-cloud-upload',
                droppable: true,
                thumbnail: 'large'
            })

            //chosen plugin inside a modal will have a zero width because the select element is originally hidden
            //and its width cannot be determined.
            //so we set the width after modal is show
            $('#modal-form').on('shown.bs.modal', function () {
                $(this).find('.chosen-container').each(function () {
                    $(this).find('a:first-child').css('width', '210px');
                    $(this).find('.chosen-drop').css('width', '210px');
                    $(this).find('.chosen-search input').css('width', '200px');
                });
            })
            /**
             //or you can activate the chosen plugin after modal is shown
             //this way select element becomes visible with dimensions and chosen works as expected
             $('#modal-form').on('shown', function () {
					$(this).find('.modal-chosen').chosen();
				})
             */

        });
    </script>
    <div style="display:none">
        <script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript'
                charset='gb2312'></script>
    </div>
</body>
</html>