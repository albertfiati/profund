<div class='row-fluid'>
    <div class='span12'>
        <?php echo form_open('', array('class' => 'form-horizontal')); ?>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3'>
                    <div class="control-group">
                        <label class="control-label" for ="program_name">Select Component</label>
                        <div class="controls">
                            <select name="program_name">
                                <option value="">--Select Component Name--</option>
                                <option value="1">Danida Educational Project</option>
                                <option value="2">Nsawam Road Project</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3 first_form'>
                    <div class="control-group">
                        <label class="control-label" for ="component_title">Sub Component Title</label>
                        <div class="controls">
                            <input type='text' name='component_title' placeholder="Component Title">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3 first_form'>
                    <div class="control-group">
                        <label class="control-label" for ="component_code">Sub Component Code</label>
                        <div class="controls">
                            <input type='text' name='component_code' placeholder="Component Code">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3 first_form'>
                    <div class="control-group">
                        <label class="control-label" for ="component_obj">Description</label>
                        <div class="controls">
                            <input type='text' name='describtion' placeholder="Sub Component Description">
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3 first_form'>
                    <div class="control-group">
                        <label class="control-label" for ="start_date">Commencement Date</label>
                        <div class="controls">
                            <input type='text' name='start_date'>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3'>
                    <div class="control-group">
                        <label class="control-label" for ="agency">Agency</label>
                        <div class="controls">
                            <input type='text' name='agency' placeholder="E.g GHA">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3'>
                    <div class="control-group">
                        <label class="control-label" for ="donor_cost">Donor Cost</label>
                        <div class="controls">
                            <input type='text' name='donor_cost' placeholder='Donor Cost'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3'>
                    <div class="control-group">
                        <label class="control-label" for ="local_cost">Local Cost</label>
                        <div class="controls">
                            <input type='text' name='local_cost' placeholder='Local Cost'>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3 first_form'>
                    <div class="control-group">
                        <div class="controls">
                            <button class='m-btn blue form_button'>Create Sub Component</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
