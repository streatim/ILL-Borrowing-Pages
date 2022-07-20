<?php //Set page Metadata
    $page = [
        'Title' => 'How do I Request - Dissertations or Theses',
        'Links' => [
			'requestArticle',
			'requestChapter',
            'requestBooks',
            'requestAV',
            'requestDissertations',
            'requestMicro',
            'requestRenewals',
        ],
        'Breadcrumbs' => [
            'Services' => False,
			'Borrowing from Other Libraries...' => 'borrowingOtherLibraries',
        ]
    ];
    $pageTitle = $page['Title'];
?>
	<!--Start Header-->
	<?php include($_SERVER['DOCUMENT_ROOT'] .'/header.php');?> 
	<!--END HEADER-->

	<!--Lead Section for Secondary Pages-->
	<?php include($_SERVER['DOCUMENT_ROOT'] .'/lead.php');?> 
	<!--END LEAD-->
    <?php echo buildPage('topHead-sidebar', $page); ?>
	<!--Do not edit above-->

	<!-- Content -->
	<div class="large-9 medium-9 columns">
		<div class="contentCopy">
			<p>You can request dissertations and theses from other libraries using the library's interlibrary loan services. There are no fees for UM-Dearborn students, faculty, or staff to place these requests.</p>
		</div>
		<div class="intro"><!--Bolded Section Header-->
            <p>Step-by-Step Instructions for requesting dissertations or theses through ILLiad</p>
        </div>
        <div class="contentCopy">
			<p>Some libraries will lend hardcopy or microfilm copies of dissertations or theses. These items can be difficult to obtain depending on the policies of the lending institution or library, but follow these steps to request the physical item:</p>
			<ol>
				<li>Log into <strong>ILLiad</strong> at <?php echo extLink('https://ill.lib.umich.edu/illiad/illiad.dll'); ?></li>
				<li>Click on the <strong>Thesis/Dissertation</strong> link next to <em>Place a Request</em> at the top of the ILLiad Form</li>
				<li>Fill out the form as completely as possible. Make sure to fill out required fields.</li>
				<li>When you have completed the form, click the "Submit Request" button.
					<ul>
						<li>Click on <strong>All Requests</strong> in the left sidebar to check the status of your request.</li>
					</ul>
				</li>
				<li>You will be notified by email when your article is available.
					<ul>
						<li>Click on <strong>Completed Requests</strong> in the left sidebar to access the article.</li>
					</ul>
				</li>
			</ol>
            <p class="linkBlueBold"><strong>Questions about requesting articles through ILLIAD?</strong>
			<br>Reach out to the <?php echo extLink('https://www.lib.umich.edu/locations-and-hours/hatcher-library/interlibrary-loan-office', 'ILLIAD service'); ?> in Ann Arbor.</p>
            <p> class="linkBlueBold"><strong>Looking for Thesis and Dissertations in your area?</strong>
            <br>Check out the <?php textLink('https://library.umd.umich.edu/find/databases.php?cat=Dissertations+and+Theses', 'Thesis and Dissertations subject area'); ?> of the Mardigian Library's databases list.
		</div>
	</div>

	<!--Do not edit below-->
    <?php echo buildPage('bottom-content'); ?>
	<!--Facts/Did You Know Section--> 
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/facts.php');?> 
	<!--End Facts/Did you Know-->
	<!--Footer-->
	<?php include($_SERVER['DOCUMENT_ROOT'] . '/footer.php');?> 
	<!--End Footer-->
