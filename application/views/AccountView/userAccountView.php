<h3><strong>Workforce Bids Account</strong></h3>
		<div id='description'>
			<table>
				<tr>
					<td>
						E-Mail: 
					</td>
					<td>
						<?php echo $_SESSION['loggedInUser']['user_email'];?>
					</td>
				</tr>	
				<tr>
					<td>
						Pass:
					</td>
					<td>
						<a href="#"> <i>Hidden</i> </a>
					</td>
				</tr>
				<tr>
					<td>
						Created:
					</td>
					<td>
						<?php echo $_SESSION['loggedInUser']['date_created']; ?>
					</td>
				</tr>
			</table>
		</div>