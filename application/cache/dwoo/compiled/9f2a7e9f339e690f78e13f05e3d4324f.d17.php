<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ?>			<div class="content-module-main">
				<form id="users-mod" method="POST" onsubmit="return editUser();">
					<p><a href="/acp/dashboard/users" style="position: relative; border-bottom: 1px dotted; font-size: 11px; bottom: 3px;">Back</a></p>
					<?php 
$_fh0_data = (isset($this->scope["user"]) ? $this->scope["user"] : null);
if ($this->isArray($_fh0_data) === true)
{
	foreach ($_fh0_data as $this->scope['val'])
	{
/* -- foreach start output */
?>
					<p>
						<label for="full-width-input">ID</label>
						<input id="full-width-input" class="round full-width-input" type="text" readonly="readonly" name="id" value="<?php echo $this->scope["val"]["id"];?>" />
						<em>User's ID as it appears in the database.</em>
					</p>
					<p>
						<label for="full-width-input">First Name</label>
						<input id="full-width-input" class="round full-width-input" type="text" name="fname" value="<?php echo $this->scope["val"]["name"];?>" />
						<em>This field is required.</em>
					</p>
					<p>
						<label for="full-width-input">Last Name</label>
						<input id="full-width-input" class="round full-width-input" type="text" name="lname" value="<?php echo $this->scope["val"]["l_name"];?>" />
						<em>This field is required.</em>
					</p>
					<p>
						<label for="full-width-input">Username</label>
						<input id="full-width-input" class="round full-width-input" type="text" name="uname" value="<?php echo $this->scope["val"]["username"];?>"  />
						<em>This field is required. Must contain at least 7 characters.</em>
					</p>
					<p>
						<label for="full-width-input">E-Mail</label>
						<input id="full-width-input" class="round full-width-input" type="text" name="email" value="<?php echo $this->scope["val"]["email"];?>" />
						<em>This field is required. Insert a valid e-mail.</em>
					</p>
					<p>
						<label for="full-width-input">Rank</label>
						<input id="full-width-input" class="round full-width-input" type="text" name="rank" value="<?php echo $this->scope["val"]["rank"];?>" />
						<em>This field is not required. Default: 0</em>
					</p>
					<?php 
/* -- foreach end output */
	}
}?>

					
					<br/><div class="information-box round">Valid informations required.</div>
					<div id="error-placeholder"></div>
					
					<br /><input type="submit" value="submit" class="round blue ic-right-arrow" />
				</form>
			</div> <!-- end content-module-main --><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>