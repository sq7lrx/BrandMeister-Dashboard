    <div class="modal hide fade" id="modal_config">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Settings</h3>
        </div>
        <div class="modal-body">
            <div class="tabbable">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#config_tab_lh" data-toggle="tab">LH</a></li>
                    <li><a href="#tab2" data-toggle="tab">Section 2</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="config_tab_lh">
                        <div class="checkbox">
                          <label><input type="checkbox" id="datetime"> Display date/time per QSO</label>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab2">
                        <p>Here settings can be configured...</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" onclick="saveSettings();" class="btn btn-primary">Save changes</a>
        </div>
    </div>
