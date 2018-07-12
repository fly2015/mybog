
<div class="row">
    <div class="col-xs-12">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="name"> Name </label>

                <div class="col-sm-9">
                    <input type="text" id="name" name="name" placeholder="" class="col-xs-10 col-sm-5" />
                </div>
            </div>

            <div class="form-group">                            
                <label class="col-sm-3 control-label no-padding-right" for="slug"> Slug </label>

                <div class="col-sm-9">
                    <input type="text" id="slug" name="slug" placeholder="" class="col-xs-10 col-sm-6" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="type">Type</label>
                <div class="col-sm-3">
                    <select class="form-control col-xs-10 col-sm-5" name="type" id="type">
                        <option value=""></option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-3 control-label no-padding-right" for="status">Status</label>
                <div class="col-sm-3">
                    <label style="padding-top: 5px;">
                        <input name="status" id="status" class="ace ace-switch ace-switch-5" type="checkbox" />
                        <span class="lbl"></span>
                    </label>
                </div>
            </div>

            <div class="form-group">                            
                <label class="col-sm-3 control-label no-padding-right" for="position"> Position </label>

                <div class="col-sm-9">
                    <input type="text" id="position" name="position" placeholder="" class="col-xs-10 col-sm-2" />
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-3 col-md-9">
                    <button class="btn btn-info" type="button">
                        <i class="ace-icon fa fa-check bigger-110"></i>
                        Submit
                    </button>

                    &nbsp; &nbsp; &nbsp;
                    <button class="btn" type="reset">
                        <i class="ace-icon fa fa-undo bigger-110"></i>
                        Reset
                    </button>
                </div>
            </div>

        </form>

        <!-- PAGE CONTENT ENDS -->
    </div><!-- /.col -->
</div><!-- /.row -->