
<div class="row">
    <div class="col-xs-12 col-sm-10 col-md-offset-1">
        <!-- PAGE CONTENT BEGINS -->
        <form class="form-horizontal" role="form">
            <div class="form-group">
                <label class="col-sm-1 control-label align-left" for="name"> Name </label>

                <div class="col-sm-9">
                    <input type="text" id="name" name="name" placeholder="" class="col-xs-12 col-sm-6" />
                </div>
            </div>

            <div class="form-group">                            
                <label class="col-sm-1 control-label align-left" for="slug"> Summary </label>

                <div class="col-sm-6">
                    <textarea class="form-control align-left" id="form-field-8" rows="4" placeholder=""></textarea>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label align-left" for="slug"> Image </label>
                <div class="col-sm-4">
                    <input multiple="" type="file" id="id-input-file-3" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label align-left" for="type">Type</label>
                <div class="col-sm-3">
                    <select class="form-control col-xs-10 col-sm-5" name="type" id="type">
                        <option value=""></option>
                        <option value="AL">Alabama</option>
                        <option value="WY">Wyoming</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label align-left" for="status">Status</label>
                <div class="col-sm-3">
                    <label style="padding-top: 5px;">
                        <input name="status" id="status" class="ace ace-switch ace-switch-5" type="checkbox" />
                        <span class="lbl"></span>
                    </label>
                </div>
            </div>

            <div class="form-group">                            
                <label class="col-sm-1 control-label align-left" for="position"> Position </label>

                <div class="col-sm-9">
                    <input type="text" id="position" name="position" placeholder="" class="col-xs-10 col-sm-2" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-1 control-label align-left" for="position"> Content </label>
                <div class="col-sm-9">

                    <div class="wysiwyg-editor" id="editor1"></div>
                </div>
            </div>

            <div class="clearfix form-actions">
                <div class="col-md-offset-4 col-md-8">
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
