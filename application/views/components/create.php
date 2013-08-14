<center><br/>
<p><?php  ?></p>
<h2>Create component</h2>
<?php echo validation_errors(); ?>

<?php echo form_open('components/create') ?>

	<label for="component_code">Component code</label> 
	<input type="input" name="component_code" /><br />
        
        <label for="program_code">Program code</label> 
	<?php echo $this->session->userdata['program_code']; ?><br />
        
        <label for="component_title">Component title</label> 
	<input type="input" name="component_title" /><br />
        
        <label for="component_amount">Component amount</label> 
	<input type="input" name="component_amount" /><br />

	
	<input type="submit" name="submit" value="Create component" /> 

</form>
</center>