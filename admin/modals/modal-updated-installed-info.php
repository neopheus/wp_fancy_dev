<?php

FPD_Admin_Modal::output_header(
	'fpd-modal-updated-installed-info',
	'',
	'',
	'fpd-admin-modal-visible'
);

?>

<div>
	<?php if( $_GET['info'] == 'activated' ): ?>
    <h3>Howdy, you activated Fancy Product Designer successfully.</h3>
    <p>Here you find some quick links that will help you to get started with the plugin:</p>
    <ul>
	    <li><a href="http://support.fancyproductdesigner.com/support/solutions/articles/5000548165-quick-setup" target="_blank">Quick Setup</a></li>
		<li><a href="http://support.fancyproductdesigner.com/support/solutions/articles/5000548183-introduction" target="_blank">Get an introduction in element options</a></li>
		<li><a href="http://support.fancyproductdesigner.com/support/solutions/folders/5000185390" target="_blank">Problem with the plugin? Check out the Troubleshooting solutions.</a></li>
		<li><a href="http://support.fancyproductdesigner.com/support/discussions/5000055017" target="_blank">Discuss with the community</a></li>
    </ul>
	<?php else: ?>
	<h3>Fancy Product Designer has been updated to the latest version.</h3>
	<p>Please check out the <a href="http://support.fancyproductdesigner.com/support/discussions/forums/5000283646" target="_blank">Changelog</a> and <a href="http://support.fancyproductdesigner.com/support/solutions/articles/5000582931-changelog-upgrading" target="_blank">Upgrading</a> instructions.</p>
	<?php endif; ?>

</div>

<?php
	FPD_Admin_Modal::output_footer();
?>