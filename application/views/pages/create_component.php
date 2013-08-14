<div class='row-fluid'>
    <div class='span12'>
        <?php echo form_open('', array('class' => 'form-horizontal')); ?>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3'>
                    <div class="control-group">
                        <label class="control-label" for ="program_name">Select Program</label>
                        <div class="controls">
                            <select name="program_name">
                                <option value="">--Select Program Name--</option>
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
                        <label class="control-label" for ="component_title">Component Title</label>
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
                        <label class="control-label" for ="component_code">Component Code</label>
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
                        <label class="control-label" for ="component_obj">Component Objective</label>
                        <div class="controls">
                            <input type='text' name='component_obj' placeholder="Component Objective">
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
                        <label class="control-label" for ="currency">Currency</label>
                        <div class="controls">
                            <select name='currency'>
                                <option value=''>--Select Currency--</option>
                                <option value='1'>US Dollars</option>
                                <option value='2'>GH Cedi</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class='row-fluid'>
            <div class='span12 form_elements_holder'>
                <div class='span6 offset3'>
                    <div class="control-group">
                        <label class="control-label" for ="component_amount">Component Amount</label>
                        <div class="controls">
                            <input type='text' name='component_amount' placeholder='E.g. 1,000,000.00'>
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
                            <button class='m-btn blue form_button'>Create Component</button>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <?php echo form_close(); ?>
    </div>
</div>
