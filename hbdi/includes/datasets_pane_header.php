<div class="pane-header">
    <ul class="nav nav-tabs " id="tabContent" style="display: inline-block;">
        <div style="display: inline-block" data-toggle="tooltip" data-placement="top"
             title="Quantitative or qualitative datasets">
            <li class="active title" style="padding-top: 2px"><a href="#" data-toggle="tab"> Datasets </a></li>
            |
        </div>
        <div style="display: inline-block" data-toggle="tooltip" data-placement="top"
             title="Working paper, drafts, manuscript, & preprints">
            <li class="title" style="padding-top: 2px"><a href="#" data-toggle="tab"> Documents </a></li>
            |
        </div>
        <div style="display: inline-block" data-toggle="tooltip" data-placement="top" title="Other types of files">
            <li class="title" style="padding-top: 2px"><a href="#" data-toggle="tab"> Files </a></li>
        </div>
    </ul>

    <!-- ##### search Box ##### -->
    <div style="display: inline-block; float: right; box-shadow: 2px 2px 2px lightgrey;">
        <form action="" style="
                            height: ;
                            float: right;
                            margin: 0 0 0 25px">
            <input type="text" placeholder=" Search files..."
                   onkeyup="showResult(this.value)" ;
                   style="border: 1px solid #8a6d3b; height: ;border-radius: 2px; padding: 2px 0 0 5px;">
            <button type="submit"
                    style="
                                float: right;
                                /*padding: 0;*/
                                background-color: white;
                                width: 35px;
                                margin: 2px 0 2px 0!important;

">
                <i class="fa fa-search fa-sm" style="color: #782f40"></i>
            </button>
            <!--                        <div style="background-color: #782f40" id="livesearch"></div>-->
        </form>
    </div>

    <!-- ### actions ### -->
    <span style="display: none; color: dimgrey; margin-left: 5px; text-decoration: none;" id="fileMenu">
                        <a href="#">Download</a> | <a href="#">Load (Scratch Drive)</a>  | <a href="#"> Move </a> | <a href="#"> Label (Metadata)</a> | <a
                href="#"> Delete </a>
                    </span>
</div>
<!-- ### end of pane header ### -->