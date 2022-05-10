<?php //Set page Metadata
    $page = [
        'Title' => 'How do I Request - Book Chapters',
        'Links' => [
			'requestArticle',
			'requestChapter',
            'requestBooks',
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
			<p>You can request book chapters from other libraries using the library's interlibrary loan services. There are no fees for UM-Dearborn students, faculty, or staff to place these requests.</p>
		</div>
		<div class="intro"><!--Bolded Section Header-->
            <p>Step-by-Step Instructions for requesting articles through ILLiad</p>
        </div>
        <div class="contentCopy">
			<p>It is possible to request a scan of a single chapter from a book, usually received electronically. To place a request:</p>
			<ol>
				<li>Log into <strong>ILLiad</strong> at <?php echo extLink('https://ill.lib.umich.edu/illiad/illiad.dll'); ?></li>
				<li>Click on the <strong>Book Chapter</strong> link next to Place a Request at the top of the ILLIAD Form</li>
				<li>Fill out the form as completely as possible. Make sure to fill out required fields.
					<ul>
						<li>Including an ISBN for the book will increase the speed with which your request is filled.</li>
					</ul>
				</li>
				<li>When you have completed the form, click the "Submit Request" button.
					<ul>
						<li>Click on <strong>All Requests</strong> in the left sidebar to check the status of your request.</li>
					</ul>
				</li>
				<li>You will be notified by email when your book chapter is available.
					<ul>
						<li>Click on <strong>Completed Requests</strong> in the left sidebar to access the scan.</li>
					</ul>
				</li>
			</ol>
			<p class="linkBlueBold"><strong>Questions about requesting Book Chapters through ILLIAD?</strong>
			<br>Reach out to the <?php echo extLink('https://www.lib.umich.edu/locations-and-hours/hatcher-library/interlibrary-loan-office', 'ILLIAD service'); ?> in Ann Arbor.</p>
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
